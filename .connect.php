<?php
    require_once('.conf.php'); //all the table definition is in here

//connection
    $slink = mysql_connect(SERVER_SERVER, 
                           SERVER_USER, 
                           SERVER_PASS) or die(":" . mysql_error()); // connnect to server
    $link = mysql_select_db($db, $slink) or die("::" . mysql_error()); // connect to database
    
    function escape_data ($data) { 
        global $slink;
        if (ini_get('magic_quotes_gpc')) {
            $data = stripslashes($data);
        }
        return mysql_real_escape_string (trim ($data), $slink);
    }
?>
