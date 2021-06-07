<?php

function get_shop_id(){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT id  FROM products");
    $kask->bind_result( $id);
    $kask->execute();
    while($kask->fetch()) {
        $shop[]=$id;
    }
    return $shop;
}


function get_shop($num){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT model  ,description , price FROM products where id= $num ");
    $kask->bind_result( $model, $description, $price);
    $kask->execute();
    while($kask->fetch()) {
        $shop["model"]=$model;
        $shop["description"]=$description;
        $shop["price"]=$price;
    }
    if(!empty( $shop["model"])){
        return  $shop;
    }

}

$id = get_shop_id();
$i=0;
?>
<h1>SHOP</h1>

<table class="shopTableName">
    <tr>
        <td class="shopName">Model</td>
        <td class="shopNamePrice">Price</td>
    </tr>
</table>


<hr class="hrShop">
<?php
while ($i<= (count($id)-1)){
$shop= get_shop($id[$i]);
if(empty($shop["model"])){
    return;
}
$i=$i+1;
?>
<table class="shopTable">
    <tr class="shopTr">
        <td class="shopTd"><?php echo $shop["model"] ?></td>
        <td rowspan="2" class="shopTdPrice"><?php echo $shop["price"] ?> €</td>
    </tr>
    <tr class="shopTr">
        <td class="shopDesc"><?php echo $shop["description"] ?></td>
    </tr>
</table>
<br><br>
<?php
}
?>

