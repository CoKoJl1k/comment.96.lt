<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>jQuery</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$(document).on("click","#add_comments",function () {
				var form=$("form[name='form']");
				form.css("display","block");
				$("#add_comments").replaceWith(form);
			});
			$(document).on("click","input[name='send']",function () {
				var comment=$("textarea[name='comment']").val ();
				alert("Подождите идёт загрузка коментариев...");
				$("<p>"+comment+"</p>").appendTo("#comments");
			});
		});
	</script>

</head>
<body>
<center>
<div id="comments">
	<p>Коментарий №1</p>
	<p>Коментарий №2</p>
	<p>Коментарий №3</p>
</div>
	<form name="form" action="#" method="post" id="form"  onsubmit="return false">
		<textarea id="textarea" name="comment" cols="40" rows="5"></textarea><br/>
		<input type="submit" name="send" value="Добавить коментарий" id="done">
	</form>

</center>
	

</body>
</html>