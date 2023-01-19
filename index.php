<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Input 1: <input type="text" name="in1">
  Input 2: <input type="text" name="in2">
  Input 3: <input type="text" name="in3">
  Input 4: <input type="text" name="in4">
  Input 5: <input type="text" name="in5">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $in1 = $_POST['in1'];
    $in2 = $_POST['in2'];
    $in3 = $_POST['in3'];
    $in4 = $_POST['in4'];
    $in5 = $_POST['in5'];
    
    $text1 = $in1 . ";" . $in2 . ";" . $in3 . ";" . $in4 . ";" . $in5;

    $file1 = fopen("subor.txt","w");
    fwrite($file1, $text1);
    fclose($file1);
    read("subor.txt");
  
  
}

function read($filename){
    $file1 = fopen("subor.txt","r");
    $toSplit = explode(";", file_get_contents($filename));
    $done = (int)$toSplit[0]*(int)$toSplit[1]*(int)$toSplit[2]*(int)$toSplit[3]*(int)$toSplit[4];
    echo $done;
    fclose($file1);


}

?>

</body>
</html>