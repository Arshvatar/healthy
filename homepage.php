<!DOCTYPE html>
<html>

<head>
    <title>Umfrage Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css' href='style.css'> 
</head>

<body>
    
<?php include 'header.php' ?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Seite 1</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<fieldset>
	<legend>Umfrage zu "Ernährung, Fitness & Sport" </legend>
	<form action="?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
		

        <div class="mx-0 w-100">
            <div class="text-center">
             
                          
            </div>
            <label for="customRange3" class="form-label"><h1>Ready?</h1></label>
            
            
             
            </div>

            
		<a href="index.php" class="losgehts" value="Los gehts!"> LOS GEHTS</a>
	</form>


	
	</form>
</fieldset>



    
  </div>
</body>

</html>
<?php include 'footer.php';
unset($_POST);
    $_POST = array();
    session_unset();?>
