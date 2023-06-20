{include file= "header.tpl"}


  <div class="container_login">
    <h2>Iniciar sesión</h2>
    <form action="validate" method="POST">
      <div class="form-group">
        <label for="userName">Usuario:</label>
        <input type="text" id="userName" name="userName" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Iniciar sesión">
      </div>
    </form>
  </div>

  {include file= "footer.tpl"}