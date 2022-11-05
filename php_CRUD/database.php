<?php

class Database{

    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "testing";

    private $conn =false;
    private $result = array();
    private $mysqli = "";

    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false;
            }
        }else{
            return true;
        }
    }

    public function insert($table,$params=array()){
        if($this->tableExists($table)){
         
          $table_columns = implode(', ',array_keys($params));
          $table_values = implode("', '",$params);
    
          $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
         
          if($this->mysqli->query($sql)){
            array_push($this->result,$this->mysqli->insert_id);
            return true;
          }else{
            array_push($this->result,$this->mysqli->error);
            return false;
          }
        }else{
          return false;
        }
      }

    public function update($table,$params=array(),$where= null){
        if($this->tableExists($table)){

            $args=array();
            foreach($params as $key=>$value){
                $args[]="$key ='$value'";
            }
            $sql = "UPDATE $table SET " . implode(', ',$args);
            if($where !=null){
                $sql.="WHERE $where";
            }
            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->affected_rows);
                return true;
            }
            else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function delete($table,$where= null){
        if($this->tableExists($table)){
            $sql= "DELETE FROM $table";
            if($where !=null){
                $sql .= " WHERE $where";
            }
            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            }
            else{
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function select($table,$rows="*",$join = null,$where=null,$order=null,$limit=null){
        if($this->tableExists($table)){
          $sql = "SELECT $rows FROM $table";
          if($join != null){
            $sql .= " JOIN $join";
          }
          if($where != null){
            $sql .= " WHERE $where";
          }
          if($order != null){
            $sql .= " ORDER BY $order";
          }
          if($limit != null){
            $sql .= " LIMIT 0, $limit";
          }
    
          $query = $this->mysqli->query($sql);
          if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
          }else{
            array_push($this->result,$this->mysqli->error);
            return false;
          }
        }else{
          return false;
        }
      }

    public function sql($sql){
        $query = $this->mysqli->query($sql);

        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }else{
            array_push($this->result,$this->mysqli->error);
            return false;
        }

        
    }
    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->dbname LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows==1){
                return true;
            }
            else{
                array_push($this->result,$table . "Table does not exists in this database");
                return false;
                
            }
        }
    }

    public function getresult(){
        $val=$this->result;
        $this->result=array();
        return $val;
    }

    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn=false;
                return true;
            }
        }else{
            return false;
        }
    }

}

?>