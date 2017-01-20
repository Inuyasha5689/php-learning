<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>Document</title>

</head>

<body>

    <h1>Task For The Day</h1>

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?= $task['due']; ?>
        </li>
        <li>
            <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>
        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incompletee'; ?>
        </li>
    </ul>

</body>

</html>
