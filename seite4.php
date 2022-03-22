<!DOCTYPE html>
<html>

<head>
    <title>Frage 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="validation.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
<?php include 'header.php' ?>

<fieldset>

<legend>Welche zusätzliche körperliche Aktivität
            betreibst du am meisten? </legend>

            <form action="seite5.php" id="checkboxer" method="POST" name="checkboxfield" onsubmit="return validateQuestion('checker');">

              <div class="form-check">
                  <label class="form-check-label" for="check"> </label>
                      <input class="form-check-input" name="check[]" type="checkbox" value="Keine" id="checker">
                      Keine
               </div>


                <div class="form-check">
                  <label class="form-check-label" for="flexCheckChecked">
                      <input class="form-check-input" name="check[]" type="checkbox" value="Kraftheben" id="checker">
                    Kraftheben
                  </label>
                </div>


                <div class="form-check">
                  <label class="form-check-label" for="flexCheckDefault">
                      <input class="form-check-input"  name="check[]" type="checkbox" value="Gehen" id="checker">
                    Gehen
                  </label>
                </div>


                <div class="form-check">
                  <label class="form-check-label" for="flexCheckChecked">
                      <input class="form-check-input" name="check[]" type="checkbox" value="Wandern" id="checker">
                    Wandern
                  </label>
                </div>


                <div class="form-check">
                  <label class="form-check-label" for="flexCheckDefault">
                      <input class="form-check-input" name="check[]" type="checkbox" value="Joggen" id="checker">
                    Joggen
                  </label>
                </div>


                <div class="form-check">
                      <label class="form-check-label" for="flexCheckChecked">
                          <input class="form-check-input" name="check[]" type="checkbox" value="Rennen" id="checker">
                        Rennnen
                      </label>
                </div>


                  <div class="form-check">
                      <label class="form-check-label" for="flexCheckDefault">
                          <input class="form-check-input" name="check[]" type="checkbox" value="Schwimmen" id="checker">
                        Schwimmen
                      </label>
                </div>


                    <div class="form-check">
                      <label class="form-check-label" for="flexCheckChecked">
                          <input class="form-check-input"  name="check[]" type="checkbox" value="Tanzen" id="checker">
                        Tanzen
                      </label>
                    </div>


                    <div class="form-check">
                      <label class="form-check-label" for="flexCheckDefault">
                          <input class="form-check-input" name="check[]"  type="checkbox" value="Aerobic" id="checker">
                        Aerobic
                      </label>
                    </div>
                    <?php include 'sessionpost.php' ; 
			?>
                    <div class="form-check">
                      <label class="form-check-label" for="flexCheckDefault">
                          <input class="form-check-input" name="check[]"  type="checkbox" value="Aerobic" id="checker">
                          Andere
                      </label>
                    </div>
 
                    <p id="validation-warning"></p>
                    

                    <input type="text" class="form-control" aria-label="Text input with checkbox">


                   
      
          
                  <br>
              <input type="submit" name="submit" id="submit" value="OK" />
              
             
            
          
        
        </form>
    </fieldset>
    <?php
			 echo "Fragenummer: " . $_SESSION['FrageNummer'];
			
			?>
    


  



<div>
    
</div>


<?php include 'footer.php' ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
</body>
</html>