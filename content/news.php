<?php

function get_news_id(){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT id  FROM news");
    $kask->bind_result( $id);
    $kask->execute();
    while($kask->fetch()) {
        $news[]=$id;
    }
    return $news;
}


function get_news($num){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT pic_url ,creationDate , description, content FROM news where id= $num ");
    $kask->bind_result( $pic_url, $creationDate, $description, $content);
    $kask->execute();
    while($kask->fetch()) {
        $news["pic_url"]=$pic_url;
        $news["creationDate"]=$creationDate;
        $news["description"]=$description;
        $news["content"]=$content;
    }
    if(!empty( $news["pic_url"])){
        return  $news;
    }

}

$id = get_news_id();
$i=0;
?>
<div class="clear_news"></div>

<div class="container">
    <h1>News</h1>

    <div class="">
<?php
while ($i<= (count($id)-1)){
    $news= get_news($id[$i]);
    if(empty($news["pic_url"])){
        return;
    }
    $i=$i+1;
?>

    <div class="row_news">
        <div class="picture_news">
            <a href="">
                <img class ="img_news" src=<?php echo $news["pic_url"] ?> alt="PILT">
            </a>      
        </div>
        <div class="intro_news">
            <h2 class="intro_link" style=" ">
                <a class="intro_link" href=""><?php echo $news["description"] ?></a>
            </h2>
            <p class="newsContent"><?php echo $news["content"] ?></p>
            <p class="newsData" ><?php echo $news["creationDate"] ?></p>
        </div>
        <div class="clear_news"></div>
    </div>

    <?php
    }
    ?>
</div>

</div>
