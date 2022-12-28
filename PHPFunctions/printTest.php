<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get"> 
        <button name="print" value="print">Print Test</button>
    </form>
    <?php
    /* 
    Prints 1 to 100, Fizz instead for multiples of 3, 
    Buzz instead for multiples of 5 
     */
    if (isset($_GET['print'])) {
        Printtest($_GET['print']);
    }
    function Printtest ($button) {
        echo "<br>"."<br>";
        for($i=0;$i<101;$i++) {
            if($i%3==0) {
                echo "Fizz"."<br>";
                continue;
            }
            if($i%5==0) {
                echo "Buzz"."<br>";
                continue;
            }
            echo $i."<br>";
        }
    }

    ?>
</body>
</html>