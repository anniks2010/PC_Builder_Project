<?php

function get_id(){
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT id  FROM compare");
    $kask->bind_result( $id);
    $kask->execute();
    while($kask->fetch()) {
        $comp[]=$id;
    }
    return $comp;
}


function get_comp($num){
        require_once('database.php');
        global $con;
        $kask = $con->prepare("SELECT model ,socketType , CPUClass, clockspeed  , ofPhysicalCores, MaxTDP, CPUMark, price  FROM compare where id= $num");
        $kask->bind_result( $model, $socketType, $CPUClass, $clockspeed, $ofPhysicalCores, $MaxTDP, $CPUMark, $price);
        $kask->execute();
        while($kask->fetch()) {
            $comp["model"]=$model;
            $comp["socketType"]=$socketType;
            $comp["CPUClass"]=$CPUClass;
            $comp["clockspeed"]=$clockspeed;
            $comp["ofPhysicalCores"]=$ofPhysicalCores;
            $comp["MaxTDP"]=$MaxTDP;
            $comp["CPUMark"]=$CPUMark;
            $comp["price"]=$price;
        }
    if(!empty($comp["model"])){
        return $comp;
    }

}
$id=get_id();
$val=1;
$i=0;
while($val<= count($id)){
        $comp1= get_comp($id[$i]);
        $i=$i+1;
         if(empty($comp1["model"])){
             return;
         }
        $comp2= get_comp($id[$i]);
        $i=$i+1;
       if(empty($comp2["model"])){
            return;
        }
        $val=$val+2;
    ?>
        <h1><?php echo $comp1["model"] ?> vs <?php  echo $comp2["model"] ?>
        </h1>

        <div class="row">
            <div class="column">
                <table class="tableCom">
                    <tr>
                        <th class="colum1" colspan="2"><?php echo $comp1["model"]  ?></th>

                    </tr>

                    <tr>
                        <td><b>Socket Type</b></td>
                        <td><?php echo $comp1["socketType"] ?></td>
                    </tr>
                    <tr>
                        <td><b>CPU Class</b></td>
                        <td><?php echo $comp1["CPUClass"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Clockspeed</b></td>
                        <td><?php echo $comp1["clockspeed"] ?></td>
                    </tr>
                    <tr>
                        <td><b># of Physical Cores</b></td>
                        <td><?php echo $comp1["ofPhysicalCores"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Max TDP</b></td>
                        <td><?php echo $comp1["MaxTDP"] ?></td>
                    </tr>
                    <tr>
                        <td><b>CPU Mark</b></td>
                        <td><?php echo $comp1["CPUMark"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Price</b></td>
                        <td><?php echo $comp1["price"] ?>€</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <table class="tableCom">
                    <tr>
                        <th class="colum1" colspan="2"><?php echo $comp2["model"] ?></th>

                    </tr>
                    <tr>
                        <td><b>Socket Type</b></td>
                        <td><?php echo $comp2["socketType"] ?></td>
                    </tr>
                    <tr>
                        <td><b>CPU Class</b></td>
                        <td><?php echo $comp2["CPUClass"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Clockspeed</b></td>
                        <td><?php echo $comp2["clockspeed"] ?></td>
                    </tr>
                    <tr>
                        <td><b># of Physical Cores</b></td>
                        <td><?php echo $comp2["ofPhysicalCores"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Max TDP</b></td>
                        <td><?php echo $comp2["MaxTDP"] ?></td>
                    </tr>
                    <tr>
                        <td><b>CPU Mark</b></td>
                        <td><?php echo $comp2["CPUMark"] ?></td>
                    </tr>
                    <tr>
                        <td><b>Price</b></td>
                        <td><?php echo $comp2["price"] ?>€</td>
                    </tr>
                </table>
            </div>
        </div>
<?php
}
?>