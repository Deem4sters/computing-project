<?php
require_once 'core/init.php';
//echo Config::get('mysql/host'); // '127.0.0.1'
//DB::getInstance()->query("SELECT username FROM users");
$user = DB::getInstance()->get('users', array('username', '=','alex' ));
if(!$user->count()){
  echo 'No user';
}
else {
echo 'ok!'  ;
}
