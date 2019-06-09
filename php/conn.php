<?php
//
////$conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());


class opmysql
{

    private $host = 'localhost';

    private $name = 'root';

    private $pwd = '123456';
    private $dBase = 'flea';

    private $conn = '';
    private $result = '';
    private $msg = '';
    private $fields;
    private $fieldsNum = 0;
    private $rowsNum = 0;
    private $rowsRst = '';
    private $filesArray = array();
    private $rowsArray = array();

    function __construct($host = '',$name = '',$pwd = '',$dBase = ''){

        if($host!='')
            $this->host = $host;
        if($name!='')
            $this->name = $name;
        if($pwd!='')
            $this->pwd = $pwd;
        if($dBase!='')
            $this->dBase = $dBase;
    }



    function init_conn() {
	    $this->conn= @mysqli_connect($this->host,$this->name,$this->pwd,$this->dBase);
	    mysqli_query($this->conn,"set names utf8");
        return $this->conn;
    }



    function mysqli_query_rst($sql){
        if($this->conn == ''){
            $this->init_conn();
        }
        $this->result=@mysqli_query($this->conn,$sql);
    }


    function getRowsNum($sql) {
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            return @mysqli_num_rows($this->result);
        }else{
            return '';
        }
    }

    function getRowsRst($sql) {
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            $this->rowsRst = mysqli_fetch_array($this->result,MYSQLI_ASSOC);
            return $this->rowsRst;
        }else{
            return '';
        }
    }

    function getRowsArray($sql){
        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){
            while($row = mysqli_fetch_array($this->result,MYSQLI_ASSOC)){
                $this->rowsArray[] = $row;
            }
            return $this->rowsArray;
        }else{
            return '';
        }
    }

    function getFields($sql,$num){

        $this->mysqli_query_rst($sql);
        if(mysqli_errno($this->conn) == 0){

            $this->rowsRst = mysqli_fetch_array($this->result);
            return $this->rowsRst[$num];
        }else{
            return '';
        }
    }

    function uidRst($sql){
        if($this->conn == ''){
            $this->init_conn();
        }
        @mysqli_query($this->conn,$sql);
        $this->rowsNum = @mysqli_affected_rows($this->conn);
        if(mysqli_errno($this->conn)== 0){
            return $this->rowsNum;
        }else{
            return '';
        }
    }

    function msg_error(){
        //return $this->msg = $php_errormsg;
        $this->msg = "ERROR";
        return $this->msg;
    }


    function close_rst(){
        mysqli_free_result($this->result);
        $this->msg = '';
        $this->fieldsNum = 0;
        $this->rowsNum = 0;
        $this->filesArray = '';
        $this->rowsArray = '';
    }


    function close_conn(){
        $this->close_rst();
        mysqli_close($this->conn);
        $this->conn = '';
    }
}

$conn = new opmysql();
$conn1 = new opmysql();
$conn2 = new opmysql();
$conn3 = new opmysql();
$conn4 = new opmysql();
