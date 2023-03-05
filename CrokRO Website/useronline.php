<?php

#####################################
#  
#    Script By Latheesan - Owner of AsuraHosting
#
#####################################

/* eAthena SQL Database Config */

$host  = "177.54.156.114";
$user  = "cp_crokro_access";
$pass  = "VeZsPSpe77Bhuf8N";
$db    = "rag254";

#####################################
#  
#    DO NOT EDIT BELOW HERE
#
#####################################

$link = mysql_connect($host, $user, $pass) or die(mysql_error());
@mysql_select_db($db,$link);

$query = "SELECT COUNT(*) as total FROM `char` WHERE online = '1'";
$result = mysql_query($query,$link);
mysql_close($link);

$arr = mysql_fetch_array($result);
$usersonline = $arr["total"];

/* Do NOT Edit Above Here */

?>