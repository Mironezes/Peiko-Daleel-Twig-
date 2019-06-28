<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Edit Expert Article | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class="news_single inner_page edit_page">
                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item"><a href="/">Expert Articles</a></li>
                                <li class="breadcrumbs_list__item current"><span>Saudi Aramco picks Sapura Energy as LTA contractor</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <div class="main_content_inner">
                            <div class="news_single_header_block">

                                <div class="news_single_header_title_block">
                                    <h1 class="news_single_header__title">Saudi Aramco picks Sapura Energy as LTA contractor</h1>
                                </div>

                            </div>

                            <div class="edit_page_buttons_block">
                                <div class="edit_page_buttons_block_main">
                                    <div class="button button__edit button__yellow">
                                        <a href="#">
                                            <div class="button__icon">
                                                <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="20" height="20" viewBox="0 0 20 20" fill="none" version="1.1" id="svg841" sodipodi:docname="edit_icon__blue.svg" inkscape:version="0.92.3 (2405546, 2018-03-11)" class="svg replaced-svg">
                                                    <metadata id="metadata847">
                                                        <rdf:RDF>
                                                            <cc:Work rdf:about="">
                                                                <dc:format>image/svg+xml</dc:format>
                                                                <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                                            </cc:Work>
                                                        </rdf:RDF>
                                                    </metadata>
                                                    <defs id="defs845"></defs>
                                                    <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1017" id="namedview843" showgrid="false" inkscape:zoom="42.85" inkscape:cx="10" inkscape:cy="10" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="svg841"></sodipodi:namedview>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2584 4.69166C17.5834 5.01666 17.5834 5.54166 17.2584 5.86666L15.7334 7.39166L12.6084 4.26666L14.1334 2.74166C14.4584 2.41666 14.9834 2.41666 15.3084 2.74166L17.2584 4.69166ZM2.5 17.5V14.375L11.7167 5.15833L14.8417 8.28333L5.625 17.5H2.5Z" fill="#2e368f" id="path832"></path>
                                                </svg>
                                            </div>
                                            <span>Edit</span>
                                        </a>
                                    </div>

                                    <div class="button button__archive">
                                        <a href="#">
                                            <div class="button__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="svg replaced-svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.54 5.23L19.15 3.55C18.88 3.21 18.47 3 18 3H6C5.53 3 5.12 3.21 4.84 3.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V6.5C21 6.02 20.83 5.57 20.54 5.23ZM12 17.5L6.5 12H10V10H14V12H17.5L12 17.5ZM5.93 4L5.12 5H18.87L17.93 4H5.93Z" fill="#2E368F"></path>
                                                </svg>
                                            </div>
                                            <span>Archive</span>
                                        </a>
                                    </div>

                                    <div class="button button__delete">
                                        <a href="#" class="">
                                            <div class="button__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="svg replaced-svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 3L15.5 4H19V6H5V4H8.5L9.5 3H14.5ZM6 19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7H6V19ZM8 9H16V19H8V9Z" fill="#FF4848"></path>
                                                </svg>
                                            </div>

                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="news_single_content_block">
                                <div class="main_content_column">
                                    <div class="news_single_img_block">
                                        <img src="img/single_news_img.jpg" class="full_width_img" alt="Image">
                                    </div>

                                    <div class="news_single_text_block">
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

                                </div>
                                <div class="right_sidebar_column">
                                    <aside class="right_sidebar_wrapper">
                                        <?php echo $twig->render('right_sidebar/sidebar_forum.tpl'); ?>

                                            <?php echo $twig->render('right_sidebar/sidebar_tags.tpl'); ?>

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

                    <section class="delete_element_modal_block modal_block">
                        <div class="modal_content">
                            <div class="modal_inner_header">
                                <span class="modal_close"><img src="assets/modal_close_icon.svg" alt="Image"></span>
                            </div>
                            <div class="modal_inner_body">
                                <h2>Are you sure you want to delete<br> document?</h2>

                                <div class="modal_inner_body_button">
                                    <a href="#" class="button button__cancel">Cancel</a>
                                    <a href="#" class="button button__blue button__delete_yes">Yes</a>
                                </div>
                            </div>
                        </div>
                    </section>

    </body>