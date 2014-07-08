<?

include "teechio-php-master/Material.php";

$config = parse_ini_file('teechio-php-master/config.ini');

Unirest::defaultHeader("Teech-Application-Id", $config['appkey']);
Unirest::defaultHeader("Teech-REST-API-Key", $config['apikey']);

$response = Unirest::get('http://api.teech.io/materials?query={"topic": "solution"}');
$c= $response->body; 


$numbers = array();
foreach($c[0]->sudoku as $key => $val){
   $numbers[$key]=$val;
}

$v = true;

$arrayn = array();

for($i=1;$i<10;$i++){
	for($k=1;$k<10;$k++){
		if(($numbers[$i."-".$k])==($_POST[$i.":".$k]) && $v==true){
			$v = true;
		}else{
			$v = false;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sudoku - Powered by Teech.io</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">

  a:link {
    COLOR: #fff;
  }
  a:visited {
    COLOR: #fff;
  }
  a:hover {
    COLOR: #fff;
  }
  a:active {
    COLOR: #fff;
  }

  body{
      background: #354b72;
      color: #fff }

  </style>
</head>
<body>
 <div class="row">

<?
if($v){
?>
	<div class="container-fluid" align="center">
		<br></br>
  		<H1>Well done!</H1>
  		<img src="certificate.png" height="350" width="350">
  		<br></br>
  		<p><h4><a href="http://www.teech.io>">Sudoku - Powered by Teech.io</a></h4></p>
	</div>
<?
}else{
?>
	<div class="container-fluid" align="center">
		<br></br>
  		<H1>Error!</H1>
  		<img src="controller.png" height="350" width="350"></img>
  		<p><a href="index.php" class="btn btn-warning btn-lg">Try Again</a></p>
  		<br></br>
  		<p><h4><a href="http://www.teech.io>">Sudoku - Powered by Teech.io</a></h4></p>
	</div>
<?
}
?>
</div>
</body>