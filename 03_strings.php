<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "This is a string";
        echo $str;
        $len = strlen($str);

        echo "The length of this string is ". $len . " <br> Thank you";

        echo "<br> The number of words in this string is ". str_word_count($str) . " <br> Thank you";

        echo "<br> The reverse string is ". strrev($str) . " <br> Thank you";

        echo "<br> The search for `is` in this string is ". strpos($str, "is") . " <br> Thank you";

        echo "<br> The replaced string is ". str_replace("is", "at", $str) . " <br> Thank you";
    ?>
</body>
</html>