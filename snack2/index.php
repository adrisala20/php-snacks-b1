<?php
/*
Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
var_dump($_GET);
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    $nameValid = strlen($name) > 3;
    $mailValid = strpos($mail, '@') !== false && strpos($mail, '.') !== false;
    $ageValid = filter_var($age, FILTER_VALIDATE_INT) !== false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" defer></script>
    <title>PHP Snack1</title>
</head>

<body>
    <main class="container">
        <section>
            <h2 class="text-center"> Modulo</h2>
            <form class="row g-3 needs-validation" method="GET" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" required>
                    <div class="valid-feedback">
                        Ammesso
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Mail</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" name="mail" required>
                        <div class="invalid-feedback">
                            Riprova
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Età</label>
                    <input type="number" class="form-control" name="age" required>
                    <div class="invalid-feedback">
                        Riprova
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </div>
            </form>

        </section>
        <section>
            <h2> 
                <?php if ($nameValid && $mailValid && $ageValid) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            } ?>
            </h2>
        </section>

    </main>


</body>

</html>