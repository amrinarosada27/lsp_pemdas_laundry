<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Laundry</title>
</head>

<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-5 col-sm-12">
        <div class="card p-3">
          <div class="card-body">
            <div class="text-center">
              <img src="img/icon.png" alt="logo" class="img-fluid mb-2" width="100">
              <h4>Selamat Datang</h4>
              <h4>Laundry SMK ISFI</h4>
            </div>
            <form action="" method="POST">
              <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <button type="submit" name="login" class="btn btn-md btn-dark w-100">Login</button>
            </form>
            <small class="d-block text-center mt-2">Belum punya akun? Silahkan <a href="register.php">Daftar</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if ($username === "smk" && $password === "rpl") {
      echo "<meta http-equiv='refresh' content='1;url=pages/home.php'>";
    } else {
      echo "<meta http-equiv='refresh' content='1;url=index.php'>";
    }
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>