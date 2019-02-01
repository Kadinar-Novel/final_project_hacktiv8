<?php
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "db_apps";
    
	$dblink = new mysqli($host, $user, $password, $database);

	//Check connection was successful
	  if ($dblink->connect_errno) {
		 printf("Failed to connect to database");
		 exit();
	  }

	//Fetch 3 rows from actor table
	  $result = $dblink->query("select * from data_gag where kategori='funny'");

	//Initialize array variable
	  $dbdata = array();

	//Fetch into associative array
	  while ( $row = $result->fetch_assoc())  {
		$dbdata[]=$row;
	  }

	//Print array in JSON format
	 echo json_encode($dbdata);

?>

