<?php
$paragraph = $_POST['paragraph'];
$word = $_POST['word'];
$paragraph_censure = str_replace($word, '***', $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Word Censure</title>
    </head>
    <body>
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <div class="card" >
                    <div class="card-body text-center">
                        <h3 class="card-title">Original paragraph</h3>
                        <p class="card-text"><?php echo $paragraph;  ?></p>
                        <h3 class="card-title">Text length</h3>
                        <p class="card-text"><?php echo strlen($paragraph);  ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <div class="card" >
                    <div class="card-body text-center">
                        <h3 class="card-title">Censored paragraph</h3>
                        <p class="card-text"><?php echo $paragraph_censure;  ?></p>
                        <h3 class="card-title">Text length</h3>
                        <p class="card-text"><?php echo strlen($paragraph_censure);  ?></p>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>