<?php include ("header.php")?>
  <h1>Formulario de Registro</h1>
  <form action= "enviar-registro.php" method="post">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>
    </div>
    <div class="form-group">
      <input type="submit" value="Registrarse">
    </div>
  </form>
</body>
</html> 

<!-- 
  <h1>Formulario de Registro</h1>
    <form action="correo.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" placeholder="Nombre" name="nombre">
    <label for="apellido">Apellido:</label>
    <input type="text" placeholder="Apellido" name="apellido">
    <label for="correo">Correo:</label>
    <input type="email" placeholder="Correo" name="correo">
    <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required>
    <input type="submit" value="Registrarse">
    </form> -->