<?php include ROOT . '/views/layouts/header.php'; ?>
    <h1>Это страница ошибки 500</h1>
    <?= $e->getMessage() ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>