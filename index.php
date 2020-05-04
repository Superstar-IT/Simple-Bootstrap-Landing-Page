<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Énergies Pour Tous : Page d'accueil</title>
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style-magnific-popup.css" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="favy.png">

<!-- Global site tag (gtag.js) - Google Ads: 689895452 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-689895452"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-689895452'); </script>

</head>

<body>


    <!--begin home section -->
    <section class="home-section" id="home">


     <!--   <img src="logoenr.png" class="img-logo"> -->

        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-7-->
                <div class="col-md-7 padding-top-40">




                    <h3>
                        <font color="white">ISOLEZ VOTRE MAISON POUR 1€</font>
                    </h3>

                    <p>L'Etat finance l’isolation de votre logement, profitez-en !
                        Combles perdus, caves, sous-sols, garages souterrains, vide sanitaire etc.</p>

                    <ul class="home-benefits">

                        <li><i class="fas fa-check-circle"></i>Coût total 1€ symbolique</li>

                        <li><i class="fas fa-check-circle"></i>Artisans qualifiés RGE</li>

                        <li><i class="fas fa-check-circle"></i>Aucune démarche administrative</li>

                        <li><i class="fas fa-check-circle"></i>Surface illimitée</li>

                        <li><i class="fas fa-check-circle"></i>Jusqu'a 50% d'économies de chauffage</li>
                        <br />

                        <p> Énergies Pour Tous est un service proposé par l'entreprise ABC ÉNERGIES
qui dispose des agréments et du label RGE <b>« reconnu garant de l'environnement »</b>.</p>

                        <p><img src="logo-part.png" alt="">



                    </ul>

                </div>
                <!--end col-md-7-->

                <!--begin col-md-5-->
                <div class="col-md-5 wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                    <!--begin register-form-wrapper-->
                    <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                        <h3>Testez votre éligiblité :</h3>

                        <!--begin form-->
                        <div>

                            <!--begin success message -->
                            <p class="register_success_box" style="display:none;">We received your message and you'll
                                hear from us soon. Thank You!</p>

                            <form onsubmit="validate_form();return false" id="register-form" class="register-form register">
                                <p>
                                    J'habite&nbsp;:
                                </p>

                                <div class="row">
                                    <div class="col-lg-12 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <select name="house_type" id="id_house_type" class="register-input white-input">
                                            <option value="1">Une maison</option>
                                            <option value="2">Un appartement</option>
                                        </select>
                                    </div>
                                </div>

                                <p>
                                    Mes coordonnées&nbsp;:
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <input id="id_lastname" class="register-input white-input" placeholder="Nom" required />

                                    </div>
                                    <div class="col-lg-6 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <input id="id_firstname" class="register-input white-input" placeholder="Prénom" required />

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <input id="id_address" class="register-input white-input" placeholder="Adresse" required />

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <input id="id_zip" title="code postal sur 5 chiffres" class="register-input white-input" placeholder="Code postal" required pattern="[0-9]{5}" />

                                    </div>
                                    <div class="col-lg-8 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <input id="id_city" class="register-input white-input" placeholder="Ville" required />

                                    </div>
                                </div>

                                <p>
                                    Je reçois ma réponse personnalisée&nbsp;:
                                </p>

                                <div class="row">
                                    <div class="col-lg-6 has-feedback" style="padding-right:0;margin-bottom:7px">
                                        <input type="email" title="adresse e-mail valide" id="id_email" class="register-input white-input" placeholder="E-mail" required />

                                    </div>
                                        <div class="col-lg-6 has-feedback" style="padding-right:0;margin-bottom:7px">
                                            <input id="id_phone" title="10 chiffres uniquement" class="register-input white-input" style="" placeholder="Téléphone" required pattern="[\d]{10}" onblur="this.value=this.value.replace(/[^\d]/g, '')" />

                                        </div>


                                </div>
                                <input id="id_send_data" value="Vérifier mon éligibilité &gt;" class="register-submit" type="submit">
                      

                                <br /><br />
                                        <p><small>
                                        En soumettant ce formulaire, vos informations seront utilisées exclusivement dans le cadre de votre demande et comme décrit dans la <u><a href="politique-confidentialite.php">Politique de Confidentialité</a></u>.</small></p>
                            <!--end register form -->

                        </div>
                        <!--end form-->
      </form>
                    </div>
                    <!--end register-form-wrapper-->

                </div>
                <!--end col-md-5-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end home section -->

    <!--begin section-grey -->
    <section class="section-grey section-top-border" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <h2 class="section-title">Ils en parlent à la télé</h2>

                </div>
                <!--end col-md-12 -->
