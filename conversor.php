<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USD/EUR Currency Conversion</title>
</head>
<body>
    <h2>USD/EUR Currency Conversion</h2>
    <form action="#" method="post">
    <label>Insert a Dollar Value</label>
    <input type="text" name="dollars" id="dollar">
    <button type="submit">Conversion</button>
    </form>
    <?php

    // 1.00 USD = 0.82 EUR

    define ('EXCHANGE_RATE', 0.82);

    $dollars = 150;

    $euros = $dollars * EXCHANGE_RATE;
    echo "$dollars USD is equivalent to: $euros EUR";

    ?>

</body>
</html>