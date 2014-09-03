<head>
	<title>Ninja Gold</title>

<style>
*{
	padding: 0;
	margin: 0;
}
h1{
	font-family: arial, sans-serif;
}
h4{
	font-family: arial, sans-serif;
	text-align: center;
	font-size: 30px;
	margin-top: 15px;
}
p{
	text-align: center;
	font-family: arial, sans-serif;
	margin-top: 30px;
	margin-bottom: 30px;
}
.container{
	border: 1px solid black;
	width: 900px;
	min-height: 700px;
	margin: 0 auto;
}
.yourGold{
	width: 169px;
	height: 70px;
	display: inline-block;
	vertical-align: top;
}
.topleftbox{
	width: 850px;
	height: 90px;
	padding: 10px;
	margin-left: 10px;
	margin-top: 10px;
	display: inline-block;
	vertical-align: top;
}
.scorebox{
	width: 80px;
	height: 20px;
	border: 1px solid black;
	padding: 10px;
	font-family: arial, sans-serif;
	font-size: 20px;
	color: red;
	font-weight: bold;
	display: inline-block;
	vertical-align: top;
}

.box1{
	border: 1px solid black;
	width: 190px;
	height: 190px;
	padding: 5px;
	margin-left: 15px;
	display: inline-block;
	vertical-align: top;
}
.button{
	width: 120px;
	font-size: 30px;
	display: inline-block;
	vertical-align: top;
	margin-left: auto;
	margin-right: auto;
}
.buttonholder{
	width: 160px;
	height: 30px;
	padding: 10px;
	margin-left: 25px;
}
.headerA{
	width: 105px;
	height: 20px;
}
.textarea{
	width: 850px;
	height: 150px;
	margin-left: 17px;
	font-family: arial, sans-serif;
	font-size: 22px;
	text-align: left;
	overflow-y: scroll;
	padding: 10px;
	border: 1px solid black;
}
.reset1{
	width: 120px;
	height: 70px;
	margin-left: 560px;
	display: inline-block;
	vertical-align: top;
	font-family: arial, sans-serif;
	font-size: 16px;
	color: red;
}
</style>
</head>

<body>
	<div class="container">

		<div class="topleftbox">
			<div class="yourGold">
				<h1>Your Gold:</h1>
			</div>
		<div class="scorebox">

<!-- this is what we print inside the gold score box at top. 'gold' comes from the 'process_money' page, where in our switch statement, we set the random integer to a variable cold $gold -->
		<?php 
			echo $this->session->userdata('gold'); 
		?>

		<form action='/process_money' method='post'>
			<input class="reset1" name='reset' type="submit" value="Start Game Over">
			</input>
		</form>
			</div>
		</div>

<!-- ____________________________________________ -->

	<div class="box1"> 
		<h4>Farm</h4>
		<p>(earns 10-20 golds)</p>
		<form action='/process_money' method='post'>
			<div class="buttonholder">
				<input class="button" type='submit' value='Find Gold!'>
				<input type='hidden' name='building' value='farm'>
			</div>
		</form>
	</div>

<!-- ____________________________________________ -->

	<div class="box1"> 
		<h4>Cave</h4>
		<p>(earns 5-10 golds)</p>
		<form action='/process_money' method='post'>
			<div class="buttonholder">
				<input class="button" type='submit' value='Find Gold!'>
				<input type='hidden' name='building' value='cave'>
			</div>
		</form>
	</div>

<!-- ____________________________________________ -->
	<div class="box1"> 
		<h4>House</h4>
		<p>(earns 2-5 golds)</p>
		<form action='/process_money' method='post'>
			<div class="buttonholder">
				<input class="button" type='submit' value='Find Gold!'>
				<input type='hidden' name='building' value='house'>
			</div>
		</form>
	</div>


<!-- ____________________________________________ -->

	<div class="box1"> 
		<h4>Casino</h4>
		<p>(earns/takes 0-20 golds)</p>
		<form action='/process_money' method='post'>
			<div class="buttonholder">
				<input class="button" type='submit' value='Find Gold!'>
				<input type='hidden' name='building' value='casino'>
			</div>
		</form>
	</div>

<!-- ____________________________________________ -->

	<div class="headerA"><p>Activities:</p></div>
	<div class="activities">
		<div class="textarea" name="activities">
		<?php
			$loopVariable = $this->session->userdata('activities');
			for ($i=count($loopVariable)-1; $i>= 0; $i--){
				echo $loopVariable[$i].'<br>';
			}
		?>
<!-- this above says we are setting the userdata('adtivities')session to a variable called $loopVariable and then run a for loop that counts thru the session userdata('activities') starting at minus 1. Then if the index in loop is greater than or equal to 0, increment (rather, decrement) the count by -1.  -->
		</div>
	</div>
</div>
</body>
</html>