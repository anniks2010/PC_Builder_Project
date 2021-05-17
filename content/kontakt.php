<p>
<?php
if(isSet($_REQUEST['nimi'])){
    if(empty($_REQUEST['nimi'])){
        echo "Palun sisesta oma nimi! ";
    } else{
        echo "Tere tulemast, ".$_REQUEST['nimi']."! ";
        echo "Kirjuta mulle midagi e-posti aadressile test.testing@test.ee";
    }
}
?>
</p>
<form>
    Sisesta oma nimi:
    <input type="hidden" name="leht" value="<?=basename(__FILE__,".php")?>">
    <input type="text" name="nimi">
    <input type="submit" value="ok">

</form>