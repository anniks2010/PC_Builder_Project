<?php
    require_once('database.php');
    global $con;
    $kask = $con->prepare("SELECT model ,socketType , CPUClass, clockspeed  , ofPhysicalCores, MaxTDP, CPUMark, price  FROM compare");
    $kask->bind_result( $model, $socketType, $CPUClass, $clockspeed, $ofPhysicalCores, $MaxTDP, $CPUMark, $price);
    $kask->execute();
    while($kask->fetch()) {
        ?>
            <h1><?php echo $model ?></h1>

    <table>
        <tr>
            <th class="colum1">Сomponents</th>
            <th class="colum2">Model</th>
            <th class="colum3">Price(euro)</th>
        </tr>
        <tr>
            <td><b>CPU</b></td>
            <td><?php echo $model ?></td>
            <td>404€</td>
        </tr>
        <tr>
            <td><b>AIO</b></td>
            <td><?php echo $socketType ?></td>
            <td>111€</td>
        </tr>
        <tr>
            <td><b>MOBO</b></td>
            <td><?php echo $CPUClass ?></td>
            <td>90€</td>
        </tr>
        <tr>
            <td><b>GPU</b></td>
            <td><?php echo $clockspeed ?></td>
            <td>700€</td>
        </tr>
        <tr>
            <td><b>RAM</b></td>
            <td><?php echo $ofPhysicalCores ?></td>
            <td>72€</td>
        </tr>
        <tr>
            <td><b>SSD</b></td>
            <td><?php echo $MaxTDP ?></td>
            <td>260€</td>
        </tr>
        <tr>
            <td><b>CASE</b></td>
            <td><?php echo $CPUMark ?></td>
            <td>123€</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align:right"><b>Total:</b></td>
            <td><?php echo $price ?></td>
        </tr>
    </table>

<?php
}
?>


