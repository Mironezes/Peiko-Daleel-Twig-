<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Account Settings | Daleel</title>
    </head>

    <body class="authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <div class="account account_settings inner_page">

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item"><a href="/">Account</a></li>
                                <li class="breadcrumbs_list__item current"><span>Settings</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner">

                            <div class="account_tabs_block">
                                <div class="account_tabs_header">
                                    <span class="account_tabs_header_profile active">Profile</span>
                                    <span class="account_tabs_header_notification">Notification</span>
                                </div>

                                <div class="account_tabs_body">
                                    <?php echo $twig->render('account/settings/profile.tpl'); ?>
                                    <?php echo $twig->render('account/settings/notification.tpl'); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

            <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>