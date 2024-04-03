<style>
    .popupForm .form-group {
        position: relative;
    }

    .popupForm .form-group svg {
        position: absolute;
        right: 10px;
        width: 20px;
        height: 20px;
        top: 50%;
        transform: translateY(-50%);
        stroke: #b9b9b9;
        stroke-width: 1.5px;
    }
    .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 7px);
    padding: 0.375rem 0.75rem;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: 0.25rem;
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}

    svg:not(:root) {
        overflow: hidden;
    }
</style>
<div class="popupForm px-4">
                                <h4 class="text-center mb-5">Book Your Next Holiday With OTP</h4>
                                <form class="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Seller Name</label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <select class="form-control" name="ddlBudget" id="ddlBudget" height="65px">
                                                    <option value="">Select Seller Name & Arrival City</option>
                                                    <option value="Budget">Company 1, Arrival City</option>
                                                    <option value="Standard">Company 2, Arrival City</option>
                                                    <option value="Luxury">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label>Full Name <sup class="text-danger">*</sup></label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input type="text" name="txtFullName" id="txtFullName" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Email Address <sup class="text-danger">*</sup></label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail feather-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Contact Number <sup class="text-danger">*</sup></label>
                                            <div class="form-group inputBox position-relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call feather-icon"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                <input type="text" name="txtPhone" id="txtPhone" class="form-control" onkeypress="return validateRefPhone2(event)" placeholder="Contact No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Trip Category</label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <select class="form-control" name="ddlBudget" id="ddlBudget">
                                                    <option value="">Select Type</option>
                                                    <option value="Budget">Budget</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Luxury">Luxury</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="txtDepCountry">
                                                Departure Country <sup class="text-danger">*</sup>
                                            </label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                <select name="txtDepCountry" id="txtDepCountry" class="form-control selectpicker">
                                                    <option value="" selected="selected" disabled="disabled">Select Your Country</option>
                                                    <option value="Not Confirmed" data-code="+10000">Not Confirmed</option>
                                                    <option value="Afghanistan" data-code="+93">Afghanistan</option>
                                                    <option value="Albania" data-code="+355">Albania</option>
                                                    <option value="Algeria" data-code="+213">Algeria</option>
                                                    <option value="American Samoa" data-code="+684">American Samoa</option>
                                                    <option value="Andorra" data-code="+376">Andorra</option>
                                                    <option value="Angola" data-code="+244">Angola</option>
                                                    <option value="Anguilla" data-code="+809">Anguilla</option>
                                                    <option value="Antarctica" data-code="+672">Antarctica</option>
                                                    <option value="Antigua and Barbuda" data-code="+1268">Antigua and Barbuda</option>
                                                    <option value="Argentina" data-code="+54">Argentina</option>
                                                    <option value="Armenia" data-code="+374">Armenia</option>
                                                    <option value="Aruba" data-code="+297">Aruba</option>
                                                    <option value="Ascension" data-code="+247">Ascension</option>
                                                    <option value="Australia" data-code="+61">Australia</option>
                                                    <option value="Austria" data-code="+43">Austria</option>
                                                    <option value="Azerbaijan" data-code="+994">Azerbaijan</option>
                                                    <option value="Bahamas" data-code="+1242">Bahamas</option>
                                                    <option value="Bahrain" data-code="+973">Bahrain</option>
                                                    <option value="Bangladesh" data-code="+880">Bangladesh</option>
                                                    <option value="Barbados" data-code="+1246">Barbados</option>
                                                    <option value="Belarus" data-code="+375">Belarus</option>
                                                    <option value="Belgium" data-code="+32">Belgium</option>
                                                    <option value="Belize" data-code="+501">Belize</option>
                                                    <option value="Benin" data-code="+229">Benin</option>
                                                    <option value="Bermuda" data-code="+1441">Bermuda</option>
                                                    <option value="Bhutan" data-code="+975">Bhutan</option>
                                                    <option value="Bolivia" data-code="+591">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina" data-code="+387">Bosnia and Herzegovina</option>
                                                    <option value="Botswana" data-code="+267">Botswana</option>
                                                    <option value="Brazil" data-code="+55">Brazil</option>
                                                    <option value="British Virgin Islands" data-code="+284">British Virgin Islands</option>
                                                    <option value="Brunei" data-code="+673">Brunei</option>
                                                    <option value="Bulgaria" data-code="+359">Bulgaria</option>
                                                    <option value="Burkina Faso" data-code="+226">Burkina Faso</option>
                                                    <option value="Burundi" data-code="+257">Burundi</option>
                                                    <option value="Cambodia" data-code="+855">Cambodia</option>
                                                    <option value="Cameroon" data-code="+237">Cameroon</option>
                                                    <option value="Canada" data-code="+1">Canada</option>
                                                    <option value="Cape Verde Islands" data-code="+238">Cape Verde Islands</option>
                                                    <option value="Cayman Islands" data-code="+345">Cayman Islands</option>
                                                    <option value="Central African Republic" data-code="+236">Central African Republic</option>
                                                    <option value="Chad" data-code="+235">Chad</option>
                                                    <option value="New Zealand" data-code="+64">New Zealand</option>
                                                    <option value="Chile" data-code="+56">Chile</option>
                                                    <option value="China" data-code="+86">China</option>
                                                    <option value="Christmas Island" data-code="+672">Christmas Island</option>
                                                    <option value="Cocos Islands" data-code="+672">Cocos Islands</option>
                                                    <option value="Colombia" data-code="+57">Colombia</option>
                                                    <option value="Comoros" data-code="+269">Comoros</option>
                                                    <option value="Congo" data-code="+242">Congo</option>
                                                    <option value="Cook Islands" data-code="+682">Cook Islands</option>
                                                    <option value="Costa Rica" data-code="+506">Costa Rica</option>
                                                    <option value="Croatia" data-code="+385">Croatia</option>
                                                    <option value="Cuba" data-code="+53">Cuba</option>
                                                    <option value="Cyprus" data-code="+357">Cyprus</option>
                                                    <option value="Czech Republic" data-code="+420">Czech Republic</option>
                                                    <option value="Denmark" data-code="+45">Denmark</option>
                                                    <option value="Diego Garcia" data-code="+246">Diego Garcia</option>
                                                    <option value="Djibouti" data-code="+253">Djibouti</option>
                                                    <option value="Dominica" data-code="+767">Dominica</option>
                                                    <option value="Dominican Republic" data-code="+809">Dominican Republic</option>
                                                    <option value="Easter Island" data-code="+56">Easter Island</option>
                                                    <option value="Ecuador" data-code="+593">Ecuador</option>
                                                    <option value="Egypt" data-code="+20">Egypt</option>
                                                    <option value="El Salvador" data-code="+503">El Salvador</option>
                                                    <option value="Equatorial Guinea" data-code="+240">Equatorial Guinea</option>
                                                    <option value="Eritrea" data-code="+291">Eritrea</option>
                                                    <option value="Estonia" data-code="+372">Estonia</option>
                                                    <option value="Ethiopia" data-code="+251">Ethiopia</option>
                                                    <option value="Falkland Islands" data-code="+500">Falkland Islands</option>
                                                    <option value="Faroe Islands" data-code="+298">Faroe Islands</option>
                                                    <option value="Fiji" data-code="+679">Fiji</option>
                                                    <option value="Finland" data-code="+358">Finland</option>
                                                    <option value="France" data-code="+33">France</option>
                                                    <option value="French Antilles" data-code="+596">French Antilles</option>
                                                    <option value="French Guyana" data-code="+594">French Guyana</option>
                                                    <option value="French Polynesia" data-code="+689">French Polynesia</option>
                                                    <option value="Fyrom (Macedonia)" data-code="+389">Fyrom (Macedonia)</option>
                                                    <option value="Gabon" data-code="+241">Gabon</option>
                                                    <option value="Gambia" data-code="+220">Gambia</option>
                                                    <option value="Georgia" data-code="+995">Georgia</option>
                                                    <option value="Germany" data-code="+49">Germany</option>
                                                    <option value="Ghana" data-code="+233">Ghana</option>
                                                    <option value="Gibraltar" data-code="+350">Gibraltar</option>
                                                    <option value="Greece" data-code="+30">Greece</option>
                                                    <option value="Greenland" data-code="+299">Greenland</option>
                                                    <option value="Grenada and Carriacuou" data-code="+473">Grenada and Carriacuou</option>
                                                    <option value="Grenadin Islands" data-code="+784">Grenadin Islands</option>
                                                    <option value="Guadeloupe" data-code="+590">Guadeloupe</option>
                                                    <option value="Guam" data-code="+671">Guam</option>
                                                    <option value="Guantanamo Bay" data-code="+53">Guantanamo Bay</option>
                                                    <option value="Guatemala" data-code="+502">Guatemala</option>
                                                    <option value="Guiana" data-code="+594">Guiana</option>
                                                    <option value="Guinea" data-code="+224">Guinea</option>
                                                    <option value="Guinea-Bissau" data-code="+245">Guinea-Bissau</option>
                                                    <option value="Guyana" data-code="+592">Guyana</option>
                                                    <option value="Haiti" data-code="+509">Haiti</option>
                                                    <option value="Honduras" data-code="+504">Honduras</option>
                                                    <option value="Hong Kong" data-code="+852">Hong Kong</option>
                                                    <option value="Hungary" data-code="+36">Hungary</option>
                                                    <option value="Iceland" data-code="+354">Iceland</option>
                                                    <option value="India" data-code="+91">India</option>
                                                    <option value="Indonesia" data-code="+62">Indonesia</option>
                                                    <option value="Iran" data-code="+98">Iran</option>
                                                    <option value="Iraq" data-code="+964">Iraq</option>
                                                    <option value="Ireland" data-code="+353">Ireland</option>
                                                    <option value="Israel" data-code="+972">Israel</option>
                                                    <option value="Italy" data-code="+39">Italy</option>
                                                    <option value="Ivory Coast" data-code="+225">Ivory Coast</option>
                                                    <option value="Jamaica" data-code="+876">Jamaica</option>
                                                    <option value="Japan" data-code="+81">Japan</option>
                                                    <option value="Jerusalem" data-code="+2">Jerusalem</option>
                                                    <option value="Jordan" data-code="+962">Jordan</option>
                                                    <option value="Kazakhstan" data-code="+7">Kazakhstan</option>
                                                    <option value="Kenya" data-code="+254">Kenya</option>
                                                    <option value="Kiribati" data-code="+686">Kiribati</option>
                                                    <option value="South Korea" data-code="+82">South Korea</option>
                                                    <option value="Kuwait" data-code="+965">Kuwait</option>
                                                    <option value="Kygyzstan" data-code="+996">Kygyzstan</option>
                                                    <option value="Laos" data-code="+856">Laos</option>
                                                    <option value="Latvia" data-code="+371">Latvia</option>
                                                    <option value="Lebanon" data-code="+961">Lebanon</option>
                                                    <option value="Lesotho" data-code="+266">Lesotho</option>
                                                    <option value="Liberia" data-code="+231">Liberia</option>
                                                    <option value="Libya" data-code="+218">Libya</option>
                                                    <option value="Liechtenstein" data-code="+41">Liechtenstein</option>
                                                    <option value="Lithuania" data-code="+370">Lithuania</option>
                                                    <option value="Luxembourg" data-code="+352">Luxembourg</option>
                                                    <option value="Macau" data-code="+853">Macau</option>
                                                    <option value="Macedonia" data-code="+389">Macedonia</option>
                                                    <option value="Madagascar" data-code="+261">Madagascar</option>
                                                    <option value="Malawi" data-code="+265">Malawi</option>
                                                    <option value="Malaysia" data-code="+60">Malaysia</option>
                                                    <option value="Maldives" data-code="+960">Maldives</option>
                                                    <option value="Mali" data-code="+223">Mali</option>
                                                    <option value="Malta" data-code="+356">Malta</option>
                                                    <option value="Mariana Islands" data-code="+670">Mariana Islands</option>
                                                    <option value="Marshall Islands" data-code="+692">Marshall Islands</option>
                                                    <option value="Martinique" data-code="+596">Martinique</option>
                                                    <option value="Mauritania" data-code="+222">Mauritania</option>
                                                    <option value="Mauritius" data-code="+230">Mauritius</option>
                                                    <option value="Mayotte" data-code="+269">Mayotte</option>
                                                    <option value="Mexico" data-code="+52">Mexico</option>
                                                    <option value="Micronesia, Federated States" data-code="+691">
                                                        Micronesia, Federated
                                                        States
                                                    </option>
                                                    <option value="Midway Islands" data-code="+808">Midway Islands</option>
                                                    <option value="Miquelon" data-code="+508">Miquelon</option>
                                                    <option value="Moldova" data-code="+373">Moldova</option>
                                                    <option value="Monaco" data-code="+377">Monaco</option>
                                                    <option value="Mongolia" data-code="+976">Mongolia</option>
                                                    <option value="Montserrat" data-code="+664">Montserrat</option>
                                                    <option value="Morocco" data-code="+212">Morocco</option>
                                                    <option value="Mozambique" data-code="+258">Mozambique</option>
                                                    <option value="Myanmar" data-code="+95">Myanmar</option>
                                                    <option value="Namibia" data-code="+264">Namibia</option>
                                                    <option value="Nauru" data-code="+674">Nauru</option>
                                                    <option value="Nepal" data-code="+977">Nepal</option>
                                                    <option value="Netherlands" data-code="+31">Netherlands</option>
                                                    <option value="Neth. Antilles" data-code="+599">Neth. Antilles</option>
                                                    <option value="Nevis" data-code="+869">Nevis</option>
                                                    <option value="New Caledonia" data-code="+687">New Caledonia</option>
                                                    <option value="New Zealand" data-code="+64">New Zealand</option>
                                                    <option value="Nicaragua" data-code="+505">Nicaragua</option>
                                                    <option value="Niger" data-code="+227">Niger</option>
                                                    <option value="Nigeria" data-code="+234">Nigeria</option>
                                                    <option value="Niue" data-code="+683">Niue</option>
                                                    <option value="Norfolk Island" data-code="+672">Norfolk Island</option>
                                                    <option value="North Korea" data-code="+850">North Korea</option>
                                                    <option value="Norway" data-code="+47">Norway</option>
                                                    <option value="Oman" data-code="+968">Oman</option>
                                                    <option value="Pakistan" data-code="+92">Pakistan</option>
                                                    <option value="Palau" data-code="+680">Palau</option>
                                                    <option value="Panama" data-code="+507">Panama</option>
                                                    <option value="Papua New Guinea" data-code="+675">Papua New Guinea</option>
                                                    <option value="Paraguay" data-code="+595">Paraguay</option>
                                                    <option value="Peru" data-code="+51">Peru</option>
                                                    <option value="Philippines" data-code="+63">Philippines</option>
                                                    <option value="Poland" data-code="+48">Poland</option>
                                                    <option value="Portugal" data-code="+351">Portugal</option>
                                                    <option value="Principe" data-code="+239">Principe</option>
                                                    <option value="Puerto Rico" data-code="+1787">Puerto Rico</option>
                                                    <option value="Qatar" data-code="+974">Qatar</option>
                                                    <option value="Reunion Island" data-code="+262">Reunion Island</option>
                                                    <option value="Romania" data-code="+40">Romania</option>
                                                    <option value="Russia" data-code="+7">Russia</option>
                                                    <option value="Rwanda" data-code="+250">Rwanda</option>
                                                    <option value="St. Helena" data-code="+290">St. Helena</option>
                                                    <option value="St. Kitts" data-code="+869">St. Kitts</option>
                                                    <option value="St. Lucia" data-code="+758">St. Lucia</option>
                                                    <option value="St Pierre et Miquelon" data-code="+508">St Pierre et Miquelon</option>
                                                    <option value="St. Vincent" data-code="+784">St. Vincent</option>
                                                    <option value="Saipan" data-code="+670">Saipan</option>
                                                    <option value="San Marino" data-code="+378">San Marino</option>
                                                    <option value="Sao Tome" data-code="+239">Sao Tome</option>
                                                    <option value="Saudi Arabia" data-code="+966">Saudi Arabia</option>
                                                    <option value="Senegal Republic" data-code="+221">Senegal Republic</option>
                                                    <option value="Serbia" data-code="+381">Serbia</option>
                                                    <option value="Seychelles" data-code="+248">Seychelles</option>
                                                    <option value="Sierra Leone" data-code="+232">Sierra Leone</option>
                                                    <option value="Singapore" data-code="+65">Singapore</option>
                                                    <option value="Slovakia" data-code="+421">Slovakia</option>
                                                    <option value="Slovenia" data-code="+386">Slovenia</option>
                                                    <option value="Solomon Islands" data-code="+677">Solomon Islands</option>
                                                    <option value="Somalia" data-code="+252">Somalia</option>
                                                    <option value="South Africa" data-code="+27">South Africa</option>
                                                    <option value="Spain" data-code="+34">Spain</option>
                                                    <option value="Sri Lanka" data-code="+94">Sri Lanka</option>
                                                    <option value="Sudan" data-code="+249">Sudan</option>
                                                    <option value="Suriname" data-code="+597">Suriname</option>
                                                    <option value="Swaziland" data-code="+268">Swaziland</option>
                                                    <option value="Sweden" data-code="+46">Sweden</option>
                                                    <option value="Switzerland" data-code="+41">Switzerland</option>
                                                    <option value="Syria" data-code="+963">Syria</option>
                                                    <option value="Taiwan" data-code="+886">Taiwan</option>
                                                    <option value="Tajikistan" data-code="+7">Tajikistan</option>
                                                    <option value="Tanzania" data-code="+255">Tanzania</option>
                                                    <option value="Thailand" data-code="+66">Thailand</option>
                                                    <option value="Togo" data-code="+228">Togo</option>
                                                    <option value="Tokelau" data-code="+690">Tokelau</option>
                                                    <option value="Tonga" data-code="+676">Tonga</option>
                                                    <option value="Trinidad and Tobago" data-code="+868">Trinidad and Tobago</option>
                                                    <option value="Tunisia" data-code="+216">Tunisia</option>
                                                    <option value="Turkey" data-code="+90">Turkey</option>
                                                    <option value="Turkmenistan" data-code="+993">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" data-code="+649">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" data-code="+688">Tuvalu</option>
                                                    <option value="Uganda" data-code="+256">Uganda</option>
                                                    <option value="Ukraine" data-code="+380">Ukraine</option>
                                                    <option value="United Arab Emirates" data-code="+971">United Arab Emirates</option>
                                                    <option value="United Kingdom" data-code="+44">United Kingdom</option>
                                                    <option value="United States" data-code="+1">United States</option>
                                                    <option value="Uruguay" data-code="+598">Uruguay</option>
                                                    <option value="U.S. Virgin Islands" data-code="+340">U.S. Virgin Islands</option>
                                                    <option value="Uzbekistan" data-code="+7">Uzbekistan</option>
                                                    <option value="Vanuatu" data-code="+678">Vanuatu</option>
                                                    <option value="Vatican city" data-code="+39">Vatican city</option>
                                                    <option value="Venezuela" data-code="+58">Venezuela</option>
                                                    <option value="Vietnam" data-code="+84">Vietnam</option>
                                                    <option value="Wake Island" data-code="+808">Wake Island</option>
                                                    <option value="Wallis &amp; Futuna Islands" data-code="+681">Wallis &amp; Futuna Islands </option>
                                                    <option value="Western Samoa" data-code="+685">Western Samoa</option>
                                                    <option value="Yemen" data-code="+967">Yemen</option>
                                                    <option value="Yugoslavia" data-code="+381">Yugoslavia</option>
                                                    <option value="Zaire" data-code="+243">Zaire</option>
                                                    <option value="Zambia" data-code="+260">Zambia</option>
                                                    <option value="Zanzibar" data-code="+259">Zanzibar</option>
                                                    <option value="Zimbabwe" data-code="+263">Zimbabwe</option>
                                                </select>





                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <label for="txtDepCity">Departure City </label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                <input type="text" name="txtDepCity" id="txtDepCity" class="form-control" placeholder="Departure City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="txtArriveCountry">
                                                Arrival Country <sup class="text-danger">*</sup>
                                            </label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                

                                                <select name="txtArriveCountry" id="txtArriveCountry" class="form-control selectpicker">
                                                    <option value="" selected="selected" disabled="disabled">Select Arrival Country</option>
                                                    <option value="Not Confirmed" data-code="+10000">Not Confirmed</option>
                                                    <option value="Afghanistan" data-code="+93">Afghanistan</option>
                                                    <option value="Albania" data-code="+355">Albania</option>
                                                    <option value="Algeria" data-code="+213">Algeria</option>
                                                    <option value="American Samoa" data-code="+684">American Samoa</option>
                                                    <option value="Andorra" data-code="+376">Andorra</option>
                                                    <option value="Angola" data-code="+244">Angola</option>
                                                    <option value="Anguilla" data-code="+809">Anguilla</option>
                                                    <option value="Antarctica" data-code="+672">Antarctica</option>
                                                    <option value="Antigua and Barbuda" data-code="+1268">Antigua and Barbuda</option>
                                                    <option value="Argentina" data-code="+54">Argentina</option>
                                                    <option value="Armenia" data-code="+374">Armenia</option>
                                                    <option value="Aruba" data-code="+297">Aruba</option>
                                                    <option value="Ascension" data-code="+247">Ascension</option>
                                                    <option value="Australia" data-code="+61">Australia</option>
                                                    <option value="Austria" data-code="+43">Austria</option>
                                                    <option value="Azerbaijan" data-code="+994">Azerbaijan</option>
                                                    <option value="Bahamas" data-code="+1242">Bahamas</option>
                                                    <option value="Bahrain" data-code="+973">Bahrain</option>
                                                    <option value="Bangladesh" data-code="+880">Bangladesh</option>
                                                    <option value="Barbados" data-code="+1246">Barbados</option>
                                                    <option value="Belarus" data-code="+375">Belarus</option>
                                                    <option value="Belgium" data-code="+32">Belgium</option>
                                                    <option value="Belize" data-code="+501">Belize</option>
                                                    <option value="Benin" data-code="+229">Benin</option>
                                                    <option value="Bermuda" data-code="+1441">Bermuda</option>
                                                    <option value="Bhutan" data-code="+975">Bhutan</option>
                                                    <option value="Bolivia" data-code="+591">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina" data-code="+387">Bosnia and Herzegovina</option>
                                                    <option value="Botswana" data-code="+267">Botswana</option>
                                                    <option value="Brazil" data-code="+55">Brazil</option>
                                                    <option value="British Virgin Islands" data-code="+284">British Virgin Islands</option>
                                                    <option value="Brunei" data-code="+673">Brunei</option>
                                                    <option value="Bulgaria" data-code="+359">Bulgaria</option>
                                                    <option value="Burkina Faso" data-code="+226">Burkina Faso</option>
                                                    <option value="Burundi" data-code="+257">Burundi</option>
                                                    <option value="Cambodia" data-code="+855">Cambodia</option>
                                                    <option value="Cameroon" data-code="+237">Cameroon</option>
                                                    <option value="Canada" data-code="+1">Canada</option>
                                                    <option value="Cape Verde Islands" data-code="+238">Cape Verde Islands</option>
                                                    <option value="Cayman Islands" data-code="+345">Cayman Islands</option>
                                                    <option value="Central African Republic" data-code="+236">Central African Republic</option>
                                                    <option value="Chad" data-code="+235">Chad</option>
                                                    <option value="New Zealand" data-code="+64">New Zealand</option>
                                                    <option value="Chile" data-code="+56">Chile</option>
                                                    <option value="China" data-code="+86">China</option>
                                                    <option value="Christmas Island" data-code="+672">Christmas Island</option>
                                                    <option value="Cocos Islands" data-code="+672">Cocos Islands</option>
                                                    <option value="Colombia" data-code="+57">Colombia</option>
                                                    <option value="Comoros" data-code="+269">Comoros</option>
                                                    <option value="Congo" data-code="+242">Congo</option>
                                                    <option value="Cook Islands" data-code="+682">Cook Islands</option>
                                                    <option value="Costa Rica" data-code="+506">Costa Rica</option>
                                                    <option value="Croatia" data-code="+385">Croatia</option>
                                                    <option value="Cuba" data-code="+53">Cuba</option>
                                                    <option value="Cyprus" data-code="+357">Cyprus</option>
                                                    <option value="Czech Republic" data-code="+420">Czech Republic</option>
                                                    <option value="Denmark" data-code="+45">Denmark</option>
                                                    <option value="Diego Garcia" data-code="+246">Diego Garcia</option>
                                                    <option value="Djibouti" data-code="+253">Djibouti</option>
                                                    <option value="Dominica" data-code="+767">Dominica</option>
                                                    <option value="Dominican Republic" data-code="+809">Dominican Republic</option>
                                                    <option value="Easter Island" data-code="+56">Easter Island</option>
                                                    <option value="Ecuador" data-code="+593">Ecuador</option>
                                                    <option value="Egypt" data-code="+20">Egypt</option>
                                                    <option value="El Salvador" data-code="+503">El Salvador</option>
                                                    <option value="Equatorial Guinea" data-code="+240">Equatorial Guinea</option>
                                                    <option value="Eritrea" data-code="+291">Eritrea</option>
                                                    <option value="Estonia" data-code="+372">Estonia</option>
                                                    <option value="Ethiopia" data-code="+251">Ethiopia</option>
                                                    <option value="Falkland Islands" data-code="+500">Falkland Islands</option>
                                                    <option value="Faroe Islands" data-code="+298">Faroe Islands</option>
                                                    <option value="Fiji" data-code="+679">Fiji</option>
                                                    <option value="Finland" data-code="+358">Finland</option>
                                                    <option value="France" data-code="+33">France</option>
                                                    <option value="French Antilles" data-code="+596">French Antilles</option>
                                                    <option value="French Guyana" data-code="+594">French Guyana</option>
                                                    <option value="French Polynesia" data-code="+689">French Polynesia</option>
                                                    <option value="Fyrom (Macedonia)" data-code="+389">Fyrom (Macedonia)</option>
                                                    <option value="Gabon" data-code="+241">Gabon</option>
                                                    <option value="Gambia" data-code="+220">Gambia</option>
                                                    <option value="Georgia" data-code="+995">Georgia</option>
                                                    <option value="Germany" data-code="+49">Germany</option>
                                                    <option value="Ghana" data-code="+233">Ghana</option>
                                                    <option value="Gibraltar" data-code="+350">Gibraltar</option>
                                                    <option value="Greece" data-code="+30">Greece</option>
                                                    <option value="Greenland" data-code="+299">Greenland</option>
                                                    <option value="Grenada and Carriacuou" data-code="+473">Grenada and Carriacuou</option>
                                                    <option value="Grenadin Islands" data-code="+784">Grenadin Islands</option>
                                                    <option value="Guadeloupe" data-code="+590">Guadeloupe</option>
                                                    <option value="Guam" data-code="+671">Guam</option>
                                                    <option value="Guantanamo Bay" data-code="+53">Guantanamo Bay</option>
                                                    <option value="Guatemala" data-code="+502">Guatemala</option>
                                                    <option value="Guiana" data-code="+594">Guiana</option>
                                                    <option value="Guinea" data-code="+224">Guinea</option>
                                                    <option value="Guinea-Bissau" data-code="+245">Guinea-Bissau</option>
                                                    <option value="Guyana" data-code="+592">Guyana</option>
                                                    <option value="Haiti" data-code="+509">Haiti</option>
                                                    <option value="Honduras" data-code="+504">Honduras</option>
                                                    <option value="Hong Kong" data-code="+852">Hong Kong</option>
                                                    <option value="Hungary" data-code="+36">Hungary</option>
                                                    <option value="Iceland" data-code="+354">Iceland</option>
                                                    <option value="India" data-code="+91">India</option>
                                                    <option value="Indonesia" data-code="+62">Indonesia</option>
                                                    <option value="Iran" data-code="+98">Iran</option>
                                                    <option value="Iraq" data-code="+964">Iraq</option>
                                                    <option value="Ireland" data-code="+353">Ireland</option>
                                                    <option value="Israel" data-code="+972">Israel</option>
                                                    <option value="Italy" data-code="+39">Italy</option>
                                                    <option value="Ivory Coast" data-code="+225">Ivory Coast</option>
                                                    <option value="Jamaica" data-code="+876">Jamaica</option>
                                                    <option value="Japan" data-code="+81">Japan</option>
                                                    <option value="Jerusalem" data-code="+2">Jerusalem</option>
                                                    <option value="Jordan" data-code="+962">Jordan</option>
                                                    <option value="Kazakhstan" data-code="+7">Kazakhstan</option>
                                                    <option value="Kenya" data-code="+254">Kenya</option>
                                                    <option value="Kiribati" data-code="+686">Kiribati</option>
                                                    <option value="South Korea" data-code="+82">South Korea</option>
                                                    <option value="Kuwait" data-code="+965">Kuwait</option>
                                                    <option value="Kygyzstan" data-code="+996">Kygyzstan</option>
                                                    <option value="Laos" data-code="+856">Laos</option>
                                                    <option value="Latvia" data-code="+371">Latvia</option>
                                                    <option value="Lebanon" data-code="+961">Lebanon</option>
                                                    <option value="Lesotho" data-code="+266">Lesotho</option>
                                                    <option value="Liberia" data-code="+231">Liberia</option>
                                                    <option value="Libya" data-code="+218">Libya</option>
                                                    <option value="Liechtenstein" data-code="+41">Liechtenstein</option>
                                                    <option value="Lithuania" data-code="+370">Lithuania</option>
                                                    <option value="Luxembourg" data-code="+352">Luxembourg</option>
                                                    <option value="Macau" data-code="+853">Macau</option>
                                                    <option value="Macedonia" data-code="+389">Macedonia</option>
                                                    <option value="Madagascar" data-code="+261">Madagascar</option>
                                                    <option value="Malawi" data-code="+265">Malawi</option>
                                                    <option value="Malaysia" data-code="+60">Malaysia</option>
                                                    <option value="Maldives" data-code="+960">Maldives</option>
                                                    <option value="Mali" data-code="+223">Mali</option>
                                                    <option value="Malta" data-code="+356">Malta</option>
                                                    <option value="Mariana Islands" data-code="+670">Mariana Islands</option>
                                                    <option value="Marshall Islands" data-code="+692">Marshall Islands</option>
                                                    <option value="Martinique" data-code="+596">Martinique</option>
                                                    <option value="Mauritania" data-code="+222">Mauritania</option>
                                                    <option value="Mauritius" data-code="+230">Mauritius</option>
                                                    <option value="Mayotte" data-code="+269">Mayotte</option>
                                                    <option value="Mexico" data-code="+52">Mexico</option>
                                                    <option value="Micronesia, Federated States" data-code="+691">
                                                        Micronesia, Federated
                                                        States
                                                    </option>
                                                    <option value="Midway Islands" data-code="+808">Midway Islands</option>
                                                    <option value="Miquelon" data-code="+508">Miquelon</option>
                                                    <option value="Moldova" data-code="+373">Moldova</option>
                                                    <option value="Monaco" data-code="+377">Monaco</option>
                                                    <option value="Mongolia" data-code="+976">Mongolia</option>
                                                    <option value="Montserrat" data-code="+664">Montserrat</option>
                                                    <option value="Morocco" data-code="+212">Morocco</option>
                                                    <option value="Mozambique" data-code="+258">Mozambique</option>
                                                    <option value="Myanmar" data-code="+95">Myanmar</option>
                                                    <option value="Namibia" data-code="+264">Namibia</option>
                                                    <option value="Nauru" data-code="+674">Nauru</option>
                                                    <option value="Nepal" data-code="+977">Nepal</option>
                                                    <option value="Netherlands" data-code="+31">Netherlands</option>
                                                    <option value="Neth. Antilles" data-code="+599">Neth. Antilles</option>
                                                    <option value="Nevis" data-code="+869">Nevis</option>
                                                    <option value="New Caledonia" data-code="+687">New Caledonia</option>
                                                    <option value="New Zealand" data-code="+64">New Zealand</option>
                                                    <option value="Nicaragua" data-code="+505">Nicaragua</option>
                                                    <option value="Niger" data-code="+227">Niger</option>
                                                    <option value="Nigeria" data-code="+234">Nigeria</option>
                                                    <option value="Niue" data-code="+683">Niue</option>
                                                    <option value="Norfolk Island" data-code="+672">Norfolk Island</option>
                                                    <option value="North Korea" data-code="+850">North Korea</option>
                                                    <option value="Norway" data-code="+47">Norway</option>
                                                    <option value="Oman" data-code="+968">Oman</option>
                                                    <option value="Pakistan" data-code="+92">Pakistan</option>
                                                    <option value="Palau" data-code="+680">Palau</option>
                                                    <option value="Panama" data-code="+507">Panama</option>
                                                    <option value="Papua New Guinea" data-code="+675">Papua New Guinea</option>
                                                    <option value="Paraguay" data-code="+595">Paraguay</option>
                                                    <option value="Peru" data-code="+51">Peru</option>
                                                    <option value="Philippines" data-code="+63">Philippines</option>
                                                    <option value="Poland" data-code="+48">Poland</option>
                                                    <option value="Portugal" data-code="+351">Portugal</option>
                                                    <option value="Principe" data-code="+239">Principe</option>
                                                    <option value="Puerto Rico" data-code="+1787">Puerto Rico</option>
                                                    <option value="Qatar" data-code="+974">Qatar</option>
                                                    <option value="Reunion Island" data-code="+262">Reunion Island</option>
                                                    <option value="Romania" data-code="+40">Romania</option>
                                                    <option value="Russia" data-code="+7">Russia</option>
                                                    <option value="Rwanda" data-code="+250">Rwanda</option>
                                                    <option value="St. Helena" data-code="+290">St. Helena</option>
                                                    <option value="St. Kitts" data-code="+869">St. Kitts</option>
                                                    <option value="St. Lucia" data-code="+758">St. Lucia</option>
                                                    <option value="St Pierre et Miquelon" data-code="+508">St Pierre et Miquelon</option>
                                                    <option value="St. Vincent" data-code="+784">St. Vincent</option>
                                                    <option value="Saipan" data-code="+670">Saipan</option>
                                                    <option value="San Marino" data-code="+378">San Marino</option>
                                                    <option value="Sao Tome" data-code="+239">Sao Tome</option>
                                                    <option value="Saudi Arabia" data-code="+966">Saudi Arabia</option>
                                                    <option value="Senegal Republic" data-code="+221">Senegal Republic</option>
                                                    <option value="Serbia" data-code="+381">Serbia</option>
                                                    <option value="Seychelles" data-code="+248">Seychelles</option>
                                                    <option value="Sierra Leone" data-code="+232">Sierra Leone</option>
                                                    <option value="Singapore" data-code="+65">Singapore</option>
                                                    <option value="Slovakia" data-code="+421">Slovakia</option>
                                                    <option value="Slovenia" data-code="+386">Slovenia</option>
                                                    <option value="Solomon Islands" data-code="+677">Solomon Islands</option>
                                                    <option value="Somalia" data-code="+252">Somalia</option>
                                                    <option value="South Africa" data-code="+27">South Africa</option>
                                                    <option value="Spain" data-code="+34">Spain</option>
                                                    <option value="Sri Lanka" data-code="+94">Sri Lanka</option>
                                                    <option value="Sudan" data-code="+249">Sudan</option>
                                                    <option value="Suriname" data-code="+597">Suriname</option>
                                                    <option value="Swaziland" data-code="+268">Swaziland</option>
                                                    <option value="Sweden" data-code="+46">Sweden</option>
                                                    <option value="Switzerland" data-code="+41">Switzerland</option>
                                                    <option value="Syria" data-code="+963">Syria</option>
                                                    <option value="Taiwan" data-code="+886">Taiwan</option>
                                                    <option value="Tajikistan" data-code="+7">Tajikistan</option>
                                                    <option value="Tanzania" data-code="+255">Tanzania</option>
                                                    <option value="Thailand" data-code="+66">Thailand</option>
                                                    <option value="Togo" data-code="+228">Togo</option>
                                                    <option value="Tokelau" data-code="+690">Tokelau</option>
                                                    <option value="Tonga" data-code="+676">Tonga</option>
                                                    <option value="Trinidad and Tobago" data-code="+868">Trinidad and Tobago</option>
                                                    <option value="Tunisia" data-code="+216">Tunisia</option>
                                                    <option value="Turkey" data-code="+90">Turkey</option>
                                                    <option value="Turkmenistan" data-code="+993">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands" data-code="+649">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu" data-code="+688">Tuvalu</option>
                                                    <option value="Uganda" data-code="+256">Uganda</option>
                                                    <option value="Ukraine" data-code="+380">Ukraine</option>
                                                    <option value="United Arab Emirates" data-code="+971">United Arab Emirates</option>
                                                    <option value="United Kingdom" data-code="+44">United Kingdom</option>
                                                    <option value="United States" data-code="+1">United States</option>
                                                    <option value="Uruguay" data-code="+598">Uruguay</option>
                                                    <option value="U.S. Virgin Islands" data-code="+340">U.S. Virgin Islands</option>
                                                    <option value="Uzbekistan" data-code="+7">Uzbekistan</option>
                                                    <option value="Vanuatu" data-code="+678">Vanuatu</option>
                                                    <option value="Vatican city" data-code="+39">Vatican city</option>
                                                    <option value="Venezuela" data-code="+58">Venezuela</option>
                                                    <option value="Vietnam" data-code="+84">Vietnam</option>
                                                    <option value="Wake Island" data-code="+808">Wake Island</option>
                                                    <option value="Wallis &amp; Futuna Islands" data-code="+681">Wallis &amp; Futuna Islands </option>
                                                    <option value="Western Samoa" data-code="+685">Western Samoa</option>
                                                    <option value="Yemen" data-code="+967">Yemen</option>
                                                    <option value="Yugoslavia" data-code="+381">Yugoslavia</option>
                                                    <option value="Zaire" data-code="+243">Zaire</option>
                                                    <option value="Zambia" data-code="+260">Zambia</option>
                                                    <option value="Zanzibar" data-code="+259">Zanzibar</option>
                                                    <option value="Zimbabwe" data-code="+263">Zimbabwe</option>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtArriveCity">Arrival City</label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                <input type="text" name="txtArriveCity" id="txtArriveCity" class="form-control" placeholder="Arrival City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="txtDepDate">
                                                Departure Date <sup class="text-danger">*</sup>
                                            </label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-icon"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                <input type="text" name="txtDepDate" id="txtDepDate" placeholder="MM/DD/YYYY" class="form-control ui-datepicker2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtNights">
                                                No. of Nights <sup class="text-danger">*</sup>
                                            </label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon feather-icon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                                                <input type="number" name="txtNights" id="txtNights" onkeypress="return validateRefPhone2(event)" class="form-control" min="1" placeholder="No. of Nights ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="txtNoOfAdults">
                                                No. of Adults <sup class="text-danger">*</sup>
                                            </label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users feather-icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <input type="number" name="txtNoOfAdults" id="txtNoOfAdults" onkeypress="return validateRefPhone2(event)" class="form-control" placeholder="Adults" min="1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txtNoOfAdults">No. of Minors</label>
                                            <div class="form-group inputBox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input type="number" name="txtNoOfMinor" id="txtNoOfMinor" onkeypress="return validateRefPhone2(event)" class="form-control" placeholder="Minors" min="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="txtNoOfAdults">Your Enquiry</label>
                                            <div class="form-group inputBox">
                                                <textarea class="form-control" rows="3" id="txtMsg" name="txtMsg" placeholder="Please write about your trip.."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 align-self-md-center">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger" id="btnSendQuery">
                                                    Go For the
                                                    Holidays
                                                </button>
                                            </div>
                                        </div>
                                    </div>



                                </form>

                            </div>