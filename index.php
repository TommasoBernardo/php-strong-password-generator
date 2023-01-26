<?php
include_once __DIR__ . '/riceved.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importing bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Password Generator</title>
</head>

<body>
    <main>
        <div class="form-container">
            <form action="./index.php" method="GET">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <label class="form-label" for="typeNumber">Password length:</label>
                    <input type="number" id="typeNumber" class="form-control w-25" name="userPswLn" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div>
            <?php
            if (isset($_GET['userPswLn'])) {
                $pswLn = $_GET['userPswLn'];
                $randomPsw = randomPswGenerator($pswLn);
                echo "<p> La tua password: {$randomPsw} </p>";
            }
            ?>
        </div>
    </main>
</body>

</html>