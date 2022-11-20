<!DOCTYPE html>
<html>
<body>



    <form id="myForm" method="post">
        
        <label for="name">Your personal information</label>
        <input type="text" id="name" name="name" placeholder="Your first name" required>
        <input type="text" id="surname" name="surname" placeholder="Your last name" required>
        <input type="email" id="email" name="email" placeholder="Your E-mail" required >
        
    
        
    
        <div id="boxes">
        <label>Are you satisfied with the site?</label>
        <label for="Satisfied">Yes</label>
        <input type="radio" id="Satisfied" name="Satisfied" onclick="showCheck()">
        <label for="notSatisfied">No</label>
        <input type="radio" id="notSatisfied" name="Satisfied" onclick="showCheck()">
        </div>
    
        
        <label for="opinion">Please tell us what you think</label>
        <textarea id="opinion" name="opinion" rows="5" cols="50" required></textarea>
    
    
        <input id="submit" type="submit" value="Submit" >
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

    fwrite($fp, $name);
    fwrite($fp, $surname);
    fwrite($fp, $email);
    fwrite($fp, $opinion);
    console.log("something happened");
    fclose($fp);
}



?>
