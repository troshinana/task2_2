<Html>
<meta charset=Фutf-8Ф>
<Title> </Title>
</Head>
<Body>
<h1> ¬ведите значени€ катетов </h1>
<p><img src="picture.jpg" width="241" height="239" alt="" /> </p>
<form method="GET">
<input type="text" name="cathet1" value="">
<input type="text" name="cathet2" value="">
<input type="submit" name="compute" value="¬ычеслить">
</form>
<?php
function pythagoras($cathet1,$cathet2) {
return(sqrt(pow(intval($cathet1),2)+pow(intval($cathet2),2)));
}
if (isset($_GET['cathet1']) && isset($_GET['cathet2'])) {
	if ((!(is_numeric($_GET['cathet1'])))||(!(is_numeric($_GET['cathet2'])))) {
	echo '«начение катета может быть только числом!';
	} elseif (($_GET['cathet1']<0)||($_GET['cathet2']<0)) {
		echo "«начение катета должно быть не отрицательным!";} else {
		echo number_format((pythagoras($_GET['cathet1'],$_GET['cathet2'])),2,',','');
		}
}


?>
</body>
</html>
