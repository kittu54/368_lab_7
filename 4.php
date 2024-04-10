<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <form action="" method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        echo "<table border='1'>";
        for ($row = 1; $row <= $number; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= $number; $col++) {
                echo "<td>" . $row * $col . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
