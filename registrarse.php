<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <title>Document</title>
</head>

<body>
  <div class="column">
    <h3>Registrate</h3>
    <form id="registroForm" action="registro.php" method="post">
      <div class="row justify-content-center">
        <div class="col-md-14">
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                  placeholder="Ingrese su nombre completo" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email"
                  placeholder="Ingrese su correo electrónico" required />
              </div>
              <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena"
                  placeholder="Ingrese su contraseña" required />
              </div>
              <div class="mb-3">
                <label for="repetir_contrasena" class="form-label">Repetir Contraseña</label>
                <input type="password" class="form-control" id="repetir_contrasena" name="repetir_contrasena"
                  placeholder="Repita su contraseña" required />
              </div>
              <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="" required />
              </div>
              <div class="mb-3">
                <label for="telefono" class="form-label">teléfono</label>
                <input type="phone" class="form-control" id="telefono" name="telefono" placeholder="311 111 1111"
                  required />
              </div>
              <button type="submit" class="btn btn-primary">
                Registrarse
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>

</html>