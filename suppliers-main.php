<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Suppliers Main | Daleel</title>
    </head>

    <body class="authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <div class="suppliers_main inner_page">

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>Suppliers</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <h1>Suppliers main page</h1>

                        <?php echo $twig->render('common/filters.tpl'); ?>



                            <div class="main_content_inner">
                                <div class="suppliers_tiles_block">
                                    
									<?php echo $twig->render('suppliers/main_tile_short.tpl'); ?>		

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