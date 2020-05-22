<?php include('include/header.php') ?>
<body>

    <form action="solicitud_process.php?puestoid=<?php echo $_GET['puestoid']?>" method="POST"  class="container col-3">
    <div class="form-group ">
        <label>Nombre: </label>
        <input type="text" name="nombre" class="form-control">
        </div>
    <div class="form-group" >
        <label>Apellido paterno: </label>
        <input type="text" name="apellidop" size="40"  class="form-control">
        </div>
    <div class="form-group" >
        <label>Apellido materno: </label>
        <input type="text" name="apellidom" size="40"  class="form-control">
        </div>
        <div class="form-group" >
        <label>Edad: </label>
        <input type="text" name="edad" size="40"  class="form-control">
        </div>
    <div class="form-group" >
        <label>Año de nacimiento: </label>
        <input type="number" name="nacimi" min="1900">
        </div>
    <div class="form-group" >
        <label>Dirección: </label>
        <input type="text" name="direccion" size="40">
        </div>
    <div class="form-group" >
        <label>Colonia: </label>
        <input type="text" name="colonia" size="40">
        </div>
    <div class="form-group" >
        <label>Codigo postal: </label>
        <input type="text" name="postal" size="40">
        </div>
    <div class="form-group" >
        <label>Teléfono: </label>
        <input type="text" name="telcasa" size="40">
        </div>
   
        
        <p>Sexo:
          <input type="radio" name="hm" value="hombre"> Hombre
          <input type="radio" name="hm" value="mujer"> Mujer
        </p>
        <p>Estatura: <input type="text" name="estatura" size="40"></p>
        <p>Peso: <input type="text" name="peso" size="40"></p>
        <p>
           Trabajo previo: <input type="text" name= "previo" size="40">
        </p>
        <p>
           Duración: <input type="text" name= "duracion" size="40">
        </p>
        <p>
           Idiomas que domina: <input type="text" name= "idioma" size="40">
        </p>
        <p>
           Describa sus habilidades: <textarea class="form-control" rows="5" type="text" name= "descripcion" ></textarea>
        </p>
        <p>
           Escolaridad: <input type="text" name= "escolaridad" size="40">
        </p>
        
        <p>
          <button type="submit" class="btn btn-primary" name="solicitud_agregar">Mandar solicitud</button>
        </p>
      </form>

</body>
</html>