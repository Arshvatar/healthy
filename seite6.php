<!DOCTYPE html>
<html>

<head>
    <title>Frage 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
<?php include 'header.php' ?>
<fieldset>
        <legend>An einem typischen Tag: Wie viele deiner
            Malzeiten oder Snacks enthalten
            Kohlenhydrate? </legend>
            <h1> Geben sie die Anzahl an</h1>
           
                <form action="seite7.php" id="form1" name="form1" method="POST" onsubmit="return validateQuestionMinimal()">
                <input type="number" name="textfeld" id="textinput" class="form-control" aria-label="Text input with checkbox">
                    
            <input type="submit" name="submit" id="submit" value="OK" />
         
        </form>
    
        <?php include 'sessionpost.php';

echo "Fragenummer" . $_SESSION['FrageNummer'];

?>
        
    </fieldset>
    

   
  </div>

<div>
    
</div>


<?php include 'footer.php' ?>





</body>
</html>