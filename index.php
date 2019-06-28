<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Homepage - Daleel</title>
    </head>

    <body class="non_authorized">

        <?php echo $twig->render('homepage/header.tpl'); ?>

            <div class="homepage">

                <?php echo $twig->render('common/sitemap.tpl'); ?>

                <?php echo $twig->render('homepage/banner.tpl'); ?>

                <?php echo $twig->render('homepage/navigation.tpl'); ?>

                <?php echo $twig->render('homepage/categories.tpl'); ?>

                <?php echo $twig->render('homepage/last_forum_msgs.tpl'); ?>

                <?php echo $twig->render('homepage/verified_suppliers.tpl'); ?>

                <?php echo $twig->render('homepage/testimonials.tpl'); ?>

                <?php echo $twig->render('homepage/latest_news.tpl'); ?>

                <?php echo $twig->render('homepage/company_registration_banner.tpl'); ?>

                <?php echo $twig->render('categories/tags_modal.tpl'); ?>

            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

            <?php echo $twig->render('common/scripts.tpl'); ?>

    </body>

    </html>