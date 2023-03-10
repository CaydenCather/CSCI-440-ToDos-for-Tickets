<?php
@ $db = mysql_pconnect("sql205.epizy.com","epiz_33754659","0cFTPt8Qc9");

if (!$db)
{
    echo "ERROR: Could not connect to database. Please try again later.";
    exit;
}

mysql_select_db("epiz_33754659_database1");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM parent WHERE username = '$username' AND password = '$password'";
    $result = mysql_query($query);
    $num_results = mysql_num_rows($result);

    if ($num_results == 1) {
        // Redirect to the home page if the user exists in the database
        header("Location: home.php");
        exit;
    } else {
        // Display an error message if the username or password is incorrect
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>

<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php if(isset($error_message)) { echo "<p>" . $error_message . "</p>"; } ?>
</body>
</html>
