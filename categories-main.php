<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Categories Main | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class="main_categories inner_page">

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>Main Categories</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <?php echo $twig->render('categories/main_categories.tpl'); ?>

            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>