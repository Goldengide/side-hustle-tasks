<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        input {
            width: 3em;
            height: 3em;
            border-radius: 0.3em;
            border: solid #eee thin;
        }
        input[type = "submit"] {
            width: 6em;
        }
        select {
            width: 3em;
            height: 3em;
            border-radius: 0.3em;
            border: solid #eee thin;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <input type="number" name="first">
            <select name="operation">
                <option value="addition">+</option>
                <option value="subtraction">-</option>
                <option value="multiplication" selected>X</option>
                <option value="division">/</option>
            </select>
            <input type="number" name="second">
            <input type="submit" value="Submit">
            
            <span class = "result">
                <?php 
                    $first = 0; 
                    $second = 0;
                    if(isset($_POST['first'])) {
                         $first = $_POST['first'];
                    }
                    if(isset($_POST['second'])) {
                        $second = $_POST['second'];
                    }
                    if(isset($_POST['operation'])) {
                        $operation = $_POST['operation'];
                        echo operate($operation, $first, $second);
                        echo "<br>Operation: <u>". $operation. "</u> <br>First-number: <u>". $first. "</u> <br>Second-number: <u>". $second. "</u>";
                    }

                ?>
            </span>
        </div>
    </form>
</body>

<?php

function operate($operation, $first, $second) {
    if($operation == "multiplication") {
        return ($first * $second);
    }

    if($operation == "subtraction") {
        return ($first - $second);
    }

    if($operation == "addition") {
        return ($first + $second);
    }

    if($operation == "division") {
        return ($first / $second);
    }

}
?>


</html>