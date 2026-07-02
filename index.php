<?php require __DIR__ . '/partials/header.php'; ?>

<?php
$body = file_get_contents(__DIR__ . '/body-content.html');
echo $body;
?>

<?php require __DIR__ . '/partials/footer.php'; ?>
