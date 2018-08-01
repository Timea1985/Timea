<?php
$version = "0.1";
$server_name = "localhost";
$user = "hanna_KB";
$pass = "KanbanBoard";
$database = "hanna_KanbanBoard";

$conn = mysqli_connect($server_name, $user, $pass, $database);
//$conn = mysqli_connect("localhost", "hanna_KB", "KanbanBoard", "hanna_KanbanBoard");

if(!$conn) {
	echo "Error: Unable to connect to MySQL." . "<br>";
	echo "Debugging Errorno: " . mysqli_connect_errno() . "<br>";
	echo "Debugging Error: " . mysqli_connect_error();
	exit;
}
echo "Success: A proper connection to MySQL was made!" .
"<h3>The KanbanBoard database is great.</h3>" .
"<br>";
echo "Host information: " . mysqli_get_host_info($conn);

mysqli_close($conn);
echo "<br>" . "Version of this file: " . $version;
?>
