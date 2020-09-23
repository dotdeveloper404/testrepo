@extends('layouts.master')

@section('styles')
<link href="/assets/form/index.css" rel="stylesheet" type="text/css"/>
@endsection



@section('content')

<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
   <!--begin::Header-->
   <div id="kt_header" class="header  header-fixed ">
       <!--begin::Container-->
       <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
           <!--begin::Header Menu Wrapper-->
           <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
               <!--begin::Header Menu-->
               <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">

               </div>
               <!--end::Header Menu-->
           </div>
           <!--end::Header Menu Wrapper-->

       </div>
       <!--end::Container-->
   </div>
   <!--end::Header-->



   <!--begin::Content-->
   <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Dynamic Form</h5>
                    <!--end::Page Title-->

                                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Dynamic	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                       Form	                        	</a>
                                </li>
                                                        <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                       Create                        	</a>
                                </li>

                                                </ul>
                        <!--end::Breadcrumb-->
                                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>


       <!--begin::Entry-->
       <div class="d-flex flex-column-fluid">
           <!--begin::Container-->
           <div class=" container ">
               <!--begin::Card-->
               <div class="card card-custom gutter-b">
                   <div class="card-body">

                    <!--begin::Form-->
                    <form class="form" method="POST" action="{{ route('form.store') }}">
                @csrf
				<div class="card-body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Form Name:</label>
							<input required type="text" name="name" class="form-control" placeholder="Enter form name"/>
							<span class="form-text text-muted">Please enter   name</span>
						</div>
					</div>

                    <div id="kt_repeater_1">


                        <div class="form-group row">



                            <label class="col-lg-2 col-form-label text-right">

                            </label>

                            <div data-repeater-list="contact" class="col-lg-12">

                                <div data-repeater-item class="form-group row align-items-center">
                                    <div class="col-md-3">


                                                <label>Form Field Type:</label>
                                                <select class="form-control" >
                                                    <option>Text Field</option>
                                                    <option>Dropdown</option>
                                                    <option>Text Area</option>
                                                    <option>Radio Button</option>
                                                    <option>Checkbox</option>
                                                    <option>Email</option>
                                                    <option>Date Picker</option>
                                                    <option>Number Field</option>
                                                </select>


                                    </div>
                                    <div class="col-md-3">
                                        <label>Relation:</label>
                                        <input type="text" required  name="relation" class="form-control" placeholder="Enter relation "/>
                                        <div class="d-md-none mb-2"></div>
                                    </div>

                                    <div class="col-md-3">
                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                            <i class="la la-trash-o"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-right"></label>
                            <div class="col-lg-4">
                                <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                    <i class="la la-plus"></i>Add
                                </a>
                            </div>
                        </div>
                    </div>



                </div>



                <div id="panel">

                    <div id="main">
                    <form id="form_result" action="">
                    <ul id="form_elements"><li id="active_form" class="info" style="display: block;"><img src="/assets/form/icons/arrow.gif" alt="" class="arrow"><a href="#" onclick="return false;" class="hover_ready" title="Click to edit."><h2 id="form_name">Untitled Form</h2><p id="form_desc">This is your form description. Click here to edit.</p></a></li></ul>

                    <div class="notification" style="display: block;" id="nofields" onclick="display_fields(0)">
                    <h2>You have no fields yet!</h2>
                    <p>Click the buttons on the right to add fields to your form.</p>
                    </div>

                    <div id="div_button" class="buttons  hide">
                    <a href="#" id="form_save_button" class="positive">
                    <img src="/assets/form/icons/filesave.gif" alt=""> Save Form</a>
                    </div>
                    </form>
                    <div id="debug_box"></div>
                    </div>


                    <div id="sidebar">
                    <ul id="tabs" class="add_field_tab">
                    <li id="add_field_tab"><a href="javascript:display_fields(0);" title="Add a Field">Add a Field</a></li>
                    <li id="field_prop_tab"><a href="javascript:display_field_properties();" title="Field Properties">Field Properties</a></li>
                    <li id="form_prop_tab"><a href="javascript:display_form_properties();" title="Form Properties">Form Properties</a></li>
                    </ul>


                    <div style="display: block;" id="add_elements">
                    <div style="padding-bottom: 5px; text-align: center"><img src="/assets/form/click_to_add.gif"></div>

                    <div id="element_buttons">
                    <ul id="first_column">
                    <li><a id="single_line_text" href="javascript:insert_element('text')"><img src="/assets/form/button_text/single_line_text.gif"></a></li>
                    <li><a id="paragraph_text" href="javascript:insert_element('textarea');"><img src="/assets/form/button_text/paragraph_text.gif"></a></li>
                    <li><a id="multiple_choice" href="javascript:insert_element('radio');"><img src="/assets/form/button_text/multiple_choice.gif"></a></li>
                    <li><a id="name_text" href="javascript:insert_element('simple_name');"><img src="/assets/form/button_text/name.gif"></a></li>
                    <li><a id="time" href="javascript:insert_element('time');"><img src="/assets/form/button_text/time.gif"></a></li>
                    <li><a id="address" href="javascript:insert_element('address');"><img src="/assets/form/button_text/address.gif"></a></li>
                    <li><a id="price" href="javascript:insert_element('currency');"><img src="/assets/form/button_text/price.gif"></a></li>
                    <li><a id="section_break" href="javascript:insert_element('section');" title="Organize your form."><img src="/assets/form/button_text/section_break.gif"></a></li>
                    </ul>

                    <ul id="second_column">
                    <li><a id="number" href="javascript:insert_element('number');"><img src="/assets/form/button_text/number.gif"></a></li>
                    <li><a id="checkboxes" href="javascript:insert_element('checkbox');"><img src="/assets/form/button_text/checkboxes.gif"></a></li>
                    <li><a id="drop_down" href="javascript:insert_element('select');"><img src="/assets/form/button_text/drop_down.gif"></a></li>
                    <li><a id="date" href="javascript:insert_element('date');"><img src="/assets/form/button_text/date.gif"></a></li>
                    <li><a id="phone" href="javascript:insert_element('phone');"><img src="/assets/form/button_text/phone.gif"></a></li>
                    <li><a id="web_site" href="javascript:insert_element('url');"><img src="/assets/form/button_text/web_site.gif"></a></li>
                    <li><a id="email" href="javascript:insert_element('email');"><img src="/assets/form/button_text/email.gif"></a></li>
                    <li><a id="file_upload" href="javascript:insert_element('file');"><img src="/assets/form/button_text/file_upload.gif"></a></li>
                    </ul>
                    </div>
                    </div>


                    <form style="display: none;" id="element_properties" action="" onsubmit="return false;">
                    <div class="element_inactive" id="element_inactive">
                    <h3><b>Please select a field</b></h3>
                    <p>Click on a field on the left to change its properties.</p>
                    </div>

                    <div class="num" id="element_position">1</div>
                    <ul id="all_properties">
                    <li>
                    <label class="desc" for="element_label">
                    Field Label
                    <a href="#" class="tooltip" title="Field Label" rel="Field Label is one or two words placed directly above the field.">(?)</a>
                    </label>
                    <textarea id="element_label" class="textarea" onkeyup="set_properties(this.value, 'title')"></textarea><img src="/assets/form/icons/arrow_left.gif" id="arrow_left" height="24" width="24" align="top" style="margin-left: 3px;">
                    </li>

                    <li class="left half" id="prop_element_type">
                    <label class="desc" for="element_type">
                    Field Type
                    <a href="#" class="tooltip" title="Field Type" rel="Field Type detemines what kind of data can be collected by your field. After you save the form, the field type cannot be changed.">(?)</a>
                    </label>
                    <select class="select full" id="element_type" autocomplete="off" tabindex="12" onchange="set_properties($F(this), 'type')">
                    <option value="text">Single Line Text</option>
                    <option value="textarea">Paragraph Text</option>
                    <option value="radio">Multiple Choice</option>
                    <option value="checkbox">Checkboxes</option>
                    <option value="select">Drop Down</option>
                    <option value="number">Number</option>
                    <option value="simple_name">Name</option>
                    <option value="date">Date</option>
                    <option value="time">Time</option>
                    <option value="phone">Phone</option>
                    <option value="money">Price</option>
                    <option value="url">Web Site</option>
                    <option value="email">Email</option>
                    <option value="address">Address</option>
                    <option value="file">File Upload</option>
                    <option value="section">Section Break</option>
                    </select>
                    </li>

                    <li class="right half" id="prop_element_size">
                    <label class="desc" for="field_size">
                    Field Size
                    <a href="#" class="tooltip" title="Field Size" rel="This property set the visual appearance of the field in your form. It does not limit nor increase the amount of data that can be collected by the field.">(?)</a>
                    </label>
                    <select class="select full" id="field_size" autocomplete="off" tabindex="13" onchange="set_properties(JJ(this).val(), 'size')">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    </select>
                    </li>

                    <li class="right half" id="prop_date_format">
                    <label class="desc" for="field_size">
                    Date Format
                    <a href="#" class="tooltip" title="Date Format" rel="You can choose between American and European Date Formats">(?)</a>
                    </label>
                    <select class="select full" id="date_type" autocomplete="off" onchange="set_properties(JJ(this).val(), 'type')">
                    <option id="element_date" value="date">MM / DD / YYYY</option>
                    <option id="element_europe_date" value="europe_date">DD / MM / YYYY</option>
                    </select>
                    </li>

                    <li class="right half" id="prop_name_format">
                    <label class="desc" for="name_format">
                    Name Format
                    <a href="#" class="tooltip" title="Name Format" rel="Two format available. A normal name field, or an extended name field with title and suffix.">(?)</a>
                    </label>
                    <select class="select full" id="name_format" autocomplete="off" onchange="set_properties(JJ(this).val(), 'type')">
                    <option id="element_simple_name" value="simple_name" selected="selected">Normal</option>
                    <option id="element_name" value="name">Extended</option>
                    </select>
                    </li>

                    <li class="right half" id="prop_phone_format">
                    <label class="desc" for="field_size">
                    Phone Format
                    <a href="#" class="tooltip" title="Phone Format" rel="You can choose between American and International Phone Formats">(?)</a>
                    </label>
                    <select class="select full" id="phone_format" autocomplete="off" onchange="set_properties(JJ(this).val(), 'type')">
                    <option id="element_phone" value="phone">(###) ### - ####</option>
                    <option id="element_simple_phone" value="simple_phone">International</option>
                    </select>
                    </li>

                    <li class="right half" id="prop_currency_format">
                    <label class="desc" for="field_size">
                    Currency Format
                    </label>
                    <select class="select full" id="money_format" autocomplete="off" onchange="set_properties(JJ(this).val(), 'constraint')">
                    <option id="element_money_usd" value="dollar">$ Dollars</option>
                    <option id="element_money_euro" value="euro">€ Euros</option>
                    <option id="element_money_pound" value="pound">£ Pounds</option>
                    <option id="element_money_yen" value="yen">¥ Yen</option>
                    </select>
                    </li>

                    <li class="clear" id="prop_choices">
                    <fieldset class="choices">
                    <legend>
                    Choices
                    <a href="#" class="tooltip" title="Choices" rel="Use the plus and minus buttons to add and delete choices. Click on the star to make a choice the default selection.">(?)</a>
                    </legend>
                    <ul id="element_choices">
                    </ul>
                    </fieldset>
                    </li>

                    <li class="left half clear" id="prop_options">
                    <fieldset class="fieldset" style="display:none">
                    <legend>Rules</legend>
                    <input id="element_required" class="checkbox" value="" tabindex="14" onchange="(this.checked) ? checkVal = '1' : checkVal = '0';set_properties(checkVal, 'is_required')" type="checkbox">
                    <label class="choice" for="element_required">Required</label>
                    <a href="#" class="tooltip" title="Required" rel="Checking this rule will make sure that a user fills out a particular field. A message will be displayed to the user if they have not filled out the field.">(?)</a><br>
                    <span id="element_unique_span">
                    <input id="element_unique" class="checkbox" value="" tabindex="15" onchange="(this.checked) ? checkVal = '1' : checkVal = '0';set_properties(checkVal, 'is_unique')" type="checkbox">
                    <label class="choice" for="element_unique">No Duplicates</label>
                    <a href="#" class="tooltip" title="No Duplicates" rel="Checking this rule will verify that the data entered into this field is unique and has not been submitted previously.">(?)</a></span><br>
                    </fieldset>
                    </li>

                    <li class="right half" id="prop_access_control">
                    <fieldset class="fieldset" style="display:none">
                    <legend>Field Visible to</legend>
                    <input id="fieldPublic" name="security" class="radio" value="" checked="checked" tabindex="16" onclick="set_properties('0', 'is_private')" type="radio">
                    <label class="choice" for="fieldPublic">Everyone</label>
                    <a href="#" class="tooltip" title="Visible to Everyone" rel="This is the default option. The field will be accessible by anyone when the form is made public.">(?)</a><br>
                    <span id="admin_only_span">
                    <input id="fieldPrivate" name="security" class="radio" value="" tabindex="17" onclick="set_properties('1', 'is_private')" type="radio">
                    <label class="choice" for="fieldPrivate">Admin Only</label>
                    <a href="#" class="tooltip" title="Admin Only" rel="Fields that are set to 'Admin Only' will not be shown to users when the form is made public.">(?)</a></span><br>
                    </fieldset>
                    </li>

                    <li class="left half clear" id="prop_randomize">
                    <fieldset class="fieldset" style="display:none">
                    <legend>Randomize</legend>
                    <input id="element_not_random" name="randomize" class="radio" value="" checked="checked" tabindex="16" onclick="set_properties('', 'constraint')" type="radio">
                    <label class="choice" for="element_not_random">Static Order</label>
                    <a href="#" class="tooltip" title="Static Order" rel="This is the default option. Options will always be displayed in the order you have created them.">(?)</a><br>

                    <input id="element_random" name="randomize" class="radio" value="" tabindex="16" onclick="set_properties('random', 'constraint')" type="radio">
                    <label class="choice" for="element_random">Random Order</label>
                    <a href="#" class="tooltip" title="Random Order" rel="Choose this if you would like the options to be shuffled around each time someone views your form.">(?)</a><br>
                    </fieldset>
                    </li>

                    <li class="clear" id="prop_default_value">
                    <label class="desc" for="element_default" style="display:none">
                    Default Value
                    <a href="#" class="tooltip" title="Default Value" rel="By setting this value, the field will be prepopulated with the text you enter.">(?)</a>
                    </label>

                    <input style="display:none" id="element_default" class="text large" name="text" value="" tabindex="11" maxlength="255" onkeyup="set_properties($F(this), 'default_value')" onblur="set_properties($F(this), 'default_value')" type="text">
                    </li>

                    <li class="clear" id="prop_default_country">
                    <label class="desc" for="fieldaddress_default" style="display:none">
                    Default Country
                    <a href="#" class="tooltip" title="Default Country" rel="By setting this value, the country field will be prepopulated with the selection you make.">(?)</a>
                    </label>
                    <select style="display:none" class="select medium" id="element_countries" onchange="set_properties($F(this), 'default_value')">
                    <option value=""></option>

                    <optgroup label="North America">
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belize">Belize</option>
                    <option value="Canada">Canada</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Panama">Panama</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="United States">United States</option>
                    </optgroup>

                    <optgroup label="South America">
                    <option value="Argentina">Argentina</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Chile">Chile</option>
                    <option value="Columbia">Columbia</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Venezuela">Venezuela</option>
                    </optgroup>

                    <optgroup label="Europe">
                    <option value="Albania">Albania</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Greece">Greece</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Italy">Italy</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Malta">Malta</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Norway">Norway</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Romania">Romania</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Spain">Spain</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Vatican City">Vatican City</option>
                    </optgroup>

                    <optgroup label="Asia">
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="China">China</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Israel">Israel</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="North Korea">North Korea</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Russia">Russia</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Syria">Syria</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Yemen">Yemen</option>
                    </optgroup>

                    <optgroup label="Oceania">
                    <option value="Australia">Australia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Micronesia">Micronesia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Palau">Palau</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Vanuatu">Vanuatu</option>
                    </optgroup>

                    <optgroup label="Africa">
                    <option value="Algeria">Algeria</option>
                    <option value="Angola">Angola</option>
                    <option value="Benin">Benin</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Mali">Mali</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="United Republic of Tanzania">Tanzania</option>
                    <option value="Togo">Togo</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    </optgroup>
                    </select>
                    </li>

                    <li class="clear" id="prop_phone_default"><span style="display:none">
                    <label class="desc" for="element_phone_default1">
                    Default Value
                    <a href="#" class="tooltip" title="Default Value" rel="By setting this value, the field will be prepopulated with the text you enter.">(?)</a>
                    </label>

                    ( <input id="element_phone_default1" class="text" size="3" name="text" value="" tabindex="11" maxlength="3" onkeyup="set_properties($F('element_phone_default1').toString()+$F('element_phone_default2').toString()+$F('element_phone_default3').toString(), 'default_value')" onblur="set_properties($F('element_phone_default1').toString()+$F('element_phone_default2').toString()+$F('element_phone_default3').toString(), 'default_value')" type="text"> )

                    <input id="element_phone_default2" class="text" size="3" name="text" value="" tabindex="11" maxlength="3" onkeyup="set_properties($F('element_phone_default1').toString()+$F('element_phone_default2').toString()+$F('element_phone_default3').toString(), 'default_value')" onblur="set_properties($F('element_phone_default1').toString()+$F('element_phone_default2').toString()+$F('element_phone_default3').toString(), 'default_value')" type="text"> -
                    <input id="element_phone_default3" class="text" size="4" name="text" value="" tabindex="11" maxlength="4" onkeyup="set_properties($F('element_phone_default1').toString()+$F('element_phone_default2').toString()+$F('element_phone_default3').toString(), 'default_value')" onblur="set_properties($F('element_phone_default1').toString()+$F('element_phone_default2').toString()+$F('element_phone_default3').toString(), 'default_value')" type="text"></span>
                    </li>

                    <li class="clear">
                    <label class="desc" for="element_instructions">
                    Guidelines for User
                    <a href="#" class="tooltip" title="Guidelines" rel="This text will be displayed to your users while they're filling out particular field.">(?)</a>
                    </label>

                    <textarea class="textarea full" rows="10" cols="50" id="element_instructions" tabindex="18" onkeyup="set_properties(this.value, 'guidelines')" onblur="set_properties(this.value, 'guidelines')"></textarea>
                    </li>
                    </ul>
                    </form>
                    <ul id="add_elements_button" style="display: none; padding-top: 5px">
                    <li class="buttons" id="list_buttons">
                    <a href="#" onclick="display_fields(0);return false">
                    <img src="/assets/form/icons/textfield_add.gif" alt="">Add Another Field</a>
                    </li>
                    </ul>
                    <form style="display: none;" id="form_properties" action="" onsubmit="return false;">
                    <ul>
                    <li>
                    <label class="desc" for="form_title">Form Title <a class="tooltip" title="Form Title" rel="The title of your form displayed to the user when they see your form.">(?)</a></label>
                    <input id="form_title" class="text medium" value="" tabindex="1" maxlength="50" onkeyup="update_form(this.value, 'name')" onblur="update_form(this.value, 'name')" type="text">
                    </li>
                    <li>
                    <label class="desc" for="form_description">Description <a class="tooltip" title="Description" rel="This will appear directly below the form name. Useful for displaying a short description or any instructions, notes, guidelines.">(?)</a></label>
                    <textarea class="textarea small" rows="10" cols="50" id="form_description" tabindex="2" onkeyup="update_form(this.value, 'description')" onblur="update_form(this.value, 'description')"></textarea>
                    </li>

                    <li style="display: none">
                    <input id="form_password_option" class="checkbox" value="" tabindex="5" type="checkbox">
                    <label class="choice" for="form_password_option"><b>Turn On Password Protection</b></label>
                    <a class="tooltip" title="Turn On Password Protection" rel="If enabled, all users accessing the public form will then be required to type in the password to access the form. Your form is password protected.">(?)</a><br>
                    <div id="form_password" class="password hide">
                    <img src="/assets/form/icons/key.gif" alt="Password : ">
                    <input id="form_password_data" class="text" value="" size="25" tabindex="6" maxlength="255" onkeyup="update_form(this.value, 'password')" onblur="update_form(this.value, 'password')" type="password">
                    </div>
                    </li>

                    <li style="display: none">
                    <input id="form_captcha" class="checkbox" value="" onchange="(this.checked)?update_form('1', 'captcha'):update_form('0','captcha');" tabindex="6" type="checkbox">
                    <label class="choice" for="form_captcha"><b>Turn On Spam Protection (CAPTCHA)</b></label>
                    <a class="tooltip" title="Turn On Spam Protection (CAPTCHA)" rel="If enabled, an image with random words will be generated (audio also provided) and users will be required to enter the correct words to be able submitting your form. This is useful to prevent abuse from bots or automated programs usually written to generate spam.">(?)</a><br>
                    </li>

                    <li style="display: none">
                    <input id="form_unique_ip" class="checkbox" value="" onchange="(this.checked)?update_form('1', 'unique_ip'):update_form('0','unique_ip');" tabindex="7" type="checkbox">
                    <label class="choice" for="form_unique_ip"><b>Limit One Entry Per User</b></label>
                    <a class="tooltip" title="Limit One Entry Per User" rel="Use this to prevent users from filling out your form more than once. This is done by comparing user's IP Address.">(?)</a><br>
                    </li>

                    <li style="display: none">
                    <fieldset>
                    <legend>Success Message</legend>

                    <div class="left">
                    <input id="form_success_message_option" name="confirmation" class="radio" value="" checked="checked" tabindex="8" onclick="update_form('', 'redirect'); Element.removeClassName('form_success_message', 'hide');Element.addClassName('form_redirect_url', 'hide')" type="radio">
                    <label class="choice" for="form_success_message_option">Show Text</label>
                    <a class="tooltip" title="Success Message" rel="This message will be displayed after your users have successfully submitted an entry.">(?)</a>
                    </div>

                    <div class="right">
                    <input id="form_redirect_option" name="confirmation" class="radio" value="" tabindex="7" onclick="update_form(redirect_url, 'redirect'); Element.addClassName('form_success_message', 'hide');Element.removeClassName('form_redirect_url', 'hide');" type="radio">
                    <label class="choice" for="form_redirect_option">Redirect URL</label>
                    <a class="tooltip" title="Redirect URL" rel="After your users have successfully submitted an entry, you can redirect them to another
                    website/URL of your choice.">(?)</a>
                    </div>

                    <textarea class="textarea full" rows="10" cols="50" id="form_success_message" tabindex="9" onkeyup="update_form($F(this), 'success_message')" onblur="update_form($F(this), 'success_message')">Success! Your submission has been saved!</textarea>

                    <input id="form_redirect_url" class="text full hide" name="text" value="http://" tabindex="10" onkeyup="redirect_url = $F(this);update_form($F(this), 'redirect')" onblur="urlInHistory = $F(this);update_form($F(this), 'redirect')" type="text">
                    </fieldset>
                    </li>
                    </ul>
                    </form>
                    </div>

                    </div>


                    <div class="card-footer">
					<div class="row">
						<div class="col-lg-6">
							<button type="submit" class="btn btn-primary mr-2">Save</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>

					</div>
				</div>

            </form>
            <!--end::Form-->

                   </div>

               </div>

           </div>

       </div>
   </div>

</div>

@endsection



@section('scripts')

<script type="text/javascript" src="/assets/js/base.js"></script>
<script type="text/javascript" src="/assets/js/machform.js"></script>


<script type="text/javascript">
    var json_form = {"id":0,"name":"Untitled Form","description":"This is your form description. Click here to edit.","redirect":"","success_message":"Success! Your submission has been saved!","password":"","frame_height":0,"unique_ip":0,"captcha":0};
    var json_elements = {"elements":[]};
    </script>

@endsection
