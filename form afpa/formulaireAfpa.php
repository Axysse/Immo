<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="LOGO-AFPA-VERT-PNG.png" alt="logo de l'afpa">
    <form action="log.php" method="post">
        <section class="panneau_1">
            <ul>
                <li>
                    <label for='name'></label>
                    <input type="text" id='name' name="user_name" placeholder="Nom - Prénom">
                </li>
                <li>
                    <label for="mail"></label>
                    <input type="email" id="mail" name="user_mail" placeholder="Courriel">
                </li>
                <li>
                    <label for="tel"></label>
                    <input type="tel" id="tel" name="user_tel" placeholder="Téléphone">
                </li>
                <li>
                    <label for="situation"></label>
                    <select id="situation" name="user_situation">
                        <option value="stagiaire">Stagiaire</option>
                        <option value="salarié">Salarié</option>
                    </select>
                </li>
                <li>
                    <label for="comm"></label>
                    <textarea cols="60" rows="12" id="comm" name="user_comm" placeholder="commentaire"></textarea>
                </li>
            </ul>
        </section>
        <section class="panneau_2">
            <article class="contact">
                <p>Quelle est la meilleure manière de vous contacter?</p>
                <ul>
                    <li>
                        <label for="téléphone">Téléphone</label>
                        <input type="radio" id="téléphone" name="user_choice" value="Téléphone">
                    </li>
                    <li>
                        <label for="courriel">Courriel</label>
                        <input type="radio" id="courriel" name="user_choice" value="Courriel">
                    </li>
                </ul>
            </article>
            <article class="jours">
                <p>Jours de la semaine ou vous êtes disponible.</p>
                <ul>
                    <li>
                        <label for="lundi">Lundi</label>
                        <input type="checkbox" id="lundi" name="jour" value="Lundi">
                    </li>
                    <li>
                        <label for="mardi">Mardi</label>
                        <input type="checkbox" id="mardi" name="jour" value="Mardi">
                    </li>
                    <li>
                        <label for="mercredi">Mercredi</label>
                        <input type="checkbox" id="mercredi" name="jour" value="Mercredi">
                    </li>
                    <li>
                        <label for="jeudi">Jeudi</label>
                        <input type="checkbox" id="jeudi" name="jour" value="Jeudi">
                    </li>
                    <li>
                        <label for="vendredi">Vendredi</label>
                        <input type="checkbox" id="vendredi" name="jour" value="Vendredi">
                    </li>
                </ul>
            </article>
            <article class="heure">
                <p>Heure appropriée pour un rendez-vous.</p>
                <ul>
                    <li>
                        <label for="matin">Matin</label>
                        <input type="checkbox" id="matin" name="heure" value="Matin">
                    </li>
                    <li>
                        <label for="après_midi">Après-Midi</label>
                        <input type="checkbox" id="jeudi" name="heure" value="Après-midi">
                    </li>
                </ul>
            </article>
        </section>
        <section class="envoyer">
            <input type="submit" name="submit" value="Envoyer">
        </section>
    </form>

</body>

</html>