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
            CURRICULUM VITAE
        </title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <header>
        <a href="cv.php?lang=english">EN</a>
        <a href="cv.php?lang=serbian">RS</a>
    </header>

    <body>
        <h1>CURRICULUM VITAE</h1>
        <section>
            <div class="container">
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

                    <table>
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
                    <img class="profile" src="images/copy.jpg" alt="View">
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
                        <div class="col-md-4">
                            <?php echo $lang['WORK_P1'] ?>
                        </div>

                        <div class="col-md-4">
                            <!-- slicica neka -->
                        </div>
                        <div class="col-md-4">
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
                </div>
            </div>
        </section>


        <section>
            <div class="overlay">
                <div class="container">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>