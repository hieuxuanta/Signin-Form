# Signin-Form
i'm doing it

<!DOCTYPE html>
<html lang="en">
<title>My Website</title>

<head>
    <meta charset="UTF-8">
    <style>
        a {
            padding-left: 10px;
            text-align: left;
            text-decoration: none;
            color: #ffff00;
            padding-left: 45%;
            display: inline;
        }
        
        body {
            background-color: lightblue;
        }
        
        h3 {
            padding-left: 45%;
        }
        
        form {
            padding-left: 45%;
        }
        
        p {
            padding-left: 45%;
        }
        
        div {
            text-align: left;
            border: 1px #000000 solid;
            border-right-style: solid;
            border-right-width: 8px;
            border-right-color: #1a1a1a;
            border-top-right-radius: 100px;
            border-bottom-right-radius: 100px;
            //box-sizing:border-box;
            //margin-left: 430;
            //margin-right: 30%;
            margin-left: 610px;
            margin-right: 720px;
            margin-top:300px;
            //padding-left:-100px;
        }
    </style>
</head>

<body>
    <div>
        <h3> FORM </h3>
        <form action="login.php" method="POST">
                 Username:
            <input type="text" name="name" value="">
            <br> Password :
            <input type="password" name="password" value="">
            <br>
            <input type="submit" value="Login">
            


        </form>
        <form action="signup.php" method="POST">
             <input type="submit" value="Sign up">
        </form>
        <p>Want to know more details </p>
        <a href="https://www.facebook.com/hieuxuta" target="_blank"><abbr title="My FB page">Leave messages !</abbr></a>
        <br>
        <p>Thanks </p>
    </div>
</body>

</html>
