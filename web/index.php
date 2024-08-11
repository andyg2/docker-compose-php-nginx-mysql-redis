<?php


// Redis
$redis = new Redis();
$redis->connect('redis', 6379);
echo "Connection to server sucessfully" . "<br>" . PHP_EOL;
$redis->set("tutorial-name", "Redis tutorial");
echo "Stored string in redis:: " . $redis->get("tutorial-name");

$servername = 'mysql';
$username = 'root';
$password = 'root';
$port = 3306;

// Connect to the new database
$mysql = new MySQLi($servername, $username, $password, 'test', $port);

// Check connection
if ($mysql->connect_errno) {
  echo '<h3>First connect to <a href="http://localhost:8080/">PHPMyAdmin</a> (root:root) and create the database `test`</h3>';
  die("Connection to 'test' failed: " . $mysql->connect_error);
}

// Show databases
$result = $mysql->query("SHOW DATABASES");

if ($result) {
  while ($row = $result->fetch_assoc()) {
    echo $row['Database'] . "<br>" . PHP_EOL;
  }
} else {
  echo "Error fetching databases: " . $mysql->error . "<br>" . PHP_EOL;
}

// Close connection
$mysql->close();
