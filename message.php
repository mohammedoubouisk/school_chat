<?php
require('data.php');

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $table=$pdo->query('SELECT * FROM chat ORDER BY id_m asc');
    $index=-1;
    while($rows=$table->fetch(PDO::FETCH_ASSOC)){
        $index=1;
        if($user == $rows['email']){
            ?>
            <div class='you'>
                <span><i class="fa-sharp fa-solid fa-user"></i>&nbsp; YOU </span>
                <p class='mg'><?=$rows['msg']?></p>
                <p class='dt'><?=$rows['date']?></p>
            </div>
            <?php
        }else{
            ?>
            <div class='them'>
                <span class="hm"><i class="fa-sharp fa-solid fa-user"></i>&nbsp;<?=$rows['email']?></span>
                <p class='mg'><?=$rows['msg']?></p>
                <p class="dt"><?=$rows['date']?></p>
            </div>
            <?php
        }

    }
    if($index == -1){
        echo"message empty";
    }
}
?>
<style>
    .you{
        background-color: #d3e3fc;
        color: white;
        width: fit-content;
        padding: 20px;
        border-radius: 20px 20px 20px 0px;
        margin: 10px 0px;


    }
    p{
        font-size: 15px;
        margin: 10px 0;
    }
    .them{
        background-color: #ffffff;
        width: fit-content;
        padding: 20px;
        border-radius: 4px;
        margin-left: auto;
        margin-top: 10px;
        border-radius: 20px 20px 0px 20px;
        margin-bottom: 10px;

    }
    span{
        color: green;
        font-weight: bold;
    }
  .hm{
        color: goldenrod;
    }
    .dt{
        color: grey;
    }
    .mg{
        font-size: 20px;
    }
</style>