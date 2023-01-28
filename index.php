<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Badwords</title>
    </head>
    <body>

        <form action="./wordCensure.php" method="POST">
            <div class="row justify-content-center mt-5">
                <div class="col-4">
                    <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="Enter paragraph" >
                </div>
                <div class="col-4">
                    <input type="text" name="word" id="word" class="form-control" placeholder="Enter the word you want to censor" >
                </div>
                <div class="row justify-content-center mt-2">
                    <div class="col-6 text-center">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>