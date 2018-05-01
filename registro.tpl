{include file="header.tpl"}

  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> 
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> 
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">


<br>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
     <br><br> <h1 class="mt-4 mb-3"> FORMULARIO
        <small>| Registro para estudiantes</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Principal</a>
        </li>
        <li class="breadcrumb-item active">Registro del estudiante</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <img src="img/imgunah/unah8.jpg" width="100%" height="400px">   
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3><strong> Crear una cuenta es muy importante</strong></h3>
          <p><br><br>
            Para poder ingresar a nuestra plataforma virtual
            <br>es necesario poseer un usuario y una contraseña.
            <br>
          </p>
          <p>
            A continuación solicitaremos tus datos para poderte brindarte una nueva cuenta y disfrutes la experiencia de matricular en linea.        </p>
          <p>
             ¡Bienvenido a la familia PUMA!
          </p>
          <p> <br><br>
         <!--     <strong>Universidad Nacional Autónoma de Honduras </strong> -->
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
         <h3> <strong>Datos personales</strong></h3>
<br>
            <!--Formulario -->

        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Primer Nombre</label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="pnombre" example-text-input">
            </div>
        </div>

        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Segundo Nombre</label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="snombre" example-text-input">
            </div>
        </div>

                <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Primer Apellido</label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="papellido" example-text-input">
            </div>
        </div>

        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Segundo Apellido</label>
            <div class="col-10">
              <input class="form-control" type="text" value="" name="sapellido" example-text-input">
            </div>
        </div>

      <div class="form-group row">
        <label for="example-search-input" class="col-2 col-form-label">Cuenta</label>
      <div class="col-10">
        <input class="form-control" type="" value=" " name="cuenta">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Correo Electronico</label>
  <div class="col-10">
    <input class="form-control" type="email" value="" name="correoElectronico">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Dirección</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="direccion">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Teléfono</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="" name="telefono">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Contraseña</label>
  <div class="col-10">
    <input class="form-control" type="password" value="" name="contrasena">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="date" value="" name="fechaNacimiento">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Centro de Estudio</label>
  <div class="col-10">
    {if isset($centroEstudio)}
      <select>
      <option class="form-control" >Seleccione un centro de estudio</option>
        {foreach name=tbl_centroestudio item=smarty_centroEstudio from=$centroEstudio}
          <option class="form-control" value="{$smarty_centroEstudio}" id="centroEstudio" name="centroEstudio" onclick="showHint(this.value)">{$smarty_centroEstudio}</option>
        {/foreach}
      </select>
    {/if}
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Ciudad</label>
  <div class="col-10">
    <label class="form-control" type="text" value="" id="ciudad" name="ciudad" >
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Departamento</label>
  <div class="col-10">
    <label class="form-control" type="example-text-input" id="departamento" name="departamento">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Carrera</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="carrera">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Facultad</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" name="facultad">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Fecha de Ingreso</label>
  <div class="col-10">
    <input class="form-control" type="date" value="" name="fechaIngreso">
  </div>
</div>

            <!-- For success/fail messages -->
                      <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Registrarse
            </button>
          </div>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


{include file="footer.tpl"}