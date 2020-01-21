<?php
require_once("bootStrapHeader.html")
?>
<!-- ================ INICIA FORMULARIO DE LOGIN ============================================================== -->
<div class="container">
    <div class="row" style="margin-top:60px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <h2> Main Content Area </h2>
            <?php
               $email = $_REQUEST['email'] ;
               $pw = $_REQUEST['password'] ;
               print "<br /> Got Pass=$pw email=$email";
            ?>
        </div>
    </div>

</div>