 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png" />
    <title>JSON Sample</title>
</head>
<body>

    <div id="placeholder"></div>

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
	$.getJSON('../application/model/createJson.php', function(data) {
  	console.log(data);
        var output="<ul>";
        for (var i in data.users) {
            output+="<li>" + data.users[i].firstName + " " + data.users[i].lastName + "--" + data.users[i].joined.month+"--" + data.users[i].joined.year+"</li>";
        }

        output+="</ul>";
        console.log(output);
        $('#placeholder').html(output);
       
       });
    </script>
</body>
</html>