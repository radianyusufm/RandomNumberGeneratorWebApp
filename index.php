<?php

$manyDiceToRoll = 0;
$typeOfDice = "";
$outputDiceRolled = [];

if (isset($_POST["roll"]) && isset($_POST["roll"]) ) {

    $roll = (int)$_POST["roll"];
    $dice = (int)$_POST["dice"];

    $manyDiceToRoll = $roll;
    $typeOfDice = "d".$dice;
    
    for($i = 1 ; $i <= $roll; $i++){
        array_push($outputDiceRolled, rand(1, $dice));
    }
}

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="center">
            <h1>ROLL DICE</h1>

        <hr>
            <!-- INPUT DICE -->
            <form name="form" action="" method="POST">
                ROLL : <input type="number" name="roll" size="4">
                

                DICE :
                <select name="dice">
                    <option value="4">d4</option>
                    <option value="6">d6</option>
                    <option value="10">d10</option>
                    <option value="12">d12</option>
                    <option value="20">d20</option>
                </select>

                <br><br>
                <input type="submit" name = "submit" value="roll">
            </form>
            
            <!-- OUTPUT DICE -->
            <?php 
            
                if (isset($_POST['submit'])) {
                    if ($manyDiceToRoll != 0) {
                        echo "Many dice to roll : ". $manyDiceToRoll ."<br>";
                        echo "Type of Dice : " . $typeOfDice ."<br><br>";
                        
                        $number = 1;
                        foreach($outputDiceRolled as $value){
                            echo "output of the dice thrown at ". $number++ ." is " . $value . "<br>";
                            echo '<img src="img/'.$value.'.jpeg" width="50" height="60"> &nbsp;';
                            echo "<br><br>";
                        }

                    } else {
                        echo '<b class="error"> roll the dice at least 1 <b>';
                    }

            }?>

        </div>
    </body>
</html>







