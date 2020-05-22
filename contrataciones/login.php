<?php include("include/header.php") ?>
  
<body background= "imagenes/color2.jpg"> 

  <section class="container-fluid bg">
  <section class="row justify-content-center">
  <section  class="col-12 col-sm-6 col-md-3">
    <form action="include/login_process.php" method= "POST" class="form-container">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo electrónico</label>
          <input type="email" class="form-control"  name= "email" aria-describedby="emailHelp" placeholder="Introduce un correo">   
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" name= "password" placeholder="Introduce una contraseña">
          <small id="emailHelp" class="form-text text-muted"><a href= "registro.php">¿Aún no tienes una cuenta?</a></small>
        </div>
        <button type="submit"  name="login_process" class="btn btn-primary">Ingresar</button>
      </form>
    </section>
  </section>
  </section>
</body>
</html>