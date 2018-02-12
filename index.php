<!DOCTYPE html>
<html>
<head>
	<title>Like</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<style>
.likebox{
	position: relative;
	height: auto;
	background: #e5e5e5;
	width: 20%;
	margin: 0px auto;
	padding: 0.5px;
	box-shadow: 1px 1px 1px rgba(0,0,0,.50);
}

.like{
	background-image: url(img/1.png);
	height: 40px;
	width: 40px;
	position: relative;
	background-size: cover;
	top: 10px;
	left: 10px;
	transition: 0.3s;
	cursor: pointer;
}

.likebox p{
	padding: 10px;
	font-size: 22px;
	transition: 0.3s;
}
</style>
<body>
<div class="likebox">
<div class="like" id="like"></div>
<p id="voce">Nenhuma curtida</p>
</div>
</body>

<script type="text/javascript">
	var like = document.getElementById('like');
	 $('#like').click(function(){
          like.style = "background-image: url(img/2.png);";
          $("#voce").text("Você curtiu isso");
       });
</script>

</html>