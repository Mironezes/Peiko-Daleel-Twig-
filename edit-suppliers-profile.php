<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Edit Suppliers Profile | Daleel</title>
    </head>

    <body class="authorized">
        <?php echo $twig->render('common/header_logined.tpl'); ?>

            <div class="suppliers_profile inner_page edit_page">

                <?php echo $twig->render('suppliers/banner.tpl'); ?>

                    <section class="main_content_wrapper">
                        <div class="container">
                            <div class="main_content_inner">

                                <?php echo $twig->render('suppliers/fixed_menu.tpl'); ?>

                                    <?php echo $twig->render('suppliers/detailed_info_edit.tpl'); ?>

                                        <?php echo $twig->render('suppliers/product_services_edit.tpl'); ?>

                                            <?php echo $twig->render('suppliers/work_history_edit.tpl'); ?>

                                                <section id="reviews" class="suppliers_reviews_block">
                                                    <h2 class="toggled_section_heading">Reviews <img src="assets/suppliers/toggled_sections/open_section_icon.svg" alt="Image" class="svg"></h2>
                                                    <div class="suppliers_reviews_inner_content toggled_section_inner_content">
                                                        <?php echo $twig->render('suppliers/reviews.tpl'); ?>

                                                        <?php echo $twig->render('suppliers/detailed_review.tpl'); ?>
                                                    </div>
                                                </section>

                                                <?php echo $twig->render('suppliers/documents_edit.tpl'); ?>

                                                <?php echo $twig->render('suppliers/latest_news_edit.tpl'); ?>

                                                <?php echo $twig->render('suppliers/competitors.tpl'); ?>
                            </div>
                        </div>
                    </section>

            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

            <?php echo $twig->render('common/scripts.tpl'); ?>

                <section class="delete_element_modal_block modal_block">
                    <div class="modal_content">
                        <div class="modal_inner_header">
                            <span class="modal_close"><img src="assets/modal_close_icon.svg" alt="Image"></span>
                        </div>
                        <div class="modal_inner_body">
                            <h2>Are you sure you want to delete<br> document?</h2>
                        
                            <div class="modal_inner_body_button">
                                <a href="#" class="button button__cancel">Cancel</a>
                                <a href="#" class="button button__blue button__delete_yes">Yes</a>
                            </div>
                        </div>
                    </div>                 
                </section>
            
    </body>