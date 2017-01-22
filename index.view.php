<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>Document</title>

</head>

<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
<<<<<<< HEAD
                    <strike>
                <?php endif; ?>

                <?= $task->description(); ?>

                <?php if ($task->completed) : ?>
                    </strike>
                <?php endif; ?>  
=======
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>

                    <?= $task->description(); ?>

                <?php endif; ?>
>>>>>>> decdff8fdc30ab0d33d452ad07d18bc5e0b3ef23
            </li>
            <?php endforeach; ?>
    </ul>

</body>

</html>
