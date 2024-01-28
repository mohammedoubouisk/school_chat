<?php
    require('data.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="list.css">
</head>
<?php
    include('menu.php');
?>
<body>
<?php
        $user = $_SESSION['user'];


    echo"<center><table>";


        $table=$pdo->query("SELECT * FROM education WHERE email='".$user."'");
        while($rows=$table->fetch(PDO::FETCH_ASSOC)){
            echo"
            <tr><th>Id of Student</th><td>".$rows['id']."</td></tr>
            <tr><th>First Name of student</th><td>".$rows['fname']."</td></tr>     
            <tr><th>Last Name of Student</th><td>".$rows['lname']."</td></tr>
            <tr><th>Note of baccaloriate</th><td>".$rows['nbac']."</td></tr>
            <tr><th>Date of Birthday</th><td>".$rows['birthday']."</td></tr>
            <tr><th>Name of School</th><td>".$rows['school']."</td></tr>
            <tr><th>Field</th><td>".$rows['field']."</td></tr>
            <tr><th>Email of student</th><td>".$rows['email']."</td></tr>
            <tr><th>Password of Student</th><td>".$rows['password']."</td></tr>
            ";
        }
        echo"</table></center>";
    ?> 
    
</body>
</html>
