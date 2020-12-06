<!DOCTYPE html>
<html>
<head>
	<title>Movies Gallery</title>
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
</head>
<body style="background-color:#FFFF99;">
	<div class="container">
		<div class="jumbotron mt-2" id="div11" style="background-color:#FFFF99;">
		
		<h1 id="h11"><a href="index.php"> <span style="font-family: Lobster; color:#FF00FF; background-color:#FFFF99; ">My Image Gallery</span> </a></h1>
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
					<table style="font-family: Lobster;"bgcolor="#DC143C" border="10" bordercolor="#FF6347"  rules="none" cellspacing="0" cellpadding="4" style="color: white;" height="400" width="500">
						<tr>
						<td style="font-size: 25px;">Your Weight: <input type="text" name="weight" size="20"><br /></td>
						</tr>
						<tr>
						<td style="font-size: 25px">Your Height(cm): <input type="text" name="height" size="15"><br /></td>
						</tr>
						<br>
						<tr><td style="font-size: 25px"><center><input type="button" value="Calculate BMI" onClick="calculateBmi()"><br /></tr></td>
						<br>
						<tr><td style="font-size: 25px">Your BMI: <input type="text" name="bmi" size="20"><br /></tr></td>
						<tr><td style="font-size: 25px; padding-left: 30px;"><center>Result</center> <input type="text" name="meaning" size="30"><br /></tr></td>
						<tr><td style="font-size: 25px"><center><input type="reset" value="Reset" /></tr></td>
					</table>

			</form>


		</div>


<div id="mov" style="background-color:#8B4513;">
<br>
<h2 id="h22" style="font-family: Lobster">My Favourite Movies</h2>

<?php
$pic = array('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTLo9r0cFi_-b0U2p0dnKKM4Ro7EwVy6tHj4JK4lpmnDAr4e9Z5',
             'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDrbXUJOF4rsdsQmqjcGYU7R5NgfG81XPb1XAtymcuYCejaCCj',
             'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQr8TLcGyFZmLsJSNZ3M_8CO2M9YbnucnpGTs6u2erH-SveV1O2',
             'https://upload.wikimedia.org/wikipedia/en/a/a2/The_Mummy_%282017%29.jpg',
             'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQZtbP0pqDwnAE-uSXKXzijGHB34QbH6XNRJeqDt7LiMj9qkjZV',
             'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQPpcKQ9eWZGxJe6eXyCW91eayLVm4KqruvJz3GP0F2T2w46yKZ',
             'https://i.pinimg.com/originals/07/45/8d/07458d79ac9c22a594beecab87f4e3b6.jpg',
             'https://m.media-amazon.com/images/M/MV5BMjA4NDI0MTIxNF5BMl5BanBnXkFtZTYwNTM0MzY2._V1_QL50_.jpg',
             'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRKTcTqELNNPpy-c6orc876-Yxo-_QKENBdIufLEZNlSjHQBj_i',
             'https://www.movienewsletters.net/photos/184127R1.jpg'
           );
shuffle($pic);
$checker = array();
?>

  <ul>
<?php
   for( $i = 0; $i < 10; $i++)
      echo "<li style=\"display: inline-block; margin-right:10px; margin-bottom:10px; border: 3px solid #ddd;
	  border-radius: 4px; \">
                         <img src=\"$pic[$i]\" width=\"300\" height=\"400\">
                       </li>";


?>
 </ul>
</div>


  <br>
   <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="margin-left: 280px; background-color:#CCCC00; color:#8B008B; text-align: center; padding: 50px; width: 500px;height: 200px; border-radius: 4% ">
      
      <h3 style="font-family: Lobster;">Name : Shaivye Singh</h3>
      <h3 style="font-family: Lobster;">Regn. No. : 201800545</h3>


    </div>
  </div>


	<script type="text/javascript" src="gallery.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
