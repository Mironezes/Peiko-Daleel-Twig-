<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Create Expert Artcile & Services | Daleel</title>
    </head>

    <body class="non_authorized">

        <div class="creation_page inner_page">
            <?php echo $twig->render('common/header.tpl'); ?>

                <section class="main_content_wrapper">
                    <div class="container">

                        <h1>Create Expert Artcile</h1>

                        <div class="main_content_inner">

						<div class="creation_page_element creation_page_element__short">
			                <label>
			                    <span>Category A</span>
			                   	<select style="width: 100%">
			                   		<option value="Category A">Category A</option>
			                   		<option value="Category B">Category B</option>
			                   		<option value="Category C">Category C</option>
			                   		<option value="Category D">Category D</option>			                   		
			                   	</select>
			                </label>
		            	</div>

						<div class="creation_page_element creation_page_element__short">
			                <label>
			                    <span>Category B</span>
			                   	<select style="width: 100%">
			                   		<option value="Category A">Category A</option>
			                   		<option value="Category B">Category B</option>
			                   		<option value="Category C">Category C</option>
			                   		<option value="Category D">Category D</option>			                   		
			                   	</select>
			                </label>
		            	</div>

						<div class="creation_page_element creation_page_element__long">
			                <label>
			                    <span>Add tags fot this product & services</span>
								<select class="creation_page_element__tags_selector" multiple="multiple" style="width: 100%" name="creation_page_element__tags[]">
									<option value="UX Design">UX Design</option>
									<option value="Photoshop">Photoshop</option>
									<option value="Something else">Something else</option>

								</select>			
							</label>
		            	</div>


						<div class="creation_page_element creation_page_element__long">
			                <label>
			                    <span>Title</span>
			                    <input type="text" maxlength="150">
			                </label>
		            	</div>


						<div class="creation_page_element creation_page_element__textarea">
			                <label>
			                    <span>Small Description</span>
			                    <textarea cols="30" rows="10"></textarea>
			                </label>
		            	</div>


						<div class="creation_page_buttons">
							<a href="#" class="button button__white creation_page_cancel_button">Cancel</a>
							<a href="#" class="button button__blue creation_page_save_button">Save</a>
						</div>
		
                        </div>
                    </div>
                </section>

        </div>

        <?php echo $twig->render('common/footer.tpl'); ?>

        <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>