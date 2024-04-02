<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-loop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <style type="text/css"> -->
    <?php
    $pokemons = ["infernape", "burmy", "porygon", "dracozolt", "zoroark"];
    $images = ["https://assets.pokemon.com/assets/cms2/img/pokedex/full/392.png", 
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/412.png",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/137.png", 
    "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/880.png", 
    "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/571.png"];


    
    for ($i = 0; $i < count($pokemons); $i++ ) {
        // foto's // 
        echo $i .  " - " . $images[$i] . "<br/>";
        echo  "<img src='$images[$i]' alt=''>";
        // h1 // 
      echo "<h1> $pokemons[$i] </h1>";
    }
    ?>
   
</body>
</html>