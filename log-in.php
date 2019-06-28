<?php
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('templates');
    $twig = new \Twig\Environment($loader);
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <?php echo $twig->render('common/head.tpl'); ?>
            <title>Log In | Daleel</title>
    </head>

    <body class="non_authorized">

        <?php echo $twig->render('common/header.tpl'); ?>


            <div class="log_in inner_page">
                <section class="main_content_wrapper">
                    <div class="container">
                        <div class="main_content_inner log_in_block">
                            <h1>Log In to Your Account</h1>        

                            <form class="log_in_form">

                                <div class="log_in_form_element">
                                    <label>
                                        <span>Email</span>
                                        <input type="email" maxlength="150" placeholder="example@mail.com" required>
                                    </label>
                                </div>

                                <div class="log_in_form_element">
                                    <label>
                                        <span>Password</span>
                                        <input type="password" maxlength="25" required>
                                    </label>
                                </div>

                                <div class="log_in_form_elements_wrapper">

                                    <div class="log_in_form_element log_in_form_element__remember_me common_sorting_element common_sorting_element_checkbox">
                                        <label> Remember me
                                            <input class="common_sorting_element__checkbox" type="checkbox" value="yes" name="rememberUser">
                                            <span class="common_sorting_element__checkmark"></span>
                                        </label>
                                    </div>

                                    <a href="#" class="log_in_form__forget_password">Forget password?</a>
                                </div>
                            

                                <button class="button button__blue button__log_in">Log in</button>
                            </form>

                            <div class="log_in__create_account">
                                <span>Haven’t account yet?</span> <a href="#">Create an Account</a>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <?php echo $twig->render('common/footer.tpl'); ?>

            <?php echo $twig->render('common/scripts.tpl'); ?>
    </body>