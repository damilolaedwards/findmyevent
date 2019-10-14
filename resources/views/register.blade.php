<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>REGISTER</h1>
    </header>
    <main>
        @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>  
        @endif
        
        <form action="{{route('register.create')}}" method="POST">
            <div>
            <h3>Email</h3><br>
            <img src="images/head.png" width="28px" class="head">  &emsp;&emsp;&emsp;&emsp;&emsp; &emsp; &emsp;<input type="email" name="email" placeholder="Type your email">
            <hr width="765px"><br>
            <h3>Password</h3><br>
            <img src="images/padlock.png" width="28px"  class="head"> &emsp;&emsp;&emsp;&emsp;&emsp; &emsp; &emsp; &emsp;<input type="password" name="password" placeholder="Type your password"> <img src="images/eye.png" width="28px" class="eye">
            <hr width="765px"><br>
            <h3>Confirm Password</h3><br>
            <img src="images/padlock.png" width="28px"  class="head">  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp; &emsp;<input type="password" name="password_confirmation" placeholder="Type your password"> <img src="images/eye.png" width="28px" class="eye">
            <hr width="765px"><br>
            <input type="submit" class="btn btn-dark" value="Sign Up" ><br>
            {{csrf_field()}}
        </form>
    </div>
    <h5>Or <a href="">sign in</a> using</h5>
    <div id="logo">
        <a href="https://www.facebook.com"><img src="images/facebook.png" width="40px" height="28px"></a> &emsp; &emsp; <a href="https://www.gmail.com"><img src="images/gmail.png" width="40px" height="28px"></a>
    </div><br><br>
        <footer>
            &copy;2019 <a href="">FINDMYEVENT.COM</a> &emsp;&emsp;&emsp;<a href="">ABOUT</a> &emsp;&emsp;<a href="">CONTACT</a> &emsp;&emsp;<a href="">PRIVACY POLICY</a> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="https://www.linkedin.com"><img src="images/linked in.png" width="40px" height="25px"></a>  &emsp;<a href="https://www.instagram.com"><img src="images/instagram.png" width="40px" height="25px"></a> &emsp;<a href="https://www.twitter.com"><img src="images/twitter.png" width="40px" height="25px"></a> &emsp;<a href="https://www.facebook.com"><img src="images/fbk white.png" width="40px" height="25px"></a>
        </footer>
    </main>
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.bundle.js" ></script>
</body>
</html>