<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Statement 2</title>
</head>

<body>
    <h1>Problem Statement 2</h1>
    <hr>
    using,
    <br>
    $start = 1;
    <br>
    $end = 20;
    <br>

    <?php

    function getPrimeNumbersInRange($start, $end) {
        $primes = [];
        for ($num = $start; $num <= $end; $num++) {
            if (isPrime($num)) $primes[] = $num;
        }
        return $primes;
    }

    function isPrime($number) {
        if ($number <= 1) return false;

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) return false;
        }

        return true;
    }
    ?>

    <?php
    $start = 1;
    $end = 20;
    $primeNumbers = getPrimeNumbersInRange($start, $end);
    echo "[" . implode(", ", $primeNumbers) . "]";
    ?>
    <hr />
    <form action="" method="post">
        <div class="">
            <label for="start">$start</label>
            <input type="number" name="start" id="start" value="0">
        </div>

        <div class="">
            <label for="end">$end</label>
            <input type="number" name="end" id="end" value="20">
        </div>

        <button type="submit" name="submit">Run Function</button>
    </form>
    <br>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $start = $_POST['start'];
            $end = $_POST['end'];
            $primeNumbers = getPrimeNumbersInRange($start, $end);
            echo "[" . implode(", ", $primeNumbers) . "]";
        }
    ?>
</body>

</html>