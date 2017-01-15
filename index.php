<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Форма регистрации</title>
	<!--  <script src="jquery-3.1.1"></script> -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="register.js"></script>
</head>
<body> 	
<div style="width: 200px; margin:auto;">
	<h2>Форма регистрации</h2>
	
	<p>
		<div id="register_output"></div>
	</p>
	<p>
		<strong>Имя пользователя</strong>
	</p>
	<p>
		<input type="text"  placeholder="Username" id="username">
	</p>
	<p>
		<strong>Пароль</strong>
	</p>
	<p>
		<input type="password" id="password">
	</p>
	<p>
		<button id="register">Зарегестрироваться</button>
	</p>

</div>


</body>
</html>