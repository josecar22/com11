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
    <center><h2>Contactenos</h2></center>
    
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

<h4>Diligencia los datos, ¡haznos saber tu solicitud, con gusto te atenderemos!</h4>

<br>

<form action="">
        <div class="row">
             <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                 <b><label for="">Nombres</label></b>
                 <input type="text" class="form-control" placeholder="Ingresa Nombres" name="txtnombre"><br>
                 <b> <label for="">Apellidos</label></b>
                 <input type="text" class="form-control" placeholder="Ingresa Apellidos" name="txtapellidos"><br>
                 
             </div>
            
             <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                 <b> <label for="">Telefono</label></b>
                 <input type="text" class="form-control" placeholder="Ingresa Telefono" name="txttelefono"><br>
                 <b> <label for="">Correo</label></b>
                 <input type="text" class="form-control" placeholder="Ingresa Nombre Propietario" name="txtnombrecorreo"><br>
             </div>
                

             <div class="col-lg-4 col-md-12 col-sm-12 col-12" class="contacto">
                 <strong>Comentarios</strong><br>
                 <textarea class="form-control" placeholder="Ingresa comentarios o motivo de consulta" name="txtcomentarios"></textarea> <br>
                 <input type="reset" class="btn btn-success" value="Restablecer" name="btnrestablecer"onclick="mostrar()">
                 <input type="submit" class="btn btn-success" value="Enviar" name="btnenviar"onclick="mostrar()"> 
                 <br><br>
             </div>
        </div>

    </form>
  

<hr>
<div class="row">
         <div class="col-lg-4">
               <br>
               <strong>Contactenos</strong>
               <br>
               <div><img src="../img/correo.jpg" width="50" height="40"/>&nbsp;info@micanchaya.com</div><br>
               <div><img src="../img/whatsapp.jpg" width="50" height="40"/>&nbsp;3025647896</div><br>
               <a href="https://goo.gl/maps/pHiDyvSvePrtuF749"><img src="../img/ubicacion.png" width="50" height="40"/>Cl. 45 #33-95, Barranquilla, Atlántico</a><br>
               
            </div> 

            <div class="col-lg-3">
               <br>
               <strong>Siguenos en nuestras redes sociales</strong>
               <br>
               <a href=""><img src="../img/youtube.png" width="50" height="50"/>Micanchapasionfutbolera</a><br>
               <a href=""><img src="../img/instagram.png" width="50" height="50"/>@Micanchafutbolera</a><br>
            </div> 

                <br>

                <div class="col-lg-5">
                 <img src="../img/im6.jpg" class="img-fluid">
                </div>
        </div>
             <br>
             <div class="row">
                    <div class="col-sm-3">
                        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.8274297965177!2d-74.79050728588203!3d10.976394958473836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d5d96cccaef%3A0x6c7f079f9656da1c!2sCl.%2045%20%2333-95%2C%20Barranquilla%2C%20Atl%C3%A1ntico!5e0!3m2!1ses!2sco!4v1616519025834!5m2!1ses!2sco" width="1115" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                     </div>
             </div>
             
             <br>

<!--piedepagina-->
<div class="row"> 
 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
  <center>
     <p class="p-2 bg-dark text-secondary">
         www.micancha.com.co <br>
         Cl. 45 #33-95, Barranquilla, Atlántico <br> 
         3025647896 <br>       
         Derecho Reservado &copy; 
     </p>    
  </center>
  <br>
 </div>
</div>


    

</body>
</html>