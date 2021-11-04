<?php
 $db = mysqli_connect('10.0.0.127', 'admin', 'admin@Nicken5') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'erp3' ) or die(mysqli_error($db));
?>