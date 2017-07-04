<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('class_object.php');
include('link.php');



//variable link del site


$link = new Link();
$site_url = $link->Build('');

$object = new Object();



require_once "../dompdf/dompdf_config.inc.php";
require_once "../dompdf/lib/php-font-lib/src/FontLib/Autoloader.php";
use FontLib\Font;

if($_POST){
  
  if($_POST['tipo']=='add_new_user'){
    
    
    if($_POST['uid'] !=''){
    
      $id = $object->VerifUserApp($_POST['uid']);
    
    
    }
      
    if($id['id'] !='' ){

      $_SESSION['user_id'] = $id['id'];
      $_SESSION['user_name'] = $id['nombre'].' '.$id['apellido'];
      
      echo 'Ok' ;

    }else{

      $id = $object->AddUserApp($_POST['uid'],$_POST['name'],$_POST['apellido'],$_POST['email'],$_POST['documento']);
      $_SESSION['user_id'] = $id;
      $_SESSION['user_name'] = $_POST['name'].' '.$_POST['apellido'];
      $_SESSION['user_email'] = $_POST['email'];
      echo 'Ok';
      

    }
      
    
    
    //AddUserApp
    
  }
  
  if($_POST['tipo']=='add_new_image'){
    
    
    if(!isset($_SESSION['user_id'])){
      
      echo 'Error usuario';
    
    }else{
    $id = $object->AddUserImg($_SESSION['user_id'],$_POST['texto_1'],$_POST['texto_2'],$_POST['fondo']);
    
    $archivo = CreatePDF($id);
    
    
    //correo respuesta
    $mensaje = '<table border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>

<tr>
<td height="10"></td>
</tr>

<td>
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tbody>
	<tr>
		<td>
			<img src="http://grupoemi.com/colombia/minisite/mujer/mail/images/mail_01.jpg" width="680" height="78" alt=""></td>
	</tr>
	<tr>
		<td>
			<a href="https://www.facebook.com/grupoemiasistencia"><img src="http://grupoemi.com/colombia/minisite/mujer/mail/images/mail_02.jpg" width="680" height="470" alt=""></a></td>
	</tr>
	<tr>
		<td>
			<a href="https://www.facebook.com/grupoemiasistencia"><img src="http://grupoemi.com/colombia/minisite/mujer/mail/images/mail_03.jpg" width="680" height="78" alt=""></a></td>
	</tr>
	
</tbody>
</table>
</td>
</tr>
<tr>
<td height="10"></td>
</tr>
<tr>
<td align="center" scope="col"><span style="color: #999999; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"> <strong><span style="color: #999999; font-family: Arial,Helvetica,sans-serif; font-size: 11px;"> Oficina principal Medellín - Colombia. PBX (574) 4444 364. Cra 48 # 14 - 49 Bogotá PBX:(571) 307 7364 - Cali PBX: (572) 653 0404 - <br>Palmira PBX: (572) 275 7660 Armenia PBX: (576) 731 4030 - Manizales PBX: (576) 887 9910<span> </span>- Pereira PBX: (576) 313 5910 -<br>  
Rionegro PBX (574) 4444 364 
        - Todos los derechos reservados EMI © 2015 -<br> 
         Este mensaje ha sido enviado por un sistema automático, los mensajes enviados a este correo no serán contestados ni <br>gestionados, para contactarnos  hazlo a través de nuestro website www.grupoemi.com sección Contáctanos.</span> </strong></span></td>
</tr>
</tbody>
</table>';


      $sheader= "From: Grupo emi <info@grupoemi.com>" . "\r\n";
      $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n"; 
      $sheader=$sheader."Mime-Version: 1.0\n"; 
      $sheader= $sheader.'Content-type: text/html; charset=iso-8859-1'."\r\n"; 

      $subject = "Confirmado, ya recibimos tu frase";
      
      
      
      
      
      mail($_SESSION['user_email'], $subject , "
      <html>
      <head>
      <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
      <title>Confirmado, ya recibimos tu frase</title>
      
      </head>
      <body>
      $mensaje
      <br>
      </body>
      </html>",$sheader);
      
    



    

    //cooreo admin
    
    
    
    
    $correos = array('johan@anthropologic.net','jairo@anthropologic.net','jenny@anthropologic.net');
    
    
    $mensaje = ''
            . 'Se ha creado una nueva imagen el minisite:<br>'
            . ''.$site_url.'imagepdf/'.$archivo;


      $sheader= "From: Admin <info@grupoemi.com>" . "\r\n";
      $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n"; 
      $sheader=$sheader."Mime-Version: 1.0\n"; 
      $sheader= $sheader.'Content-type: text/html; charset=iso-8859-1'."\r\n"; 

      $subject = "Grupo emi minisite mujer";
      
      
      for($x=0;$x<count($correos);$x++){
      
      
      mail($correos[$x], $subject , "
      <html>
      <head>
      <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
      <title>Grupo emi minisite mujer</title>
      
      </head>
      <body>
      $mensaje
      <br>
      </body>
      </html>",$sheader);
      }
    
    
    
    echo 'Ok';
    }
  
  }
  
  
  
  if($_POST['tipo']=='add_new_user_sinface'){
    
    
   
      
    

      $id = $object->AddUserApp('',$_POST['name'],$_POST['apellido'],$_POST['email'],$_POST['documento']);
      $_SESSION['user_id'] = $id;
      $_SESSION['user_name'] = $_POST['name'].' '.$_POST['apellido'];
      $_SESSION['user_email'] = $_POST['email'];
      echo 'Ok';
      

    
      
    
    
    //AddUserApp
    
  }
  
	
}


function CreatePDF($id){
  
  $link = new Link();
  $site_url = $link->Build('');

  $object = new Object();

  
  $img = $object->InfoImg($id);

  $color_frase ='';

  if($img['fondo']==1){
    $image_fondo = 'FONDO_1.jpg';
    $color_frase = '#46bc95';
  }

  if($img['fondo']==2){
    $image_fondo = 'FONDO_2.jpg';
    $color_frase = '#3e1d56';
  }

  if($img['fondo']==3){
    $image_fondo = 'FONDO_3.jpg';
    $color_frase = '#75c8b4';
  }
  
  
  $nombre = $img['nombre'].' '.$img['apellido'];
  
  
$html = 
         '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Image</title>
    
    <style>
      @import url(http://fonts.googleapis.com/css?family=Arvo:400,400italic);
      
@page { margin: 0px; }
body,html { margin: 0px; }
body{
        font-family: \'Arvo\', serif;
          
padding: 0px;
        margin: 0px;
      }
        #template{
            background-image: url('.$site_url.'images/fondos/'.$image_fondo.');
            width: 800px;
            height: 800px;
            float: left;
          }
        
    </style>
</head>
<body>
  
    <div id="template" style="">
       
      <div class="fondo left" style="">
        <p class="frase ">
          "'.$img['text_1'].' <span style="color: '.$color_frase.';">'.$img['text_2'].'</span>"
        </p>
        <p class="autor" style="font-style:italic;">- '.$nombre.'</p>
      </div>
        <style type="text/css">
          
            .fondo{
             
              width: 800px;
              height: 800px;
              
              
              color: #fff;
            }
            
            .frase{
              margin: 0 auto;
              padding-top: 110px;
              width: 90%;
              text-align: center;
              font-size: 68px;
              line-height: 78px;
            }
            .autor{
              font-size: 28px;
              text-align: right;
              margin-right: 62px;
              margin-top: 30px;
              
            }
        </style>
    </div>

    
</body>
</html>';


$file_name = time().".pdf";

//echo $html;


$mipdf = new DOMPDF();
 
# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
//$mipdf ->set_paper("a4");

$paper_size = array(0,0,600,620);
$mipdf->set_paper($paper_size);


# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_encode($html));
 
# Renderizamos el documento PDF.
$mipdf ->render();
 
# Enviamos el fichero PDF al navegador.
//$mipdf ->stream('FicheroEjemplo.pdf');

$pdf = $mipdf->output();

  // You can now write $pdf to disk, store it in a database or stream it
  // to the client.

file_put_contents("../imagepdf/".$file_name, $pdf);

//echo 'hola';

return $file_name;

  
  
} 

function TildesHtml($cadena) 
{ 
    return str_replace(array("á","é","í","ó","ú","ñ","Á","É","Í","Ó","Ú","Ñ"),
                                     array("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&ntilde;",
                                                "&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&Ntilde;"), $cadena);     
}


?>