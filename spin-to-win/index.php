<html>
<head>
<style type="text/css">
	body {
		font-family: sans-serif;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		text-align: center;
	}
	h1 {
		text-align: center;
		font-size: 200px;
		font-size: 40vw;
		line-height: 1em;
		margin: 0;
	}
	a.spin-button {
		display: inline-block;
		background: red;
		padding: 20px;
		border-radius: 10px;
		color: white;
		text-decoration: none;
		font-size: 36px;
		font-size: 5vw;
		margin-bottom: 20px;
	}
	a.spin-button:hover {
		background: maroon;
	}
</style>
</head>

<body>
	<?php

	$numberarray = ["+0","+1","+2","-1","-2"];
	$random = rand(0, 4);

	 ?>

	 <div class="wrapper">
		 <h1><?php echo $numberarray[$random]; ?></h1>
		 <a class="spin-button" href="#" onClick="(function(){
		    location.reload();
		    return false;
		})();">SPIN!</a>
	</div>
	<a href="gameboard.pdf" target="_blank">Download game board</a>
</body>

</html>