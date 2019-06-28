<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>All Reviews | Daleel</title>
    </head>

    <body class="all_reviews inner_page authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <?php echo $twig->render('reviews/banner.tpl'); ?>

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>All Reviews</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner">

                            <div class="all_reviews_buttons_block">
                                <a href="#" class="button button__white return_back_link">
                                    <div class="button__icon">
                                        <img src="assets/back_arrow_icon.svg" alt="Image" class="svg">
                                    </div>
                                    <span>Back</span>
                                </a>
                                <button class="button button__blue">Leave Review</button>
                            </div>

                            <div class="all_reviews_header_block">
                                <h1>All Reviews</h1>
                                <div class="common_sorting_by_block">
                                    <span class="common_sorting_by__title">Sort By:</span>

									<select class="sort_by_selector" name="sort-by" style="width: 180px">
										<option value="News">News</option>
										<option value="Articles">Articles</option>
										<option value="Companies">Companies</option>
										<option value="Topics">Topics</option>
									</select>
                                </div>

                            </div>

                            <section id="reviews" class="suppliers_reviews_block">
                                <div class="suppliers_reviews_inner_content">
                                    <?php echo $twig->render('reviews/reviews.tpl'); ?>

                                        <?php echo $twig->render('reviews/detailed_review.tpl'); ?>
                                </div>

                                <div class="load_more_button_block">
                                    <a href="#" class="button load_more_button full_width">
                                        <div class="button__icon">
                                            <img class="svg" src="assets/load_icon.svg" alt="Image">
                                        </div>
                                        <span>Load More</span>
                                    </a>
                                </div>

                            </section>
                        </div>
                    </div>
                </section>

                <?php echo $twig->render('common/footer.tpl'); ?>

                    <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>