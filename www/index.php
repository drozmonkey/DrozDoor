

<p>


<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <title></title>
  
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>

<body>

<table align="center" cellpadding="25"><tr><td>
	<form method="post" action="javascript:callA()">
		<input type="submit" class="classname" value="OPEN A" />
	</form>
</td><td>
	<form method="post" action="javascript:callB()">
		<input type="submit" class="classname" value="OPEN B" />
	</form>
</td><td>
	<form method="post" action="javascript:callC()">
		<input type="submit" class="classname" value="OPEN C" />
	</form>
</td></tr></table>

<div id="garageHolder" class=""></div>

<script type="text/javascript">

var theDoor = "<?= $which_door; ?>";
$('#garageHolder').attr('class', '');
switch(theDoor)
{
	case 'a' :
		$('#garageHolder').addClass('open a')
	break;
	
	case 'b' :
		$('#garageHolder').addClass('open b')
	break;

	case 'c' :
		$('#garageHolder').addClass('open c')
	break;
}
 
function callA()
{
	$.ajax({
		url: 'doorA.php',
		success: loadDataSuccess,
		error : loadError
	});
}

function callB()
{
	$.ajax({
		url: 'doorB.php',
		success: loadDataSuccess,
		error : loadError
	});
	
}

function callC()
{
	$.ajax({
		url: 'doorC.php',
		success: loadDataSuccess,
		error : loadError
	});
	
}
function loadError(jqXHR, textStatus, errorThrown)
{
	loadDataError(errorThrown);
}

function loadDataError(error)
{
	console.log('Load Error : ' + error);
}

function loadDataSuccess(data)
{
	// Confirm the door was closed
	//alert(data);
	
	// Refresh the page (clears headers)
	//location.reload();
	location.href = '?door='+data;
}
</script>
</body>
</html>


</p>
