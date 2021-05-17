<div class="container">
<?php
if(isSet($_REQUEST['nimi'])){
    if(empty($_REQUEST['nimi'])){
        echo "Palun sisesta oma nimi! ";
    } else{
        echo "<p>Tere tulemast, ".$_REQUEST['nimi']."! </p>";
        echo "<p>Kirjuta mulle midagi e-posti aadressile test.testing@test.ee</p>";
    }
}
?>
<form>
    <p>Sisesta oma nimi:</p>
    <input type="hidden" name="leht" value="<?=basename(__FILE__,".php")?>">
    <input type="text" name="nimi">
    <input type="submit" value="ok">

</form>
</div>