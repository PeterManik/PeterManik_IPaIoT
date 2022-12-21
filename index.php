<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" >
    <title>IoT</title>
</head>
<body>

<div class="shadow">
<table>
    <caption style="font-weight: bold;" >Smart Fridge</caption>
    <thead>
    <tr>
        <th>Temperature</th>
        <th>Humidity</th>
        <th>Open?</th>
    </tr>
    </thead>
    <tbody>
    <tr>

        <td><div id="b0"></div></td>
        <td><div id="b1"></div></td>
        <td><div id="led">No</div></td>

    </tr>

</table>

    <button id="open"  onclick="ButtonPress()">OPEN FRIDGE</button>
</div>



</body>

<script type="text/javascript">


   /* var open = 0;
    var xmlHttp=createXmlHttpObject();

    function createXmlHttpObject(){
        if(window.XMLHttpRequest){
            xmlHttp=new XMLHttpRequest();
        }
        else{
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        return xmlHttp;
    }
*/


    function ButtonPress(){
        //var xhttp = new XMLHttpRequest();

        if (open==0){

            document.getElementById("led").innerHTML="Yes";
            document.getElementById("open").innerHTML="CLOSE FRIDGE";
            open=1;
        }
        else if (open==1){

            document.getElementById("led").innerHTML="No";
            document.getElementById("open").innerHTML="OPEN FRIDGE"
            open=0;
        }


        //xhttp.open("PUT", "BUTTON", false);
        //xhttp.send();


    }

   /*function response(){
        var message;
        var xmlResponse;
        var xmldoc;

        xmlResponse=xmlHttp.responseXML;

        xmldoc = xmlResponse.getElementsByTagName("B0");
        message = xmldoc[0].firstChild.nodeValue;
        document.getElementById("b0").innerHTML=message;

        xmldoc = xmlResponse.getElementsByTagName("B1");
        message = xmldoc[0].firstChild.nodeValue;
        document.getElementById("b1").innerHTML=message;



    }

    function process(){

        if(xmlHttp.readyState==0 || xmlHttp.readyState==4) {
            xmlHttp.open("PUT","xml",true);
            xmlHttp.onreadystatechange=response;
            xmlHttp.send(null);
        }
        // you may have to play with this value, big pages need more porcessing time, and hence
        // a longer timeout
        setTimeout("process()",100);
    }

*/
</script>


</html>

<?php

        echo '<h1>YOOOOO</h1>';



?>