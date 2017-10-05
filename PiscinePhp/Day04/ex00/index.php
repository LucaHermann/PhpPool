<?PHP

	session_start();
	if ($_GET[login] && $_GET[passwd])
	{
		$_SESSION[login] = $_GET[login];
		$_SESSION[passwd] = $_GET[passwd];
	}

?>
<html>
	<body>

	<form action=index.php method="GET">
		Login: <br />
		<input type="text" name="login" value="<?PHP echo $_SESSION[login]?>" /><br />
		Password: <br />
		<input type="password" name="passwd" value="<?PHP echo $_SESSION[passwd]?>" /><br />
		<br />
		<input type="submit" name="submit" value="OK">
	</form>
	</body>
</html>