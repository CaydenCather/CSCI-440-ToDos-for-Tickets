<html>
	<head>
	<title>Query Parents from Database</title>

	<body>
	<!--	<p><a href = "http://todos-for-tickets.infinityfreeapp.com">Back to Home Page</a></p>
		<p><a href = "http://www.todos-for-tickets.infinityfreeapp.com/">Add/Delete in Database<a/></p>
-->
	<?

	@ $db = mysql_pconnect("sql205.epizy.com","epiz_33754659","0cFTPt8Qc9");

	if (!$db)
	{
		echo "ERROR: Could not connect to database.  Please try again later.";
		exit;
	}

	mysql_select_db("epiz_33754659_database1");

	$query = "select * from parent";

	$result = mysql_query($query); 
	$num_results = mysql_num_rows($result);

	echo "<p>Number of parents found: ".$num_results."</p>";
	for ($i=0; $i < $num_results; $i++)

	{
	$row = mysql_fetch_array($result);
	echo "<p>";
    
    echo "Parent ID: ";
	echo htmlspecialchars( stripslashes($row["parentid"]));
	echo "<br>";

    echo "Parent Username: ";
	echo htmlspecialchars( stripslashes($row["username"]));
	echo "<br>";

    echo "Parent Password: "; 
	echo htmlspecialchars( stripslashes($row["password"]));
	echo "<br>";

    echo "Parent First Name: ";
	echo htmlspecialchars( stripslashes($row["first_name"]));
	echo "<br>";

    echo "Parent Middle Name: ";
	echo htmlspecialchars( stripslashes($row["middle_name"]));
	echo "<br>";

    echo "Parent Last Name: ";
	echo htmlspecialchars( stripslashes($row["last_name"]));
	echo "<br>";

    echo "Parent Birthdate: ";
	echo htmlspecialchars( stripslashes($row["birthdate"]));
	echo "<br>";


//	echo htmlspecialchars( stripslashes($row["comments"]));
//	echo "<br>";
	echo "</p>";

	}
	?>

	</body>
</html>
