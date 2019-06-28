<?php
	require_once 'vendor/autoload.php';

	$loader = new \Twig\Loader\FilesystemLoader('templates');
	$twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Edit All Products | Daleel</title>
    </head>

    <body class="non_authorized">
        <?php echo $twig->render('common/header.tpl'); ?>

            <div class="products_main inner_page">
                <section class="breadcrumbs_wrapper">
                    <div class="container">
                        <div class="breadcrumbs_block row">
                            <ul class="breadcrumbs_list">
                                <li class="breadcrumbs_list__item"><a href="/">Homepage</a></li>
                                <li class="breadcrumbs_list__item current"><span>Edit All Products</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section class="main_content_wrapper">
                    <div class="container">

                        <div class="common_inner_page_header_block">
                            <h1>Edit All Products</h1>

                        <div class="common_inner_page_header_block_right_sided">
                            <a href="#" class="button button__add_new">
                                    <div class="button__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="svg replaced-svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 7V11H7V13H11V17H13V13H17V11H13V7H11ZM4 12C4 16.41 7.59 20 12 20C16.41 20 20 16.41 20 12C20 7.59 16.41 4 12 4C7.59 4 4 7.59 4 12Z" fill="#00C853"></path>
                                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11 7V11H7V13H11V17H13V13H17V11H13V7H11ZM4 12C4 16.41 7.59 20 12 20C16.41 20 20 16.41 20 12C20 7.59 16.41 4 12 4C7.59 4 4 7.59 4 12Z" fill="#00C853"></path>
                                        </mask>
                                        </svg>
                                    </div>
                                    <span>Add New</span>
                            </a>                                

                            <div class="inner_page_search">
                                <input type="search" placeholder="Search" maxlength="100" required>
                                <button>Search</button>
                            </div>                            
                        </div>
                        </div>

                            <div class="main_content_inner">
                                <div class="all_products_tiles_block">

	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>
	                                <?php echo $twig->render('product/product_tile_edit_archived.tpl'); ?>	  
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>	
	                                <?php echo $twig->render('product/product_tile_edit.tpl'); ?>	                                                                                              

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