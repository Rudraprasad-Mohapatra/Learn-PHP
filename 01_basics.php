<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <div class="container">
        This is my first PHP website
        <?php
            define("pi", 3.14);
            echo "Hello world and this is printed using PHP";
            // Single line comment
            /* 
                Multiline comment
            */

            $variable1 = 34;
            $variable2 = 45;

            echo $variable1;
            echo $variable2;

            // Not Case sensitive
            Echo $variable1 + $variable2;
            echo "<br>";

            // Operators In PHP

            // Arithmetic Operators
            echo "The value of variable 1 + variable 2 is ";
            echo "<br>";
            echo $variable1 + $variable2;
            echo "The value of variable 1 - variable 2 is ";
            echo "<br>";
            echo $variable1 - $variable2;
            echo "The value of variable 1 * variable 2 is ";
            echo "<br>";
            echo $variable1 * $variable2;
            echo "The value of variable 1 / variable 2 is ";
            echo "<br>";
            echo $variable1 / $variable2;

            // Assignment Operators
            $newVar = $variable1;
            echo "The value of new variable is ";
            echo $newVar;
            echo $newVar += 2;
            echo $newVar -= 2;
            echo $newVar *= 2;
            echo $newVar /= 2;

            // Comparision Operators
            echo "<h1>Comparision Operators</h1>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";

            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";

            //Increment/Decrement Operators
            echo $variable1++;
            echo "<br>";
            echo $variable1--;
            echo "<br>";
            echo ++$variable1;
            echo "<br>";
            echo --$variable1;
            echo "<br>";

            // Logical Operator
            // and (&&)
            // or (||)
            // xor
            // !

            $myVar = (true and true);
            echo var_dump($myVar);
            $myVar = (true and false);
            echo var_dump($myVar);
            $myVar = (false and true);
            echo var_dump($myVar);
            $myVar = (false and false);
            echo var_dump($myVar);

            $myVar = (true or false);
            echo var_dump($myVar);

            $myVar = (true xor false);
            echo var_dump($myVar);
            $myVar = (false xor false);
            echo var_dump($myVar);

            $myVar = (!false);
            echo var_dump($myVar);
        ?>

        <?php
        
            // Datatypes in PHP
            // 1.String
            // 2.Integer
            // 3.Float
            // 4.Boolean
            // 5.Array
            // 6.Object

            echo "<br>Datatypes<br>";
            $vari = "This is a string";
            echo var_dump($vari);
            echo "<br>";
            echo $vari;
            echo "<br>";
            echo "pi value is ", pi;
        ?>
    </div>

    <!-- <div class="container">
        <?php
            echo "Hello worldagain";
        ?>
    </div> -->
</body>
</html>