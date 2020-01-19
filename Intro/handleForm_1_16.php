<html>
<head> <title> HEllo There </title></head>
<body>
<h2> here are your results </h2>
<?php
    if ( !isset( $_POST['email'] ) ) {
        print(" Dude (or dudette) you gotta give me something");
        print ( '<a href="intro_1_16.html"> Back </a>');
        exit(1);
    }
    if ( empty( $_REQUEST['email'] ) ) {
        print(" <br /> It is empty ");
        print ( '<a href="intro_1_16.html"> Back </a>');
        exit(1);

    }
$email = $_REQUEST['email'];
    print("<span style=color:red> ");
    print( $email );
    print("</span>");
?>
<h2> Hello there this is html </h2>
<a href="intro_1_16.html"> Back </a>
</body>
</html>