<br />
                <div class="col-md-6 video-player">

                    <img src="tf1.png"" width="136" height="49" title="Logo TF1" alt="Ils parlent de nous, logo TF1" class="so-widget-image" src-orig="https://i1.wp.com/isofoyer-1-euro.com/wp-content/uploads/2018/12/TF1_2013.svg_-e1546279500280.png?fit=137%2C50&amp;ssl=1" scale="0.6666666865348816">

                    <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/LuwMdy3hcIc?rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fisofoyer-1-euro.com&amp;widgetid=5"></iframe>
                </div>

                <div class="col-md-6 video-player">

                    <img src="france2.png" class="so-widget-image">

                    <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/_UxzyC1A_9k?rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fisofoyer-1-euro.com&amp;widgetid=4" width="196" height="110.25"></iframe>

                </div>

                <div class="col-md-6 video-player">

                    <img src="m6.png" width="65" height="50" title="Logo M6" alt="Ils parlent de nous, logo D8" class="so-widget-image">

                    <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/6p0TGG294Nw?rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fisofoyer-1-euro.com&amp;widgetid=3" width="196" height="110.25"></iframe>

                </div>

                <div class="col-md-6 video-player">

                    <img src="d8.png" width="48" height="50" title="Logo D8" alt="Ils parlent de nous, logo D8" class="so-widget-image">

                    <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/fzwzBl7sAxE?rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fisofoyer-1-euro.com&amp;widgetid=2" width="196" height="110.25"></iframe>

                </div>

                <div class="col-md-6 video-player">

                    <img src=bfm.png width="50" height="50" title="Logo BFMTV" alt="Ils parlent de nous, logo BFM TV" class="so-widget-image">

                    <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" src="https://www.youtube.com/embed/ur03Ra70aik?rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fisofoyer-1-euro.com&amp;widgetid=1" width="196" height="110.25"></iframe>

                </div>

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section-grey -->

    <!--begin section-white -->
    <section class="section-white section-top-border">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <div class="col-md-12 text-center padding-bottom-40">


<div align="left">
    <br />

                        <h2 class="section-title">Qui sommes-nous ?</h2>


    <p>

Énergies Pour Tous est un service proposé par l'entreprise ABC ÉNERGIES qui dispose des agréments et du label RGE « reconnu garant de l'environnement ». La société <b>ABC ÉNERGIES</b> a été créee en mai 2011 à Romans sur Isère dans la Drôme. <b>ABC ÉNERGIES</b> oeuvre dans le domaine de la rénovation énergetique, installation de systèmes solaires thermiques et photovoltaïques, chauffage respectueux de l'environnement par pompe à chaleur et l'isolation thermique des bâtiments.</p>
<p>

<p>
Notre entreprise dispose des agréments RGE pour le chauffage et l’isolation le label RGE « reconnu garant de l'environnement ». Ce label dédié aux rénovations énergétiques crée par l'état en 2011 atteste de la qualité de service et du professionnalisme de ces entreprises agréés.
</p>

<p>
ABC ÉNERGIES propose aujourd’hui aux particuliers de bénéficier par son intermédiaire des certificats d’économie d'énergies appelées encore CEE, instaurés par la loi Pople pollueur payeur qui permet aux particuliers de réaliser des travaux d'isolation pour une participation symbolique de 1€.
 </p>   

<p>Notre société dispose de 20 équipes composées chacunes de deux professionnels afin de réaliser des travaux d'isolation des habitations en combles, sous sol, garage ou encore isolation par l’extérieur.</p>

