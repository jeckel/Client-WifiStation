<?php

$url = "http://10.255.255.101/";

switch($_GET['action']) {
	case 'getA0' : 
		$content = file_get_contents($url . "pinA0");
		break;
	case 'set9High' :
		$content = file_get_contents($url . "pin9/HIGH");
		break;
	case 'set9Low' :
		$content = file_get_contents($url . "pin9/LOW");
		break;
}

?>
<html>
<head>
	<title>WifiStation controller</title>
</head>
<body>

<ul>
	<li><a href="?action=getA0">Get A0 value</a></li>
	<li><a href="?action=set9High">Set 9 to HIGH</a></li>
	<li><a href="?action=set9Low">Set 9 to LOW</a></li>
</ul>

<?php if (isset($content)) { ?>
<pre>
	<?php var_dump($content, json_decode($content)); ?>
</pre>
<?php } ?>
</body>