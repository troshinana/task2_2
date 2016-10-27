<Html>
<meta charset=”utf-8”>
<Title> </Title>
</Head>
<Body>
<h1> Введите значения катетов </h1>
<p><img src="picture.jpg" width="241" height="239" alt="" /> </p>
<form method="GET">
<input type="text" name="cathet1" value="">
<input type="text" name="cathet2" value="">
<input type="submit" name="compute" value="Вычеслить">
</form>
<?php
function pythagoras($cathet1,$cathet2) {
return(sqrt(pow(intval($cathet1),2)+pow(intval($cathet2),2)));
}
if (isset($_GET['cathet1']) && isset($_GET['cathet2'])) {
	if ((!(is_numeric($_GET['cathet1'])))||(!(is_numeric($_GET['cathet2'])))) {
	echo 'Значение катета может быть только числом!';
	} elseif (($_GET['cathet1']<0)||($_GET['cathet2']<0)) {
		echo "Значение катета должно быть не отрицательным!";} else {
		echo number_format((pythagoras($_GET['cathet1'],$_GET['cathet2'])),2,',','');
		}
}


?>
</body>
</html>
