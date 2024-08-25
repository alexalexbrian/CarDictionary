<?php
class Connection{
    
    private $user;
    private $password;
    protected $dbh;
    private $data;
	protected $date;
	protected $time;
    protected $server;
    protected $bdname;

public function __construct()
{   
    $this->user="root";
	$this->password="";
    $this->server="localhost";
    $this->bdname="diccionario_veterinario2";
	$this->date = date("d-m-Y");
	$this->time = date("H:m:s");
    $this->data = array();

    try {
	$this->dbh=new PDO('mysql:host='.$this->server.';dbname='.$this->bdname.'',$this->user,$this->password,
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
}

}

public function Select_data($sql){

	$smtp=$this->dbh->prepare($sql);
	$smtp->execute();

	while ($row=$smtp->fetch()){
		
		$this->data[]=$row;
		
		}
		return $this->data;
	}

public function Select_all_2(){

        $sql="SELECT * FROM `terminos_en` WHERE 1";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        //Obtener todos los resultados
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;


    }
}