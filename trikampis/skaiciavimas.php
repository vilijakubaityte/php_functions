<?php
$a = 0;
$b = 0;
$c = 0;

if (isset($_POST['a'],$_POST['b'], $_POST['c'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

}
function trikampioPlotas($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        $s = ($a + $b + $c) / 2;
        return round(sqrt($s * ($s - $a) * ($s - $b) * ($s - $c)),3);
    } else {
        return "Negalima apskaičiuoti";
    }
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="trikampis.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navigacija</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="trikampis.php">Trikampis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../panaikinimas/panaikinimas.php">N-tasis narys</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../skelbimas/skelbimas.php">Skelbimai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header">
        <h1>Trikampio plotas</h1>
        <div class="brd">
            <form action="skaiciavimas.php" method="post" class="form">
                <input class="form-control mt-4 border border-dark" type="text" name="a" placeholder="Įveskite skaičių a">
                <input class="form-control mt-4 border border-dark" type="text" name="b" placeholder="Įveskite skaičių b">
                <input class="form-control mt-4 border border-dark" type="text" name="c" placeholder="Įveskite skaičių c">
                <button type="submit" class="btn btn-secondary my-3">Skaičiuoti</button>
            </form>
            <div class="result">
                <h3 id="text">Rezultatas:</h3>
                <span id="span">
                <?= "Trikampio plotas: " . trikampioPlotas($a, $b, $c); ?>
                </span>
            </div>
        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>