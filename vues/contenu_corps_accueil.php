<div class="container contenu">

    <h2>Rejoignez nous sur les réseaux sociaux ! </h2>
    <a href="https://www.facebook.com/UA2K12?fref=ts"><img src="images/social/facebook.round.png" alt="facebook" /></a>
    <a href="https://twitter.com/UTTNetGroup"><img src="images/social/twitter.round.png" alt="twitter" /></a>
    <a href="http://www.youtube.com/channel/UCm8nToPe0gc0zlUa-gAxvEA"><img src="images/social/youtube.round.png" alt="youtube" /></a>

    <br/><br/>

    <div id="compte_a_rebours">

<noscript>Fin de l'évènement le 1er janvier 2013.</noscript>
<script type="text/javascript">
function compte_a_rebours()
{
    var compte_a_rebours = document.getElementById("compte_a_rebours");

    var date_actuelle = new Date();
    var date_evenement = new Date("Oct 1 12:00:00 2013");
    var total_secondes = (date_evenement - date_actuelle) / 1000;

    var prefixe = "Les inscriptions seront lançées dans ";
    if (total_secondes < 0)
    {
        prefixe = "Les inscriptions ont commençé.";

    }

    if (total_secondes > 0)
    {
        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

        var et = "et";
        var mot_jour = "jours,";
        var mot_heure = "heures,";
        var mot_minute = "minutes,";
        var mot_seconde = "secondes";

        if (jours == 0)
        {
            jours = '';
            mot_jour = '';
        }
        else if (jours == 1)
        {
            mot_jour = "jour,";
        }

        if (heures == 0)
        {
            heures = '';
            mot_heure = '';
        }
        else if (heures == 1)
        {
            mot_heure = "heure,";
        }

        if (minutes == 0)
        {
            minutes = '';
            mot_minute = '';
        }
        else if (minutes == 1)
        {
            mot_minute = "minute,";
        }

        if (secondes == 0)
        {
            secondes = '';
            mot_seconde = '';
            et = '';
        }
        else if (secondes == 1)
        {
            mot_seconde = "seconde";
        }

        if (minutes == 0 && heures == 0 && jours == 0)
        {
            et = "";
        }

        compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure + ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
    }
    else
    {
        compte_a_rebours.innerHTML = 'Les inscriptions ont commençé.';
    }

    var actualisation = setTimeout("compte_a_rebours();", 1000);
}
compte_a_rebours();
</script>



    </div>
</div>
