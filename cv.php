<?php
	// include language configuration file based on selected language
	$lang = "serbian";
	if(isset($_GET['lang'])){ 
		$lang = $_GET['lang']; 
	} 
	require_once("languages/".$lang.".php");
?>
    <html>

    <head>
        <title>
            Portfolio
        </title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/flag-icon.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="shortcut icon" href="#">
        <!-- neka favicon.ico greska -->
    </head>
    <header>
      <div class="row">
       <div class="l col-md-6">
        <a class="flag-icon flag-icon-gb" href="cv.php?lang=english"></a>
        <a class="flag-icon flag-icon-rs" href="cv.php?lang=serbian"></a>
       </div>
        <div class="r col-md-6">
                    <button type="button" class="btn">Download PDF</button>
        </div>
        </div>
    </header>

    <body>
        <h1>Portfolio</h1>
        <section class="minh">
            <div class="container">
                <div class="main_overlay">
                    <div class="row">
                        <div class="lp col-md-12">

                            <h2>
                                <span>
                            <i class="fa fa-user"></i>
                        </span>
                                <?php echo $lang['ABOUT'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                    <div class="drop">Nikola Stevanović<span class="caret">  </span><br/><div class="small">Web developer</div></div>
                            <table  class="dropdown-content">
                                <tr>
                                    <td>
                                        <span>
                                    <i class="fa fa-male"></i>
                                </span>
                                        <?php echo $lang['NAME'] ?>
                                    </td>
                                    <td>Nikola Stevanović</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                    <i class="fa fa-address-book"></i>
                                </span>
                                        <?php echo $lang['ADDRESS'] ?>
                                    </td>
                                    <td>Ratka Pavlovića 107,</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>18400 Prokuplje</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                    <i class="fa fa-mobile fa-2x"></i>
                                </span>
                                        <?php echo $lang['PHONE'] ?>
                                    </td>
                                    <td>+381 (0)64 / 112 45 48</td>
                                </tr>
                                <tr>

                                    <td>
                                        <span>
                                    <i class="fa fa-envelope"></i>
                                </span> E-mail:</td>
                                    <td>
                                        <a href="mailto:nikola.rina@elfak.rs">nikola.rina@elfak.rs</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="mailto:nikolarock@hotmail.com">nikolarock@hotmail.com</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                    <i class="fa fa-calendar"></i>
                                </span>
                                        <?php echo $lang['DATE'] ?>
                                    </td>
                                    <td>03.01.1993. Prokuplje</td>
                                </tr>

                            </table>
                        </div>
                        <div class="centr col-md-4">
                            <img class="profile" src="images/copy1.jpg" alt="View">
                        </div>
                    </div>
                    <div class="row">
                        <div class="lp col-md-12">
                            <a href="https://www.facebook.com/nikola.rina?ref=bookmarks"><i class="f fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/in/nikola-stevanovic-b4993414b/"><i class="l fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="edu">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="lp col-md-12">

                            <h2>
                                <span>
                                    <i class="fa fa-graduation-cap"></i>
                                </span>
                                <?php echo $lang['EDU'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php echo $lang['EDU_P'] ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="work">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="lp col-md-12">
                            <h2>
                                <span>
                                    <i class="fa fa-suitcase"></i>
                                </span>
                                <?php echo $lang['WORK'] ?>
                            </h2>
                            <?php echo $lang['WORK_P'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s">
                            <?php echo $lang['WORK_P1'] ?>
                        </div>

                        <div class="col-md-4">
                            <!-- slicica neka -->
                            <p><img class="wb wow pulse" data-wow-delay="1s" src="images/ProjectIcon.png" alt="View"></p>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5s">
                            <?php echo $lang['WORK_P2'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="personal">
            <div class="overlay">
                <div class="container">
                    <div class="row">

                        <div class="lp col-md-12">

                            <h2>
                                <span>
                                    <i class="fa fa-trophy"></i>
                                </span>
                                <?php echo $lang['PERSONAL'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php echo $lang['PERSONAL_P'] ?>
                    </div>
                    <div class="row">
                        <p class="col-md-1 wow fadeInDown">
                            <span><i class="iconsp devicon-html5-plain"></i><br/> HTML</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="0.2s">
                            <span><i class="iconsp devicon-javascript-plain"></i><br/> JavaScript</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="0.4s">
                            <span><i class="iconsp devicon-css3-plain"></i><br/> CSS</span>
                        </p>

                        <p class="col-md-1 wow fadeInDown" data-wow-delay="0.6s">
                            <span><i class="iconsp devicon-php-plain"></i><br/> PHP</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="0.8s">
                            <span><i class="iconsp devicon-mysql-plain"></i><br/> MySQL</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="1.0s">
                            <span><i class="iconsp devicon-c-plain"></i><br/> C</span>
                        </p>

                        <p class="col-md-1 wow fadeInDown" data-wow-delay="1.2s">
                            <span><i class="iconsp devicon-cplusplus-plain"></i><br/> C++</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="1.4s">
                            <span><i class="iconsp devicon-csharp-plain"></i><br/> C#</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="1.6s">
                            <span><i class="iconsp devicon-java-plain"></i><br/> Java</span>
                        </p>

                        <p class="col-md-1 wow fadeInDown" data-wow-delay="1.8s">
                            <span><i class="iconsp fa fa-file"></i><br/> Empty</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="2.0s">
                            <span><i class="iconsp fa fa-file"></i><br/> Empty</span>
                        </p>
                        <p class="col-md-1 wow fadeInDown" data-wow-delay="2.2s">
                            <span><i class="iconsp fa fa-file"></i><br/> Empty</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="overlay">
                <div class="container wow fadeInLeftBig" data-wow-duration="3s">
                    <div class="row">

                        <div class="lp col-md-12">

                            <h2>
                                <span>
                                    <i class="fa fa-plus"></i>
                                </span>
                                <?php echo $lang['OTHER'] ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            <?php echo $lang['OTHER_P'] ?>
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <div class="footer">
            <p>Copyright &copy; 2017</p>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>

    </html>
