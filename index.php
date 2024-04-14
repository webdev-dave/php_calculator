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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get" class="calculator">
        <div>
            <label for="num1">Input 1</label>
            <input type="number" name="num1" placeholder="input number here" class="input-field">
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
            <input type="number" name="num2" placeholder="input number here" class="input-field">
        </div>
        <div class="button-container">
            <button>Calculate</button>
        </div>




    </form>
</body>

</html>