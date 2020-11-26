<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tmpPath = $_FILES['image']['tmp_name'];
    if (is_uploaded_file($tmpPath)) {
        try {
            $image = new Imagick($tmpPath);
            echo 'Image uploaded! Properties:' . PHP_EOL;
            var_dump($image->getImageProperties());
            echo PHP_EOL;
        } catch (ImagickException $ex) {
            echo 'Thrown Exception:' . PHP_EOL;
            var_dump($ex);
            echo PHP_EOL;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="img">Choose an image:</label>
        <input type="file" name="image" id="img">
        <button>Upload</button>
    </form>
</body>

</html>