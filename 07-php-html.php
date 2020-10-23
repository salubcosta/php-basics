<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document PHP with Html</title>
</head>
<body>
<!-- short echo php - date() is a function -->
<h1>Today is: <?=date('d/m/Y');?></h1>

<?php
    $name = 'Salumão';
?>

<h2>
    <?php echo $name; ?>
</h2>
</body>
</html>