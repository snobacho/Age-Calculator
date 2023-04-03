<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>ENTER YOUR AGE</h2>
<form action="index.php" method="post">
    <select name="day">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value=\"$i\"> $i </option>";
        }
        ?>
    </select>
    <select name="month">
        <option value="1">Jenuary</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
    <select name="year">
        <?php 
            for ($i = 1900 ; $i <= 2023; $i++) {
                echo "<option value=\"$i\"> $i </option>";
            };
        ?>
    </select>
    <input type="submit" name="submit" value="Calculate your age">
</form>

<?php
if(isset($_POST['submit'])) {
    // check if the required form fields have been submitted
    if(isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        $dob = $day.'-'.$month.'-'.$year;

        $bday = new DateTime($dob);
        $today = new DateTime();

        $age = $today->diff($bday);
        echo "Your birth time is: $dob<br/>";
        echo "Your age is: " . $age->y . " years " . $age->m . " months " . $age->d . " days";
    } else {
        echo "Please fill in all the required fields.";
    }
}
?>

</body>
</html>