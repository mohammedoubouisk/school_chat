<?php
    require('data.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school | future</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php
        $user = $_SESSION['user'];
    ?>
    <div class="hero">
        <div class="part1">
            <div class="logo">
                <a href="list.php"><h2><i class="fa-sharp fa-solid fa-user"></i>&nbsp;<?=$user?></h2></a>
            </div>
        </div>
        <div class="part2">
            <ul>
                <a href="disc.php"><li><i class="fa-solid fa-comments"></i>&nbsp;Discussion</li></a>
                <a href="cour.php"><li><i class="fa-solid fa-book"></i>&nbsp;Cours</li></a>
                <a href="ex.php"><li><i class="fa-solid fa-square-pen"></i>&nbsp;Exercices</li></a>
                <a href="out.php" ><li style="color: #ffccbc">Sign Out&nbsp;<i class="fa-solid fa-right-from-bracket"></i></li></a>
            </ul>
        </div>
    </div>
     <style>
        a:hover:last-child{
            background-color: rgba(255, 0, 0, 0.299);
            border-radius: 50px;
            color:rgba(196, 59, 59, 0.756);
        }
     </style>
</body>
</html>