<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Category B | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class=" category category_b inner_page">
                <section class="category_page_banner_wrapper" style="background-image: url('img/categories/category_page_bg.jpg');">
                    <div class="container">
                        <div class="category_page_banner_inner">
                            <div class="category_page_banner_info_column">
                                <div class="category_page_banner_desc_block">
                                    <h1>Pumps</h1>
                                    <p>Drilling Rigs are one of the most important oilfield equipment and are used in a number of stages throughout oil & gas fieldsï¿½ lifecycle. Land drilling rigs could be of different sizes, power and application</p>
                                </div>

                                <div class="category_page_banner_tags_block">
                                    <div class="category_page_banner_tags_inner">                                                                           
                                    </div>
                                </div>

                            </div>

                            <div class="category_page_banner_blocks_column">
                                <div class="category_page_banner_importantce_block category_page_banner_block active">
                                    <h4 class="category_page_banner_blocks_title">IMPORTANCE</h4>

                                    <div id="category_page_banner_importantce_block_inner" class="category_page_banner_block_inner">
                                        <span class="category_page_banner_importantce_first_tile active">LEVERAGE</span>
                                        <span class="category_page_banner_importantce_second_tile">STRATEGIC</span>
                                        <span class="category_page_banner_importantce_third_tile">ROUTINE</span>
                                        <span class="category_page_banner_importantce_fourth_tile">BOTTLENECK</span>
                                    </div>

                                </div>

                                <div class="category_page_banner_buyer_block">
                                    <div class="category_page_banner_buyer_block_strong category_page_banner_block active">
                                        <h4 class="category_page_banner_blocks_title">BUYER POWER</h4>

                                        <div class="category_page_banner_block_inner">
                                            <div class="category_page_banner_block_inner__fill category_page_banner_block_inner__content">
                                                <img src="assets/categories/buyer/strong.svg" class="svg" alt="Image">
                                            </div>

                                            <span class="category_page_banner_block_inner__text">STRONG</span>
                                        </div>
                                    </div>                                   


                                    <div class="category_page_banner_buyer_block_balanced category_page_banner_block ">
                                        <h4 class="category_page_banner_blocks_title">BUYER POWER</h4>

                                        <div class="category_page_banner_block_inner">
                                            <div class="category_page_banner_block_inner__fill category_page_banner_block_inner__content">
                                                <img src="assets/categories/buyer/balanced.svg" class="svg" alt="Image">
                                            </div>

                                            <span class="category_page_banner_block_inner__text">BALANCED</span>
                                        </div>
                                    </div>  

                                    <div class="category_page_banner_buyer_block_weak category_page_banner_block ">
                                        <h4 class="category_page_banner_blocks_title">BUYER POWER</h4>

                                        <div class="category_page_banner_block_inner">
                                            <div class="category_page_banner_block_inner__fill category_page_banner_block_inner__content">
                                                 <img src="assets/categories/buyer/weak.svg" class="svg" alt="Image">
                                             </div>

                                            <span class="category_page_banner_block_inner__text">WEAK</span>
                                        </div>
                                    </div>  

                                </div>

                                <div class="category_page_banner_trends_block">

                                    <div class="category_page_banner_trends_block_increasing category_page_banner_block active">
                                        <h4 class="category_page_banner_blocks_title">PRICE TRENDS</h4>

                                        <div class="category_page_banner_block_inner">
                                            <div class="category_page_banner_block_inner__img category_page_banner_block_inner__content">
                                                <img src="assets/categories/trends/trends_increased_icon.svg" class="svg" alt="Image">
                                            </div>
                                            <span class="category_page_banner_block_inner__text">INCREASING</span>
                                        </div>
                                    </div>
                                        
                                    <div class="category_page_banner_trends_block_balanced category_page_banner_block ">
                                        <h4 class="category_page_banner_blocks_title">PRICE TRENDS</h4>

                                        <div class="category_page_banner_block_inner">
                                            <div class="category_page_banner_block_inner__img category_page_banner_block_inner__content">
                                                <img src="assets/categories/trends/trends_balanced_icon.svg" class="svg" alt="Image">
                                            </div>
                                            <span class="category_page_banner_block_inner__text">NO CHANGE</span>
                                        </div>
                                    </div>

                                    <div class="category_page_banner_trends_block_decreasing category_page_banner_block ">
                                        <h4 class="category_page_banner_blocks_title">PRICE TRENDS</h4>

                                        <div class="category_page_banner_block_inner">
                                            <div class="category_page_banner_block_inner__img category_page_banner_block_inner__content">
                                                <img src="assets/categories/trends/trends_decreased_icon.svg" class="svg" alt="Image">
                                            </div>
                                            <span class="category_page_banner_block_inner__text">DECREASING</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item"><a href="/">Development</a></li>
                                <li class="breadcrumbs_list__item"><a href="/">Construction</a></li>
                                <li class="breadcrumbs_list__item current"><span>Pumps</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner">
                            <h2 class="verified_suppliers__title">Verified suppliers</h2>

                            <div class="verified_suppliers_slider row">
                                <span class="verified_suppliers_categories_prev_arrow verified_suppliers_categories_arrow"><img src="assets/verified_suppliers_category_arrow_prev.svg" alt="Image" class="svg"></span>

                                <div class="verified_suppliers_category_tiles_block owl-carousel">
                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/01.png" alt="Image">
                                        <span>National Oilwell Varco</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/02.png" alt="Image">
                                        <span>Hirat Marine<br>Services SPC</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/03.png" alt="Image">
                                        <span>Shahig Company</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/01.png" alt="Image">
                                        <span>National Oilwell Varco</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/02.png" alt="Image">
                                        <span>Hirat Marine<br>Services SPC</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/03.png" alt="Image">
                                        <span>Shahig Company</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/01.png" alt="Image">
                                        <span>National Oilwell Varco</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/02.png" alt="Image">
                                        <span>Hirat Marine<br>Services SPC</span>
                                    </div>

                                    <div class="verified_suppliers_content_tile">
                                        <img src="img/verified_suppliers/03.png" alt="Image">
                                        <span>Shahig Company</span>
                                    </div>
                                </div>

                                <span class="verified_suppliers_categories_next_arrow verified_suppliers_categories_arrow"><img src="assets/verified_suppliers_category_arrow_next.svg" alt="Image" class="svg"></span>

                                <div class="mobile_verified_suppliers_categories_arrows_block">
                                    <span class="verified_suppliers_categories_prev_arrow verified_suppliers_categories_arrow"><img src="assets/verified_suppliers_category_arrow_prev.svg" alt="Image" class="svg"></span>

                                    <span class="verified_suppliers_categories_next_arrow verified_suppliers_categories_arrow"><img src="assets/verified_suppliers_category_arrow_next.svg" alt="Image" class="svg"></span>
                                </div>

                            </div>

                            <div class="category_content_block">
                                <aside class="left_sidebar_column">
                                    <?php echo $twig->render('left_sidebar/sidebar_menu.tpl'); ?>
                                </aside>

                                <div class="main_content_column category_sections_block">
                                    <?php echo $twig->render('categories/category_sections.tpl'); ?>
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
            <?php echo $twig->render('categories/tags_modal.tpl'); ?>
            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>


            <div class="list">
                
                                        <a href="#" class="tag">#tag-1</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#tag-1</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#tag-1</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>
                                        <a href="#" class="tag">#long-long-tag-2</a>                                        
                                        <a href="#" class="tag">#before-pizdec</a>   
                                        <a href="#" class="tag">#pizdec</a>  
                
            </div>
                
    </body>