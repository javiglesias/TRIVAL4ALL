	<!DOCTYPE html>
<meta charset="UTF-8">
<html ng-controller="Main">
<head>
	<title>¿Cuanto son 2+2?</title>

	<style type="text/css">
	html{
		height: 100%;
	}
	body{
		height: 100%;
		background: #0b0;
		margin: 0;
		padding: 0;
	}


	ol{    
		list-style-type: none;
		margin: 0;
		padding: 0;
		width: 100%;
	}
	li{
		height: 25%;
	}
	button{
		border: 0;
		border-top: 0.03in solid black;
		width: 100%;
		height: 100%;
		font-family: Arial;
		font-trans
        display: block;
        background: #ed1d1d;
        color: antiquewhite;
        font-family: Helvetica;
        //text-align: right;
        padding: 10px 25px 10px 20px;
        //margin: 7px -15px;
        
		font-size: 7vw;
        
        
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.4) 35px, rgba(255,255,255,.4) 150px);
        
        box-shadow: inset 25px 14px 149px -4px rgba(0,0,0,0.75),  5px 14px 49px -4px rgba(0,0,0,0.95);
    }
	button:hover{
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.5) 35px, rgba(255,255,255,.5) 150px);
	}
	button:active{
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.7) 35px, rgba(255,255,255,.7) 150px);
	}
	input{
		border: 0;
		border-top: 0.03in solid black;
		width: 100%;
		height: 100%;
		font-family: Arial;
		font-trans
        display: block;
        background: #ed1d1d;
        color: antiquewhite;
        font-family: Helvetica;
        //text-align: right;
        padding: 10px 25px 10px 20px;
        //margin: 7px -15px;
        
		font-size: 7vw;
        
        
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.4) 35px, rgba(255,255,255,.4) 150px);
        
        box-shadow: inset 25px 14px 149px -4px rgba(0,0,0,0.75),  5px 14px 49px -4px rgba(0,0,0,0.95);
    }
	input:hover{
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.5) 35px, rgba(255,255,255,.5) 150px);
	}
	input:active{
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.7) 35px, rgba(255,255,255,.7) 150px);
	}

	.r1{
		background: darkblue;
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.4) 35px, rgba(255,255,255,.4) 150px);
	}
	.r2{
		background: green;
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.4) 35px, rgba(255,255,255,.4) 150px);
	}
	.r3{
		background: blue;
        background-image: repeating-linear-gradient(40deg, transparent, transparent 75px, rgba(255, 255, 255, 0.4) 35px, rgba(255,255,255,.4) 150px);
	}

	h1{
		margin: 0 30px;

		text-align: center;;
    font-family: Helvetica, Arial, sans-serif;
		color: white;//rgb(231,231,231);
		text-shadow: 2px 2px 19px #eeeeee;
		height: 40%;
		padding: 0.02in;
		padding: 0;
		font-size: 10vw;
	}
	</style>
</head>
<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "TRIVIAL4ALL";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	if(isset($_SESSION))
	{
		if($_SESSION['contador'] <= 10)
		{
			$_SESSION['contador'] = $_SESSION['contador'] + 1;
		}
		else
		{
			$_SESSION['contador'] = 1;
		}
	}
	else
	{
		$_SESSION['contador'] = 1;
	}
	
	// Check connection
	//if(!$conn->connect_error) {
	    //die("Connection failed: " . $conn->connect_error);
	//}
	$conn->set_charset("UTF-8");
?>
<body>
<div style="height: 100%; margin: 0; padding: 0;">
<h1><?php
	//$discapacidad = $_SESSION['discapacidad'];
	//ECHO $_SESSION['contador'];
	$sql = "SELECT * FROM PREGUNTAS WHERE ID = '".$_SESSION['contador']."';";
	$consulta = mysqli_query($conn,$sql);
	$tupla = mysqli_fetch_assoc($consulta);
	//echo $consulta;
	//echo mysql_num_rows($consulta);
	echo $tupla['ENUNCIADO'];
	$id = $tupla['ID'];
	?></h1>

<form style="    height: 100%;" id="botones" action="">
<ol style="height: 60%">
	<li><input type="submit" class="r1" name="A" value=<?php echo $tupla['R1'] ?>></li>
	<li><input type="submit" class="r2" name="B" value=<?php echo $tupla['R2'] ?>></li>
	<li><input type="submit" class="r3" name="C" value=<?php echo $tupla['R3'] ?>></li>
	<li><input type="submit" class="r4" name="D" value=<?php echo $tupla['R4'] ?>></li>
</ol>
<?php
//echo substr($_SERVER['QUERY_STRING'], 0 ,1);

	$page = $_SERVER['PHP_SELF'];
	$sec = "10";
	//ECHO "papapa";
	//header("Refresh: $sec; url=$page");
	if(substr($_SERVER['QUERY_STRING'], 0 ,1) == 'A'){
		//responder($id,'A');
		echo "PATATA";
		$discapacidad = $_SESSION['discapacidad'];
		$sql2 = "INSERT INTO RESPUESTAS (ID, DISCAPACIDAD, RESPUESTA, HORA) VALUES ('$id', '$discapacidad', 'A','NULL');";
		//echo $id;
		$consulta2 = mysqli_query($conn,$sql2);
	}else if(substr($_SERVER['QUERY_STRING'], 0 ,1) == 'B'){
		//responder($id,'B');
		//header("Refresh:0; url=$page");
		$discapacidad = $_SESSION['discapacidad'];
		$sql2 = "INSERT INTO RESPUESTAS (ID, DISCAPACIDAD, RESPUESTA, HORA) VALUES ('$id', '$discapacidad', 'A','NULL');";
	}else if(substr($_SERVER['QUERY_STRING'], 0 ,1) == 'C'){
		//echo 'C';
		//responder($id,'C');
		$discapacidad = $_SESSION['discapacidad'];
		$sql2 = "INSERT INTO RESPUESTAS (ID, DISCAPACIDAD, RESPUESTA, HORA) VALUES ('$id', '$discapacidad', 'A','NULL');";
	}else if(substr($_SERVER['QUERY_STRING'], 0 ,1) == 'D'){
		//echo 'D';
		//responder($id,'D');
		$discapacidad = $_SESSION['discapacidad'];
		$sql2 = "INSERT INTO RESPUESTAS (ID, DISCAPACIDAD, RESPUESTA, HORA) VALUES ('$id', '$discapacidad', 'A','NULL');";
	}
	/*function responder($id,$respuesta){
		//echo "PATATA";
	//insert into respuestas:
		//header("Refresh:0; url=$page");
	}*/
?>
</form>	
</div>
</body>
</html>
