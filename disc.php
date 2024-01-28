<?php
    require('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion | chat</title>
    <link rel="stylesheet" href="disc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<?php
    include('menu.php');
?>
<body>
    <div class="chat">

        <div class="messages_box">
            <?php
                include('message.php')
            ?>
        </div>

        <?php
        $user = $_SESSION['user'];
            if(isset($_POST['send'])){
                extract($_POST);
                if(isset($msg)!="" && $msg!=""){
                    $pdo->query("INSERT INTO chat VALUES(null,'$user','$msg',NOW())");
                    header("location:disc.php");                 
                }else{
                    header("location:disc.php");
                }
            }
        ?>
   
        <form action="disc.php" method="POST">
            <textarea name="msg" id="msg" cols="40" rows="1" placeholder="enter message"></textarea>
            <!-- <i class="fa-solid fa-paper-plane" name='send'><input type="submit" name='send' class="sn"></i> -->
            <button type="submit" name='send' class="sn"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
    </div>
    <style>
        .sn{
            background-color: transparent;
            border: none;
        }
    </style>
</body>
</html>