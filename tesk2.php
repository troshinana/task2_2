<Html>
<meta charset=�utf-8�>
<Title> </Title>
</Head>
<Body>
<h1> ������� �������� �������, ����� ��������� ���������� </h1>
<p><img src="http://egemaximum.ru/wp-content/uploads/2013/05/901.jpg" width="241" height="239" alt="" /> </p>
<form method="GET">
����� ������ � = <input type="text" name="cathet1" value="<?php 
		if (isset ($_GET['cathet1'])) {
			echo $_GET['cathet1'];
		}
	        ?>">
����� ������ b = <input type="text" name="cathet2" value="<?php 
		if (isset ($_GET['cathet2'])) {
			echo $_GET['cathet2'];
		}
			?>">
<input type="submit" name="compute" value="���������">
</form>
<?php
function pythagoras($cathet1,$cathet2) {
return(sqrt(pow(intval($cathet1),2)+pow(intval($cathet2),2)));
}
if (isset($_GET['cathet1']) && isset($_GET['cathet2'])) {
	if ((!(is_numeric($_GET['cathet1'])))||(!(is_numeric($_GET['cathet2'])))) {
	echo '�������� ������ ����� ���� ������ ������!';
	} elseif (($_GET['cathet1']<0)||($_GET['cathet2']<0)) {
		echo "�������� ������ ������ ���� �� �������������!";} else {
		echo number_format((pythagoras($_GET['cathet1'],$_GET['cathet2'])),2,',','');
		}
}


?>
</body>
</html>
