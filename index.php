<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>El Guardian de tu Salud</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<meta http-equiv=”content-encoding” content=”gzip” />

<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/fancySelect.css" rel="stylesheet" type="text/css" media="screen">

<script src="js/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<script src="js/fancySelect.js"></script>
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
  <div class="banner_principal">
    
    <div class="cont_paciente">
      <div class="info">
      
        <img class="logo" src="images/logo.png">
        <h2>DEJA QUE EMI SEA EL GUARDIÁN DE TU SALUD.</h2>
        <img class="logo" src="images/line_title.png" alt="">

        <div class="icons">
          <div class="item">
            <img src="images/iconos/ico_maletin.png" alt="">
            <p>Atención médica a domicilio</p>
          </div>
          <div class="item">
            <img src="images/iconos/ico_telefono.png" alt="">
            <p>Línea telefónica de orientación médica</p>
          </div>
          <div class="item">
            <img src="images/iconos/ico_corazon.png" alt="">
            <p>Más de 500 especialistas a una tarifa preferencial</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="cont_formulario">
    <h2>¡Afíliate ya!</h2>
    <p>Diligencia los siguientes datos para que un asesor de servicio te contacte</p>
    <div class="formulario">
      <form action="gracias.php" enctype="multipart/form-data" method="POST" id="form_registro">
      <div class="item">
        
        <input id="nombre" placeholder="Nombre" name="nombre" type="text">
      </div>
      <div class="item">
        
        <input id="email" placeholder="Email" name="email" type="text">
      </div>
      <div class="item">
        <input id="telefono" name="telefono" placeholder="Celular" type="text">
      </div>
      <div class="item">
        <select  id="selec_city" name="ciudad">
          <option value="">Ciudad</option>
          <option value="Bogota">Bogotá</option>
          <option value="Medellin">Medellín</option>
          <option value="Cali">Cali</option>
          <option value="Palmira">Palmira</option>
          <option value="Armenia">Armenia</option>
          <option value="Manizales">Manizales</option>
          <option value="Pereira">Pereira</option>
          <option value="Rionegro">Rionegro</option>
        </select>
      </div>
      </form>      
    </div>
    <a href="javascript:validarForm();" class="btn_enviar">Enviar</a>
    <p class="copy_form">*Usaremos tus datos sólo para contactarte, no te enviaremos spam. </p>
    
  </div>

  <div class="cont_beneficios">
    <h2 class="title">Sin límite de uso <span>·</span> Sin preexistencias médicas</h2>
    <div id="slider" >
        
        <div>
          <img src="images/beneficios/beneficio_2.png" alt="image description"/>
          <p>Más de 35 años de experiencia salvando vidas</p>
        </div>
        <div>
          <img src="images/beneficios/beneficio_3.png" alt="image description"/>
          <p>6 países con cobertura propia en Latinoamérica</p>
        </div>
        <div>
          <img src="images/beneficios/beneficio_4.png" alt="image description"/>
          <p>Más de 400 vehículos especializados</p>
        </div>
        <div>
          <img src="images/beneficios/beneficio_5.png" alt="image description"/>
          <p>Más de 1000 médicos altamente capacitados</p>
        </div>
    </div>
    <p>*Cifras de Grupoemi para la región</p>
    <a href="#" class="link_benef">Conoce nuestros beneficios</a>
  </div>

  <div class="cont_comentario">
    <h2>¿Qué dicen nuestros afiliados?</h2>
    <img src="images/line_title_white.png">
    <div id="slider_comen" >
      <div>
        
        
        <div class="coment">
          <p>….Presenté los síntomas de un infarto y gracias a su oportuno exámen y preguntas de mis antecedentes familiares logre salvar mi vida… </p>
        </div>
        
        <p class="name">Ana </p>
      </div>
      <div>
        
        <div class="coment">
          <p>…Quiero manifestar mi gratitud por el servicio prestado a mi grupo familiar, emi ha salvado la vida de mi madre en dos oportunidades...</p>
        </div>
        
        <p class="name">Aura Maria </p>
      </div>
      <div>       
        
        <div class="coment">
          <p>…la presente es para agradecer la calidad humana y el servicio. Es muy grato ser atendido por una persona tan profesional, que trata de manera cordial al paciente…</p>
        </div>
        
        <p class="name">Viviana Andrea</p>
      </div>
      
    </div>   
  </div>


  <div class="cont_formulario">
    <h2>¡Afíliate ya!</h2>
    <p>Diligencia los siguientes datos para que un asesor de servicio te contacte</p>
    <div class="formulario clearfix">
      <form action="gracias.php" enctype="multipart/form-data" method="POST" id="form_registro_footer">
      <div class="item">
        
        <input id="nombre_footer" placeholder="Nombre" name="nombre" type="text">
      </div>
      <div class="item">
        
        <input id="email_footer" placeholder="Email" name="email" type="text">
      </div>
      <div class="item">
        
        <input id="telefono_footer" placeholder="Celular" name="telefono" type="text">
      </div>
      <div class="item">
        
        <select  id="selec_city_footer" name="ciudad">
          <option value="">Ciudad</option>
          <option value="Bogota">Bogotá</option>
          <option value="Medellin">Medellín</option>
          <option value="Cali">Cali</option>
          <option value="Palmira">Palmira</option>
          <option value="Armenia">Armenia</option>
          <option value="Manizales">Manizales</option>
          <option value="Pereira">Pereira</option>
          <option value="Rionegro">Rionegro</option>
        </select>
      </div>
      </form>      
    </div>
    <a href="javascript:validarFormFooter();" class="btn_enviar">Enviar</a>
    <p class="copy_form">*Usaremos tus datos sólo para contactarte, no te enviaremos spam. </p>
    
  </div>
  <footer>
    <div class="logo">
      <img src="images/logo_footer.png">
      <p>Todos los derechos reservados EMI © 2017</p>
    </div>

    <div class="contacto">
      <p>
        Oficina principal Medellín:<br>
        Colombia Cra 48 # 14 - 49 PBX (574) 4444 364  <br>
      </p>
      <p>
        Bogotá:  PBX (571) 307 7364 · Cali:  PBX (572) 653 0404 <br>
        Palmira:  PBX (572) 275 7660  · Armenia:  PBX (576) 731 4030<br> 
        Manizales:  PBX (576) 887 9910 · Pereira: PBX (576) 313 5910 <br>
        Rionegro: PBX (574) 563 2190
      </p>
      <a class="facebook" href="#">facebook</a>
      <a class="youtube" href="#">youtube</a>
      <a class="vimeo" href="#">vimeo</a>
      <div style="float: left; width: 100%;"><img src="images/logo_vigilado.png"></div>
    </div>

    <p class="copy_mobile">Todos los derechos reservados EMI © 2017</p>
    
  </footer>


  <script type="text/javascript" src="js/jquery.sudoSlider.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      var caracteres =10;
      $('#telefono_footer,#telefono').keypress(function (e) {
          var tecla = document.all ? tecla = e.keyCode : tecla = e.which;   
          if((tecla > 47 && tecla < 58) || tecla == 46){
          
            if($(this).val().length == caracteres){
              return false;
            }
          }else{
            
            return ((tecla > 47 && tecla < 58) || tecla == 46);
          }   
      });

      $('#selec_city_footer,#selec_city').fancySelect();

      var sudoSlider = $("#slider").sudoSlider({
        
        responsive: true,
        numeric:false
      });

      var sudoSlider_2 = $("#slider_comen").sudoSlider({
        
        responsive: true,
        numeric:false
      });



      $(window).on("resize focus", function () {


        var width = $("#slider").width();
        var orgSlideCount = sudoSlider.getOption("slideCount");
        var slideCount;
        
        if ( width < 500) {
          slideCount = 1;
        } else if (width < 970) {
          slideCount = 3;
        } else {
          slideCount = 4;
        }
        if (slideCount != orgSlideCount) {
          sudoSlider.setOption("slideCount", slideCount);
        }


        var width_ = $("#slider_comen").width();
        var orgSlideCount_ = sudoSlider_2.getOption("slideCount");
        var slideCount_;
        console.log(width_);
        
        if ( width_ < 500) {
          slideCount_ = 1;
        } else if (width_ < 970) {
          slideCount_ = 2;
        } else {
          slideCount_ = 3;
        }
        if (slideCount_ != orgSlideCount_) {
          sudoSlider_2.setOption("slideCount", slideCount_);
        }




      }).resize();


    });

    function validarForm(){
      $nombre = $('#nombre').val();
      $email = $('#email').val();
      $ciudad = $('#selec_city').val();
      $telefono = $('#telefono').val();
      
      if($nombre =='' || $email =='' || $ciudad =='' || $telefono =='' ){
        
        alert('Todos los campos son obligatorios');
        
      }else{
        
        $("#form_registro").submit();
      }
    }

    function validarFormFooter(){
      $nombre = $('#nombre_footer').val();
      $email = $('#email_footer').val();
      $ciudad = $('#selec_city_footer').val();
      $telefono = $('#telefono_footer').val();
      
      if($nombre =='' || $email =='' || $ciudad =='' || $telefono =='' ){
        
        alert('Todos los campos son obligatorios');
        
      }else{
        
        $("#form_registro_footer").submit();
      }
    }
  </script>

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



<!--EMI_MEDICOS_RETARGETING-->

<script language='JavaScript1.1' async src='//pixel.mathtag.com/event/js?mt_id=1172800&mt_adid=187303&mt_exem=&mt_excl=&v1=&v2=&v3=&s1=&s2=&s3='></script>






</body>
</html>