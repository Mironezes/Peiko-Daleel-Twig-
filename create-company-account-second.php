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
            <form class="registration_form registration_form_company_second_step registration_form_company" autocomplete="off">
                <ul class="registration_form_progress_bar">
                    <li class="registration_form_progress_bar__first_step active">
                        
                        <span class="registration_form_progress_bar__title active">1</span>
                    </li>
                    <li class="registration_form_progress_bar__second_step active">
                                            
                        <span class="registration_form_progress_bar__title">2</span>
                    </li>
                    <li class="registration_form_progress_bar__third_step">
                                            
                        <span class="registration_form_progress_bar__title"><img src="assets/form_done_icon__small.svg" alt="Image" class="svg"></span>
                    </li>
                </ul>


                <fieldset class="registration_form_inner choose_plan">

                    <h1>Choose Plan</h1>

                    <div class="choose_perfect_plan_table choose_perfect_plan_table__mobile_collpse">

                        <div class="subscribe_page_choose_perfect_plan_first_column subscribe_page_choose_perfect_plan_column">
                            <div style="order:0;" class="choose_perfect_plan_table_cell choose_perfect_plan_table_cell__head"></div>
                            <div style="order:1;" class="choose_perfect_plan_table_cell">Company Listing</div>
                            <div style="order:2;" class="choose_perfect_plan_table_cell">Product or Service Listings</div>
                            <div style="order:3;" class="choose_perfect_plan_table_cell">Contact Info</div>
                            <div style="order:4;" class="choose_perfect_plan_table_cell">Featured in Search Results</div>
                            <div style="order:5;" class="choose_perfect_plan_table_cell">Detailed Company Info</div>
                            <div style="order:6;" class="choose_perfect_plan_table_cell">Show off your work history & performance</div>
                            <div style="order:7;" class="choose_perfect_plan_table_cell">List Multiple Locations & Contacts</div>
                            <div style="order:8;" class="choose_perfect_plan_table_cell">Become Verified (Beta)</div>
                            <div style="order:9;" class="choose_perfect_plan_table_cell">Feature on Category Intelligence Page</div>
                            <div style="order:10;" class="choose_perfect_plan_table_cell">Lead Notifier (Beta)</div>
                            <div style="order:11;" class="choose_perfect_plan_table_cell">Receive Marketing Statistics</div>
                            <div style="order:12;" class="choose_perfect_plan_table_cell">Feature on Competitors Page</div>
                            <div style="order:13;" class="choose_perfect_plan_table_cell">Get fast track verification</div>
                        </div>

                        <div class="subscribe_page_choose_perfect_plan_second_column subscribe_page_choose_perfect_plan_column">
                            <div style="order:0;" class="choose_perfect_plan_table_cell choose_perfect_plan_table_cell__head">
                                <div class="choose_perfect_plan_table_cell__head__title">
                                    <h3>Enterprise</h3>           
                                </div>

                                <div class="choose_perfect_plan_table_plan_price">
                                    <div class="choose_perfect_plan_table_plan_price__amount">
                                        <span class="choose_perfect_plan_table_plan_price__amount_sign">£</span>
                                        <strong class="choose_perfect_plan_table_plan_price__amount_number">89</strong>
                                    </div>
                                    <div class="choose_perfect_plan_table_plan_price__desc">Per month,
                                        <br>Billed annually
                                    </div>
                                </div>
                                <div class="choose_perfect_plan_table_plan_button">
                                    <span class="button choose_perfect_plan_table_enterprise_plan_button next">Started Now</span>
                                </div>
                            </div>

                            <div style="order:1;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image">
                                    <div class="choose_perfect_plan_table__mobile_title">Company Listing</div>
                                </div>
                            </div>
                            <div style="order:2;" class="choose_perfect_plan_table_cell">
                                <span class="choose_perfect_plan_table__listing_value">Unlimited</span>
                                <div class="choose_perfect_plan_table__mobile_title">Product or Service Listings</div>
                            </div>
                            <div style="order:3;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Contact Info</div>
                            </div>
                            <div style="order:4;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Featured in Search Results</div>
                            </div>
                            <div style="order:5;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Detailed Company Info</div>
                            </div>
                            <div style="order:6;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Show off your work history & performance</div>
                            </div>
                            <div style="order:7;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">List Multiple Locations & Contacts</div>
                            </div>
                            <div style="order:8;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Become Verified (Beta)</div>
                            </div>
                            <div style="order:9;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Feature on Category Intelligence Page</div>
                            </div>
                            <div style="order:10;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Lead Notifier (Beta)</div>
                            </div>
                            <div style="order:11;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Receive Marketing Statistics</div>
                            </div>
                            <div style="order:12;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Feature on Competitors Page</div>
                            </div>
                            <div style="order:13;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Get fast track verification</div>
                            </div>
                        </div>

                        <div class="subscribe_page_choose_perfect_plan_third_column subscribe_page_choose_perfect_plan_column">
                            <div style="order:0;" class="choose_perfect_plan_table_cell choose_perfect_plan_table_cell__head">

                                <div class="choose_perfect_plan_table_cell__head__title">
                                    <h3><strong>Verified</strong></h3>           
                                </div>

                                <div class="choose_perfect_plan_table_plan_price">
                                    <div class="choose_perfect_plan_table_plan_price__amount">
                                        <span class="choose_perfect_plan_table_plan_price__amount_sign">£</span>
                                        <strong class="choose_perfect_plan_table_plan_price__amount_number">79</strong>
                                    </div>
                                    <div class="choose_perfect_plan_table_plan_price__desc">Per month,
                                        <br>Billed annually
                                    </div>
                                </div>
                                <div class="choose_perfect_plan_table_plan_button">
                                    <span class="button choose_perfect_plan_table_verified_plan_button next">Started Now</span>
                                </div>
                            </div>
                            <div style="order:1;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Company Listing</div>
                            </div>
                            <div style="order:2;" class="choose_perfect_plan_table_cell">
                                <span class="choose_perfect_plan_table__listing_value">Unlimited</span>
                                <div class="choose_perfect_plan_table__mobile_title">Product or Service Listings</div>
                            </div>
                            <div style="order:3;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Contact Info</div>
                            </div>
                            <div style="order:4;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Featured in Search Results</div>
                            </div>
                            <div style="order:5;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Detailed Company Info</div>
                            </div>
                            <div style="order:6;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Show off your work history & performance</div>
                            </div>
                            <div style="order:7;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">List Multiple Locations & Contacts</div>
                            </div>
                            <div style="order:8;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Become Verified (Beta)</div>
                            </div>
                            <div style="order:9;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Feature on Category Intelligence Page</div>
                            </div>
                            <div style="order:10;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Lead Notifier (Beta)</div>
                            </div>
                            <div style="order:11;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Receive Marketing Statistics</div>
                            </div>
                            <div style="order:12;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Feature on Competitors Page</div>
                            </div>
                            <div style="order:13;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Get fast track verification</div>
                            </div>
                        </div>

                        <div class="subscribe_page_choose_perfect_plan_fourth_column subscribe_page_choose_perfect_plan_column">
                            <div style="order:0;" class="choose_perfect_plan_table_cell choose_perfect_plan_table_cell__head">
                                <div class="choose_perfect_plan_table_cell__head__title">
                                    <h3>Free</h3>                
                                </div>

                                <div class="choose_perfect_plan_table_plan_price">
                                    <div class="choose_perfect_plan_table_plan_price__amount">
                                        <span class="choose_perfect_plan_table_plan_price__amount_sign">£</span>
                                        <strong class="choose_perfect_plan_table_plan_price__amount_number">0</strong>
                                    </div>
                                </div>
                                <div class="choose_perfect_plan_table_plan_button">
                                    <span class="button choose_perfect_plan_table_free_plan_button next">Create Now</span>
                                </div>
                            </div>
                            <div style="order:1;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Company Listing</div>
                            </div>
                            <div style="order:2;" class="choose_perfect_plan_table_cell">
                                <span class="choose_perfect_plan_table__listing_value">Up to 3</span>
                                <div class="choose_perfect_plan_table__mobile_title">Product or Service Listings</div>
                            </div>
                            <div style="order:3;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/check_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Contact Info</div>
                            </div>
                            <div style="order:4;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Featured in Search Results</div>
                            </div>
                            <div style="order:5;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Detailed Company Info</div>
                            </div>
                            <div style="order:6;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image">
                                    <div class="choose_perfect_plan_table__mobile_title">Show off your work history & performance</div>
                                </div>
                            </div>
                            <div style="order:7;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">List Multiple Locations & Contacts</div>
                            </div>
                            <div style="order:8;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Become Verified (Beta)</div>
                            </div>
                            <div style="order:9;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Feature on Category Intelligence Page</div>
                            </div>
                            <div style="order:10;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Lead Notifier (Beta)</div>
                            </div>
                            <div style="order:11;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Receive Marketing Statistics</div>
                            </div>
                            <div style="order:12;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Feature on Competitors Page</div>
                            </div>
                            <div style="order:13;" class="choose_perfect_plan_table_cell">
                                <div class="choose_perfect_plan_table__value"><img src="assets/subscribe/false_icon.svg" alt="Image"></div>
                                <div class="choose_perfect_plan_table__mobile_title">Get fast track verification</div>
                            </div>
                        </div>
                    </div>


                </fieldset>

                <fieldset class="registration_form_inner second_step">


                        <div class="registration_page_header">
                            <span class="button button__light_blue previous">Back</span>
                            <h1>Create Company Account</h1>                        
                        </div>

                        <div class="registration_form_input_block">

                            <div class="registration_form_input_section">
                                <div class="registration_page_element">
                                        <h4>Upload your logotype (jpeg, jpg, png)</h4>
                                        <input type="file" >
                                </div>                      

                                <div class="registration_page_element">
                                        <span>Summary Overview</span>
                                        <textarea cols="30" rows="8"></textarea>
                                </div>                                
                            </div>

                            <div class="registration_form_input_section">
                                <h4>Services he provides</h4>

                                <div class="registration_page_element">
                                    <span>Category A *multiple select</span>
                                    <select class="common_sorting_element__tags_selector" multiple="multiple" style="width: 100%" name="common_sorting_element__tags[]">
                                        <option disabled>Choose category</option>
                                        <option value="UX Design">UX Design</option>
                                        <option value="Photoshop">Photoshop</option>
                                        <option value="Something else">Japan</option>                                        
                                    </select>
                                </div>

                                <div class="registration_page_element">
                                    <span>Category B *multiple select</span>
                                    <select class="common_sorting_element__tags_selector" multiple="multiple" style="width: 100%" name="common_sorting_element__tags[]">
                                        <option disabled>Choose category</option>
                                        <option value="UX Design">UX Design</option>
                                        <option value="Photoshop">Photoshop</option>
                                        <option value="Something else">Japan</option>                                        
                                    </select>
                                </div>

                                <div class="registration_page_element">
                                    <span>Major clients *multiple select</span>
                                    <select class="common_sorting_element__tags_selector" multiple="multiple" style="width: 100%" name="common_sorting_element__tags[]">
                                        <option disabled>Choose category</option>
                                        <option value="UX Design">UX Design</option>
                                        <option value="Photoshop">Photoshop</option>
                                        <option value="Something else">Japan</option>                                        
                                    </select>
                                </div>

                                <div class="registration_page_element">
                                        <h4>Documents, Awards, Certificates, etc. (doc, pdf, jpeg, jpg, png)</h4>
                                        <input type="file" >
                                </div>                                 
                            </div>

                            <div class="registration_form_input_section">
                                <h4>Headoffice</h4>          

                                <div class="registration_page_element">
                                        <span>Full Adress</span>
                                        <input type="text" maxlength="50">
                                </div>

                                <div class="registration_page_element">
                                        <span>Phone number</span>
                                        <input type="text" maxlength="50">
                                </div>

                                <div class="registration_page_element">
                                        <span>Email</span>
                                        <input type="email" maxlength="50">
                                </div>
                            </div>
    
                            <div class="registration_form_input_section">
                                <h4>Socials</h4>          

                                <div class="registration_page_element">
                                        <span>Facebook</span>
                                        <input type="text" maxlength="50">
                                </div>

                                <div class="registration_page_element">
                                        <span>Linked In</span>
                                        <input type="text" maxlength="50">
                                </div>                               
                            </div>

                            <div class="registration_form_input_section">
                                <h4>Highlights</h4>          

                                <div class="registration_page_element">
                                        <span>Employees</span>
                                        <input type="text" maxlength="50">
                                </div>

                                <div class="registration_page_element">
                                        <span>Value for year</span>
                                        <input type="text" maxlength="50">
                                </div>

                                <div class="registration_page_element">
                                        <span>Experience</span>
                                        <input type="text" maxlength="50">
                                </div>
                                                               
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