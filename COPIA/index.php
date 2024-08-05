<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Portal de Inicio</span>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;" action="conexionLogin.php" method="post" >

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Bienvenido al portal de gestio de recursor</h3>

              <div class="form-outline mb-4">
                
                <label class="form-label" for="form2Example18">User </label>
                <input name="usuario" type="text" id="form2Example18" class="form-control form-control-lg" placeholder="admin" />
                <div id="emailHelp" class="form-text">only entry of administrative staff</div>
              </div>

              <div class="form-outline mb-4">
                
                <label class="form-label" for="form2Example28">Password</label>
                <input name="contraseña" type="password" id="form2Example28" class="form-control form-control-lg" placeholder="1234" />
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>

              </div>

              <p>Don't have an account? <a href="#" class="link-info">Register here</a></p>
            </form>
          </div>

        </div>

        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="src/logistica.png" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>

      </div>
    </div>
  </section>
 <!--  @utor: 2311010151@untels.edu.pe -->
</body>

