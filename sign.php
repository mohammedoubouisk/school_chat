<?php
 require('data.php');
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up</title>
    <link rel="stylesheet" href="sing.css">
</head>
<body>
    <?php
    if(!empty($_POST['cancel'])){
        extract($_POST);
        header('location:login.php');
    }

    if(!empty($_POST['valider'])){
        extract($_POST);
        if($name1=="" || $name2=="" || $bac=="" || $birth=="" || $school=="" || $fld=="" || $eml=="" || $pass==""){
            $message = "<font class='inscr'>check all field are completed meybe there is someone empty !</font>";
        }
        else{
            $tab=$pdo->query("SELECT * FROM education WHERE email='".$eml."'");
            $sm = $tab->rowCount();
            if($sm != 0){
                $message="<font class='inscr'>this student are already existe</font>";
            }else{
                $sql=("INSERT INTO education VALUES(null,'$name1','$name2',$bac,'$birth','$school','$fld','$eml','$pass')");
                $pdo->query($sql);
                // $pdo->query("INSERT INTO education VALUES(null,'".$name1."',".$name2."',".$bac.",'".$birth."','".$school."','".$fld."','".$eml." ,'".$pass."')");
                $message="<font class='inscri'> your information accepted width successefuly </font>";
            }
        }

    }
    ?>



    <div class="all">
        <div class="logo">
            <img src="LOGO-removebg-preview.png" alt="">
        </div>
        <div class="titre">
            <h1>The School Of Future To Learn <br> Programation</h1>
        </div>
        <div class="lang">
            <p>AR</p>
            <p>EN</p>
            <p>FR</p>
        </div>
    </div>
<center>
    <form action="#" method="POST">
        <fieldset>
            <legend>Information personnel</legend>
            <table>
                <tr><td>Enter First Name:</td><td><input type="text" placeholder="your first name " name="name1" require></td></tr>
                
                <tr><td>Enter last Name:</td><td><input type="text" placeholder="your last name " name="name2" require></td></tr>
                <tr><td>Note Of baccalorite:</td><td><input type="number" placeholder="your note " name="bac" require></td></tr>
                <tr><td>Date of Birthday:</td><td><input type="date" placeholder="your first name " name="birth" require></td></tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Information about School</legend>
            <table>
                <tr><td>Select Name of School : </td><td><select name="school"  require>
                    <option value="University Hassan 2 AGADIR">University Hassan 2 AGADIR</option>
                    <option value="University ASSAka Tikiwin">University ASSAka Tikiwin</option>
                    <option value="University CMC 2 Drarga">University CMC 2 Drarga</option>
                    <option value="University Iben zaydon">University Iben zaydon </option>
                    <option value="University Iben lkhatab Anza">University Iben lkhatab Anza</option>
                </select></td></tr>
                <tr><td>Select field : </td><td><select name="fld" id="#" require>
                    <option value="developpement digita">developpement digital</option>
                    <option value="conduteur of work public">conduteur of work public</option>
                    <option value="construction digital">construction digital</option>
                    <option value="gestion and economie">gestion and economie</option>
                    <option value="mechanique industriel">mechanique industriel</option>
                    <option value="frois industriel">frois industriel</option>
                    <option value="infografique">infografique</option>
                </select></td></tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Gmail</legend>
            <table>
            <tr><td>Enter Your Email : </td><td><input type="email" placeholder="Example@gmail.com" name="eml" require></td></tr>
            <tr><td>Eneter Your Password: </td><td><input type="password" placeholder="password" name="pass" require></td></tr>
        </table>
        </fieldset>
        <br><br>
        <p>
        <?php 
            if(isset($message)){
                echo $message;
            }
        ?>
        </p><br><br>
        <div class="buttons">
            <input type="submit" value="VALIDER" id="valider" name="valider">
            <input type="submit" value="CANCEL" id="cancel" name="cancel">
        </div>
    </form>
</center>
<style>
    .buttons{
        padding-bottom: 60px;
    }
    .inscr{
    color: red;
    font-size: 18px;
    background: rgba(255, 162, 162, 0.345);
    padding: 14px;
    display: flex;    
    justify-content: center;
    }
    .inscri{
        color: green;
        font-size: 18px;
        background-color: rgba(121, 247, 138, 0.201);
        padding: 14px;
        display: flex;
        justify-content: center;
    }
</style>
</body>
</html>