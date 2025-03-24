<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {box-sizing: border-box}

    .form-box{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        height:97vh;
    }

    /* Add padding to containers */
    .container {
    padding: 16px;
    width: 35%;
    margin-inline: auto;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 15px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .registerbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    .registerbtn:hover {
    opacity:1;
    }

    /* Add a blue text color to links */
    a{
    color: dodgerblue;
    }
    .error{
        color:red;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
    background-color: #f1f1f1;
    text-align: center;
    }
</style>
<body>
<form action="{{route('login.user')}}" method="POST" class="form-box">
    @csrf
  <div class="container">
 
    <h1>Login</h1>
    <p>Please fill this form to Login into your account.</p>
    <hr>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" value="{{ old('email')}}" name="email" id="email" >
    @if ($errors->has('email'))
    <span class="error">{{ $errors->first('email') }}</span>
    <br>
    <br>
    @endif


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" value="{{ old('password')}}"  name="password" id="password" >
    @if ($errors->has('password'))
    <span class="error">{{ $errors->first('password') }}</span>
    <br>
    <br>
    @endif

    <button type="submit" class="registerbtn">Login</button>
  </div>

  <div class="container signin">
    <p>Dont have an account? <a href="{{route('register.page')}}">Register</a>.</p>
  </div>
</form>
</body>
</html>