<?php
    require('data.php');
?>

<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php 
        
        if(!empty($_POST['lg'])){
            extract($_POST);
            if($eml=="" && $pass != ""){
                $msg1="<font color='red' size='4px'>please complete field of email *</font>";

            }elseif($pass==""  && $eml!=""){
                $msg2="<font color='red' size='4px'>please complete field of password *</font>";

            }elseif($eml=="" && $pass == "") {
                $msg1="<font color='red' size='4px'>please complete field of email *</font>";
                $msg2="<font color='red' size='4px'>please complete field of password *</font>";           
            }else{
                $table=$pdo->query("SELECT * FROM education WHERE email = '".$eml."' and password = '".$pass."'");
                $smit = $table->rowCount();
                if($smit == 0){
                    $note = "<font class='note'>this email or password not exist please try again !</font>";
                }else{
                    $_SESSION['user']=$eml; 
                    header("location:list.php");
                }
            }
            
        }
    ?>

<form action="#" method='POST'>
        
        <div class="part2">
            <img src="img3.jpg" alt="picture of login" id="photo">
        </div>
        
        <div class="part1">
            <label for="#">Enter Email: </label><br><input type="email" placeholder="John@gmailcom" name="eml" id="eml"><br>
            <p><?php
                 if(isset($msg1)){
                        echo $msg1;
                }
                ?></p><br><br>
            <label for="#">Enter Password</label><br><input type="password" placeholder="password" name="pass" id="pass"><br>
            <p>
                <?php
                    if(isset($msg2)){
                        echo $msg2;
                    }
            
                ?>
            </p><br><br>
            </p><br><br>
            <a href="sign.php">you don't have account ?</a>
            <input type="submit" value="Login" name="lg" class="button">
            <div class="app">
                <img src="twitter-large.png" alt="">
                <img src="fb.png" alt="">
                <img src="instagram.png" alt="">
                <img src="linkedin.png" alt="">
            </div><br><br>
            <?php 
                if(isset($note)){
                    echo $note;
                }
            ?>
        </div>
    </form>

    <style>
        .button{
            cursor: pointer;
        }
    </style>
</body>
</html>