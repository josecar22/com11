<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiCancha</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<center><h2>Registro Canchas</h2></center>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../php/QuienesSomos.php">QuienesSomos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../php/contactenos.php">Contactenos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../php/RegistrarMiCancha.php">RegistrarMiCancha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../php/CotizarCanchas.php">CotizarCanchas</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav> 

  <hr>


<div class="container">

    <h4>Registra tu cancha, ¡Unete a nosotros para brindarte los mejores beneficios a tu negocio!</h4>

    <br>

    <form action="">
            <div class="row">
                 <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <b><label for="">Nombre de la cancha</label></b>
                    <input type="text" class="form-control" placeholder="Ingresa nombre cancha" name="txtnombrecancha"><br>
                    <b> <label for="">Direccion</label></b>
                    <input type="text" class="form-control" placeholder="Ingresa Direccion" name="txtdireccion"><br>
                    <b> <label for="">Telefono para reservas</label></b>
                    <input type="text" class="form-control" placeholder="Ingresa Telefono" name="txttelefono"><br>
                 </div>
                
                 <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <b> <label for="">Nombre Propietario o Administrador</label></b>
                    <input type="text" class="form-control" placeholder="Ingresa Nombre Propietario" name="txtnombrepropietario"><br>
                    <b> <label for="">Telefono Propietario o Administrador</label></b>
                    <input type="text" class="form-control" placeholder="Ingresa Telefono Propietario" name="txttelefonopropietario"><br>
                    <b> <label for="">Correo Propietario o Administrador</label></b>
                    <input type="text" class="form-control" placeholder="Ingresa Correo Propietario" name="txtcorreopropietario"><br>
                    
                    <div class="checkbox">
                    <b><label for="">Elija su tipo de chanca</label></b><br>
                    <label>
                      <input type="checkbox" value="">
                       Futbol 5
                    </label>
                    </div>
  
                    <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      Futbol 7
                    </label>
                    </div>

                    <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      Futbol 8
                    </label>
                    </div>

                    <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      Futbol 11
                    </label>
                    </div>
                    <br>
                 </div>  

                 <div class="col-lg-4 col-md-12 col-sm-12 col-12" class="contacto">

                    <b><label for="">¿Dispone de parqueadero?</label></b>
                    <div class="radio">
                     <label>
                       <input type="radio" name="opciones1" id="opciones_1" value="opcion_1" checked>
                       Si
                     </label>
                    </div>

                   <div class="radio">
                     <label>
                       <input type="radio" name="opciones1" id="opciones_2" value="opcion_2">
                       No
                     </label>
                   </div>
                   <br>

                   <b><label for="">¿La cancha es cubierta bajo techo?</label></b>
                    <div class="radio">
                     <label>
                       <input type="radio" name="opciones2" id="opciones_3" value="opcion_3" checked>
                       Si
                     </label>
                    </div>

                   <div class="radio">
                     <label>
                       <input type="radio" name="opciones2" id="opciones_4" value="opcion_4">
                       No
                     </label>
                   </div>
                    <br>

                   <b><label for="">¿Dispone de tienda o bar?</label></b>
                    <div class="radio">
                     <label>
                       <input type="radio" name="opciones3" id="opciones_5" value="opcion_5" checked>
                       Si
                     </label>
                    </div>

                   <div class="radio">
                     <label>
                       <input type="radio" name="opciones3" id="opciones_6" value="opcion_6">
                       No
                     </label>
                   </div>
                   <br>
                   <input type="reset" class="btn btn-success" value="Restablecer" name="btnrestablecer"onclick="mostrar()">
                   <input type="submit" class="btn btn-success" value="Enviar" name="btnenviar"onclick="mostrar()"> 
                   <br><br>

                 </div>
            </div>

        </form>

    

<!--piedepagina-->
<hr>
<div class="row">
 <div class="col-lg-6 col-md-12 col-sm-12 col-12">
     <img src="../img/im6.jpg" class="img-fluid"> 
     <br><br>   
 </div>
  
  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15666.735263666833!2d-74.8233648700787!3d10.987221184252453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d0c6305e38d%3A0x3afafa54d274168e!2sEstadio%20Ol%C3%ADmpico%20Romelio%20Mart%C3%ADnez!5e0!3m2!1ses!2sco!4v1614040728279!5m2!1ses!2sco" width="515" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>   

<div class="row"> 
 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
  <center>
     <p class="p-2 bg-dark text-secondary">
         www.micancha.com.co <br>
         Cra. #72-155, Barranquilla, Atlántico <br> 
         018000453126 <br>       
         Derecho Reservado &copy; 
     </p>    
  </center>
  <br>
 </div>
</div>

    
</body>
</html>