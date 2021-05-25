<?php
require_once('database.php');
global $conn;
    $kask = $conn->prepare("SELECT CPU, AIO, MOBO, GPU, RAM, SSD, CASEE, PSU, OS  FROM builds");
    $kask->bind_result( $CPU, $AIO, $MOBO, $GPU, $RAM, $SSD, $CASEE, $PSU, $OS);
    $kask->execute();
    $prc=1000;
    $prccpu=150;
    $prcgpu=500;
while($kask->fetch()) {
    ?>
<h1>Part List for  <?php echo $prc ?>€ Build</h1>

<table>
    <tr>
        <th class="colum1">Сomponents</th>
        <th class="colum2">Model</th>
        <th class="colum3">Price(euro)</th>
    </tr>
    <tr>
        <td><b>CPU</b></td>
        <td><?php echo $CPU ?></td>
        <td><?php echo $prccpu ?>€</td>
    </tr>
    <tr>
        <td><b>AIO</b></td>
        <td><?php echo $AIO?></td>
        <td>111€</td>
    </tr>
    <tr>
        <td><b>MOBO</b></td>
        <td><?php echo $MOBO ?></td>
        <td>90€</td>
    </tr>
    <tr>
        <td><b>GPU</b></td>
        <td><?php echo $GPU ?></td>
        <td><?php echo $prcgpu ?>€</td>
    </tr>
    <tr>
        <td><b>RAM</b></td>
        <td><?php echo $RAM ?></td>
        <td>72€</td>
    </tr>
    <tr>
        <td><b>SSD</b></td>
        <td><?php echo $SSD ?></td>
        <td>260€</td>
    </tr>
    <tr>
        <td><b>CASE</b></td>
        <td><?php echo $CASEE ?></td>
        <td>123€</td>
    </tr>
    <tr>
        <td></td>
        <td style="text-align:right"><b>Total:</b></td>
        <td><?php echo $prc ?>€</td>
    </tr>
</table>
<?php
    $prc=$prc+500;
    $prccpu=$prccpu+150;
    $prcgpu=$prcgpu+350;
}
?>