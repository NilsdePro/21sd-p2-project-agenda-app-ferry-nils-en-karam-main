<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>resultaat</title>

</head>
<body>




 <!--Echood de ingevulde informatie doormiddel van POST-->
 <?php echo "Titel:"?> <?php echo $_POST['titel']; ?>
 <br>  <?php echo "Naam:"?>    <?php echo $_POST['naam']; ?> 
 <br> <?php echo "Locatie:"?> <?php echo $_POST['locatie']; ?>
 <br> <?php echo "Omschrijving:"?> <?php echo $_POST['omschrijving']; ?>
 <br> <?php echo "Datum:"?> <?php echo $_POST['date']; ?>
 <br> <?php echo "Begin tijd:"?> <?php echo $_POST['time']; ?>
 <br> <?php echo "Eind tijd:"?> <?php echo $_POST['time2']; ?>







    
</body>
</html>