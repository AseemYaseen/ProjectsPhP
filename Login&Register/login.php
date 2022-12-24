<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css">
    <title>Sign up</title>
    <style>
        .form{
            width:300px;
            height:300px;
        }
    </style>
</head>
<body>
    <?php

    require('./connection.php');
    if(isset($_POST['Login_button'])){
        $_SESSION['validate']=false;
        $email=$_POST['email'];
        $password=$_POST['password'];

    $p=crud::conect()->prepare('SELECT * FROM regtable1 WHERE email=:e and pass=:p');
    $p->bindValue(':e',$email);
    $p->bindValue(':p',$password);
    $p->execute();
    $p->fetch(PDO::FETCH_ASSOC);

    if($p->rowCount()>0){
        $_SESSION['email']=$email;
        $_SESSION['pass']=$password;
        $_SESSION['validate']=true;

        header("location: home1.php");
        // echo 'Hello';

    }else{
        echo 'Make sure that you are registerd!';
    }

    }


    ?>
    <div class="form">
        <div class="title">
            <p>Login</p>
        </div>
        <form action="" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="password" placeholder="Password">
        <input type="submit" value="Login" name="Login_button">
        </form>
    </div>
</body>
</html>