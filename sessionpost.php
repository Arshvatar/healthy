<?php
session_start();


function showResult()
{

    for ($i=1; $i < 11; $i++) { 

        if( $_SESSION['antwort' . $i] == null && $i != 2 && $i != 4)
        {$_SESSION['antwort' . $i] = 0;}

    }

    echo "Anzahl Punkte = " .   $_SESSION['antwort1'] . '<br>' ;
    /*
    echo "Antwort  = " .   $_SESSION['antwort2'] . '<br>' ;
    */
    echo "Radio Value = " .   $_SESSION['RadioVal'] . '<br>' ;

    echo "Anzahl Punkte = " . $_SESSION['antwort3'] . '<br>' ;
    /*
    echo "Sportarten = ";
    foreach($_SESSION['antwort4b'] as $arrayvalue)
    {

        echo  $arrayvalue . ", ";
    }
    echo '<br>';
    */
    echo "Anzahl Sportarten = " . $_SESSION['AnzahlChecks'] . '<br>' ;

    echo "Anzahl Punkte = " . $_SESSION['antwort5'] . '<br>' ;
    echo "Anzahl Punkte = " . $_SESSION['antwort6'] . '<br>' ;
    echo "Anzahl Punkte = " . $_SESSION['antwort7'] . '<br>' ;
    echo "Anzahl Punkte = " . $_SESSION['antwort8'] . '<br>' ;
    echo "Anzahl Punkte = " . $_SESSION['antwort9'] . '<br>' ;
    echo "Anzahl Punkte = " . $_SESSION['antwort10'] . '<br>' ;

    $Total = $_SESSION['antwort1'] + $_SESSION['RadioVal'] + $_SESSION['antwort3'] + $_SESSION['AnzahlChecks'] + 
    $_SESSION['antwort5'] +$_SESSION['antwort6'] + $_SESSION['antwort7'] +$_SESSION['antwort8'] + $_SESSION['antwort9'] +  $_SESSION['antwort10'];

    echo "Total Punkte = " . $Total ;
    echo '<br>';
    if($Total > 0)
    {
        

        if($Total <= 20)
        {
            echo "<img style='width: 150px' id='healthimage' src='img/schnauz.jpeg' alt=''>";
            
        }
        else if ($Total > 21){

            echo "<img style='width: 150px height: 150px' id='healthimage' src='img/gesund.jpg' alt=''>";
        }
    }

}




if(array_key_exists('slider', $_POST)) {

    $range_slider_value = $_POST['slider'];

    $_SESSION['antwort'.$_SESSION['FrageNummer']] = $range_slider_value;

    //echo "<br>" . 'Last slider set to ' . $_SESSION['antwort'.$_SESSION['FrageNummer']] . "<br>" ;
}

if(array_key_exists('radio', $_POST)) {

    $radioVal = $_POST["radio"];

    if($radioVal == "Ja")
    {
        $_SESSION['antwort'.$_SESSION['FrageNummer']] = $radioVal;
        $_SESSION['RadioVal'] = 5;

    echo "<br>" . "Antwort war JA";
    }
    else if ($radioVal == "Nein")
    {
        $_SESSION['antwort'.$_SESSION['FrageNummer']] = $radioVal;
        $_SESSION['RadioVal'] = 0;

    //echo "<br>" ."Antwort war NEIN";
    }
}

if(array_key_exists('textfeld', $_POST)) {

    $numberVal = $_POST["textfeld"];
    $_SESSION['antwort' . $_SESSION['FrageNummer']] = $numberVal;
    //echo("<br>" .$numberVal);
}


if(array_key_exists('check', $_POST)) {
     
    $_SESSION['AnzahlChecks'] = 0;

    foreach($_POST['check'] as $value)
    {
      
        $_SESSION['AnzahlChecks']++;
    

        
    }

    $_SESSION['antwort4b'] = $_POST['check'] ;
}    



if(isset($_POST['submit'])){

    
    
    
   
    $_SESSION['FrageNummer'] ++;



        //foreach($_POST['check'] as $value)
        //{
            //$checkPost = $_POST["check"];
            //$_SESSION['antwort' . $_SESSION['FrageNummer']] = $checkPost;
            //echo "hallo " . $_SESSION['antwort' . $_SESSION['FrageNummer']];
    
            //echo "<br>" . "Chosen box : ".$value.'<br/>';
            
        //}
            
   
        
    
 
}

?>
