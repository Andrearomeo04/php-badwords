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
            <div class="col-12">
                <form action="./process.php" method="post">
                    <div class="row">
                        <div class="col-6">
                                <label>testo</label>
                                <input type="text" id="text" name="text" class="form-control" placeholder="testo">
                        </div>
                        <div class="col-6">
                                <label>badWord</label>
                                <input type="text" id="badWord" name="badWord" class="form-control" placeholder="badWord">
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>