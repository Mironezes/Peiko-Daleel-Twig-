<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Create Personal Account | Daleel</title>
    </head>

    <body class="non_authorized">

        <?php echo $twig->render('common/header.tpl'); ?>

        <div class="registration inner_page">
            <form class="registration_form registration_form_personal_second_step registration_form_personal" autocomplete="off">
                <ul class="registration_form_progress_bar">
                    <li class="registration_form_progress_bar__first_step active">
                        
                        <span class="registration_form_progress_bar__title active">1</span>
                    </li>
                    <li class="registration_form_progress_bar__second_step active">
                                            
                        <span class="registration_form_progress_bar__title active">2</span>
                    </li>
                    <li class="registration_form_progress_bar__third_step">
                                            
                        <span class="registration_form_progress_bar__title"><img src="assets/form_done_icon__small.svg" alt="Image" class="svg"></span>
                    </li>
                </ul>

                <fieldset class="registration_form_inner second_step">

                        <h1>Create Personal Account</h1>

                        <div class="registration_form_input_block">

                            <div class="registration_page_element">
                                    <span>About Me</span>
                                    <textarea cols="30" rows="8"></textarea>
                            </div>


                            <div class="registration_page_element">
                                    <span>Job Title</span>
                                    <input type="text" maxlength="50">
                            </div>

                            <div class="registration_page_element">
                                    <span>Company</span>
                                    <input type="text" maxlength="50">
                            </div>

                            <div class="registration_page_element">
                                    <span>Subject Matter Interests</span>
                                    <input type="text" maxlength="50">
                            </div>


                            <div class="registration_page_element">
                                    <span>Subject Matter Interests</span>
                                    <input type="text" maxlength="50">
                            </div>

                            <div class="registration_page_element">

                                    <h4>Are you interested in buying?</h4>

                                    <div class="common_element_radio">
                                        <label>
                                            <span>Yes</span> 
                                            <input class="common_element_radio__input" type="radio" name="interested-in-buying" value="yes">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>

                                        <label>
                                            <span>No</span>
                                            <input class="common_element_radio__input" type="radio" name="interested-in-buying" value="no">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>
                                    </div>  
                            </div>

                            <div class="registration_page_element">

                                    <h4>Are you interested in supplying?</h4>

                                    <div class="common_element_radio">
                                        <label>
                                            <span>Yes</span> 
                                            <input class="common_element_radio__input" type="radio"  name="interested-in-supplying" value="yes">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>

                                        <label>
                                            <span>No</span>
                                            <input class="common_element_radio__input" type="radio" name="interested-in-supplying" value="no">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>
                                    </div>  
                            </div>

                            <div class="registration_page_element">

                                    <h4>Are you interested in learning?</h4>

                                    <div class="common_element_radio">
                                        <label>
                                            <span>Yes</span> 
                                            <input class="common_element_radio__input" type="radio" name="interested-in-learning" value="yes">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>

                                        <label>
                                            <span>No</span>
                                            <input class="common_element_radio__input" type="radio" name="interested-in-learning" value="no">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>
                                    </div>  
                            </div>

                            <div class="registration_page_element">

                                    <h4>Are you interested in building account?</h4>

                                    <div class="common_element_radio">
                                        <label>
                                            <span>Yes</span> 
                                            <input class="common_element_radio__input" type="radio" name="interested-in-building" value="yes">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>

                                        <label>
                                            <span>No</span>
                                            <input class="common_element_radio__input" type="radio" name="interested-in-building" value="no">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>
                                    </div>  
                            </div>                   

                            <div class="registration_page_element">

                                    <h4>Would you be interested in potential job opportunities?</h4>

                                    <div class="common_element_radio">
                                        <label>
                                            <span>Yes</span> 
                                            <input class="common_element_radio__input" type="radio" name="interested-in-job-opp" value="yes">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>

                                        <label>
                                            <span>No</span>
                                            <input class="common_element_radio__input" type="radio" name="interested-in-job-opp" value="no">
                                            <span class="common_element_radio__radiomark"></span>
                                        </label>
                                    </div>  
                            </div>  

                            <div class="registration_page_element">

                                    <h4>Upload your CV</h4>
                    
                                    <input type="file" >

                            </div>                         
                        </div>     

                    <div class="registration_form_buttons_block">
                        <input type="submit" name="submit" class="submit button button__blue" value="Create Account" />
                    </div>

                    <div class="registration_form_links_block">
                        <span class="registration_form_links"><a href="#">Privacy Policy</a> and <a href="#">Terms Of Use</a></span> 
                    </div>


                </fieldset>

            </form>
        </div>


        <?php echo $twig->render('common/footer.tpl'); ?>

        <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>