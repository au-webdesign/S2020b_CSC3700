<html><head><title>Inventory Information</title>
	</head><body>
<h2> Select a Part ID of Interest </h2>
<form name="myForm" action="multidimensional.php" method="post">
<?php
    require_once ( "multidim_config.php");
    foreach ( $inventory as $key => $value ) {
       print "\n<input type='radio' id='id$key' name='id' value='$key'> $key ";
    }
 ?>
    <input type="submit" value="Sumbit" />
</form>
</body>
</html>


