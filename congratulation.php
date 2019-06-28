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
                    <li class="registration_form_progress_bar__third_step active">
                                            
                        <span class="registration_form_progress_bar__title active"><img src="assets/form_done_icon__small.svg" alt="Image" class="svg"></span>
                    </li>
                </ul>

                <fieldset class="registration_form_inner congratulation">
                    <img src="assets/congratulation_icon.svg" alt="Image">
                    <h1>Congratulation!</h1>
                    <h2>Your Personal Account is registrate</h2>
                    <span>Please log in to your account for continue work<br>with us</span>                
                    <a href="#" class="button__blue button">Log In</a>
                </fieldset>

            </form>
        </div>


        <?php echo $twig->render('common/footer.tpl'); ?>

        <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>
