<?php
require_once 'class/class_object.php';
$object = new Object();

if(isset($_POST)){
  //echo 'hola'.$_POST['nombre'];
    $object->AddUser($_POST['nombre'], $_POST['email'], $_POST['ciudad'], $_POST['telefono']);
    
    
    $email_desti .= 'jenny@anthropologic.net, santiago.cortes@grupoemi.com,';
    
    if($_POST['ciudad']=='Bogota'){
      $email_desti .= 'comercial.bogota@grupoemi.com, anderson.mendez@grupoemi.com';
    }
    
    if($_POST['ciudad']=='Medellin'){
      $email_desti .= 'wendy.ganan@grupoemi.com, luis.villegas@grupoemi.com';
    }
    if($_POST['ciudad']=='Cali'){
      $email_desti .= 'david.arias@grupoemi.com, santiago.cortes@grupoemi.com';
    }
    if($_POST['ciudad']=='Palmira'){
      $email_desti .= 'david.arias@grupoemi.com, santiago.cortes@grupoemi.com';
    }
    if($_POST['ciudad']=='Armenia'){
      $email_desti .= 'julian.trujillo@grupoemi.com';
    }
    if($_POST['ciudad']=='Manizales'){
      $email_desti .= 'julian.trujillo@grupoemi.com';
    }    
    if($_POST['ciudad']=='Pereira'){
      $email_desti .= 'julian.trujillo@grupoemi.com';
    }    
    if($_POST['ciudad']=='Rionegro'){
      $email_desti .= 'wendy.ganan@grupoemi.com, luis.villegas@grupoemi.com';
    }
    
    
    
     $body_Admi='
	
	Estos son los datos del formulairo: <br>
	
	Nombre: '.utf8_decode($_POST['nombre']).' <br>
	Email: '.$_POST['email'].' <br>
	Ciudad: '.utf8_decode($_POST['ciudad']).' <br>
	Tel&eacute;fono: '.$_POST['telefono'].'
	';
	
	$sheader= "From: emi<info@grupoemi.com>" . "\r\n";
	$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n"; 
	$sheader=$sheader."Mime-Version: 1.0\n"; 
	$sheader= $sheader.'Content-type: text/html; charset=iso-8859-1'."\r\n"; 
	
	$subject = "Solicitud de Contacto Campaña el guardian de tu salud emi 2017";
	
	/**/
	mail($email_desti, $subject , "
	<html>
	<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	<title>En emi recibimos tu solicitud</title>
	</head>
	<body>
	$body_Admi
	<br>
	</body>
	</html>",$sheader);
    
    
}

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>emi</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <link href="css/style.css" rel="stylesheet" type="text/css">
  
  
  <script type="text/javascript" src="js/jquery.min.js"></script>
  

  <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16660599-3', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

  
  <div class="back_thanks" style="">
    <div class="cont_text">
    </div>
    
  </div>
    
    
  <footer >
    <div class="cont_text_thanks">
      <p class="foot1 left">Todos los derechos reservados Grupo emi &copy; 2017</p>
      <img src="images/logo_vigilado.png">
    </div>
    <div class="logo_thanks">
      <img src="images/logo_footer.png" >      
    </div>
  </footer>  

 <!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '758178427682412'); // Insert your pixel ID here.

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=758178427682412&ev=PageView&noscript=1" /></noscript>

<!-- DO NOT MODIFY -->

<!-- End Facebook Pixel Code -->



<script>

fbq('track', 'CompleteRegistration', {

value: 25.00,

currency: 'USD'

});

</script>




<!-- Google Code for M&eacute;dicos Conversion Page -->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 966460344;

var google_conversion_language = "en";

var google_conversion_format = "3";

var google_conversion_color = "ffffff";

var google_conversion_label = "2SYtCNn663AQuIfszAM";

var google_remarketing_only = false;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/966460344/?label=2SYtCNn663AQuIfszAM&amp;guid=ON&amp;script=0"/>

</div>

</noscript>

<!-- Soicos www.soicos.com EMI -->

<script type="text/javascript" src="http://ad.soicos.com/soicosjs.php?s=.js"></script>

<script type="text/javascript">

(function() { soicos.registerConversion({ pid :8808, data : '' });})();

</script>



<!-- EMI_MEDICOS_RETARGETING-->

<script language='JavaScript1.1' async src='//pixel.mathtag.com/event/js?mt_id=1172800&mt_adid=187303&mt_exem=&mt_excl=&v1=&v2=&v3=&s1=&s2=&s3='></script>



<!-- EMI_MEDICOS_THANK_YOU_PAGE-->

<script language='JavaScript1.1' async src='//pixel.mathtag.com/event/js?mt_id=1172804&mt_adid=187303&mt_exem=&mt_excl=&v1=&v2=&v3=&s1=&s2=&s3='></script>




<!-- Google Code for Remarketing Tag -->

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 966460344;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966460344/?guid=ON&amp;script=0"/>

</div>

</noscript>



</body>
</html>

