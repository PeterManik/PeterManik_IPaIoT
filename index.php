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
  // collect value of input field
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
  //$name = $_POST['fname'];
  //if (empty($name)) {
  //  echo "Name is empty";
  //} else {
  //  echo $name;
  //}
}

function read($filename){
    $file1 = fopen("subor.txt","r");
    $toSplit = explode(";", file_get_contents($filename));
    $done = $toSplit[0]*$toSplit[1]*$toSplit[2]*$toSplit[3]*$toSplit[4];
    echo $done;
    fclose($file1);


}

?>

</body>
</html>