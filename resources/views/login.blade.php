<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
      @import url(/styles/signin.css);
    </style>
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Sign In page</title>
  </head>
  <body>
      <div class="container mx-auto d-block">
          <div class="row">
              <div class="col-md-10 header signin-img">
                <a href="#">
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </a>
                <div><h1>SIGN IN</h1></div>        
              </div>
          </div>
          <div class="row">
              <form method="POST" action="{{route('login.create')}}" class="col-sm-12 col-lg-8 col-xl-8">
                  <div class="form-group mx-auto">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Type your Username">  
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Type your password">
                  </div>
                  <a href="#"><p class="text-right">Forgot password?</p></a>
                  {{csrf_field()}}
                  <div class="text-center col-md-8 col-lg-6 col-xl-6">
              <input type="submit" value="SIGN IN" class="btn btn-dark rounded-25">
            </div>
                </form>
          </div>
          <div class="row height justify-content-center">  
            <div class="col-md-8 col-lg-6 col-xl-6">
              
              <p class="text-center">or sign in with</p>
              <img class="img-one mx-5" src="images/google.png"><img class="img-two mx-5" src="images/component.png" >
            </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jQuery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/paper-full.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>