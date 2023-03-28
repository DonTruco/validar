<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="e_resgistro.css">
</head>
<body>
  <div class="container">
    <form class="form" action="registrar.php" method="post">
      <h1 class="form__title">Registro</h1>
      <div class="form__input-group">
        <input type="text" placeholder=" " name="nombre" class="form__input" required>
        <label class="form__label">Nombre completo</label>
      </div>
      <div class="form__input-group">
        <input type="email" placeholder=" " name="email" class="form__input" required>
        <label class="form__label">Email</label>
      </div>
      <div class="form__input-group">
        <input type="password" placeholder=" " name="password" class="form__input" required>
        <label class="form__label">Contraseña</label>
      </div>
      <button type="submit" class="form__button">Registrarse</button>
      <p class="form__info">Ya tienes una cuenta? <a href="index.html">Inicia sesión aquí</a></p>
      <div class="form__bg"></div>
    </form>
  </div>
</body>
</html>
