<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css">
    <title>Sign up</title>
</head>
<body>

<?php
require ('./connection.php');
if (isset($_POST['signUP_button'])){
    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confPassword=$_POST['confPassword'];
    
    if(!empty($_POST['name'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&& !empty($_POST['password'])){
        if($password==$confPassword){
        $p=crud::conect()->prepare('INSERT INTO regtable1(name,lastname,email,pass) VALUE(:n,:l,:e,:p)');
        $p->bindValue(':n',$name);
        $p->bindValue(':l',$lastName);
        $p->bindValue(':e',$email);
        $p->bindValue(':p',$password);
        $p->execute();
        echo 'Successfully';
        }else{
            echo 'Password does not match!';
        }
    }else{ echo'Something wrong';
    }

}
?>
    <div class="form">
        <div class="title">
            <p>Sign up form</p>
        </div>
        <form action="" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confPassword" placeholder="Confirm Password">
        <input type="submit" value="Sign UP" name="signUP_button">
        </form>
    </div>
</body>
</html>