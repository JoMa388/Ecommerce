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
        <label for="input"> Enter a String</label>
        <input type="text" name="input"> 
        <button>Submit</button>
    </form>
    <?php
        /*
        Takes string input and prints out word without vowels
         */
        if(isset($_GET['input'])) {
            VowelRemove($_GET['input']);
        }
    function VowelRemove($string) {
        $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $vowels)) {
                continue;
            }
            echo $string[$i];
        }
    }
    ?>
</body>
</html>