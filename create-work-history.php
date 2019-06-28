<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Create Work History | Daleel</title>
    </head>

    <body class="non_authorized">

        <div class="creation_page inner_page">
            <?php echo $twig->render('common/header.tpl'); ?>

                <section class="main_content_wrapper">
                    <div class="container">

                        <h1>Create Work History</h1>

                        <div class="main_content_inner">

                            <div class="creation_page_element creation_page_element__short">
                                <label>
                                    <span>Project Name</span>
                                    <input type="text" maxlength="100">
                                </label>
                            </div>

                            <div class="creation_page_element creation_page_element__short" >
                                <label>
                                    <span>Company Name</span>
                                    <select style="width: 100%">
                                        <option value="Company Name 1">Company Name 1</option>
                                        <option value="Company Name 2">Company Name 2</option>
                                        <option value="Company Name 3">Company Name 3</option>
                                        <option value="Company Name 4">Company Name 4</option>
                                    </select>
                                </label>
                            </div>

                            <div class="creation_page_element creation_page_element__long">
                                <label>
                                    <span>Title 1</span>
                                    <input type="text" maxlength="150">
                                </label>
                            </div>

                            <div class="creation_page_element creation_page_element__textarea">
                                <label>
                                    <span>Title 2</span>
                                    <textarea cols="30" rows="10"></textarea>
                                </label>
                            </div>

							<div class="creation_page_elements_wrapper creation_page_elements_categories">
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
							</div>

                            <div class="creation_page_element creation_page_element__short" >
                                <label>
                                    <span>Product & Services</span>
                                    <select style="width: 100%">
                                        <option value="Product 1">Product 1</option>
                                        <option value="Product 2">Product 2</option>
                                        <option value="Product 3">Product 3</option>
                                        <option value="Product 4">Product 4</option>
                                    </select>
                                </label>
                            </div>

		
							<div class="creation_page_element_location_block">
                                <span>Location</span>
        
                                <div class="creation_page_add_location_tiles">
                                    <div class="creation_page_add_location_tile">
                                        <div class="creation_page_element creation_page_element__short">
                                                <select style="width: 100%" id="tooltest0">
                                                    <option value="Location 1">Location 1</option>
                                                    <option value="Location 2">Location 2</option>
                                                    <option value="Location 3">Location 3</option>
                                                    <option value="Location 4">Location 4</option>
                                                </select>
                                        </div>    
                                                    <div class="creation_page_element creation_page_element__file_delete">
                                                            <button class="button button__light_blue creation_page_element__file_delete_button">
                                                                <div class="button__icon">
                                                                    <img src="assets/delete_multimedia_icon.svg" alt="Image" class="svg">
                                                                </div>
                                                            </button>
                                                    </div>                                                              
                                    </div>

                                    <div class="creation_page_add_location_tile">
                                        <div class="creation_page_element creation_page_element__short">
                                                <select style="width: 100%">
                                                    <option value="Location 1">Location 1</option>
                                                    <option value="Location 2">Location 2</option>
                                                    <option value="Location 3">Location 3</option>
                                                    <option value="Location 4">Location 4</option>
                                                </select>
                                        </div>                              
                                    </div>                                    
                                </div>

							
                                    <button class="creation_page_add_location_tile_button button button__add button__light_blue">
                                        <div class="button__icon">
                                            <img src="assets/add_icon.svg" alt="Image" class="svg">
                                        </div>
                                        <span>Add more location</span>
                                    </button>

							</div>

							<div class="creation_page_contact_date_block">
		                        <div class="creation_page_element creation_page_element__short">
					                <label>
					                    <span>Date From</span>
					                    <input type="text" class="datepicker-here" data-language='en' data-min-view="months" data-view="months" data-date-divat="MM yyyy">
					                </label>
	                           </div>

		                        <div class="creation_page_element creation_page_element__short">
					                <label>
					                    <span>Date To</span>
					                    <input type="text" class="datepicker-here" data-language='en' data-min-view="months" data-view="months" data-date-divat="MM yyyy">
					                </label>
	                            </div>								
							</div>



							<div class="creation_page_contact_info_block">

								<h3>Contacts Info</h3>

	                            <div class="creation_page_element creation_page_element__short">
	                                <label>
	                                    <span>Contact Name</span>
	                                    <input type="text" maxlength="100">
	                                </label>
	                            </div>

								<div class="creation_page_elements_wrapper creation_page_elements_contact_info">
		                            <div class="creation_page_element creation_page_element__short">
		                                <label>
		                                    <span>Phone Number</span>
		                                    <input type="text" maxlength="20">
		                                </label>
		                            </div>

		                            <div class="creation_page_element creation_page_element__short">
		                                <label>
		                                    <span>Email</span>
		                                    <input type="email" maxlength="120">
		                                </label>
		                            </div>
								</div>
							</div>

                            <div class="creation_page_add_multimedia_block">
                                <div class="creation_page_add_image">
                                    <h3>Images</h3>
        
                                    <div class="creation_page_add_image_tiles">
                                        <div class="creation_page_add_image_tile creation_page_elements_wrapper">

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element creation_page_element__file_title">
                                                    <label>
                                                        <span>Title</span>
                                                        <input type="text" maxlength="150">
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_chooser">
                                                    <label>
                                                        <input type="file" class="creation_page_element__file">
                                                        <span class="creation_page_element__browse button button__add button__light_blue">Browse</span>
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_delete">
                                                        <button class="button button__light_blue creation_page_element__file_delete_button">
                                                            <div class="button__icon">
                                                                <img src="assets/delete_multimedia_icon.svg" alt="Image" class="svg">
                                                            </div>
                                                        </button>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_submit">
                                                    <button class="button button__blue creation_page_element_submit__file_submit_button">Submit</button>
                                                </div>
                                            </div>
                                        </div>      

                                        <div class="creation_page_add_image_tile creation_page_elements_wrapper">

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element creation_page_element__file_title">
                                                    <label>
                                                        <span>Title</span>
                                                        <input type="text" maxlength="150">
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_chooser">
                                                    <label>
                                                        <input type="file" class="creation_page_element__file">
                                                        <span class="creation_page_element__browse button button__add button__light_blue">Browse</span>
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_delete">
                                                        <button class="button button__light_blue creation_page_element__file_delete_button">
                                                            <div class="button__icon">
                                                                <img src="assets/delete_multimedia_icon.svg" alt="Image" class="svg">
                                                            </div>
                                                        </button>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_submit">
                                                    <button class="button button__blue creation_page_element_submit__file_submit_button">Submit</button>
                                                </div>
                                            </div>
                                        </div>  

                                    </div>


                                    <button class="create_page_add_image_tile_button button button__add button__light_blue">
                                        <div class="button__icon">
                                            <img src="assets/add_icon.svg" alt="Image" class="svg">
                                        </div>
                                        <span>Add more image</span>
                                    </button>

                                </div>

                                <div class="creation_page_add_video">
                                    <h3>Video</h3>

                                    <div class="creation_page_add_video_tiles">
                                        <div class="creation_page_add_video_tile">

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element__title_and_link_block">
                                                    <div class="creation_page_element creation_page_element__long creation_page_element__file_title">
                                                        <label>
                                                            <span>Title</span>
                                                            <input type="text" maxlength="150">
                                                        </label>
                                                    </div>

                                                    <div class="creation_page_element creation_page_element__long creation_page_element__file_link">
                                                        <label>
                                                            <span>Link</span>
                                                            <input type="text" maxlength="150">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="creation_page_element creation_page_element__file_delete">
                                                        <button class="button button__light_blue creation_page_element__file_delete_button">
                                                            <div class="button__icon">
                                                                <img src="assets/delete_multimedia_icon.svg" alt="Image" class="svg">
                                                            </div>
                                                        </button>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_submit">
                                                    <button class="button button__blue creation_page_element_submit__file_submit_button">Submit</button>
                                                </div>
                                            </div>
                                        </div>   

                                        <div class="creation_page_add_video_tile">

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element__title_and_link_block">
                                                    <div class="creation_page_element creation_page_element__long creation_page_element__file_title">
                                                        <label>
                                                            <span>Title</span>
                                                            <input type="text" maxlength="150">
                                                        </label>
                                                    </div>

                                                    <div class="creation_page_element creation_page_element__long creation_page_element__file_link">
                                                        <label>
                                                            <span>Link</span>
                                                            <input type="text" maxlength="150">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="creation_page_element creation_page_element__file_delete">
                                                        <button class="button button__light_blue creation_page_element__file_delete_button">
                                                            <div class="button__icon">
                                                                <img src="assets/delete_multimedia_icon.svg" alt="Image" class="svg">
                                                            </div>
                                                        </button>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_submit">
                                                    <button class="button button__blue creation_page_element_submit__file_submit_button">Submit</button>
                                                </div>

                                            </div>
                                        </div>   
                                    </div>


                                    <button class="create_page_add_video_tile_button  button button__add button__light_blue">
                                        <div class="button__icon">
                                            <img src="assets/add_icon.svg" alt="Image" class="svg">
                                        </div>
                                        <span>Add more videos</span>
                                    </button>
                                </div>
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