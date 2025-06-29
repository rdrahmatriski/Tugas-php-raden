<?php
$mahasiswa = [
    "001" => "riski",
    "002" => "ilham",
    "003" => "mimin",
    "004" => "dimas",
    "005" => "lutfi"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>

<ul>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama"; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>