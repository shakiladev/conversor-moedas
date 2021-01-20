<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>
<body>
    <h2>Converting Dollar to Euro</h2>
    
    <?php
    
        // 1.00 USD = 0.82 EUR

        define ('EXCHANGE_RATE', 0.82);

        $dollars = $_POST['dollars'];

        $euros = $dollars * EXCHANGE_RATE;

        echo "$dollars USD is equivalent to: $euros EUR";
    ?>
</body>
</html>
