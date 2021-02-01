<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ESTI Note | Bienvenu</title>
        <link rel="icon" href="../Assets/images/fav.png" type="image/png" sizes="16x16"> 
        
        <link rel="stylesheet" href="../Assets/css/color.css">
        <link rel="stylesheet" href="../Assets/css/main.min.css">
        <link rel="stylesheet" href="../Assets/css/style.css">
        <link rel="stylesheet" href="../Assets/css/responsive.css">
    </head>
    <body>
        <div class="theme-layout">
            <div class="responsive-header">
                <div class="mh-head first Sticky">
                    <span class="mh-btns-left"><a class="" href="#menu"><i class="fa fa-align-justify"></i></a></span>
                    <span class="mh-text"><img src="../Assets/images/logo.png" width="100" alt=""></span>
                </div>
                <div class="mh-head second">
                    <form class="mh-form">
                        <input placeholder="search" />
                        <a href="#/" class="fa fa-search"></a>
                    </form>
                </div>
                <nav id="menu" class="res-menu">
                    <ul>
                        <li><span><a href="#" title="">Acceuil</a></span></li>
                        <li><span><a href="#" title="">Liste</a></span></li>
                        <li><span><a href="#" title="">Historique</a></span></li>
                        <li><span><a href="#" title="">Ajout de note</a></span></li>
                    </ul>
                </nav>
            </div>
            
            <div class="topbar stick">
                <div class="logo">
                    <img src="../Assets/images/logo.png" alt="">
                </div>
                <div class="top-area">
                    <ul class="main-menu">
                        <li><a href="../Views/welcome.php" title="">Acceuil</a></li>
                        <li><a href="../Views/liste.php" title="">Liste</a></li>
                        <li><a href="" title="">Historique</a></li>
                        <li><a href="../Views/ajout.php" title="">Ajout de note</a></li>
                    </ul>
                    <ul class="setting-area">
                        <li>
                            <a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
                            <div class="searched">
                                <form method="post" class="form-search">
                                    <input type="text" placeholder="Search Friend">
                                    <button data-ripple><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="" title="Home" data-ripple=""><i class="ti-home"></i></a>
                        </li>
                        <!-- <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                            <div class="dropdowns languages">
                                <a href="#" title=""><i class="ti-check"></i>English</a>
                                <a href="#" title="">Arabic</a>
                                <a href="#" title="">Dutch</a>
                                <a href="#" title="">French</a>
                            </div>
                        </li> -->
                    </ul>
                    <div class="user-img">
                        <img src="../Assets/images/admin.jpg" alt="">
                        <span class="status f-online"></span>
                        <div class="user-setting">
                            <a href="#" title=""><i class="ti-pencil-alt"></i>Profiles</a>
                            <a href="#" title=""><i class="ti-settings"></i>Paramètres</a>
                            <a href="#" title=""><i class="ti-power-off"></i>Se déconnecter</a>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="gap gray-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row" id="page-contents">
                                    <div class="col-lg-3 content-left">
                                        <aside class="sidebar Sticky">
                                            <!--Matières-->
                                            <div class="widget">
                                                <h4 class="widget-title stick-widget">MATIERES</h4>
                                                <ul class="naves">
                                                    <li>
                                                        <i class="ti-clipboard"></i>
                                                        <a href="newsfeed.html" title="">INFO_350</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-clipboard"></i>
                                                        <a href="inbox.html" title="">MATH_120</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-clipboard"></i>
                                                        <a href="fav-page.html" title="">INFO_250</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Classes -->
                                            <div class="widget stick-widget">
                                                <h4 class="widget-title">CLASSES</h4>
                                                <ul class="activitiez">
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span><a href="#" title="">L1_G2</a></span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="activity-meta">
                                                            <span><a href="#" title="">L1_G1</a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div><!-- sidebar -->
                                    <div class="col-lg-5 ">
                                        <div class="central-meta">
                                            <div>
                                                <h1>Bienvenu Mr Nirina</h1>
                                                <p>Il est temps de gérer les notes de vos élèves</p>
                                            </div>
                                        </div>

                                        <div class="central-meta">
                                            <h2>Info</h2>
                                            <ul>
                                                <li>Meuilleur élèves : Abdoul Ismael</li>
                                                <li>Moyenne de clase : 12.5/20</li>
                                                <li>Semestre : 2</li>
                                                <li>Heure de cours fini: 10 h</li>
                                                <li>Heure de cours restant: 7 h</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <!-- Troisieme collone --> 
                                    <div class="col-lg-4">
                                        <aside class="central-meta">
                                            <?php include('chart.php')?>
                                        </aside>
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>	
            </section>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="widget">
                                <div class="foot-logo">
                                    <div class="logo">
                                        <a href="index-2.html" title=""><img src="../Assets/images/logo.png" width="100" alt=""></a>
                                    </div>	
                                </div>
                                <ul class="location">
                                    <li>
                                        <i class="ti-map-alt"></i>
                                        <p>Ambatoroka | Ankorahotra</p>
                                    </li>
                                    <li>
                                        <i class="ti-mobile"></i>
                                        <p>034 91 449 33</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>Nous suivre</h4></div>
                                <ul class="list-style">
                                    <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/arleme.scheck/" title="">facebook</a></li>
                                    <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=fr" title="">twitter</a></li>
                                    <li><i class="fa fa-github"></i> <a href="https://www.github.com/L1G2" title="">Google+</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>Naviguer</h4></div>
                                <ul class="list-style">
                                    <li><a href="about.html" title="">Nous concernant</a></li>
                                    <li><a href="contact.html" title="">Nous contacter</a></li>
                                    <li><a href="terms.html" title="">Termes & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>Liens</h4></div>
                                <ul class="list-style">
                                    <li><a href="#" title="">leasing</a></li>
                                    <li><a href="#" title="">submit route</a></li>
                                    <li><a href="#" title="">how does it work?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>Télécharger</h4></div>
                                <ul class="colla-apps">
                                    <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                    <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>	
</html>