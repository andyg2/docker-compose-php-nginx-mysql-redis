<?php


// Redis
$redis = new Redis();
$redis->connect('redis', 6379);
echo "Connection to server sucessfully";
$redis->set("tutorial-name", "Redis tutorial");
echo "Stored string in redis:: " . $redis->get("tutorial-name");


// MySQL

$servername = 'mysql';
$username = 'root';
$password = 'root';

$mysql = new MySQLi($servername, $username, $password, 'wordpress');
if ($mysql->connect_errno) {
  echo "Errno: " . $mysql->connect_errno . "\n";
}
$result = $mysql->query("show databases");
print_r($result);
