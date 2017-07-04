<?php

require('class_conexion.php');

class Object{
	
    
  function Object(){
	  $this->conexion = new Conexion;
  }
  
  
  
  
  function AddUser($name,$email,$ciudad,$telefono,$site){
    
    $sql = 'INSERT INTO  t_campaing_masiva (nombre, email, ciudad,telefono, f_registro)VALUES ( "'.utf8_decode($name).'", "'.$email.'", "'.utf8_decode($ciudad).'","'.$telefono.'",NOW());';
    $row = $this->conexion->queryQuery($sql);
    
    
    $id = $this->conexion->ultimoRow();
    

    return $id;
    
  }
  
  
 
  
  
	
}

?>