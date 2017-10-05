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

	if ($_POST[login] || $_POST[oldpw] || $_POST[newpw])
	{
		if ($_POST[submit] !== "OK" || !$_POST[login] || !$_POST[oldpw] ||
			!$_POST[newpw] || !file_exists("../ex01/private"){
			echo "ERROR\n";
			exit;
		}
		
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";

?>