<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signin Template · Bootstrap v5.0</title>
  <!-- For rollbacks due to mistakes, refer to the original file in Examples folder -->
  <!-- Bootstrap core CSS -->
  <link href="http://localhost:8012/login_user_project/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">

</head>

<body class="text-center">
  <div class="container">
    <div>
      <h1 class="mt-1 text-muted">School Management System</h1>
    </div>
    <p class="text-muted">A case study of St. Thomas School, Shillong</p>
    <main class="form-signin">
      <form action="authenticate3.php" method="POST">

        <img class="mt-3 mb-3" src="http://localhost:8012/login_user_project/favicon/reading.png" alt="" width="85" height="85">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
          <input type="text" class="form-control" placeholder="name@example.com" name="username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        <p class="mt-1 mb-1 text-muted">Project by Yoomiki Lamin</p>
        <p class="mt-1 mb-1 text-muted">Guided by Dr. S. K. Singh</p>
      </form>
    </main>
  </div>

  <br>

</body>

</html>