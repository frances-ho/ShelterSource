<html>
	<head>
	</head
	<body>
	<?php
	
	 $db=mysqli_connect("localhost","root", "","mydata");
 if(mysqli_connect_errno()){
	 print "connect failed " . mysqli_connect_error();
	 exit();	 
 }
	$value_1 = $_POST["county"];
	$value_2 = $_POST["veteran"];
	$value_3 = $_POST["diss"];
	$value_4 = $_POST["shelter"];
	
	
	// getting values from HTML form
	$queryStr ="SELECT name, location FROM location, county where County='$value_1' and county.shetlerID=location.shelterID";
	$queryStr2 ="select name, location from location, veteran where veteran.vet_ans='$value_2' and veteran.shetlerID= location.shelterID";
	$queryStr3 = "select name, location from location, dissability where dissability.diss_ans='$value_3'and dissability.shetlerID=location.shelterID";
	// Queries
	$query=mysqli_query($db, $queryStr);
	$query2=mysqli_query($db, $queryStr2);
	$query3=mysqli_query($db, $queryStr3);
	
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////// table #1
	if(!($query)){
		print("error - the query could not be executed" . mysqli_error());
		exit;
	}
	// numbers of rows and columns
	$num_rows= mysqli_num_rows($query);
	// Display the results in a table
	
	print "<table><caption><h2>Query results for county </h2></caption>";
	print "<tr align = 'center'>";
	
	// if there are rows in the result, put them in a HTML table
	if ( $num_rows > 0 ){
		$row =  mysqli_fetch_assoc($query);
		$num_fields=mysqli_num_fields($query);
		// produce the column labes
		$key=array_keys($row);
		for($index = 0; $index< $num_fields; $index++){
			print "<th>" . $key[$index] . "</th>";
			
		}
		print "</tr>";
		
		// ouput the values of the fields in the rows
		for($row_num=0; $index<$num_rows;$index++){
			print "<tr>";
			$values = is_array($row)? array_values($row): array(); 
			//$values=array_values($row);
			for($indexx=0 ; $indexx < $num_fields ; $indexx++){
				$value=$values[$indexx];
				print "<td>" . $value . "</td>";
			}
			print "</tr>";
			$row=mysqli_fetch_assoc($query);
			
		}
	}else{
		print "there are no such rows in the table <br />";
	}
	print "</table>";
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//////// TABLE 2//////////////////////////////////
	if(!($query2)){
		print("error - the query could not be executed" . mysqli_error());
		exit;
	}
	// numbers of rows and columns
	$num_rows= mysqli_num_rows($query2);
	// Display the results in a table
	print($num_rows);
	
	print "<table><caption><h2>Query results for veterans </h2></caption>";
	print "<tr align = 'center'>";
	
	// if there are rows in the result, put them in a HTML table
	if ( $num_rows > 0 ){
		$row =  mysqli_fetch_assoc($query2);
		$num_fields=mysqli_num_fields($query2);
		// produce the column labels
		$key=array_keys($row);
		for($index = 0; $index< $num_fields; $index++){
			print "<th>" . $key[$index] . "</th>";
			
		}
		print "</tr>";
		
		// ouput the values of the fields in the rows
		for($row_num=0; $index<$num_rows;$index++){
			print "<tr>";
			$values = is_array($row)? array_values($row): array(); 
			//$values=array_values($row);
			for($indexx=0 ; $indexx < $num_fields ; $indexx++){
				$value=$values[$indexx];
				print "<td>" . $value . "</td>";
			}
			print "</tr>";
			$row=mysqli_fetch_assoc($query2);
			
		}
	}else{
		print "there are no such rows in the table <br />";
	}
	print "</table>";
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////// table # 3
	if(!($query)){
		print("error - the query could not be executed" . mysqli_error());
		exit;
	}
	// numbers of rows and columns
	$num_rows= mysqli_num_rows($query3);
	// Display the results in a table
	
	print "<table><caption><h2>Query results for dissability </h2></caption>";
	print "<tr align = 'center'>";
	
	// if there are rows in the result, put them in a HTML table
	if ( $num_rows > 0 ){
		$row =  mysqli_fetch_assoc($query3);
		$num_fields=mysqli_num_fields($query3);
		// produce the column labes
		$key=array_keys($row);
		for($index = 0; $index< $num_fields; $index++){
			print "<th>" . $key[$index] . "</th>";
			
		}
		print "</tr>";
		
		// ouput the values of the fields in the rows
		for($row_num=0; $index<$num_rows;$index++){
			print "<tr>";
			$values = is_array($row)? array_values($row): array(); 
			//$values=array_values($row);
			for($indexx=0 ; $indexx < $num_fields ; $indexx++){
				$value=$values[$indexx];
				print "<td>" . $value . "</td>";
			}
			print "</tr>";
			$row=mysqli_fetch_assoc($query3);
			
		}
	}else{
		print "there are no such rows in the table <br />";
	}
	print "</table>";
	?>
	</body
</html>