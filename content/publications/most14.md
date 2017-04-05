/*
Title: Differentially Privacy Location Privacy in Practice
*/

## Differentially Privacy Location Privacy in Practice

<hr />

* Published on May 2014, in **MOBILE SECURITY TECHNOLOGIES workshop (MOST)**, co-located with the **35th IEEE Symposium on Security and Privacy (S&P'14)**.
* *Download <span class="glyphicon glyphicon-file"></span> [the paper](%base_url%/media/most14.pdf), <span class="glyphicon glyphicon-film"></span> [the slides](%base_url%/media/most14-slides.pdf).*

<hr />

<p class="abstract" markdown="1">
With the wide adoption of handheld devices (e.g., smartphones, tablets), a large number of location-based services (also called LBSs) have flourished providing mobile users with real-time and contextual information on the move. Accounting for the amount of location information they are given by users, these services are able to track users wherever they go and to learn sensitive information about them (e.g., their points of interest including home, work, religious or political places regularly visited). A number of solutions have been proposed in the past few years to protect users location information while still allowing them to enjoy geo-located services. Among the most robust solutions are those that apply the popular notion of *differential privacy* to location privacy (e.g., *Geo-Indistinguishability*), promising strong theoretical privacy guarantees with a bounded accuracy loss. While these theoretical guarantees are attracting, it might be difficult for end users or practitioners to assess their effectiveness in the wild. In this paper, we carry on a practical study using real mobility traces coming from two different datasets, to assess the ability of Geo-Indistinguishability to protect users' points of interest (POIs). We show that a curious LBS collecting obfuscated location information sent by mobile users is still able to infer most of the users POIs with a reasonable both *geographic* and *semantic* precision. This precision depends on the degree of obfuscation applied by Geo-Indistinguishability. Nevertheless, the latter also has an impact on the overhead incurred on mobile devices resulting in a privacy versus overhead trade-off. Finally, we show in our study that POIs constitute a quasi-identifier for mobile users and that obfuscating them using Geo-Indistinguishability is not sufficient as an attacker is able to re-identify at least 63&nbsp;% of them despite a high degree of obfuscation.
</p>

<div class="container people">
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Vincent](%base_url%/media/people/vincent.jpg)</p>
    <p class="people-info" markdown="1">
        [Vincent Primault](https://liris.cnrs.fr/membres?idn=vprimaul)<br />
        [vincent.primault@liris.cnrs.fr](mailto:vincent.primault@liris.cnrs.fr)
    </p>
</div>
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Sonia](%base_url%/media/people/sonia.jpg)</p>
    <p class="people-info" markdown="1">
        [Sonia Ben Mokhtar](https://sites.google.com/site/soniabm/)<br />
        [sonia.ben-mokhtar@liris.cnrs.fr](mailto:sonia.ben-mokhtar@liris.cnrs.fr)
    </p>
</div>
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Cédric](%base_url%/media/people/cedric.jpg)</p>
    <p class="people-info" markdown="1">
        [Cédric Lauradoux](http://planete.inrialpes.fr/~lauradou/)<br />
        [cedric.lauradoux@inria.fr](mailto:cedric.lauradoux@inria.fr)
    </p>
</div>
<div class="col-sm-3">
    <p class="people-picture" markdown="1">![Lionel](%base_url%/media/people/lionel.jpg)</p>
    <p class="people-info" markdown="1">
        [Lionel Brunie](http://liris.cnrs.fr/lionel.brunie/)
        [lionel.brunie@liris.cnrs.fr](mailto:lionel.brunie@liris.cnrs.fr)
    </p>
</div>
</div>