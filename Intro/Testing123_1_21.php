<?php
require_once ("bootstrap_header.html");
require_once ("course_CONFIG.php");
ksort( $course );
?>
<form method="post" action="handleFormArray_mult_1_21.php">
    <h3> Select your favorite CSC Core Course</h3>
    <select name="course[]" multiple size="3" >
        <?php
         foreach ( $course as $key => $value ){
            print "\n<option value='$key'> $key </option> ";
         }
        ?>

    </select>

    <h3> MAy we contact yu? </h3>
    <input type="radio" name="r1" value="Y">Y
    <input type="radio" name="r1" value="N">N
   <input type="submit" value="Click me to start">
</form>
</body>
</html>

