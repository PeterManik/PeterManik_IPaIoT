<?php
        
        //$sn1 = $_GET["a"];
        //$sn2 = $_GET["b"];
        
        $file1 = fopen("sensors.txt","w") or die("Unable to open file!");
        //$text1 = $sn1 . ";" . $sn2;
        
        //fwrite($file1, $text1);
        
        echo $text1;
        if(filesize("sensors.txt") ==0){
            echo 'no';
        }
        else{
            echo 'yes';
        }
        $vr = fread($file1, filesize("sensors.txt"));
        //echo filesize("sensors.txt");
        //echo $vr;
        $toSplit = explode(";", file_get_contents("sensors.txt"));
        echo $toSplit[0];
        fclose($file1);

        $file2 = fopen("actuator.txt","w") or die("Unable to open file!");
        $text2 = "Value from actuator. Save this value to actuator.txt";
        fwrite($file2, $text2);
        fclose($file2);
        
        $file3 = fopen("actuator.txt","r") or die ("Subor neexistuje");
        $text3 = fread($file3,filesize("actuator.txt"));
        echo $text3;
        fclose($file3);
    ?>