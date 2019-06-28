<div class="account_tab_content profile_tab_content  active">


    <div class="account_settings_personal_info_section">

    <div class="account_settings_personal_info_inputs_column">


        <div class="account_settings_personal_info_row">
            <div class="account_settings_element account_settings_element__short">
                <label>
                    <span>First Name</span>
                    <input type="text" placeholder="Example" maxlength="50">
                </label>
            </div>

            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Last Name</span>
                    <input type="text" placeholder="Example" maxlength="50">
                </label>
            </div>            
        </div>

        <div class="account_settings_personal_info_row">
            <div class="account_settings_element account_settings_element__short">
                <label>
                    <span>Gender</span>
                    <select style="width: 100%">
                        <option selected disabled>Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </label>
            </div>

            <div class="account_settings_element account_settings_element__date">
                <label>
                    <span>Birth Date</span>
                    <input type="text" class="datepicker-here" data-language='en' placeholder="Example">
                </label>
            </div>
        </div>

        <div class="account_settings_personal_info_row">        
            <div class="account_settings_element account_settings_element__short">
                    <label>
                        <span>Country:</span>

                    <select style="width: 100%">
                        <option selected disabled>Country</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="Italy">Italy</option>
                        <option value="China">China</option>
                        <option value="Uganda">Uganda</option>                        
                    </select>
                </label>
            </div>

            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Сity</span>
                    <input type="text" placeholder="Сity" maxlength="50">
                </label>
            </div>
        </div>

        <div class="account_settings_personal_info_row">
            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Phone</span>
                    <input type="text" placeholder="Phone" maxlength="50">
                </label>
            </div>

            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Email</span>
                    <input type="email" placeholder="example@mail.com" maxlength="120">
                </label>
            </div>  
        </div>      
    </div>

    <div class="account_settings_personal_info_photo_column">

        <div class="choose_profile_image_block">
            <div class="choose_profile_image_preview">
                <div class="choose_profile_image_profile_picture_picker_block">
                    <img class="choose_profile_image_profile_picture_picker" src="assets/choose_profile_image_icon.svg" alt="Image">
                </div>
                <img class="choose_profile_image_profile_picture" src="#">
            </div>

            <div class="choose_profile_image_loader">
                <button class="choose_profile_image_file_upload_button button">
                    <div class="button__icon">
                        <img src="assets/add_icon.svg" alt="Image" class="svg">
                    </div>
                    <span>Load Photo</span></button>
                <input class="choose_profile_image_file_upload" type="file" accept="image/*" />
            </div>
        </div>
    </div>

    </div>

    <div class="account_settings_work_company_section">
        <h3>Work Company</h3>

        <div class="account_settings_work_company_section_inner">


        <div class="account_settings_personal_info_row">           
            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Company Name</span>
                    <input type="text" placeholder="Example" maxlength="50">
                </label>
            </div>

            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Position</span>
                    <input type="text" placeholder="Example" maxlength="50">
                </label>
            </div>

            <div class="account_settings_element account_settings_element__short">
                    <label>
                    <span>Country:</span>

                    <select style="width: 100%">
                        <option selected disabled>Country</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="Italy">Italy</option>
                        <option value="China">China</option>
                        <option value="Uganda">Uganda</option>                        
                    </select>
                </label>
            </div>
        </div>          

        <div class="account_settings_personal_info_row">
            <div class="account_settings_element account_settings_element__long">
                <label>
                    <span>Сity</span>
                    <input type="text" placeholder="Сity" maxlength="50">
                </label>
            </div>

            <div class="account_settings_element account_settings_element__date">
                <label>
                    <span>Start Date</span>
                    <input type="text" class="datepicker-here" data-language='en' data-min-view="months" data-view="months" data-date-divat="MM yyyy" placeholder="Example">
                </label>
            </div>

            <div class="account_settings_element account_settings_element__date">
                <label>
                    <span>End Date</span>
                    <input type="text" class="datepicker-here" data-language='en' data-min-view="months" data-view="months" data-date-divat="MM yyyy" placeholder="Example">
                </label>
            </div>

            <div class="account_settings_element account_settings_still_work_here">
                <label> Still work here
                    <input class="account_settings_element_checkbox_hidden" type="checkbox" value="working_here" name="userStillWorking">
                    <span class="account_settings_element_checkbox_custom"></span>
                </label>
            </div>
        </div>
        </div>            
    </div>


    <div class="account_tab_settings_buttons">
        <button class="button button__blue account_tab_save_settings_button">Save</button>
    </div>

</div>