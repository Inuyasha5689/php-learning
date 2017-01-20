<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>Document</title>

    <style>
        header {
            background: #e3e3e3;

            padding: 2em;

            text-align: center;
        }
    </style>

</head>

<body>


    <header>
        <ul>
            <li>
                <?php
                    foreach ($names as $name) {
                        echo "<li>$name</li>";
                    }
                 ?>

                 <?php foreach ($names as $name) : ?>
                        <li>
                            <?= $name; ?>
                        </li>
                     <?php endforeach; ?>

            </li>
        </ul>
    </header>

</body>

</html>
