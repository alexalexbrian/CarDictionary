<?php
class Connection{
    
    private $user;
    private $pass;
    protected $dbh;
    private $datos;
	protected $fecha;
	protected $hora;
    protected $server;
    protected $bdname;

public function __construct()
{   
    $this->user="root";
	$this->pass="";
    $this->server="localhost";
    $this->bdname="diccionario_veterinario2";
	$this->fecha = date("d-m-Y");
	$this->hora = date("H:m:s");
    $this->datos = array();

    try {
	$this->dbh=new PDO('mysql:host='.$this->server.';dbname='.$this->bdname.'',$this->user,$this->pass,
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
}

}

public function Select_all_1($sql){

	$smtp=$this->dbh->prepare($sql);
	$smtp->execute();

	while ($row=$smtp->fetch()){
		
		$this->datos[]=$row;
		
		}
		
		return $this->datos;
		
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