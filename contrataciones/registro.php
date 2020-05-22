<?php include('include/header.php') ?>
<body background= "imagenes/color2.jpg">
  <section class="container-fluid ">
    <section class="row justify-content-center">
    <section  class="col-12 col-sm-6 col-md-3">
    <form action="include/register_process.php" method= "POST" class="form-container">
        <div class="form-group">
          <label >Nombre de la empresa: </label>
          <input  class="form-control"  name= "username"  placeholder="Ingresa el nombre de la empresa">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripción de la empresa:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        
          <div class="form-group">
            <label for="exampleInputEmail1">Correo: </label>
            <input type="email" class="form-control" id="exampleInputEmail1" name= "email" aria-describedby="emailHelp" placeholder="Escribe una contraseña">
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Contraseña:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name = "password1" placeholder="Introduce un correo">
</div>
          <div class="form-group">
            <label for="exampleInputPassword1">Repite la contraseña:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name= "password2" placeholder="Vuelve a escribir la contraseña">
          
        <br>
        <button type="submit" name="register_btn" class="btn btn-primary">Registrarse</button>
      </form>  
    </section>
  </section>
  </section>
</body>
</html>