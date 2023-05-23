<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Statement 1</title>
</head>

<body>
    <h1>Problem Statement 2</h1>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="csvFile" accept=".csv">
        <button type="submit" name="submit">Import CSV</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $csvFile = $_FILES['csvFile']['tmp_name'];
        
        if (file_exists($csvFile)) {
            echo '<hr />';
            echo '<h3>Table</h3>';

            $csvData = file_get_contents($csvFile);
            $csvRows = explode(PHP_EOL, $csvData);

            echo "<table id='csvTable'>";
            foreach ($csvRows as $row) {
                echo "<tr>";
                $csvColumns = str_getcsv($row);
                foreach ($csvColumns as $column) {
                    echo "<td>" . htmlspecialchars($column) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>

</body>

</html>