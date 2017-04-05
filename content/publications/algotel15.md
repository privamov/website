/*
Title: Privamov : Suivi d’utilisateurs mobiles et reconstruction de trajectoires
*/

## Privamov : Suivi d’utilisateurs mobiles et reconstruction de trajectoires

<hr />

* Published on June 2015, in **17èmes Rencontres Francophones sur les Aspects Algorithmiques des Télécommunications**.
* *Download <span class="glyphicon glyphicon-file"></span> [the paper](%base_url%/media/algotel15.pdf) (in french).*

<hr />

<p class="abstract" markdown="1">
Afin de mieux penser les réseaux du futur, il est nécessaire de comprendre la relation qu’ont les utilisateurs avec le réseau, ainsi que la mobilité urbaine. Cette analyse peut être réalisée grâce à l’étude de données collectées au travers de divers capteurs du téléphone (GPS, modules sans fil, etc.). Une utilisation intensive de ces éléments diminue l’autonomie des téléphones mobiles. Cet article étudie l’impact de la diminution de la fréquence d’utilisation de la puce GPS sur la précision de la reconstruction de la trajectoire des utilisateurs. Nous avons distribué des téléphones munis d’une application permettant de collecter ces informations en continu. Suite à ces déploiements, nous pou- vons simuler une fréquence d’activation du GPS moins élevée en sous-échantillonnant les données de localisation collectées. Nous avons ensuite eu recours à des méthodes d’interpolation linéaire et cubique pour reconstruire la trajectoire des utilisateurs. Nous faisons varier les valeurs des périodes de sous-échantillonnage et analysons comment l’erreur d’interpolation évolue avec l’augmentation de la période de sous-échantillonnage. Nous réalisons une première étude sur la totalité de la mesure, puis nous restreignons aux périodes où l’utilisateur n’est pas statique. Les résultats obtenus montrent que la collecte d’une mesure par quart d’heure permet de reconstruire la trajectoire avec un niveau d’erreurs acceptable.
</p>

<div class="container people">
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Patrice](%base_url%/media/people/anonymous.png)</p>
    <p class="people-info" markdown="1">
        Patrice Raveneau<br />
        [patrice.raveneau@inria.fr](mailto:patrice.raveneau@inria.fr)
    </p>
</div>
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Andrea](%base_url%/media/people/anonymous.png)</p>
    <p class="people-info" markdown="1">
        Andrea Caballero<br />
        [andrea.caballero@insa-lyon.fr](mailto:andrea.caballero@insa-lyon.fr)
    </p>
</div>
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Razvan](%base_url%/media/people/razvan.jpg)</p>
    <p class="people-info" markdown="1">
        [Razvan Stanica](http://perso.citi.insa-lyon.fr/rstanica/index.html)<br />
        [razvan.stanica@inria.fr](mailto:razvan.stanica@inria.fr)
    </p>
</div>
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Hervé](%base_url%/media/people/herve.jpg)</p>
    <p class="people-info" markdown="1">
        [Hervé Rivano](http://perso.citi.insa-lyon.fr/hrivano/)
        [herve.rivano@inria.fr](mailto:herve.rivano@inria.fr)
    </p>
</div>
</div>