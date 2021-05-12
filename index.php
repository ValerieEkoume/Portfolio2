<?php

include 'mail.php';
include 'download.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio 2</title>
    <meta name="viewport" content="widthdevice-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Page Loader  Start -->
<div class="page-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- Page Loader  End -->

<!-- Background Circles  Start -->

<div class="bg-circles">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="circle-4"></div>
</div>

<!-- Background Circles  End -->
    
<!-- Overlay Start -->
<div class="overlay">

</div>

<!-- Overlay End -->


<!-- Main Start -->

<div class="main hidden">

    <!-- Header Start -->
    <header class="header">
        <div class="container">
            <div class="row flex-end">
                <button type="button" class="nav-toggler">
                    <span></span>
                </button>
                <nav class="nav">
                  <div class="nav-inner">
                      <ul>
                         <li><a href="#home" class="nav-item link-item">Home</a></li>
                          <li><a href="#about" class="nav-item link-item">A propos</a></li>
                          <li><a href="#portfolio" class="nav-item link-item">portfolio</a></li>
                          <li><a href="#contact" class="nav-item link-item">contact</a></li>
                      </ul>
                  </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Home section start -->
    <section class="home-section align-items-center" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="home-text">
                <p>Bonjour, Je m'appelle</p>
                <h1> Valérie Ekoume</h1>
                <h2>Web Designer</h2>
                <a href="#about" class="btn link-item">A propos de moi</a>
                <a href="#portfolio" class="btn link-item">portfolio</a>
            </div>
            <div class="home-img">
                <div class="img-box">
                    <img src="images/LogoVal.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- Home section end -->

    <!-- About section start -->
    <section class="about-section sec-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>A propos</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <div class="img-box">
                        <img src="images/LogoVal.jpg" alt="">
                    </div>
                </div>
                <div class="about-text">
                    <p>
                        ARTISTE.
                        <br>
                        Si vous me demandez de me définir au travers d'un seul mot, c'est
                        sans aucun doute celui-là que je choisirais.
                        L'avenir appartient aux créatifs ceux qui sont capable de créer et de ce réinventer,
                        c'est ce que l'on dit souvent et mes expériences mon permis de réaliser que c'est tout à fait
                        juste. Notamment dans le  Web design qui est le domaine de création par excellence
                        tant les possibilités sont infinies. Lorsqu'on commence à explorer toutes les possibilités
                        offerte par les technologies disponibles, on comprends très vite qu'il n'y a pas de limites.
                        L'objectif étant de mettre toutes ces possibilités infinies au service du client.


                    </p>
                    <h3>skills</h3>
                    <div class="skills">
                        <div class="skills-items">html</div>
                        <div class="skills-items">css</div>
                        <div class="skills-items">javascript</div>
                        <div class="skills-items">bootstrap</div>
                        <div class="skills-items">php</div>
                        <div class="skills-items">symfony</div>
                        <div class="skills-items">webpack</div>
                        <div class="skills-items">wordpress</div>
                    </div>

                    <div class="about-tabs">
                        <button type="button" class="tab-item active" data-target="#education">education</button>
                        <button type="button" class="tab-item" data-target="#expérience">expériences</button>
                    </div>

                    <!-- Education start -->

                    <div class="tab-content active" id="education">
                        <div class="timeline">
                            <div class="timeline-item">
                                <span class="date">1999 - 2000 </span>
                                <h4>Deug d'Anglais</h4> - <span>Université Charles V</span>
                                <p>Civilisation étrangère</p>
                            </div>
                            <div class="timeline-item">
                                <span class="date">2015 </span>
                                <h4>Formation Création d'Entreprise</h4> - <span>CFA de Vesoul</span>
                                <ul>
                                    <li>Stratégie Commerciale </li>
                                    <li>Gestion/Comptabilité</li>
                                    <li>Communication</li>
                                </ul>
                            </div>
                            <div class="timeline-item">
                                <span class="date">2020 - 2021 </span>
                                <h4> Formation Web Design</h4> - <span>ONLINE FORMAPRO</span>
                                <ul>
                                    <li>Elaboration un outil de communication numérique</li>
                                    <li>Création d'un outil de communication numérique </li>
                                    <li>Gestion et suivi de l'outil</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Education end -->

                    <!-- Expérience start -->
                    <div class="tab-content" id="expérience">
                        <div class="timeline">
                            <div class="timeline-item">
                                <span class="date">2013 - 2016</span>
                                <h4>web developer - <span>ValDesign</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eligendi nisi
                                    voluptatum! Accusamus adipisci aliquam architecto atque consequuntur dolor dolore
                                </p>
                            </div>
                            <div class="timeline-item">
                                <span class="date">2013 - 2016</span>
                                <h4>web developer - <span>ValDesign</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eligendi nisi
                                    voluptatum! Accusamus adipisci aliquam architecto atque consequuntur dolor dolore
                                </p>
                            </div>
                            <div class="timeline-item">
                                <span class="date">2013 - 2016</span>
                                <h4>web developer - <span>ValDesign</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eligendi nisi
                                    voluptatum! Accusamus adipisci aliquam architecto atque consequuntur dolor dolore
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Expérience end -->
                    <a href="download.php?file=ValerieEkoumeCV2021.pdf" target="_blank" class="btn">télécharger cv</a>
                    <a href="#contact" class="btn link-item">me contacter</a>
                </div>
            </div>
        </div>

    </section>
    <!-- About section end -->

    <!-- Portfolio section start -->
    <section class="portfolio-section sec-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Travail récent</h2>
                </div>
            </div>
            <div class="row">
                <!-- Portfolio Item Start -->
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="images/portfolio/1.jpg" alt="portfolio-item-thumbnail">
                    </div>
                    <h3 class="portfolio-item-title">Guy Nwogang Website</h3>
                    <button type="button" class="btn view-project-btn">voir le projet</button>
                    <div class="portfolio-item-details">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor
                                doloremque excepturi harum illum itaque nostrum pariatur provident quia veniam! Aliquam
                                aperiam asperiores commodi, debitis doloremque dolores doloribus ea ex harum iure maiores
                                necessitatibus nemo non nostrum nulla odio omnis perspiciatis placeat qui quibusdam
                                repellat reprehenderit suscipit tempore vel velit!
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Créé le - <span>17 mars 2021</span></li>
                                <li>Technologie utilisées - <span>html, css, js, symfony</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>Visitez le site en ligne <span><a href="#" target="_blank">www.GuyNwogang.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio section End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="images/portfolio/2.jpg" alt="portfolio-item-thumbnail">
                    </div>
                    <h3 class="portfolio-item-title">Val2Valprod website</h3>
                    <button type="button" class="btn view-project-btn">voir le projet</button>
                    <div class="portfolio-item-details">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor
                                doloremque excepturi harum illum itaque nostrum pariatur provident quia veniam! Aliquam
                                aperiam asperiores commodi, debitis doloremque dolores doloribus ea ex harum iure maiores
                                necessitatibus nemo non nostrum nulla odio omnis perspiciatis placeat qui quibusdam
                                repellat reprehenderit suscipit tempore vel velit!
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Créé le - <span>25 avril 2021</span></li>
                                <li>Technologie utilisées - <span>Wordpress</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>Visitez le site en ligne <span><a href="#" target="_blank">www.GuyNwogang.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="images/portfolio/3.jpg" alt="portfolio-item-thumbnail">
                    </div>
                    <h3 class="portfolio-item-title">PC Repare Online</h3>
                    <button type="button" class="btn view-project-btn">voir le projet</button>
                    <div class="portfolio-item-details">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor
                                doloremque excepturi harum illum itaque nostrum pariatur provident quia veniam! Aliquam
                                aperiam asperiores commodi, debitis doloremque dolores doloribus ea ex harum iure maiores
                                necessitatibus nemo non nostrum nulla odio omnis perspiciatis placeat qui quibusdam
                                repellat reprehenderit suscipit tempore vel velit!
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Créé le - <span>04 janvier 2021</span></li>
                                <li>Technologie utilisées - <span>html, css, js, symfony</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>Visitez le site en ligne <span><a href="#" target="_blank">www.GuyNwogang.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="images/portfolio/4.jpeg" alt="portfolio-item-thumbnail">
                    </div>
                    <h3 class="portfolio-item-title">jardinage Website</h3>
                    <button type="button" class="btn view-project-btn">voir le projet</button>
                    <div class="portfolio-item-details">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor
                                doloremque excepturi harum illum itaque nostrum pariatur provident quia veniam! Aliquam
                                aperiam asperiores commodi, debitis doloremque dolores doloribus ea ex harum iure maiores
                                necessitatibus nemo non nostrum nulla odio omnis perspiciatis placeat qui quibusdam
                                repellat reprehenderit suscipit tempore vel velit!
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Créé le - <span>13 décembre 2020</span></li>
                                <li>Technologie utilisées - <span>html, css, js, symfony</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>Visitez le site en ligne <span><a href="#" target="_blank">www.GuyNwogang.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="images/portfolio/5.jpg" alt="portfolio-item-thumbnail">
                    </div>
                    <h3 class="portfolio-item-title">Yoga website</h3>
                    <button type="button" class="btn view-project-btn">voir le projet</button>
                    <div class="portfolio-item-details">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor
                                doloremque excepturi harum illum itaque nostrum pariatur provident quia veniam! Aliquam
                                aperiam asperiores commodi, debitis doloremque dolores doloribus ea ex harum iure maiores
                                necessitatibus nemo non nostrum nulla odio omnis perspiciatis placeat qui quibusdam
                                repellat reprehenderit suscipit tempore vel velit!
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Créé le - <span>17 mars 2021</span></li>
                                <li>Technologie utilisées - <span>html, css, js, symfony</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>Visitez le site en ligne <span><a href="#" target="_blank">www.GuyNwogang.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item">
                    <div class="portfolio-item-thumbnail">
                        <img src="images/portfolio/6.jpg" alt="portfolio-item-thumbnail">
                    </div>
                    <h3 class="portfolio-item-title">Evenementiel website</h3>
                    <button type="button" class="btn view-project-btn">voir le projet</button>
                    <div class="portfolio-item-details">
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolor
                                doloremque excepturi harum illum itaque nostrum pariatur provident quia veniam! Aliquam
                                aperiam asperiores commodi, debitis doloremque dolores doloribus ea ex harum iure maiores
                                necessitatibus nemo non nostrum nulla odio omnis perspiciatis placeat qui quibusdam
                                repellat reprehenderit suscipit tempore vel velit!
                            </p>
                        </div>
                        <div class="general-info">
                            <ul>
                                <li>Créé le - <span>5 avril 2021</span></li>
                                <li>Technologie utilisées - <span>html, css, js, symfony</span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>Visitez le site en ligne <span><a href="#" target="_blank">www.GuyNwogang.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio item End -->

            </div>
        </div>

    </section>
    <!-- Portfolio section end -->

    <!-- Contact section start -->
    <section class="contact-section sec-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>contactez-moi</h2>
                </div>
            </div>
            <div class="row">
                <div class="contact-form">
                    <form action="mail.php" name="myForm" class="msgError form-group" onsubmit="return validateForm()" method="POST" >
                        <div class="row">
                            <div class="input-group">

                                <input type="text" placeholder="Nom" class="input-control" name="name" id="name" required>
                            </div>

                            <div class="input-group">

                                <input type="text" placeholder="Email" class="input-control" name="email" id="email" required>
                            </div>
                            <div class="input-group">

                                <input type="text" placeholder="Sujet" class="input-control" name="sujet" required>
                            </div>
                            <div class="input-group">

                                <textarea placeholder="Message" class="input-control" name="message" required></textarea>
                            </div>
                            <div class="submit-btn">
                               <button type="submit" class="btn">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact-info">
                    <div class="contact-info">
                        <div class="contact-info-item">
                           <h3>Email</h3>
                            <p>valerie.ekoume@gmail.com</p>
                        </div>
                        <div class="contact-info-item">
                            <h3>Téléphone</h3>
                            <p>+33 6 038 179 56</p>
                        </div>
                        <div class="contact-info-item">
                            <h3>Email</h3>
                            <p>Suivez-moi</p>
                            <div class="social-links">
                                <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Contact section end -->



</div>
<!-- Main end -->

<!-- Portfolio Item details Pop Up  Start -->
    <div class="portfolio-popup">
        <div class="pp-inner">
            <div class="pp-content">
                <div class="pp-header">
                    <button type="button" class="btn pp-close"><i class="fas fa-times"></i></button>
                    <div class="pp-thumbnail">
                        <img src="images/portfolio/3.jpg" alt="">
                    </div>
                    <h3></h3>
                </div>
                <div class="pp-body">

                </div>

            </div>
        </div>

    </div>

<!-- Portfolio Item details Pop up  End -->




<script src="js/script.js"></script>
</body>

</html>