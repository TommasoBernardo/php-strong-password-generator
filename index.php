<?php
session_start();
include_once __DIR__ . '/partial/riceved.php';
if (isset($_GET['passwordLength'])) {
    $password =  passwordGenerator($_GET['passwordLength']);
    $_SESSION['password'] = $password;
    header('Location: password.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="container my-radius">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center mt-5 ">
                        <strong>
                            Strong Password Generator
                        </strong>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="text-white text-center mb-5">
                        <strong>
                            Genera una password sicura
                        </strong>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container my-background">
            <form method="GET" action="./index.php">
                <div class="container text-center my-flex">
                    <label class="mt-5" for="password">Lunghezza password:</label>
                    <input class="mt-5 my-widht" type="number" name="passwordLength" id="password">
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <button class="btn btn-primary mt-5" type="submit">invia</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>