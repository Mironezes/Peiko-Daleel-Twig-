<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Product Page | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class="product inner_page">
                <?php echo $twig->render('product/banner.tpl'); ?>

                    <section class="breadcrumbs_wrapper">
                        <div class="container">
                            <div class="breadcrumbs_block row">
                                <ul class="breadcrumbs_list">
                                    <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                    <li class="breadcrumbs_list__item"><a href="/">Suppliers</a></li>
                                    <li class="breadcrumbs_list__item current"><span>National Oilwell Varco</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section class="main_content_wrapper">
                        <div class="container">
                            <div class="main_content_inner">
                                <?php echo $twig->render('product/fixed_menu.tpl'); ?>

                                    <?php echo $twig->render('product/overview.tpl'); ?>

                                        <?php echo $twig->render('suppliers/work_history.tpl'); ?>

                                            <section id="reviews" class="suppliers_reviews_block">
                                                <h2 class="toggled_section_heading">Reviews <img src="assets/suppliers/toggled_sections/open_section_icon.svg" alt="Image" class="svg"></h2>
                                                <div class="suppliers_reviews_inner_content toggled_section_inner_content">

                                                    <?php echo $twig->render('suppliers/reviews.tpl'); ?>

                                                        <?php echo $twig->render('suppliers/detailed_review.tpl'); ?>
                                                </div>
                                            </section>

                                            <?php echo $twig->render('suppliers/documents.tpl'); ?>

                                                <?php echo $twig->render('suppliers/materials.tpl'); ?>
                            </div>
                        </div>
                    </section>
            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>

    </body>