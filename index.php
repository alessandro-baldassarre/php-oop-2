<?php 
include_once __DIR__ . "/classes/Toy.php";
include_once __DIR__ . "/classes/User.php";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 2</title>
    </head>
    <body>
        <?php 
    
        $americanExpress = new CreditCard("American Express", 401234976190, "2023", 300);
        $ball = new Toy("eraser", "outdoor", "Dog toy ball", 10, "small");
        $userOne = new User("Alessandro", "Baldassarre", "blabla@gmail.com", 322423423, 1990, true , $americanExpress);
        ?>
        <pre>
            <?php 
            var_dump($userOne);
            var_dump($ball)
             ?>
        </pre>

    
</body>
</html>