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
    
    try {
    //Establecer la conexión a la base de datos
	$this->dbh=new PDO('mysql:host='.$this->server.';dbname='.$this->bdname.'',$this->user,$this->pass,
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
      // Manejar errores de conexión
        print "Error!: " . $e->getMessage();
        die();
}
  // Inicializar variables
    $this->datos = array();
	$this->fecha = date("d-m-Y");   //fecha lo usamos para guardar fecha y hora en la base de datos
	$this->hora = date("H:m:s");    //Hora  lo usamos para guardar fecha y hora en la base de datos
    
}

public function Select_datos($sql){

	$smtp=$this->dbh->prepare($sql);
	$smtp->execute();

	while ($row=$smtp->fetch()){
		
		$this->datos[]=$row;
		
		
		}
		
		return $this->datos;
		
	}
}