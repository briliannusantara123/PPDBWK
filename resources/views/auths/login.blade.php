
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<br>
<br>
<br>
<br>
<br>

  <body class="text-center" style="background-image: url(bgg.jpg);">
    <div class="container">
      <form class="form-signin" action="/postlogin" method="POST">
        {{csrf_field()}}
      <img class="mb-4" src="logowk.png" alt="" width="175" height="175">
      <h1 class="h3 mb-3 font-weight-normal" style="color: white">Login Admin PPDB</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
      <br>
      <a class="btn btn-danger" href="/" > Kembali</a>
    </form>
    </div>
  </body>
</html>
