<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence Finder</title>
</head>
<body>
    <form method="get">
    <label for="input">Which number of Fibonacci Sequence: </label>
    <input type="text" name="input">
    <button>Submit</button>
    </form>
    <?php
        if(isset($_GET['input'])) {
            echo Fibonacci($_GET['input']);
        }
       function Fibonacci($number) {
            if($number==0) {
                return 0;
            }
            else if($number==1) {
                return 1;   
            } else
               return  (Fibonacci($number - 1) +
                        Fibonacci($number - 2));
       }
    ?>
</body>
</html>