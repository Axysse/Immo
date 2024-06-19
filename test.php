<?php

$chemin1 = "aventure";
$chemin2 = "oui";
$chemin3 = "desespoir";
$chemin4 = "village";
$chemin5 = "oui";

print "Vous vous réveillez d'un songe à la frontière entre la plus douce des réveries d'ivrogne et le coma éthylique plein d'éspoir en l'avenir,ventre gonflé par le houblon et vos poches deserté du moinde sou. Peut-être serait-il temps de bouger son d'ici céan?";


if ($chemin1 == "aventure") {
    print " L'esprit embrumé mais pas encore complétement felé, vous partez accomplir votre destinée de héros de Isekaï de merde, et rêvez déjà de votre futur harem entre deux rots.";
} else {
    print " A quoi bon se casser les fesses pour des chiméres? La réalité de votre fessier vissé sur un tabouret et de votre gosier s'emplissant de boère semble bien plus terre à terre. FIN COMA ETHYLIQUE.";
    exit;
}

print " EH TOI! Par ici gamin! Un étrange personnage encagoulé vous saisi par le collet alors que vous vous apprêtez à partir d'un pas galant.";

if ($chemin2 == "oui") {
    print " Grand bien t'en fasse. Déclare l'ombre en vous glissant la fiole dans la main. Circonspet, à peine sûr de comprendre ce qu'il vous arrive et toujours en train se déssaouler, vous engloutissez l'étrange liquide aux teintes azur d'un trait. Ca alors! Ce n'était pas de lamort aux rats finalement, mais bien un déssoulant! Et très efficace acec ça! Revigoré et en pleine possesion de vos moyens (chose qui n'était pas arrivé depuis des années vous vous dirigez vers la sortie de la ville mais ou aller? Aux abords de la cité il n'y a que deux choix: la fôret du désespoir profond ou le marécage de la désolation.";
} else {
    print " Pour toute réponse vous làchez un gigantesque rot au visage de l'homme encagoulé qui s'évanuit sur le champ, brisant sur le pavé la fiole et séversant ainsi au rofit du caniveau le précieux contenu. Toujours ivre vous vous éffondrez à votre tour et pourissez à jamais dans le caniveau. FIN CANIVEAU";
    exit;
}

if ($chemin3 == "desespoir") {
    print " Plein d'entrain vous pénetrez la lisière en chantant un air guilleret. Mais bien vite la réalité vous rattrape et l'écrasante vérité vous tombe dessus. Vous êtes sobre et lucide. Vous ne pouvez vous empéchez de questionner tout les choix de vie que vous avez fait et qui vous ont menés jusqu'ici. Il fait soif d'un coup. Après de longues heures à geindre tout seul en marchant, vous sortez enfin de la fôret et le soleil soudain éclaire le chemin autrefois obscurcit par la canopéé vous voyez...";
    } else {
        print " A peine arrivé dans ce bourbier que vous vous enfoncez déjà. Et malgré tout vos efforts et votre nouvelle sobriété vous vous enfoncez sans fin. Ha si il ya une fin: la vôtre. FIN MARAIS.";
        exit;
    }
   
if ($chemin4 == "eglise") {
    print " Vous ne voyez que l'imposante flèche d'une église et vous vous dites soudain que rien ne pourra rattrape run vie de péchés sinon le toucher divin. Vous frappez à la porte et celle-ci glisse doulouresment sur ses gonds, révelant le visage aimable du clerc qui vous acceuille. MAis pas de bol il déteste les ivrognes. Dans une grimace de haine pure il vous fait une balayette et vous tabasse au sol. Vous ne pouvez que vous abritez péniblment de ses coups en pleurant. FIN DE MERDE.";
    exit;
} else {
    print " Le village est en liesse et vous vous en moquez bien trop affairé à vous apitoyez sur votre sort. Indifférent au bonheur vous entourez, le méprisant même, vous vous trouvez un banc pas trop incomfortable et vosu vous affaissez dessus. Ne désirant que l'oubli ou une bonne pinte. Mais une ombre s'approche... 'Besoin d'un coup de main? vous propose t-elle.";
}

if ($chemin5 == "oui") {
    print "Accepter une main tendue? Pourquoi pas, vous n'avez plus rien à perde.";
} else {
    "Casse toi pov' con! Hurlez-vous sans ménagement pour la bonne âme venue vous préter main forte. Vous vous enfoncez ensuite dans un profond sommeil. Quand vous ovus réveillez vous êtes assis, le fessier vissé sur un tabouret, une pinte à la main. FIN POIVREAU";
    exit;
}

print "Après de nombreuses années de combat vous vous sentez mieux que jamais Le sympathique étranger vous a guidé au bureau des AAA et maintenant vous apprenez à vivre votre vie un jour à la fois. FIN HEUREUSE(?)";
?>