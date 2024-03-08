<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup <form action=""></form></title>
    <link rel="stylesheet" href="/css/signup.css">
</head>
<body>

<form action="" class="form_main" method="post" autocomplete="off">

    <p class="heading">Sign-Up</p>
    <div class="inputContainer">
    <input type="email" class="inputField" id="Email" placeholder="Email" required name="email">

    </div>
    <div class="inputContainer">
     <input type="text" class="inputField" id="username" placeholder="Username" required name = username>
    </div>
    
    <div class="inputContainer">
    <input type="password" class="inputField" id="password" placeholder="Password" reqired name="password">
    </div>

    <div class="inputContainer">
    <input type="password" class="inputField" id="confirmpassword" placeholder="confirmpassword" reqired name="confirmpassword">
    </div>
              
           
    <button id="button" type="submit" name="submit">Submit</button>
    <p style="font-size: 20px;">Already Registered...?<a class="forgotLink" href="login.php">click here</a></p>
    
    </form>

</body>
</html>