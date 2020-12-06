<!DOCTYPE html>
<html>
<head>
	<title>My Image Gallery</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/fe786c7701.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script language="JavaScript">

						function calculateBmi() {
						var weight = document.bmiForm.weight.value
						var height = document.bmiForm.height.value
						if(weight > 0 && height > 0){	
						var finalBmi = weight/(height/100*height/100)
						document.bmiForm.bmi.value = finalBmi
						if(finalBmi < 18.5){
						document.bmiForm.meaning.value = "Underweight"
						}
						if(finalBmi > 18.5 && finalBmi < 25){
						document.bmiForm.meaning.value = "Healthy"
						}
						if(finalBmi > 25){
						document.bmiForm.meaning.value = "Overweight"
						}
						}
						else{
						alert("INVALID DATA")
						}
						}

	</script>

</head>
<body style="background-color:#FFFF99;">
	<div class="container">
		<div class="jumbotron mt-2" id="div11" style="background-color:#FFFF99;">
		
		<h1 id="h11"><a href="index.php"> <span style="font-family: Lobster; color:#FFFF99; background-color:#FF00FF; ">My Image Gallery</span> </a></h1>
		</div>
		
		<div id="bdiv">
			<button type="button" class="btn btn-primary btn-lg" id="mov" onclick = "window.location.href='./movies.php';">Movies</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-primary btn-lg" id="car" onclick = "window.location.href='./cars.php';">Cars</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-primary btn-lg" id="pers" onclick = "window.location.href='./personalities.php';">Personalities</button>
			<br>
			<br>
			<img src="./smit_logo.jpeg" alt="" id = "LogoOfSmit">
		</div>

	

		<div id="calbmi">
			<h1 style="color : #DC143C ;font-family: Lobster;font-size: 40px"><center>Check your BMI</center></h1>
			<form name="bmiForm">
				<center>
					<table style="font-family: Lobster;" bgcolor="#DC143C" border="10" bordercolor="#FF6347" rules="none" cellspacing="0" cellpadding="4" style="color: #FF6347;" height="400" width="500">
						<tr>
						<td style="font-size: 25px;">Your Weight: <input type="text" name="weight" size="20"><br /></td>
						</tr>
						<tr><td style="font-size: 25px;">Your Height(cm): <input type="text" name="height" size="15"><br /></tr></td>
						<br>
						<tr><td style="font-size: 25px"><center><input type="button" value="Calculate BMI" onClick="calculateBmi()"><br /></center></td></tr>
						<br>
						<tr><td style="font-size: 25px">Your BMI: <input type="text" name="bmi" size="20"><br /></tr></td>
						<tr><td style="font-size: 25px"><center>Result <input type="text" name="meaning" size="30"><br /></center></td></tr>
						<tr><td style="font-size: 25px"><center><input type="reset" value="Reset" /></tr></td>
					</table>

			</form>


		</div>
		
	
<br>
  <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="margin-left: 280px; background-color:#CCCC00; color:#8B008B; text-align: center; padding: 50px; width: 500px;height: 200px; border-radius: 4% ">
      
      <h3 style="font-family: Lobster;">Name : Shaivye Singh</h3>
      <h3 style="font-family: Lobster;">Regn. No. : 201800545</h3>

      


    </div>
  </div>



</body>
</html>
