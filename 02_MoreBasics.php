<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Tutorial</title>

    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 80%;
            background-color: grey;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Let's learn about php</h1>
        <p>Your party status is here : </p>
        <?php
        $age = 34;
        if ($age > 18) {
            echo "You can go to party.";
        } else if ($age == 7) {
            echo "you are 7 years old.";
        } else {
            echo "You can't go to party.";
        }

        // Arrays in PHP

        $languages = array("Python", "C++", "php", "NodeJS");

        echo $languages[0];
        echo "<br>";
        echo count($languages);
        echo "<br>";
        echo var_dump($languages);

        // Loops in PHP
        $a = 0;
        while ($a <= count($languages)) {
            if ($a < count($languages)) {
                echo "<br>The value of language is: ";
                echo $languages[$a];
            }
            echo $a;
            $a++;
        }

        ?>
    </div>
</body>

</html>