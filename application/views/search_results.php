<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <ul>
        <?php foreach ($results as $result): ?>
            <li><?= $result->nama_produk ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
