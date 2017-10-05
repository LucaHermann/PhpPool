<?PHP

	function login_exist($login)
	{
		if (!file_exists("./private/passwd") || !($content = file_get_contents("private/passwd")))
			return (1);
		$tab = explode("\n", $content);
		foreach ($tab as $value)
		{
			$tmp = unserialize($value);
			if ($tmp[login] === $login)
				return (0);
		}
		return (1);
	}

	header("location:index.html");

	if ($_POST[login] || $_POST[passwd])
	{
		if ($_POST[submit] !== "OK" || !$_POST[login] || !$_POST[passwd]){
			echo "ERROR\n";
			exit;
		}
		if (!file_exists("private"))
			mkdir("private");
		if (login_exist($_POST[login]))
		{
			$_POST[passwd] = hash("sha512", $_POST[passwd]);
			unset($_POST[submit]);
			$serialize = serialize($_POST);
			file_put_contents("./private/passwd", $serialize."\n", FILE_APPEND);
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>