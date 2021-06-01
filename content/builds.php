<?php
function get_id_builds(){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT id  FROM builds");
    $kask->bind_result( $id);
    $kask->execute();
    while($kask->fetch()) {
        $get_id[]=$id;
    }
    return $get_id;
}
function get_prc(){
        require_once('database.php');
        global $con;
        $kask = $con->prepare("SELECT  price, model  FROM products ");
        $kask->bind_result( $price, $model);
        $kask->execute();
        while($kask->fetch()) {
            $model_prc[$model]=$price;
        }
        return $model_prc;
    }
function get_prod($num){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT CPU, AIO, MOBO, GPU, RAM, SSD, CASEE, PSU, OS  FROM builds where id= $num");
    $kask->bind_result($CPU, $AIO, $MOBO, $GPU, $RAM, $SSD, $CASEE, $PSU, $OS);
    $kask->execute();
    while ($kask->fetch()) {
        $comp["CPU"]=$CPU;
        $comp["AIO"]=$AIO;
        $comp["MOBO"]=$MOBO;
        $comp["GPU"]=$GPU;
        $comp["RAM"]=$RAM;
        $comp["SSD"]=$SSD;
        $comp["CASEE"]=$CASEE;
        $comp["PSU"]=$PSU;
        $comp["OS"]=$OS;
    }
    return $comp;
}


    $id=get_id_builds();
    $val=0;
while ($val<= (count($id)-1)){
    $comp= get_prod($id[$val]);
    $prc=get_prc();
    if(empty($comp["CPU"])){
        return;
    }
    $total=$prc[$comp["CPU"]]+$prc[$comp["AIO"]]+$prc[$comp["MOBO"]]
        +$prc[$comp["GPU"]]+$prc[$comp["RAM"]]+$prc[$comp["SSD"]]+$prc[$comp["CASEE"]]+$prc[$comp["PSU"]]+$prc[$comp["OS"]];
        ?>
            <h1>Part List for  <?php echo  $total?>€ PC Build</h1>
    <table class="tableBuilds" >
        <tr class="trThTd">
            <th class="colum1">Сomponents</th>
            <th class="colum2">Model</th>
            <th class="colum3">Price(euro)</th>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>CPU</b></td>
            <td class="trThTd"><?php echo $comp["CPU"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["CPU"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>AIO</b></td>
            <td class="trThTd"><?php echo $comp["AIO"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["AIO"]]?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>MOBO</b></td>
            <td class="trThTd"><?php echo $comp["MOBO"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["MOBO"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>GPU</b></td>
            <td class="trThTd"><?php echo $comp["GPU"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["GPU"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>RAM</b></td>
            <td class="trThTd"><?php echo $comp["RAM"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["RAM"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>SSD</b></td>
            <td class="trThTd"><?php echo $comp["SSD"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["SSD"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>CASE</b></td>
            <td class="trThTd"><?php echo $comp["CASEE"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["CASEE"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"><b>PSU</b></td>
            <td class="trThTd"><?php echo $comp["PSU"] ?></td>
            <td class="trThTd"><?php echo  $prc[$comp["PSU"]] ?>€</td>
        </tr>
        <td class="trThTd"><b>OS</b></td>
        <td class="trThTd"><?php echo $comp["OS"] ?></td>
        <td class="trThTd"><?php echo  $prc[$comp["OS"]] ?>€</td>
        </tr>
        <tr class="trThTd">
            <td class="trThTd"></td>
            <td class="trThTd" style="text-align:right"><b>Total:</b></td>
            <td class="trThTd"><?php echo $total ?>€</td>
        </tr>
    </table>
    <?php
    $val=$val+1;
        }
    ?>

