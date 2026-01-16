<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { /*check kung na post ang form*/

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','users');

if ($conn -> $conn_error){

die('Login Failed' .$conn->connection_error);
exit;
}

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' "
/*Prepared statement para ddili na ma conn check unlike sa akong previous approach*/
$result = $conn_query($sql)

if = $result->num_rows > 0 {
    header("Location: secret/dashboard.html");
    exit();
}
else{
    $error_message = "Invalid credentials";
}
$conn->close();

}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css" >
<title>Admin Login | Enter your Credentials</title>
</head>

<div class="adminpage">

<h1>Admin Login</h1>
<form method="POST" action="" name="adminlog" id="adminlog">
<input type="text" id="username" name="username" placeholder="Enter username">
<input type="password" id="password" name="password" placeholder="Password" required>
<button type="submit" id="adminsubmit" name="adminsubmit" value="adminsubmit">Login</button>
</form>

<?php if (!empty($error_msg)): ?>
        <div class="error">
            <?php echo $error_msg; ?>
        </div>
<?php endif; ?>

</div>

</html>