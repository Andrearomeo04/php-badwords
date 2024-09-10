<?php 
$text = $_POST['text'];
$badWord = $_POST['badWord'];
$censored = str_replace($badWord, '***', $text)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
                <h1>RESULTS</h1>
            </div>
            <div class="col-12">
                <h2>Testo censurato</h2>
                <p><?php echo $censored?></p>
                <p>il testo è lungo <?php echo strlen($censored)?> caratteri</p>
            </div>
            <div class="col-12 mb-5">
                <h2>Testo non censurato</h2>
                <p><?php echo $text?></p>
                <p>il testo è lungo <?php echo strlen($text)?> caratteri</p>
            </div>
        </div>
    </div>
</body>
</html>