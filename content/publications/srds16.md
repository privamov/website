/*
Title: Adaptive Location Privacy with ALP
*/

## Adaptive Location Privacy with ALP

<hr />

* Published on September 2016, in the **35th Symposium on Reliable Distributed Systems (SRDS'16)**.
* *Download <span class="glyphicon glyphicon-file"></span> [the paper](%base_url%/media/srds16.pdf), <span class="glyphicon glyphicon-film"></span> [the slides](%base_url%/media/srds16-slides.pdf).*

<hr />

<p class="abstract" markdown="1">
With the increasing amount of mobility data being collected on a daily basis by location-based services (LBSs) comes a new range of threats for users, related to the over-sharing of their location information. To deal with this issue, several location privacy protection mechanisms (LPPMs) have been proposed in the past years. However, each of these mechanisms comes with different configuration parameters that have a direct impact both on the privacy guarantees offered to the users and on the resulting utility of the protected data. In this context, it can be difficult for non-expert system designers to choose the appropriate configuration to use. Moreover, these mechanisms are generally configured once for all, which results in the same configuration for every protected piece of information. However, not all users have the same behaviour, and even the behaviour of a single user is likely to change over time. To address this issue, we present in this paper ALP, a new framework enabling the dynamic configuration of LPPMs. ALP can be used in two scenarios: (1) *offline*, where ALP enables a system designer to choose and automatically tune the most appropriate LPPM for the protection of a given dataset; (2) *online*, where ALP enables the user of a crowd sensing application to protect consecutive batches of her geolocated data by automatically tuning an existing LPPM to fulfil a set of privacy and utility objectives. We evaluate ALP on both scenarios with two real-life mobility datasets and two state-of-the-art LPPMs. Our experiments show that the adaptive LPPM configurations found by ALP outperform both in terms of privacy and utility a set of static configurations manually fixed by a system designer.
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
    <p class="people-picture" markdown="1">![Antoine](%base_url%/media/people/anonymous.png)</p>
    <p class="people-info" markdown="1">
        [Antoine Boutet](https://liris.cnrs.fr/membres?idn=aboutet)<br />
        [antoine.boutet@liris.cnrs.fr](mailto:antoine.boutet@liris.cnrs.fr)
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
    <p class="people-picture" markdown="1">![Lionel](%base_url%/media/people/lionel.jpg)</p>
    <p class="people-info" markdown="1">
        [Lionel Brunie](http://liris.cnrs.fr/lionel.brunie/)
        [lionel.brunie@liris.cnrs.fr](mailto:lionel.brunie@liris.cnrs.fr)
    </p>
</div>
</div>

<hr />

### Source code and dataset

To allow the reproducibility of our experiments, as well as other researchers to reuse and extend our framework, we make the source code available publicly at [https://github.com/privamov/alp](https://github.com/privamov/alp). Source code is made available under the french [CeCILL](http://www.cecill.info/index.en.html) license, compatible with the GNU GPL license.

Datasets used in our paper are the following:

  * *Geolife*: [Data](http://research.microsoft.com/en-us/downloads/b16d359d-d164-469e-9fd4-daa38f2b2e13/), [user guide](http://research.microsoft.com/apps/pubs/?id=152176).
  * *MDC*: restricted diffusion, must [apply](https://www.idiap.ch/dataset/mdc).
