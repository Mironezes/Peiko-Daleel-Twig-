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
	        <form class="registration_form registration_form_personal_first_step registration_form_personal" autocomplete="off">
	            <ul class="registration_form_progress_bar">
	                <li class="registration_form_progress_bar__first_step active">
	                    
	                    <span class="registration_form_progress_bar__title active">1</span>
	                </li>
	                <li class="registration_form_progress_bar__second_step">
	                                        
	                    <span class="registration_form_progress_bar__title">2</span>
	                </li>
	                <li class="registration_form_progress_bar__third_step">
	                                        
	                    <span class="registration_form_progress_bar__title"><img src="assets/form_done_icon__small.svg" alt="Image" class="svg"></span>
	                </li>
	            </ul>
	            <fieldset class="registration_form_inner first_step active">
	                <h1>Create Personal Account</h1>

	                <div class="registration_form_input_block">
	                    <div class="registration_page_element">
	                            <span>First Name</span>
	                            <input type="text" maxlength="50">
	                    </div>

	                    <div class="registration_page_element">
	                            <span>Last Name</span>
	                            <input type="text" maxlength="50">
	                    </div>

	                    <div class="registration_page_element">
	                            <span>Email</span>
	                            <input type="email" maxlength="150" placeholder="example@mail.com">
	                    </div>

	                    <div class="registration_page_element">
	                            <span>Password</span>
	                            <input type="password" maxlength="36">
	                            <span class="input_notation">Password may include characters: A, a, 0-9</span>
	                    </div>

	                    <div class="registration_page_element">
	                            <span>Confirm Password</span>
	                            <input type="password" maxlength="36">
	                    </div>

	                    <div class="registration_page_element">
	                            <span>Region</span>
	                             <select style="width: 100%">
	                                <option value="" disabled selected>Choose region</option>                        
	                                <option value="Region 1">Region 1</option>
	                                <option value="Region 2">Region 2</option>
	                                <option value="Region 3">Region 3</option>
	                                <option value="Region 4">Region 4</option>
	                            </select>
	                    </div>

	                </div>
	                <div class="registration_form_buttons_block">
	                    <a class="button button__light_blue" href="#">Cancel</a>
	                    <input type="button" name="next" class="next button button__blue" value="Continue" />                     
	                </div>
	            </fieldset>

	            <fieldset class="registration_form_inner email_confirmation">
	                <img src="assets/email_confirmation_icon.svg" alt="Image">
	                <h1>Email Confirmation</h1>
	                <h2>We send you email confirmation</h2>
	                <span>Please check your email box and follow the link to<br>confirmation registration</span>
	            </fieldset>
	        </form>
	    </div>


        <?php echo $twig->render('common/footer.tpl'); ?>

        <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>