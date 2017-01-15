<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];


	
		$con = mysqli_connect("localhost", "u281279729_p", "111111", "u281279729_p");
		mysqli_select_db($con,"users");

		$query = mysqli_query($con, "SELECT `id` FROM `users` WHERE `username`='$user'");

		$num = mysqli_num_rows($query);

		if(!$user & !$pass)
		{
			echo "Заполните все поля.";
		}
		else
			if(!$user)
			{
				echo "Введите имя.";
			}
			else
				if ($num == 1) 
				{
					echo ("<script language=javascript>window.alert('Теперь вы можете оставить коментарий.')</script>");
					echo '<script>location.replace("coment.php");</script>';
				}
				else
					if(!$pass)
					{
						echo "Введите пароль.";
					}
					else
					{	

						//$encrypted = sha(md5($pass));

						mysqli_query($con, "INSERT INTO `users` (`username`, `password`) VALUES ('$user', '$pass')");
						$id = mysqli_insert_id($con);

							echo "Вы успешно зарегестрировались.";

							echo ("<script language=javascript>window.alert('Вы успешно зарегестрировались.')</script>");

							echo '<script>location.replace("coment.php");</script>'; 

					}
?>

