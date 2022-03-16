<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update your Pokémon</title>
</head>
<body>
    <h1>Update your Pokémon!</h1>

<!--    for is equals to id-->
<!--    name is equals to server (key name from your $_GET)-->
    <form method="GET">
        <label for="pokemon_name">Pokémon name</label>
        <input type="text" id="pokemon_name" name="pokemon_name" value="">

        <label for="Level">Level</label>
        <input type="text" id="Level" name="Level">

        <label for="pokemon_type">Pokémon type</label>
        <input type="text" id="pokemon_type" name="pokemon_type">

        <label for="attack_damage">Attack damage</label>
        <input type="text" id="attack_damage" name="attack_damage">

        <input type="submit" name="action" value="update">
    </form>
</body>
</html>




