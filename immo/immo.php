<?php

$tableau = [
    ["url" => "https://immobilier.lefigaro.fr/article/a-bordeaux-un-permis-de-construire-inedit-pour-cet-immeuble-de-9-etages_9130c504-fbb6-11ed-8627-d1ad55235ab0/", "image" => "https://i.f1g.fr/media/eidos/1300x701_crop/2023/06/05/XVM94b16250-0148-11ee-b331-ce262bc4a6ce.jpg", "price" => 10000, ["description" => "courte description 0", "description_longue" => "description longue 0"]],
    ["url" => "https://www.gqmagazine.fr/lifestyle/article/le-plus-bel-immeuble-du-monde-est-en-france", "image" => "https://media.gqmagazine.fr/photos/5e53f1c894cd35000818081f/16:9/w_1280,c_limit/0-3.jpg", "price" => 100000, ["description" => "courte description 1", "description_longue" => "description longue 1"]],
    ["url" => "https://vivreparis.fr/paris-les-immeubles-les-plus-plats-de-la-capitale/", "image" => "https://vivreparis.fr/wp-content/uploads/2019/09/immeuble-fin-paris-1.jpg", "price" => 189474908, ["description" => "courte description 2", "description_longue" => "description longue 2"]],
    ["url" => "https://www.illico-travaux.com/renovation/renovation-dimmeuble/", "image" => "https://www.illico-travaux.com/wp-content/uploads/2018/02/Immeuble2-1280x853.jpg", "price" => 10094943, ["description" => "courte description 3", "description_longue" => "description longue 3"]],
    ["url" => "https://www.ouest-france.fr/environnement/ecologie/transition-ecologique/votre-prochain-logement-dans-un-immeuble-en-bois-83fc32d4-6e88-11ee-97d6-d90367762e60", "image" => "https://media.ouest-france.fr/v1/pictures/MjAyMzExNDQ0YmQ3YTE4YmVlNGNiMWU1NmEzMGE3MTIwY2ZiM2Y?width=1260&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=9f5ddb4c4679592443c189a7e5b88d00f9d5b35724725f23ebb6aaef9eb60440", "price" => 300000, ["description" => "courte description 4", "description_longue" => "description longue 4"]]
];

for ($i = 0; $i < count($tableau); $i++) {
    print($tableau[$i])["price"];
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immo-Bîlome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>

    </header>
    <body>
        
    <section class="flex flex-wrap gap-5 justify-center rounded-2xl">         
        <?php foreach($tableau as $carte) { ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="<?php print $carte['image']?>" alt="<?php print $carte[0]['description_longue']?>">
            <div class="px-6 py-4">
            <div class=" mb-2 flex justify-between">
                <?php print $carte[0]['description']?>   
                <?php print number_format($carte['price'],2,',',','); ?>
            </div>
                <?php print $carte[0]['description_longue']?> 
            </div>
            </div>
            
        <?php } ?>
        </section>  
        
        
    </body>
    <footer>

    </footer>
</body>
</html>