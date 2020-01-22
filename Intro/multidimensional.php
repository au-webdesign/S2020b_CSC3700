<html><head><title>Inventory Information</title>
	</head><body>
	<?php
    if ( !isset( $_POST['id'] ) ) {
        print "<span style=color:red> Error id is required </span>";
        exit(1);
    }
    $id = $_POST['id'];

    require_once ( 'multidim_config.php');

	if (isset($inventory[$id])){
	   print "<h2 stype='color:blue>'> Inventory Information for Part $id </h2>";
	   print "<table border=1>";
	   print "<tr> <th> ID </th><th> Part </th> <th> Count </th><th> Price </th></tr>";
	   print "<tr> <td> $id </td>";
	   print "<td> {$inventory[$id]['Part']} </td>";
	   print "<td> {$inventory[$id]['Count']} </td>";
	   print "<td> \${$inventory[$id]['Price']} </td></tr>";
        print "</table>";
        print "<br /> <a href='multipdim_form.php'> back </a> ";
	} else {
	   print "Illegal part ID = $id ";
	}
?> </body></html>