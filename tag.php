<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Tag | Daleel</title>
    </head>

    <body class="non_authorized">

        <div class="tag_page inner_page">
            <?php echo $twig->render('common/header.tpl'); ?>

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item"><a href="/">Tags</a></li>
                                <li class="breadcrumbs_list__item current"><span>Asset Maintenance & Integrity</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <h1>Asset Maintenance & Integrity</h1>

                        <div class="main_content_inner">
                            <div class="tag_description_block">
                                <div class="main_content_column">
                                    <h2>Categorie description</h2>
                                    <p>A pump is a machine used to move liquid through a piping system and to raise the pressure of the liquid. A pump can be further defined as a machine that uses several energy transformations to increase the pressure of a liquid. Pumps can be classified according to their function, their conditions of service, materials of construction, etc. The pump industry trade association is the Hydraulic Institute, which has classified pumps as shown below:</p>

                                    <h3>Kinetic</h3>
                                    <p>In a kinetic pump, energy is continuously added to the liquid to increase its velocity. When the liquid velocity is subsequently reduced, this produces a pressure increase. Although there are several special pumps that fall into this classification, for the most part this classification consists of centrifugal pumps.</p>

                                    <p>A centrifugal pump stripped of all nonessential details, consists of an impeller attached to and rotating with the shaft, and a casing that encloses the impeller. Liquid is forced into the inlet side of the pump casing atmospheric pressure or some upstream pressure. As the impeller rotates, liquid moves towards the discharge side of the pump.</p>

                                    <p>This creates a void or reduced pressure area at the impeller inlet. The pressure at the pump casing inlet, which is higher than this reduced pressure at the impeller inlet, forces additional liquid into the impeller to fill the void.</p>

                                    <p>Centrifugal pumps usually have fewer moving pumps, have no check valves associated with the pumps, produce minimal pressure pulsations, do not have rubbing contact with the pump rotor, and are not subject to the fatigue loading of bearings and seals that the periodic aspect of positive displacement pumps produce.</p>

                                    <h3>Positive Displacement</h3>
                                    <p>In a positive displacement pump, energy is periodically added to the liquid by the direct application of a force to one or more movable volumes of liquid. This causes an increase in pressure up to the value required to move the liquid through ports in the discharge line. The important points here are that the energy addition is periodic (i.e. not continuous) and that there is a direct application of force to the liquid.</p>

                                    <p>The preference for a centrifugal pump over a positive displacement pump is not always the case, and, in fact, there are certain applications criteria that demand the use of a positive displacement pump. The following are some key application criteria that would lead to the selection of a positive displacement pump over a centrifugal pump:</p>

                                    <ul>
                                        <li>High viscosity</li>
                                        <li>Self-priming</li>
                                        <li>High pressure</li>
                                        <li>Low flow</li>
                                        <li>High efficiency</li>
                                        <li>Low velocity</li>
                                        <li>Low shear</li>
                                        <li>Fragile solids handling capability</li>
                                        <li>Sealless pumping</li>
                                        <li>Accurate, repeatable flow measurement</li>
                                        <li>Constant flow/variable system pressure</li>
                                        <li>Two-phase flow</li>
                                    </ul>
                                </div>
                                <div class="right_sidebar_column">
                                    <aside class="right_sidebar_wrapper">
                                        <?php echo $twig->render('right_sidebar/sidebar_forum.tpl'); ?>
                                        <?php echo $twig->render('right_sidebar/sidebar_news.tpl'); ?>
                                    </aside>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

        </div>

        <?php echo $twig->render('common/footer.tpl'); ?>

            <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>