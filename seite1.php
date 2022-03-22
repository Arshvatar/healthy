<!DOCTYPE html>
<html>

<head>
    <title>Frage 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
<?php include 'header.php' ?>

<fieldset>
	<legend>Nimmst du Nahrungsergänzungsmittel? </legend>
	<form action="seite3.php" id="form1" name="form1" method="POST">
		<label>
			<input type="radio" name="radio" value="Ja" id="Poll_0" />
			Ja
		 </label>
		<label>
			<input type="radio" name="radio" value="Nein" id="Poll_1" />
			Nein<br><br>

			<input type="submit" name="submit" id="submit" value="OK" />

            <?php include 'sessionpost.php' ;
			 echo "Fragenummer" . $_SESSION['FrageNummer'];
			
			?>
	</form>

	

</fieldset>
    
<?php echo "Fragenummer" . $_SESSION['FrageNummer'];



?>
    
  


    
</div>


<?php include 'footer.php' ?>





</body>
</html>