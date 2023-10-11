<?php

require './connec.php';

$pdo = new \PDO(DSN, USER, PASS); 


$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);


//$query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
//$statement = $pdo->exec($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>
    <?php foreach($friends as $friend): ?>
    <li><?php echo $friend['firstname']. ''. $friend['lastname']?> </li>
    <?php endforeach ?>


<form action="create.php" method="post"></form>
<fieldset>
        <label for="firstname">Prenom</label>
        <input type="text" name="firstname" id="firstname">
</fieldset>
<fieldset>
        <label for="name">nom</label>
        <input type="text" name="name" id="name">
</fieldset>
<button type="submit">Creer un ami</button>
</form>
</ul>
</body>
</html>