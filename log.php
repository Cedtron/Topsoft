<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log in</title>
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/mx.css">
    <link rel="stylesheet" href="css/topsoft.css">
</head>
</head>
<body class="text-center body">
    
    <main class="form-signin">
    <form action="conn/log.php" method="GET">
        <img class="mb-4 lg" src="img/topc.png">
        <h1 class="h3 mb-3 fw-normal">Please log in</h1>
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="text"  class="form-control" placeholder="Name" name="user"required autofocus>
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2012-2020</p>
      </form>
    </main>
    
    
        
      </body>
    </html>
    