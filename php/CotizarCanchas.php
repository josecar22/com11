<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiCancha</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/archivo.js"></script>
</head>
<body>

    <center><h2>Cotizar Canchas</h2></center>
     
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

   

    <div class="container">
       <hr>
       <strong><h4>¡Disfruta de nuestras mejores canchas, Cotiza y Reserva ya!</h4></strong>
       <hr>

       <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12 col-12">
           <img src="../img/im9.png" class="img-fluid"> 
           <br><br>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
           <p class="p-2 bg-success text-white">
             Cancha: Bombonera Boston <br>
             Horarios: Lunes a Domingo 8:00-21:00 <br>
             Direccion: 3425695-3172569856 <br>
             Cancha con techo: Si <br>
             Bar: Si <br>
             Uniformes: No <br>
           </p> 
            <br>
         </div>
       </div>
        
     <div class="row">
       <div class="col-lg-6 col-md-12 col-sm-12 col-12">
         <img src="../img/im10.png" class="img-fluid">
         <br><br>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-12 col-12">
         <p class="p-2 bg-success text-white">
            Cancha: Tiburona Murillo <br>
            Horarios: Lunes a Domingo 8:00-21:00 <br>
            Direccion: Cl. 45 # 33-52<br> 
            Telefonos: 3568695-3017569856 <br>
            Cancha con techo: Si <br>
            Bar: Si <br>
            Uniformes: Si <br>
         </p> 
         <br> 
       </div>
     </div>

    <hr>


     <form action="">
       <div class="row">

         <div class="col-lg-6 col-md-12 col-sm-12 col-12" >
            <b><label for="">Nombre</label><br></b>
            <input type="text" class="form-control" placeholder="Ingrese Nombre" id="txtnombre"><br>
            <b><label for="">Apellido</label><br></b>
            <input type="text" class="form-control" placeholder="Ingrese Apellido" id="txtapellido"><br>
            <b><label for="">Correo</label><br></b>
            <input type="email" class="form-control" placeholder="Ingrese Correo" id="txtcorreo"><br>
         </div>

          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
              <b><label for="">Canchas</label></b><br>
               <select id="cancha">
                <option>Seleccione Cancha</option>
                <option value="Bombonera boston">Bombonera boston</option> 
                <option value="Tiburona murillo">Tiburona murillo</option> 
                <option value="Simon bolivar">Simon bolivar</option>
               </select>

               <br><br><br>

               <b><label for="">Horario</label></b><br>
               <select id="horario">
                <option>Seleccione Horario</option>
                <option value="7-10am">7-10am</option> 
                <option value="2-5pm">2-5pm</option> 
                <option value="7-9pm">7-9pm</option>
               </select>

               <br><br>

               <b><label for="">Precio</label></b><br>
               <select id="precio">
                <option>Seleccione Precio</option>
                <option value="$50000">Mañana $50000</option> 
                <option value="$60000">Tarde $60000</option> 
                <option value="$70000">Noche $70000</option>
               </select>

               <br><br>
               <input type="reset" class="btn btn-success" value="Restablecer" name="btnrestablecer"onclick="mostrar()">
               <input type="button" class="btn btn-success" value="Cotizar" onclick="mostrar()">
          </div>
       </div>
     </form>
     <br>
     <p id="respuesta"></p>

      <hr>

 <!--piedepagina-->

 <div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
      <img src="../img/im6.jpg" class="img-fluid"> 
      <br><br>   
  </div>
   
   <div class="col-lg-6 col-md-12 col-sm-12 col-12">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15666.735263666833!2d-74.8233648700787!3d10.987221184252453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d0c6305e38d%3A0x3afafa54d274168e!2sEstadio%20Ol%C3%ADmpico%20Romelio%20Mart%C3%ADnez!5e0!3m2!1ses!2sco!4v1614040728279!5m2!1ses!2sco" width="515" height="290" style="border:0;" allowfullscreen="" loading="lazy" class="img-responsive"></iframe>
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