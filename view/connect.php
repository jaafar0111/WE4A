<?php
    require("./SQLConn.php");
    require("./variables.php");

    global $sQLConn;
    $sQLConn = new SQLconn($password, $host, $username, $db);
    $sQLConn->connect();
?>