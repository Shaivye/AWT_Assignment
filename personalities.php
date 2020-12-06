<!DOCTYPE html>
<html>
<head>
	<title>Personalities Gallery</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style.css">
	
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

	
		<div id="famp2" style="background-color:#D2691E;">
		<br>
		<h2 id="h22" style="font-family: Lobster">My Favourite Personalities</h2>

			<?php
			$pic = array('https://buddybits.com/wp-content/uploads/2016/06/Bill-Gates-10-Famous-Personalities-who-are-Introverts.jpg',
						'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ96WmpdtZolZzmgHWSBnPkIMGfzHnjhbVRlQ&usqp=CAU',
						'https://designpress-10674.kxcdn.com/wp-content/uploads/2012/07/steve-jobs.jpg',
						'https://curiosityhuman.com/wp-content/uploads/2015/10/Mark_Zuckerberg_at_the_37th_G8_Summit_in_Deauville_018_square.jpg',
						'https://gotest.pk/wp-content/uploads/2015/09/NM.jpg',
						'https://media.proprofs.com/images/QM/user_images/2503852/1562151312.jpg',
						'https://static.toiimg.com/photo/msid-75805310/75805310.jpg?135092',
						'https://1.bp.blogspot.com/-WvZX5bqTkIc/XTK0VUJLUoI/AAAAAAAAATo/ouC-etCikB8pdEHOmvxEKYFUyxUnAIgdgCLcBGAs/s1600/download.jpg',
						'https://lh3.googleusercontent.com/proxy/3tMFHuOHEqo02AcaiOsgCzglh0JZRrgDu8saVAgNmCspsSlDz81gMI52t9qFR3yvxoV2hnQZInGzf7u_UR-mJ9QWvumLmhzPHsNdzjbd3wmSBJsxda5tQ3cTB4eT',
						'https://assets-news-bcdn-ll.dailyhunt.in/cmd/resize/400x400_60/fetchdata12/images/08/53/08/08530880a17e2302c001ffc0af99b3f4.jpg'
					);
			shuffle($pic);
			$checker = array();
			?>


			<ul>
				<?php
				for( $i = 0; $i < 10; $i++)
				echo "<li style=\"display: inline-block; margin-right:10px; margin-bottom:10px; border: 3px solid #ddd;
				border-radius: 4px; \">
										<img src=\"$pic[$i]\" width=\"300\" height=\"200\">
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
