<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Lista de usuários</h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user['name']?> - <?= $user['birth']?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>