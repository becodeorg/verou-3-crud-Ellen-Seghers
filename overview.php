<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

    <h1>Goodcard - track your collection of Pokémon cards</h1>

    <ul>
        <?php foreach ($cards as $card) : ?>
            <li><?= $card['pokemon_name'] ?></li>
            <li><?= $card['Level'] ?></li>
            <li><?= $card['pokemon_type'] ?></li>
            <li><?= $card['attack_damage'] ?></li>
            <a href="index.php?action=edit&id=<?= $card['id'] ?>">Edit</a>
            <a href="index.php?action=delete&id=<?= $card['id'] ?>">Delete</a>
        <?php endforeach; ?>
    </ul>

<!--    for is equals to id-->
<!--    name is equals to server-->
    <form method="GET">
        <label for="pokemon_name">Pokémon name</label>
        <input type="text" id="pokemon_name" name="pokemon_name">

        <label for="Level">Level</label>
        <input type="text" id="Level" name="Level">

        <label for="pokemon_type">Pokémon type</label>
        <input type="text" id="pokemon_type" name="pokemon_type">

        <label for="attack_damage">Attack damage</label>
        <input type="text" id="attack_damage" name="attack_damage">
        <input type="submit" name="action" value="create">
    </form>
</body>
</html>