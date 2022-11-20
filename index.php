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
        
    
        
    
        <div id="boxes">
        <label>Are you satisfied with the site?</label>
        <label for="Satisfied">Yes</label>
        <input type="radio" id="Satisfied" name="Satisfied" >
        <label for="notSatisfied">No</label>
        <input type="radio" id="notSatisfied" name="Satisfied" >
        </div>
    
        
        <label for="opinion">Please tell us what you think</label>
        <textarea id="opinion" name="opinion" rows="5" cols="50" ></textarea>
    
    
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

    $fp = fopen('data.txt', 'a');
    echo $email;
    fwrite($fp, $name);
    fwrite($fp, $surname);
    fwrite($fp, $email);
    fwrite($fp, $opinion);
    
    fclose($fp);
}



?>
