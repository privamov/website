/*
Title: Time Distortion Anonymization for the Publication of Mobility Data with High Utility
*/

## Time Distortion Anonymization for the Publication of Mobility Data with High Utility

<hr />

* Published on August 2015, in the **14th IEEE International Conference on Trust, Security and Privacy in Computing and Communications (TrustCom'15)**.
* *Download <span class="glyphicon glyphicon-file"></span> [the paper](%base_url%/media/trustcom15.pdf), <span class="glyphicon glyphicon-film"></span> [the slides](%base_url%/media/trustcom15-slides.pdf).*

<hr />

<p class="abstract" markdown="1">
An increasing amount of mobility data is being collected every day by different means, such as mobile applications or crowd-sensing campaigns. This data is sometimes published after the application of simple anonymization techniques (e.g., putting an identifier instead of the users’ names), which might lead to severe threats to the privacy of the participating users. Literature contains more sophisticated anonymization techniques, often based on adding noise to the spatial data. However, these techniques either compromise the privacy if the added noise is too little or the utility of the data if the added noise is too strong. We investigate in this paper an alternative solution, which builds on time distortion instead of spatial distortion. Specifically, our contribution lies in (1)&nbsp;the introduction of the concept of time distortion to anonymize mobility datasets (2)&nbsp;<em>Promesse</em>, a protection mechanism implementing this concept (3)&nbsp;a practical study of <em>Promesse</em> compared to two representative spatial distortion mechanisms, namely Wait For Me, which enforces k-anonymity, and Geo-Indistinguishability, which enforces differential privacy. We evaluate our mechanism practically using three real-life datasets. Our results show that time distortion reduces the number of points of interest that can be retrieved by an adversary to under 3 %, while the introduced spatial error is almost null and the distortion introduced on the results of range queries is kept under 13 % on average.

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