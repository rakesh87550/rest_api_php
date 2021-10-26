<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
	
    $conn = mysqli_connect("localhost","root","","online_food") or die("Connection failed");
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
	$a=[];
    if(mysqli_num_rows($result)>0)
    {
        $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
		#print_r($output);
		foreach($output as $r)
		{
			array_push($a,array(
			  "id" => $r['id'],
              "name" => $r['name'],
              "email" => $r['email'],
              "mobile"=> $r['mobile'],
              "password" => $r['password']			  
			
			));
		}
        
    }
	echo json_encode($a);
?>