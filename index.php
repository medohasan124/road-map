<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="convert.php" method="post">
        <label for="value">Value:</label>
        <input type="number" name="value" id="value" required>
        <br>
        <label for="from">From:</label>
        <select name="from" id="from">
            <option value="millimeter">Millimeter</option>
            <option value="centimeter">Centimeter</option>
            <option value="meter">Meter</option>
            <option value="kilometer">Kilometer</option>
            <option value="inch">Inch</option>
            <option value="foot">Foot</option>
            <option value="yard">Yard</option>
            <option value="mile">Mile</option>
            <option value="milligram">Milligram</option>
            <option value="gram">Gram</option>
            <option value="kilogram">Kilogram</option>
            <option value="ounce">Ounce</option>
            <option value="pound">Pound</option>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <br>
        <label for="to">To:</label>
        <select name="to" id="to">
            <option value="millimeter">Millimeter</option>
            <option value="centimeter">Centimeter</option>
            <option value="meter">Meter</option>
            <option value="kilometer">Kilometer</option>
            <option value="inch">Inch</option>
            <option value="foot">Foot</option>
            <option value="yard">Yard</option>
            <option value="mile">Mile</option>
            <option value="milligram">Milligram</option>
            <option value="gram">Gram</option>
            <option value="kilogram">Kilogram</option>
            <option value="ounce">Ounce</option>
            <option value="pound">Pound</option>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if (isset($_POST['value']) && isset($_POST['from']) && isset($_POST['to'])) {
        $value = $_POST['value'];
        $from = $_POST['from'];
        $to = $_POST['to'];
         $result = convert($value, $from, $to);
        echo "Result: $result";
    }

    ?>
</body>
</html>
