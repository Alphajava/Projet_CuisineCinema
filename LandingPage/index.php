<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Landing Page</title>
    </head>
    <body>
        <div class="blockPage">
            <header>
                <img src="assets/images/Maquette-Landing-desktop_01.png" alt="" class=""/>
            </header>
            <div class="pitch">
                <p>Universal Studios - Hollywood, 2018.<br>
                Steven Spielberg est en plateau pour la réalisation de son dernier film.<br>
                Il fait appel à Gordon Ramsay pour assurer les repas de toute l'équipe.</p>
                <p>Cependant une vague d’intoxications frappe la majorité du staff et vient<br>interrompre le tournage...</p>
                <p>Fou de rage, Steven crie au sabotage, et se met en quête du coupable.</p>
                <p>Présent dans les studios, Georges Lucas jette de l’huile sur le feu en<br>pointant du doigt la qualité de la cuisine de Ramsay.<br>
                Piqué au vif, le Chef Etoilé nie en bloc. Il est inconcevable que sa<br>réputation soit remise en cause !</p>
                <p>La situation tourne au vinaigre.<br>
                Aidé du Chef Etchebest, Gordon Ramsay organise sa riposte ...</p>
            </div>
            <div class="compteur">
                <img src="assets/images/Maquette-Landing-desktop_03.png" alt="" class=""/>
                <p>LE COMPTE A REBOURS<br>A COMMENCE....</p>
                <!-- <img src="assets/images/Maquette-Landing-desktop_06.png" alt="" class="imageCompteur"/> -->
                <div>
                    DATE DE SORTIE<br>
                    JOUR MOIS ANNEE HEURE MINUTES SECONDES<br>
                    14 NOV 2018 
                    <script type="text/javascript" language="javascript">
                        d = new Date();
                        document.write(d.toLocaleDateString()+'  '+d.toLocaleTimeString()+'.');
                    </script>
                </div>
                <div id='timer' class="countdown-timer">
                    <div class="days">0</div>
                    <div class="hours">0</div>
                    <div class="minutes">0</div>
                    <div class="seconds">0</div>
                </div>
                <img src="assets/images/Maquette-Landing-desktop_09.png" alt="" class=""/>
            </div>
            <div class="blockForm">
                <p class="textForm">Duel of Giants sera disponible<br>gratuitement en ligne et à<br>petit prix en version plateau!</p>
                <p class="abonneToi">Abonne-toi vite à la newsletter</p>
                <form action="" method="post">
                    <input type="text" name="nom" id="" placeholder="NOM" required size="50%"><br><br><br>
                    <input type="text" name="email" id="" placeholder="EMAIL" required size="50%"><br><br><br>
                    <input type="submit" value="VALIDER">
                </form>
            </div>
            <footer>
                    <img src="assets/images/Maquette-Landing-desktop_11.png" alt="" class=""/>
                    <p class="mentionsLegales">MENTIONS LEGALES</p>
            </footer>
            
        </div>
        <script type="text/javascript" src="scripts/timer.js"></script>
    </body>
</html>