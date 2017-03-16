<!DOCTYPE html>
<html lang="en">
    <head>
        <title>donnee formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="POST">
            your firstname:<input type="text" name="firstname">
            your lastname:<input type="text" name="lastname">
            <input type="submit" value="send">
             <?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
// on teste la déclaration de nos variables
if (isset($firstname) && isset($lastname)) {
	// on affiche nos résultats
	echo '<br><br>your firstname ist '.$firstname.'<br><br> your lastname ist '.$lastname;
}
?>
        </form>
    </body>
</html>