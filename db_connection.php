define("SERVER",$server);
define("USER",$user);
define("PASS",$password);
define("DB",$db)

$connection = new mysqli(SERVER, USER, PASS, DB);
