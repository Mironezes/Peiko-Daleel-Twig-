<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Subscribe Plan | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class="subscribe_plan inner_page">

                <?php echo $twig->render('subscribe/banner.tpl'); ?>

                    <section class="main_content_wrapper">
                        <div class="container">
                            <div class="main_content_inner">
                                <section class="subscribe_page_why_daleel_block">
                                    <h2>Why DALEEL</h2>

                                    <p>Buying behavior of B2B buyers is changing. What used to be the dominant thinking years ago may not apply today, given the amount of information available and an ease of access. Here is how it is changing and how the Daleel Hub matches those trends.</p>

                                    <?php echo $twig->render('subscribe/why_daleel.tpl'); ?>

                                </section>

                                <section class="subscribe_page_choose_perfect_plan_block">
                                    <h2>Choose a Perfect Plan that Fits Your Business</h2>

                                    <?php echo $twig->render('subscribe/choose_perfect_plan_table.tpl'); ?>
                                </section>

                                <?php echo $twig->render('subscribe/why_i_need_it.tpl'); ?>

                                <?php echo $twig->render('subscribe/faq.tpl'); ?>

                            </div>
                        </div>
                    </section>
            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>