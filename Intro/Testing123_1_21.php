<?php
require_once ("bootstrap_header.html");
require_once ("course_CONFIG.php");
    ksort( $course );
?>
<form method="post" action="handleFormArray_1_21.php">
    <h3> Select your favorite CSC Core Course</h3>
    <select name="course[]" multiple size="3" >
        <?php
         foreach ( $course as $key => $value ){
            print "\n<option value='$key'> $key </option> ";
         }
        ?>

    </select>

   <input type="submit" value="Click me to start">
</form>
</body>
</html>

