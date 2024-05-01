<?php 
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/
//var_dump($partiteBasket);
$partiteBasket = [
    ["casa" => "Olimpia Milano",
    "ospite"=> "Cantù",
    "puntiCasa"=> "55",
    "puntiOspite"=> "60"],
    ["casa" => "Virtus Bologna",
    "ospite"=> "Fortitudo bologna",
    "puntiCasa"=> "75",
    "puntiOspite"=> "65"],
    ["casa" => "Reyes Colombia",
    "ospite"=> "Treviso Basket",
    "puntiCasa"=> "80",
    "puntiOspite"=> "72"],
];
function stampaPartite($partite) {
    foreach ($partite as $partita) {
        echo $partita["casa"] . " - " . $partita["ospite"] . " | " . $partita["puntiCasa"] . "-" . $partita["puntiOspite"] . "\n" . "<br>" ;
    }
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
            <h2 class="text-center"> Partite Basket </h2>
            <div>
                <?php stampaPartite($partiteBasket); ?>
            </div>
        </section>
        <section>
            <h2></h2>
        </section>
        
   </main>


</body>
</html>