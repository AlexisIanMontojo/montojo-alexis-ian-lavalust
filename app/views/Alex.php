<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex</title>
</head>
<body>
    <h1>Welcome to Alex View</h1>
    <?php
    $members = array("Peter" => "30", "Alexis" => "40", "John" => "59");

    foreach($members as $name => $age){
        echo "$name : $age <br>";
    }
    ?>
</body>
</html>