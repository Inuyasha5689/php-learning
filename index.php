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
        <h1>
            <?php

            $name = $_GET['name'];

             echo "Hello, $name"; ?>
        </h1>

        <h1>

            <?php echo "Hello, ". htmlspecialchars($_GET['name']);
            /* (<?=) is the same as <?php echo
                sanitize inputs by htmlspecialchars and other stuff
            */?>
        </h1>
    </header>

</body>

</html>
