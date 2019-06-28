<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Create Product & Services | Daleel</title>
    </head>

    <body class="non_authorized">

        <div class="creation_page inner_page">
            <?php echo $twig->render('common/header.tpl'); ?>

                <section class="main_content_wrapper">
                    <div class="container">

                        <h1>Create Product & Services</h1>

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

                            <div class="creation_page_element creation_page_element__textarea warning">
                                <label>
                                    <span>Small Description</span>
                                    <textarea cols="30" rows="10"></textarea>
                                </label>
                                <span class="input_warning">*Required field</span>
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

                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner">
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

                                        <div class="creation_page_add_image_tile creation_page_add_image_tile__loaded creation_page_elements_wrapper">

                                            <div class="creation_page_add_image_tile_preview">
                                                <img src="img/image_preview.jpg" alt="Image">
                                            </div>

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element creation_page_element__file_title">
                                                    <label>
                                                        <span>Title</span>
                                                        <input type="text" maxlength="150" value="Seattle City View Urban Architecture Traffic Light Trail Dusk" disabled>
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_chooser">
                                                    <label>
                                                        <input type="file" class="creation_page_element__file">
                                                        <span class="creation_page_element__browse button button__add button__light_blue">Browse</span>
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__edit_buttons">
                                                    <button class="creation_page_element__edit_button button button__light_blue">Edit</button>
                                                    <button class="creation_page_element__remove_button button">
                                                        <div class="button__icon">
                                                            <img src="assets/trash_icon.svg" alt="Image" class="">
                                                        </div>
                                                        <span>Delete</span>
                                                    </button>
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

                                     <div class="creation_page_add_video_tile creation_page_add_video_tile__loaded creation_page_elements_wrapper">

                                        <div class="creation_page_add_video_tile_preview">
                                            <img src="img/video_preview.jpg" alt="Image">
                                        </div>

                                        <div class="creation_page_element_content">
                                            <div class="creation_page_element__title_and_link_block">
                                                <div class="creation_page_element creation_page_element__long creation_page_element__file_title">
                                                    <label>
                                                        <span>Title</span>
                                                        <input type="text" maxlength="150" value="Seattle City View Urban Architecture Traffic Light Trail Dusk" disabled>
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__long creation_page_element__file_link">
                                                    <label>
                                                        <span>Link</span>
                                                        <input type="text" maxlength="150" value="https://dribbble.com/shots/4301152-Upload-File" disabled>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="creation_page_element creation_page_element__edit_buttons">
                                                <button class="creation_page_element__edit_button button button__light_blue">Edit</button>
                                                <button class="creation_page_element__remove_button button">
                                                    <div class="button__icon">
                                                        <img src="assets/trash_icon.svg" alt="Image" class="svg">
                                                    </div>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>                                       
                                    </div>


                                    <button class="create_page_add_video_tile_button button button__add button__light_blue">
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

                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner">

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

                                        <div class="creation_page_add_image_tile creation_page_add_image_tile__loaded creation_page_elements_wrapper">

                                            <div class="creation_page_add_image_tile_preview">
                                                <img src="img/image_preview.jpg" alt="Image">
                                            </div>

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element creation_page_element__file_title">
                                                    <label>
                                                        <span>Title</span>
                                                        <input type="text" maxlength="150" value="Seattle City View Urban Architecture Traffic Light Trail Dusk">
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__file_chooser">
                                                    <label>
                                                        <input type="file" class="creation_page_element__file">
                                                        <span class="creation_page_element__browse button button__add button__light_blue">Browse</span>
                                                    </label>
                                                </div>

                                                <div class="creation_page_element creation_page_element__edit_buttons">

                                                    <div class="creation_page_element_save_and_cancel_buttons_block">
                                                        <button class="creation_page_element__save_button button button__blue">Save</button>
                                                        <button class="creation_page_element__cancel_button button button__light_blue">Cancel</button>
                                                    </div>

                                                    <button class="creation_page_element__remove_button button">
                                                        <div class="button__icon">
                                                            <img src="assets/trash_icon.svg" alt="Image" class="">
                                                        </div>
                                                        <span>Delete</span>
                                                    </button>
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

                                        <div class="creation_page_add_video_tile creation_page_add_video_tile__loaded creation_page_add_video_tile__edit creation_page_elements_wrapper">

                                            <div class="creation_page_add_video_tile_preview">
                                                <img src="img/video_preview.jpg" alt="Image">
                                            </div>

                                            <div class="creation_page_element_content">
                                                <div class="creation_page_element__title_and_link_block">
                                                    <div class="creation_page_element creation_page_element__long creation_page_element__file_title">
                                                        <label>
                                                            <span>Title</span>
                                                            <input type="text" maxlength="150" value="Seattle City View Urban Architecture Traffic Light Trail Dusk">
                                                        </label>
                                                    </div>

                                                    <div class="creation_page_element creation_page_element__long creation_page_element__file_link">
                                                        <label>
                                                            <span>Link</span>
                                                            <input type="text" maxlength="150" value="https://dribbble.com/shots/4301152-Upload-File" disabled>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="creation_page_element creation_page_element__edit_buttons">

                                                    <div class="creation_page_element_save_and_cancel_buttons_block">
                                                        <button class="creation_page_element__save_button button button__blue">Save</button>
                                                        <button class="creation_page_element__cancel_button button button__light_blue">Cancel</button>
                                                    </div>

                                                    <button class="creation_page_element__remove_button button">
                                                        <div class="button__icon">
                                                            <img src="assets/trash_icon.svg" alt="Image" class="">
                                                        </div>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>


                                    <button class="create_page_add_video_tile_button button button__add button__light_blue">
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

        </div>
        </div>
        </section>

        </div>

        <?php echo $twig->render('common/footer.tpl'); ?>

            <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>