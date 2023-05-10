<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Drinks Image View/title
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
    <h1 style='margin:5px;padding:10px;'>Choose a drink brand to see more details</h1>
    <b style='margin:5px;padding:10px;'>Select a drinks brand name:</b>
    <form style='margin:5px;padding:10px;'>
    <select id="select">
        <?php
        // Debug
        /$data array("A","B","C","D","E");
        for ($i=0;$i <count($data);$i++)
        echo '<option value="'.$data[si].'">'.$data[si].'</option>';
        ?>
    </select>
</form>
<!-Inject the HTML into this div tag placeholder --
<div id="placeholder"style='margin:5px;padding:10px;'>Insert data here</div>
<script>
$(document).ready(function(){
$("#select").change(function (
/Debug
var model =$(this).val();
console.log('Drinks Model:',model,'has been selected');
/Variable to hold the HTML as we build it for inserting into the place holder
var str ""
/Process the selection to select the desired drinks brand
$("select option:selected").each(function ()
/Start to build the HTML starting with a title
str +"<div><b>Drinks Brand:</b>"$(this).text()+"</div>""</br>";
/Debug
console.log('HTML Title is:'$(this).text());
/Debug
var selection =$(this).text();
/Debug
console.log('Selected brand model:',selection);
/Build a Url path to the php model used to read the drinks brand data
var brandUrl "../application/model/modelDrinkDetails.php?brand="+selection;
/Debug
console.log('URL to PHP Model is:'brandUrl);
var debugUrl ="../application/model/phpDebug.php";
/Fire the AJAX call with the .getJSoN function to get the service response from the Url (to the web server)
$.get]SoN(brandUr1)
done(function(json){..
})
.fail(function(){
console.log('viewDrinks JS Handler:Server returned an Error,trap this in your PHP Server code');
})
})方
})
})方
</script>
</body>
</html>