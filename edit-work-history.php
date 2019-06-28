<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Edit Work Histories | Daleel</title>
    </head>

    <body class="authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <div class="work_history inner_page edit_page">

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>Edit Work Histories</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <div class="common_inner_page_header_block">
                            <h1>Edit Work History</h1>

                            <div class="common_inner_page_header_block_right_sided">
                                <div class="button button__add_new">
                                    <a href="#" class="">
                                        <div class="button__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="svg replaced-svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 7V11H7V13H11V17H13V13H17V11H13V7H11ZM4 12C4 16.41 7.59 20 12 20C16.41 20 20 16.41 20 12C20 7.59 16.41 4 12 4C7.59 4 4 7.59 4 12Z" fill="#00C853"></path>
                                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 7V11H7V13H11V17H13V13H17V11H13V7H11ZM4 12C4 16.41 7.59 20 12 20C16.41 20 20 16.41 20 12C20 7.59 16.41 4 12 4C7.59 4 4 7.59 4 12Z" fill="#00C853"></path>
                                                </mask>
                                            </svg>
                                        </div>
                                        <span>Add New</span>
                                    </a>                                    
                                </div>


                                <div class="inner_page_search">
                                    <input type="search" placeholder="Search" maxlength="100" required>
                                    <button>Search</button>
                                </div>
                            </div>

                        </div>

                        <div class="main_content_inner suppliers_work_history_content">

                            <div class="suppliers_work_history_major_clients_column">
                                <div class="suppliers_work_history_major_clients">
                                    <h3>Major Clients</h3>
                                    <ul class="suppliers_work_history_major_clients_list">
                                        <li class="suppliers_work_history_major_clients_list__item">BP</li>
                                        <li class="suppliers_work_history_major_clients_list__item">ExxonMobil</li>
                                        <li class="suppliers_work_history_major_clients_list__item">Shell</li>
                                        <li class="suppliers_work_history_major_clients_list__item">Total</li>
                                        <li class="suppliers_work_history_major_clients_list__item">Chevron</li>
                                        <li class="suppliers_work_history_major_clients_list__item">ConocoPhillips</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="suppliers_work_history_tiles_column">
                                <div class="suppliers_work_history_tiles">

                                    <div class="suppliers_work_history_tile">
                                        <div class="suppliers_work_history_tile_modal">
                                            <div class="suppliers_work_history_tile_modal_close_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none" class="svg replaced-svg">
                                                    <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#2E368F"></path>
                                                </svg>
                                            </div>
                                            <div class="suppliers_work_history_tile_modal_info_column">
                                                <div class="suppliers_work_history_tile_modal_category">
                                                    <span>Category</span>
                                                    <h3>Where Well Testing Goes Wrong</h3>
                                                    <p>Collars, Stabilizers, Lift Subs, Bit Jars, Crossover Subs, Float Subs</p>
                                                </div>
                                                <div class="suppliers_work_history_tile_modal_location">
                                                    <span>Location</span>
                                                    <h3>South Africa</h3>
                                                </div>
                                                <div class="suppliers_work_history_tile_modal_partner">
                                                    <span>Partner</span>
                                                    <h3>DALEEL</h3>
                                                </div>
                                            </div>

                                            <div class="suppliers_work_history_tile_modal_overview_column">
                                                <div class="suppliers_work_history_tile_modal_overview">
                                                    <span>Overview</span>
                                                    <h3>Maintenance of Oil suppliing ring in south Africa</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                                                    <div class="suppliers_work_history_tile_modal_link">
                                                        <a href="#">
                                                            <span>Show Details</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none" class="svg replaced-svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8334 5L6.86975 10L5.63978 8.76101L8.50369 5.8761L0.166694 5.8761L0.166694 4.1239L8.50369 4.1239L5.63978 1.23899L6.86975 -2.16966e-07L11.8334 5Z" fill="#1F2569"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suppliers_work_history_tile_inner">
                                            <div class="suppliers_work_history_tile__edit_buttons">

                                                <div class="button button__request_review">
                                                    <a href="#">
                                                        <div class="button__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="svg replaced-svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0013 1.66666C5.4013 1.66666 1.66797 5.4 1.66797 10C1.66797 14.6 5.4013 18.3333 10.0013 18.3333C14.6013 18.3333 18.3346 14.6 18.3346 10C18.3346 5.4 14.6013 1.66666 10.0013 1.66666ZM9.16797 15.8333V14.1667H10.8346V15.8333H9.16797ZM11.8096 10.1417L12.5596 9.375C13.0346 8.9 13.3346 8.23333 13.3346 7.5C13.3346 5.65833 11.843 4.16666 10.0013 4.16666C8.15964 4.16666 6.66797 5.65833 6.66797 7.5H8.33464C8.33464 6.58333 9.08464 5.83333 10.0013 5.83333C10.918 5.83333 11.668 6.58333 11.668 7.5C11.668 7.95833 11.4846 8.375 11.1763 8.675L10.143 9.725C9.54297 10.3333 9.16797 11.1667 9.16797 12.0833V12.5H10.8346C10.8346 11.25 11.2096 10.75 11.8096 10.1417Z" fill="#2E3690"></path>
                                                            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="1" width="18" height="18">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0013 1.66666C5.4013 1.66666 1.66797 5.4 1.66797 10C1.66797 14.6 5.4013 18.3333 10.0013 18.3333C14.6013 18.3333 18.3346 14.6 18.3346 10C18.3346 5.4 14.6013 1.66666 10.0013 1.66666ZM9.16797 15.8333V14.1667H10.8346V15.8333H9.16797ZM11.8096 10.1417L12.5596 9.375C13.0346 8.9 13.3346 8.23333 13.3346 7.5C13.3346 5.65833 11.843 4.16666 10.0013 4.16666C8.15964 4.16666 6.66797 5.65833 6.66797 7.5H8.33464C8.33464 6.58333 9.08464 5.83333 10.0013 5.83333C10.918 5.83333 11.668 6.58333 11.668 7.5C11.668 7.95833 11.4846 8.375 11.1763 8.675L10.143 9.725C9.54297 10.3333 9.16797 11.1667 9.16797 12.0833V12.5H10.8346C10.8346 11.25 11.2096 10.75 11.8096 10.1417Z" fill="#2E3690"></path>
                                                            </mask>
                                                            </svg>
                                                        </div>

                                                        <span>Request review</span>
                                                    </a>                                                    
                                                </div>

                                                <div class="button button__view">
                                                    <a href="#" class="">
                                                    <span>View</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none" class="svg replaced-svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8334 5L6.86975 10L5.63978 8.76101L8.50369 5.8761L0.166694 5.8761L0.166694 4.1239L8.50369 4.1239L5.63978 1.23899L6.86975 -2.16966e-07L11.8334 5Z" fill="#1F2569"></path>
                                                    </svg>                                                
                                                    </a>                                                    
                                                </div>

                                                <div class="button button__edit button__yellow">
                                                    <a href="#">
                                                        <div class="button__icon">
                                                            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="20" height="20" viewBox="0 0 20 20" fill="none" version="1.1" id="svg841" sodipodi:docname="edit_icon__blue.svg" inkscape:version="0.92.3 (2405546, 2018-03-11)" class="svg replaced-svg">
                                                              <metadata id="metadata847">
                                                                <rdf:rdf>
                                                                  <cc:work rdf:about="">
                                                                    <dc:format>image/svg+xml</dc:format>
                                                                    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                                                  </cc:work>
                                                                </rdf:rdf>
                                                              </metadata>
                                                              <defs id="defs845"></defs>
                                                              <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1017" id="namedview843" showgrid="false" inkscape:zoom="42.85" inkscape:cx="10" inkscape:cy="10" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="svg841"></sodipodi:namedview>
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2584 4.69166C17.5834 5.01666 17.5834 5.54166 17.2584 5.86666L15.7334 7.39166L12.6084 4.26666L14.1334 2.74166C14.4584 2.41666 14.9834 2.41666 15.3084 2.74166L17.2584 4.69166ZM2.5 17.5V14.375L11.7167 5.15833L14.8417 8.28333L5.625 17.5H2.5Z" fill="#2e368f" id="path832"></path>
                                                              <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="16" height="16">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2584 4.69166C17.5834 5.01666 17.5834 5.54166 17.2584 5.86666L15.7334 7.39166L12.6084 4.26666L14.1334 2.74166C14.4584 2.41666 14.9834 2.41666 15.3084 2.74166L17.2584 4.69166ZM2.5 17.5V14.375L11.7167 5.15833L14.8417 8.28333L5.625 17.5H2.5Z" fill="#2e368f" id="path834"></path>
                                                              </mask>
                                                            </svg>
                                                        </div>
                                                        <span>Edit</span>
                                                    </a>                                                    
                                                </div>
                                            </div>
                                            <div class="suppliers_work_history_tile_img">
                                                <img src="img/product_small_img.png" alt="Image">
                                            </div>
                                            <div class="suppliers_work_history_tile_content">
                                                <h3>Where Well Testing Goes Wrong</h3>
                                                <div class="suppliers_work_history_tile_statistics">

                                                    <div class="suppliers_work_history_tile_statistics__company_name">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="svg replaced-svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C12 6.21 10.21 8 8 8C5.79 8 4 6.21 4 4C4 1.79 5.79 0 8 0C10.21 0 12 1.79 12 4ZM10 4C10 2.9 9.1 2 8 2C6.9 2 6 2.9 6 4C6 5.1 6.9 6 8 6C9.1 6 10 5.1 10 4ZM8 9C5.33 9 0 10.34 0 13V16H16V13C16 10.34 10.67 9 8 9ZM2 13.01V14H14V13C13.8 12.29 10.7 11 8 11C5.3 11 2.2 12.29 2 13.01Z" fill="#4F58B8"></path>
                                                        </svg>
                                                        <span>Shell</span>
                                                    </div>

                                                    <div class="suppliers_work_history_tile_statistics__date">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="svg replaced-svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99 0C4.47 0 0 4.48 0 10C0 15.52 4.47 20 9.99 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 9.99 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18ZM9 5H10.5V10.25L15 12.92L14.25 14.15L9 11V5Z" fill="#4F58B8"></path>
                                                        </svg>
                                                        <span>2 Quater 2018</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="suppliers_work_history_tile">
                                        <div class="suppliers_work_history_tile_modal">
                                            <div class="suppliers_work_history_tile_modal_close_icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none" class="svg replaced-svg">
                                                    <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#2E368F"></path>
                                                </svg>
                                            </div>
                                            <div class="suppliers_work_history_tile_modal_info_column">
                                                <div class="suppliers_work_history_tile_modal_category">
                                                    <span>Category</span>
                                                    <h3>Where Well Testing Goes Wrong</h3>
                                                    <p>Collars, Stabilizers, Lift Subs, Bit Jars, Crossover Subs, Float Subs</p>
                                                </div>
                                                <div class="suppliers_work_history_tile_modal_location">
                                                    <span>Location</span>
                                                    <h3>South Africa</h3>
                                                </div>
                                                <div class="suppliers_work_history_tile_modal_partner">
                                                    <span>Partner</span>
                                                    <h3>DALEEL</h3>
                                                </div>
                                            </div>

                                            <div class="suppliers_work_history_tile_modal_overview_column">
                                                <div class="suppliers_work_history_tile_modal_overview">
                                                    <span>Overview</span>
                                                    <h3>Maintenance of Oil suppliing ring in south Africa</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                                                    <div class="suppliers_work_history_tile_modal_link">
                                                        <a href="#">
                                                            <span>Show Details</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none" class="svg replaced-svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8334 5L6.86975 10L5.63978 8.76101L8.50369 5.8761L0.166694 5.8761L0.166694 4.1239L8.50369 4.1239L5.63978 1.23899L6.86975 -2.16966e-07L11.8334 5Z" fill="#1F2569"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="suppliers_work_history_tile_inner">
                                            <div class="suppliers_work_history_tile__edit_buttons">

                                                <div class="button button__request_review">
                                                    <a href="#">
                                                        <div class="button__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="svg replaced-svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0013 1.66666C5.4013 1.66666 1.66797 5.4 1.66797 10C1.66797 14.6 5.4013 18.3333 10.0013 18.3333C14.6013 18.3333 18.3346 14.6 18.3346 10C18.3346 5.4 14.6013 1.66666 10.0013 1.66666ZM9.16797 15.8333V14.1667H10.8346V15.8333H9.16797ZM11.8096 10.1417L12.5596 9.375C13.0346 8.9 13.3346 8.23333 13.3346 7.5C13.3346 5.65833 11.843 4.16666 10.0013 4.16666C8.15964 4.16666 6.66797 5.65833 6.66797 7.5H8.33464C8.33464 6.58333 9.08464 5.83333 10.0013 5.83333C10.918 5.83333 11.668 6.58333 11.668 7.5C11.668 7.95833 11.4846 8.375 11.1763 8.675L10.143 9.725C9.54297 10.3333 9.16797 11.1667 9.16797 12.0833V12.5H10.8346C10.8346 11.25 11.2096 10.75 11.8096 10.1417Z" fill="#2E3690"></path>
                                                            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="1" width="18" height="18">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0013 1.66666C5.4013 1.66666 1.66797 5.4 1.66797 10C1.66797 14.6 5.4013 18.3333 10.0013 18.3333C14.6013 18.3333 18.3346 14.6 18.3346 10C18.3346 5.4 14.6013 1.66666 10.0013 1.66666ZM9.16797 15.8333V14.1667H10.8346V15.8333H9.16797ZM11.8096 10.1417L12.5596 9.375C13.0346 8.9 13.3346 8.23333 13.3346 7.5C13.3346 5.65833 11.843 4.16666 10.0013 4.16666C8.15964 4.16666 6.66797 5.65833 6.66797 7.5H8.33464C8.33464 6.58333 9.08464 5.83333 10.0013 5.83333C10.918 5.83333 11.668 6.58333 11.668 7.5C11.668 7.95833 11.4846 8.375 11.1763 8.675L10.143 9.725C9.54297 10.3333 9.16797 11.1667 9.16797 12.0833V12.5H10.8346C10.8346 11.25 11.2096 10.75 11.8096 10.1417Z" fill="#2E3690"></path>
                                                            </mask>
                                                            </svg>
                                                        </div>

                                                        <span>Request review</span>
                                                    </a>                                                    
                                                </div>

                                                <div class="button button__view">
                                                    <a href="#" class="">
                                                    <span>View</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10" fill="none" class="svg replaced-svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8334 5L6.86975 10L5.63978 8.76101L8.50369 5.8761L0.166694 5.8761L0.166694 4.1239L8.50369 4.1239L5.63978 1.23899L6.86975 -2.16966e-07L11.8334 5Z" fill="#1F2569"></path>
                                                    </svg>                                                
                                                    </a>                                                    
                                                </div>

                                                <div class="button button__edit button__yellow">
                                                    <a href="#">
                                                        <div class="button__icon">
                                                            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="20" height="20" viewBox="0 0 20 20" fill="none" version="1.1" id="svg841" sodipodi:docname="edit_icon__blue.svg" inkscape:version="0.92.3 (2405546, 2018-03-11)" class="svg replaced-svg">
                                                              <metadata id="metadata847">
                                                                <rdf:rdf>
                                                                  <cc:work rdf:about="">
                                                                    <dc:format>image/svg+xml</dc:format>
                                                                    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                                                  </cc:work>
                                                                </rdf:rdf>
                                                              </metadata>
                                                              <defs id="defs845"></defs>
                                                              <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1017" id="namedview843" showgrid="false" inkscape:zoom="42.85" inkscape:cx="10" inkscape:cy="10" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="svg841"></sodipodi:namedview>
                                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2584 4.69166C17.5834 5.01666 17.5834 5.54166 17.2584 5.86666L15.7334 7.39166L12.6084 4.26666L14.1334 2.74166C14.4584 2.41666 14.9834 2.41666 15.3084 2.74166L17.2584 4.69166ZM2.5 17.5V14.375L11.7167 5.15833L14.8417 8.28333L5.625 17.5H2.5Z" fill="#2e368f" id="path832"></path>
                                                              <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="16" height="16">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2584 4.69166C17.5834 5.01666 17.5834 5.54166 17.2584 5.86666L15.7334 7.39166L12.6084 4.26666L14.1334 2.74166C14.4584 2.41666 14.9834 2.41666 15.3084 2.74166L17.2584 4.69166ZM2.5 17.5V14.375L11.7167 5.15833L14.8417 8.28333L5.625 17.5H2.5Z" fill="#2e368f" id="path834"></path>
                                                              </mask>
                                                            </svg>
                                                        </div>
                                                        <span>Edit</span>
                                                    </a>                                                    
                                                </div>
                                            </div>
                                            <div class="suppliers_work_history_tile_img">
                                                <img src="img/product_small_img.png" alt="Image">
                                            </div>
                                            <div class="suppliers_work_history_tile_content">
                                                <h3>Where Well Testing Goes Wrong</h3>
                                                <div class="suppliers_work_history_tile_statistics">

                                                    <div class="suppliers_work_history_tile_statistics__company_name">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="svg replaced-svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C12 6.21 10.21 8 8 8C5.79 8 4 6.21 4 4C4 1.79 5.79 0 8 0C10.21 0 12 1.79 12 4ZM10 4C10 2.9 9.1 2 8 2C6.9 2 6 2.9 6 4C6 5.1 6.9 6 8 6C9.1 6 10 5.1 10 4ZM8 9C5.33 9 0 10.34 0 13V16H16V13C16 10.34 10.67 9 8 9ZM2 13.01V14H14V13C13.8 12.29 10.7 11 8 11C5.3 11 2.2 12.29 2 13.01Z" fill="#4F58B8"></path>
                                                        </svg>
                                                        <span>Shell</span>
                                                    </div>

                                                    <div class="suppliers_work_history_tile_statistics__date">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="svg replaced-svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99 0C4.47 0 0 4.48 0 10C0 15.52 4.47 20 9.99 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 9.99 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18ZM9 5H10.5V10.25L15 12.92L14.25 14.15L9 11V5Z" fill="#4F58B8"></path>
                                                        </svg>
                                                        <span>2 Quater 2018</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>

                <?php echo $twig->render('common/footer.tpl'); ?>

                    <?php echo $twig->render('common/scripts.tpl'); ?>


                <div class="modal_backdrop"></div>
    </body>