<p>Ainsi ces 40 professionnels de la rénovation énergétique sont basés sur nos dépôts de :
- Romans sur Isère<br />
- Feyzin<br />
- Bollene<br />
- Angouleme <br />
- Béziers<br /> 
- Strasbourg <br />
- Une équipe est même détachée pour les chantiers en île de France
</p>
<br />


                        <h2 class="section-title">ABC ÉNERGIES : En quelques chiffres</h2>
<p>

<b>ABC ÉNERGIES</b> en chiffres c'est aujourd’hui <br />
Plus de 50 particuliers isolés pour 1€ chaque jour
Plus de 10000 rénovations énergétiques réalisées chaque année<br />
Des milliers d'euros d économie pour les bénéficiaires<br />
Des milliers de tonnes de CO2 économisées pour la planète<br />
</p>
<br />

                        <h2 class="section-title">L'isolation à 1 euro symbolique</h2>


<p>
Grâce au dispositif du "Coup de Pouce Economies d'Energie"  mis en place par le gouvernement accompagné de plusieurs aides financières, notre objectif est de proposer au maximum de Français locataire ou propriétaire, l’accès au confort énergétique en réalisant des travaux de qualité à un prix symbolique d'1€. 
</p>

<p>
    Votre installation vous coûtera seulement 1 € symbolique : Vous n'aurez donc à fournir aucune avance de frais et l’installateur encaissera directement la prime versée par l'état. 
</p>
    </div> 



<div align="left">
<p>
   <b> Afin de pouvoir bénéficier de l’isolation, il est important de vérifier avec nos conseillers que vous répondez positivement aux 6 points suivants avant le passage des intervenants :</b>

 <br />
 <br />

1.       Je répond aux critères d'éligibiltié. <br />

2.       Je dispose de combles, de sous- sol, d’un garage ou d’un vide sanitaire à isoler. <br />

3.       Je n’ai pas bénéficié de ce programme durant les 3 dernières années
 <br />
4.       J’habite une maison construite il y’a plus de deux ans.

</p>

     </div>           </div>
                <!--begin col-md-6 -->
                <div class="col-md-6 padding-top-30">

                    <!--begin features-second -->
                    <div class="features-second">


                        <h4 class="margin-bottom-5">Isolation des combles perdus ou aménageable </h4>

                        <p>Ouvert à tous : propriétaire (résidence principale),
                            locataires, bailleurs.

                            <p>Votre maison dispose de combles perdus, facilement
                                accessibles (par une trappe par exemple).</p>

                    </div>
                    <!--end features-second-->

                    <!--begin features-second-->
                    <div class="features-second">



                        <h4 class="margin-bottom-5">Isolation des sous-sols, cave, garage sous l’habitation et vide sanitaire</h4>

                        <p>Ouvert à tous : propriétaire (résidence principale),
                            locataires, bailleurs.</p>

                    </div>
                    <!--end features-second-->




                </div>
                <!--end col-md-6-->

                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInRight" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: slideInRight;">

                    <img src="maison.png" class="width-100 box-shadow" alt="pic">

                </div>
                <!--end col-md-6-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end section-white -->

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">
                    <img src="logo-footer.png" width="240" height="138">
<p>Énergies Pour Tous est un service proposé par l'entreprise ABC ÉNERGIES<br />

<br />
<b>Adresse :</b> <br />ABC ÉNERGIES<br />1B Rue Danièle Casaova 26100 Romans-sur-Isère, France.<br />
<br />
<b>Contact :</b> <br />Téléphone : 0481092867<br />E-mail : contact@energiespourtous.fr<br />
    <p><b><a href="mentions-legales.php">Mentions légales</b></a><br />
    <b><a href="politique-confidentialite.php">Politique de confidentialité</a></b></p>
                    <p>Tous droits réservés © 2019 ABC ÉNERGIES </p>

                    <!--begin footer_social -->
                   
                    <!--end footer_social -->

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->

<script type="text/javascript" src="//opt-out.ferank.eu/tarteaucitron.js?domain=energiespourtous.fr&uuid=40264ff15e3f45f50019565789dba2794aea5de6"></script>

    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/main.js"></script>
    <script type='text/javascript' src="//wurfl.io/wurfl.js"></script>
</body>

</html>