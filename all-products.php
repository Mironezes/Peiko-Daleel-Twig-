<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>All Products | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class="products_main inner_page">
                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>All Products</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <div class="expert_intelligance_header_block">
                            <h1>All Products</h1>

                            <div class="inner_page_search">
                                <input type="search" placeholder="Search" maxlength="100" required>
                                <button>Search</button>
                            </div>
                        </div>

                        <?php echo $twig->render('common/filters.tpl'); ?>

                            <div class="main_content_inner">
                                <div class="all_products_tiles_block">

	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>                               
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>                               
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>                               
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile.tpl'); ?>

                                    <div class="load_more_button_block">
                                        <a href="#" class="button load_more_button full_width">
                                            <div class="button__icon">
                                                <img class="svg" src="assets/load_icon.svg" alt="Image">
                                            </div>
                                            <span>Load More</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                    </div>
                </section>
            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>