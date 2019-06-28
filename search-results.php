<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Search Page | Daleel</title>
    </head>

    <body class="authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <div class="search inner_page">
                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>Search Results</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <div class="search_page_header_block">
                            <h1>Search topic: <span class="search_page__search_topic">“Daleel”</span></h1>
                            <span class="search_page__search_results">Found <span class="search_page__search_results__counter">14</span> results</span>
                        </div>

                        <?php echo $twig->render('search/filters.tpl'); ?>

                            <div class="main_content_inner search_tiles_block">
                                <?php echo $twig->render('search/search_tile_company.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_news.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_article.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_tags.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_company.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_news.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_article.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_tags.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_company.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_news.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_article.tpl'); ?>
                                <?php echo $twig->render('search/search_tile_tags.tpl'); ?>

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
                </section>
            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>

    </body>