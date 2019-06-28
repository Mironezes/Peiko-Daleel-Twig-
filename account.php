<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Account | Daleel</title>
    </head>

    <body class="authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <div class="account inner_page">

                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>Account</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner">
                            <div class="account_info_block">
                                <div class="account_info_block_img">
                                    <img src="img/user_profile_photo.jpg" alt="Image">
                                </div>

                                <div class="account_info_block_name">
                                    <h2>Daniel Craig</h2>
                                </div>

                                <div class="account_info_block_rating">
                                    <div class="account_info_block_rating_header">
                                        <div class="account_info_block_rating_header_plus">
                                            <img src="assets/account/thumb_up_icon.svg" alt="Image"> <span>160</span>
                                        </div>
                                        <div class="account_info_block_rating_header_minus">
                                            <img src="assets/account/thumb_down_icon.svg" alt="Image"> <span>23</span>
                                        </div>
                                    </div>
                                    <div class="account_info_block_rating_line">
                                    </div>
                                </div>

                                <div class="account_info_block_personal_info">
                                    <span>Male   ·   36 y.o.</span>
                                </div>

                                <div class="account_info_block_stats">
                                    <div class="account_info_block_stats__element">
                                        <span class="account_info_block_stats__element__title">Comments</span>
                                        <span class="account_info_block_stats__element__value">9412</span>
                                    </div>
                                    <div class="account_info_block_stats__element">
                                        <span class="account_info_block_stats__element__title">Questions</span>
                                        <span class="account_info_block_stats__element__value">264</span>
                                    </div>
                                    <div class="account_info_block_stats__element">
                                        <span class="account_info_block_stats__element__title">Answers</span>
                                        <span class="account_info_block_stats__element__value">5123</span>
                                    </div>
                                </div>
                            </div>

                            <div class="account_tabs_block">
                                <div class="account_tabs_header">
                                    <span class="account_tabs_header_account active">Profile</span>
                                    <span class="account_tabs_header_comments">Comments</span>
                                    <span class="account_tabs_header_answer">Questions & Answers</span>
                                </div>

                                <div class="account_tabs_body">
                                    <?php echo $twig->render('account/profile.tpl'); ?>
                                        <?php echo $twig->render('account/comments.tpl'); ?>
                                            <?php echo $twig->render('account/answers.tpl'); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

                <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>