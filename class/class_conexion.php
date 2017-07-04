<?php

class Conexion{
	
	private $host;
	private $db;
	private $user;
	private $password;
	private $db_link;
	
	
	function __construct(){
		
		
		/*Local*
		$this->host = 'localhost';
		$this->db = 'db_grupoemi_new';
		$this->user = 'user';
		$this->password = 'root';
		/**/
		
		self::connect();	
		
	}
	
	
	function connect(){
		
		$this->db_link = mysql_connect($this->host, $this->user, $this->password, true);
		
		if (!$this->db_link) {
			
			self::error();
			return false;
			
		}
		
		if (empty($this->db)) {
						
    	self::error();
			return false;
			
		}else{
			
			$this->db = mysql_select_db($this->db, $this->db_link);
			
			if (!$this->db){
				self::error();
				return false;
			}
			
			return $this->db_link;
		}
			
	}
	
	
	
	function query($sql){
		
	//	self::connect();
		
		$resultado = mysql_query($sql);
		
		if (!$resultado){
			self::error();
		}
		
		$cont = 0;
		$new_result = array();
		
		while($row = mysql_fetch_assoc($resultado)){
			
			$new_result[$cont] = $row;
			$cont++;
			
		}
		
		//self::close();
		
		return $new_result;	
		
	}
	
	
	function queryQuery($sql){
		
	
		
		$resultado = mysql_query($sql);
		
		if (!$resultado){
			self::error();
		}
		
	
		
		
	}
	
	
	
	
	
	function queryOne($sql){
		
		///self::connect();
		
		$resultado = mysql_query($sql);
		
		if (!$resultado){
			self::error();
		}
		
		$row = mysql_fetch_assoc($resultado);
		
		//self::close();
		
		return $row;	
		
	}
	
        
        
        function queryNumRows($sql){
          
          //$ssql = "SELECT * FROM t_trabajos ORDER BY id DESC"; 
          $rs = mysql_query($sql); 
          
          $num_total_registros = mysql_num_rows($rs); 
          
          return $num_total_registros;
          
        }
        
        function ultimoRow(){
          $id=mysql_insert_id();
          return $id;
        }
                
	
	function close(){
		
  	mysql_close($this->db_link);
        
  }
	
	
	function error(){
		echo mysql_error();
		//die("<strong>mysql error</strong> " . mysql_error());
		//exit;		
	}	
	
	
	
}
?>