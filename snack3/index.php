<?php
/*
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ]
    ],
    '15/02/2019'=> [
        [
            'title' => 'Post 2',
            'author' => 'julia Roberts',
            'text' => 'Ciao amici'
        ],
    ],
    '10/03/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Brambilla',
            'text' => 'Che bella giornata'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Julia Dellelis',
            'text' => 'oggi non c\'è la posso fare ragazzi!'
        ]
    ],
    '20/06/2019'=>[
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
    ],
    '30/06/2019' =>[
            [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ]
]

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
        <h1 class="text-center">Post</h1>
        <div>
            <?php 
            foreach ($posts as $date => $datePosts) {
                echo "<strong>Data: </strong>" . $date . "<br>";
                echo "<strong>Post: </strong>";
                foreach ($datePosts as $post) {
                    echo  $post['title'] . '' . "<br>";
                    echo "<tr>". $post["author"] ."</td><br>";
                    echo "<td>". $post["text"] ."</td><br>";

                }
                echo "\n";
            ?>
            <?php } ?>
        </div>
        
    </main>


</body>

</html>