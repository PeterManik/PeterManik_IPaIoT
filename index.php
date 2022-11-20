<!DOCTYPE html>
<html>
<body>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css" media="screen">
    
    
</head>


    <form id="myForm" method="post" action="">
        
        <label for="name">Your personal information</label>
        <input type="text" id="name" name="name" placeholder="Your first name" >
        <input type="text" id="surname" name="surname" placeholder="Your last name" >
        <input type="email" id="email" name="email" placeholder="Your E-mail" >
        <input type="text" id="postal" name="postal" placeholder="Postal Code">
    
        
    
        <div id="boxes">
        <label>Are you satisfied with the site?</label>
        <label for="Satisfied">Yes</label>
        <input type="radio" id="Satisfied" name="Satisfied" value="Yes">
        
        <input type="radio" id="notSatisfied" name="Satisfied" value="No">
        </div>
    
        
        <label for="opinion">Please tell us what you think</label>
        <textarea id="opinion" name="opinion" rows="5" cols="50" required></textarea>
    
    
        <input id="submit" type="submit" name="submit" value="Submit" >
        <input id="reset" type="reset" value="Reset" >
    
    </form>



</body>
</html>



<?php  

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $opinion=$_POST['opinion'];
    $postal=$_POST['postal'];

    $fp = fopen('data.txt', 'a');

    if ($_POST['Satisfied']==Yes) {
        $satisfied="yes";
        fwrite($fp, "Satisfied".PHP_EOL);
    }
    else {
        $satisfied="no";
        fwrite($fp, "Not satisfied".PHP_EOL);
    }


    
    fwrite($fp, "Name : ".$name.PHP_EOL);
    fwrite($fp, "Surname :".$surname.PHP_EOL);
    fwrite($fp, "Email : ".$email.PHP_EOL);
    fwrite($fp, "Opinion : ".$opinion.PHP_EOL);
    fwrite($fp, "Postal code : ".$postal.PHP_EOL);
    echo "done";
    echo $name . " " . $surname . " " . $email . " " . $satisfied . " " . $opinion . " " . $postal;
    fclose($fp);
}



?>
