<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>PHP Calc</title>
</head>

<body>
    <div class="calculator">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-form">
            <div>
                <label for="num1">Input 1</label>
                <input type="number" name="num1" placeholder="input number here" class="input-field" required>
            </div>
            <div>
                <label for="operator">op</label>
                <select name="operator" id="operator" class="input-field">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <div>
                <label for="num2">Input 2</label>
                <input type="number" name="num2" placeholder="input number here" class="input-field" required>
            </div>
            <div class="button-container">
                <button>Calculate</button>
            </div>
        </form>
        <p>Result:</p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Import data and assign to vars
            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            //Error handlers (to prevent blank inputs)
            $errors = false;
            if (empty($num1) || empty($num2) || empty($operator)) {
                echo "<p class='calc-error'>Please fill out all the fields!</p>";
                $errors = true;
            }
            ;
            if (!is_numeric($num1) || !is_numeric($num2)) {
                echo "<p class='calc-error'>Input must be a number!</p>";
                $errors = true;
            }
            ;
            //Calculate the numbers if there are no errors;
            if (!$errors) {
                $value = 0;
                switch ($operator) {
                    case "+":
                        $value = $num1 + $num2;
                        break;
                    case "-":
                        $value = $num1 - $num2;
                        break;
                    case "*":
                        $value = $num1 * $num2;
                        break;
                    case "/":
                        $value = $num1 / $num2;
                        break;
                    default:
                        echo "<p class='calc-error'>something went wrong!</p>";
                }
                echo "<p class='calc-result'>" . $value . "</p>";
            }


            //print output
            echo "";
        }
        ;
        ?>


    </div>
</body>

</html>