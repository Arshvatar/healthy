<!DOCTYPE html>
<html>

<head>
    <title>Frage 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <script src="validation.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
<?php include 'header.php' ?>


<fieldset>
	<legend>Wie wichtig ist köperliche Aktivität für
dich? </legend>
	<form action="seite4.php" id="form1" name="form1" method="POST" onsubmit="return validateQuestion('slider', '')">
		

        <div class="mx-0 w-100">
            <div class="text-center">
             
                          
            </div>
            <label for="customRange3" class="form-label"><h1>Überhaupt nicht wichtig--Sehr Wichtig</h1></label>
            
            
            
              <input type="range" name="slider"  id="slider" min="0" max="6" step="1" onchange="sliderChanged()";/>
              <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="sliderval">
              <p id="validation-warning"></p>
            </div><br>
		<input type="submit" name="submit" id="submit" value="Weiter" />
<br><br>


<?php include 'sessionpost.php';

echo "Fragenummer" . $_SESSION['FrageNummer'];

?>
    
	</form>




    
</fieldset>
  </div>

<div>
</div>


<?php include 'footer.php' ?>





</body>
</html>