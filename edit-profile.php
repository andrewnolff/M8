<?php include 'includes/header.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include Select2 CSS and JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<section class="edit_profile_sect">
    <div class="container-fluid">
        <h3 class="page_title">Edit Profile</h3>
        <div class="editProfile_content d_flexStart">
            <div class="editProfile_left">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-Basic-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Basic" type="button" role="tab" aria-controls="v-pills-Basic" aria-selected="true">Basic</button>
                    <button class="nav-link" id="v-pills-Career-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Career" type="button" role="tab" aria-controls="v-pills-Career" aria-selected="false">Career</button>
                    <button class="nav-link" id="v-pills-Physical-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Physical" type="button" role="tab" aria-controls="v-pills-Physical" aria-selected="false">Physical</button>
                    <button class="nav-link" id="v-pills-Personality-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Personality" type="button" role="tab" aria-controls="v-pills-Personality" aria-selected="false">Personality</button>
                    <button class="nav-link" id="v-pills-TheTea-tab" data-bs-toggle="pill" data-bs-target="#v-pills-TheTea" type="button" role="tab" aria-controls="v-pills-TheTea" aria-selected="false">The Tea</button>
                    <button class="nav-link" id="v-pills-ProfilePictures-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ProfilePictures" type="button" role="tab" aria-controls="v-pills-ProfilePictures" aria-selected="false">Profile Pictures</button>
                </div>
            </div>
            <div class="editProfile_right">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-Basic" role="tabpanel" aria-labelledby="v-pills-Basic-tab">
                        <div class="editProfile_section">
                            <h3 class="page_title">Edit Profile</h3>
                            <form action="" class="profileInput">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input placeholder="Date of Birth" name="date" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                                            <!--<input type="date" placeholder="Date of Birth">-->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" data-placeholder="Gender">
                                                <option value="" disabled selected>Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="4">Transgender Female</option>
                                                <option value="3">Transgender Male</option>
                                                <option value="5">Non-binary / Genderqueer / Gender Fluid</option>
                                                <option value="6">Two Spirit</option>
                                                <option value="7">Prefer to self-describe</option>
                                                <option value="8">Prefer not to say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-hide-search-multi" multiple="multiple" id="stg" data-placeholder="Stage of Life">
                                                <!--<option value="" selected>Stage of Life</option>-->
                                                <option value="1">Still in school</option>
                                                <option value="2">Grinding at work</option>
                                                <option value="3">Figuring myself out</option>
                                                <option value="4">Married</option>
                                                <option value="5">Has Kid(s)</option>
                                                <option value="6">Living Life</option>
                                                <option value="7">Single</option>
        
        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" data-placeholder="Religion">
                                                <option value="" disabled selected>Religion</option>
                                                <!--<option disabled>Religion</option>-->
                                                <option value="1">Agnostic</option>
                                                <option value="2">Atheist</option>
                                                <option value="3">Buddhist</option>
                                                <option value="4">Catholic</option>
                                                <option value="5">Christian</option>
                                                <option value="6">Hindu</option>
                                                <option value="7">Jewish</option>
                                                <option value="8">Muslim</option>
                                                <option value="8">Sikh</option>
                                                <option value="8">Spiritual</option>
                                                <option value="8">Other</option>
                                                <option value="8">Prefer not to say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Current City">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="cta">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Career" role="tabpanel" aria-labelledby="v-pills-Career-tab">
                        <div class="editProfile_section">
                            <h3 class="page_title">Career</h3>
                            <form action="" class="profileInput">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input type="text" placeholder="School">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Job">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!--<div class="inputFields">-->
                                        <!--    <input type="text" placeholder="Min.Income">-->
                                        <!--</div>-->
                                         <div class="SelectField">
                                            <select name="cars" id="cars" placeholder="Income">
                                                <option value="1">Income</option>
                                                <option value="2">0-50,000</option>
                                                <option value="3">50,000-100,000</option>
                                                <option value="4">100,000-200,000</option>
                                                <option value="5">200,000-400,000</option>
                                                <option value="6">400,000-1,000,000</option>
                                                <option value="7">1,000,000+</option>
                                                <option value="8">prefer not to say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--<div class="col-6">-->
                                    <!--    <div class="inputFields">-->
                                    <!--        <input type="text" placeholder="Max.Income">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="col-12">
                                        <button type="submit" class="cta">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Physical" role="tabpanel" aria-labelledby="v-pills-Physical-tab">
                        <div class="editProfile_section">
                            <h3 class="page_title">Physical</h3>
                            <form action="" class="profileInput">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="inputField_height">
                                            <div class="inputField_height_ft">
                                                <input type="number" placeholder="Height">
                                                <span class="input_bg">ft</span>
                                            </div>
                                            <div class="inputField_height_ft">
                                                <input type="number" placeholder="Height">
                                                <span class="input_bg">inch</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <div class="inputField_height inputField_weight">
                                            <input type="number" placeholder="Weight">
                                            <span class="input_bg">lbs</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-hide-search-multi" multiple="multiple" id="rac" data-placeholder="Race">
                                                <!--<option disabled>Race</option>-->
                                                <option value="1">Hispanic or Latino</option>
                                                <option value="2">American Indian or Alaskan Native</option>
                                                <option value="3">Asian</option>
                                                <option value="4">Native Hawaiian or Other Pacific Islander</option>
                                                <option value="5">Black or African American</option>
                                                <option value="6">White</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="eye" data-placeholder="Eye Color">
                                                <option value="" disabled selected>Eye Color</option>
                                                <option value="1">Amber</option>
                                                <option value="2">Blue</option>
                                                <option value="3">Brown</option>
                                                <option value="4">Gray</option>
                                                <option value="5">Green</option>
                                                <option value="6">Hazel</option>
                                                <option value="7">Red</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="hai" data-placeholder="Hair Color">
                                                <option value="" disabled selected>Hair Color</option>
                                                <option value="1">Blonde</option>
                                                <option value="2">Brown</option>
                                                <option value="3">Red</option>
                                                <option value="4">Black</option>
                                                <option value="5">White</option>
                                                <option value="6">Gray</option>
                                                <option value="7">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select name="cars" id="cars">
                                                <option value="1">Body Type (Scale)</option>
                                                <option value="2">1</option>
                                                <option value="3">2</option>
                                                <option value="4">3</option>
                                                <option value="5">4</option>
                                                <option value="6">5</option>
                                                <option value="7">6</option>
                                                <option value="8">7</option>
                                            </select>
                                        </div>
                                        <a href="javascript:void(0)" class="cta" data-bs-toggle="modal" data-bs-target="#bodyscale">View body type scale</a>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="cta">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-Personality" role="tabpanel" aria-labelledby="v-pills-Personality-tab">
                        <div class="editProfile_section">
                            <h3 class="page_title">Personality</h3>
                            <form action="" class="profileInput">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="per" data-placeholder="Personality Type">
                                                <option value="" disabled selected>Personality Type</option>
                                                <option value="1">INTJ</option>
                                                <option value="2">INTP</option>
                                                <option value="3">ENTJ</option>
                                                <option value="4">ENTP</option>
                                                <option value="5">INFJ</option>
                                                <option value="6">INFP</option>
                                                <option value="7">ENFJ</option>
                                                <option value="8">ENFP</option>
                                                <option value="9">ISTJ</option>
                                                <option value="10">ISFJ</option>
                                                <option value="11">ESTJ</option>
                                                <option value="12">ESFJ</option>
                                                <option value="13">ISTP</option>
                                                <option value="14">ESTP</option>
                                                <option value="15">ESFP</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="mgi" data-placeholder="Morning / Night">
                                                <option value="" disabled selected>Morning / Night</option>
                                                <option value="1">Morning</option>
                                                <option value="2">Night</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="int" data-placeholder="Introverted / Extroveted">
                                                <option value="" disabled selected>Introverted / Extroveted</option>
                                                <option value="1">Introverted</option>
                                                <option value="2">Extroverted</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h6 class="page_title mt-3 mb-3">Enter your 3 favorite emojis</h6>
                                    <div class="col-4">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Emoji">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Emoji">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Emoji">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-hide-search-multi" multiple="multiple" id="idr" data-placeholder="Ideal Relationship D8">
                                                <!--<option disabled>Ideal Relationship D8</option>-->
                                                <option value="1">Breakfast</option>
                                                <option value="2">Lunch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Grabbing coffee</option>
                                                <option value="5">Grabbing a drink</option>
                                                <option value="6">Smoke sesh</option>
                                                <option value="7">Netflix and chill</option>
                                                <option value="8">Walk in the park</option>
                                                <option value="9">Movie theatre</option>
                                                <option value="10">Board games/cards</option>
                                                <option value="11">Playing/Listening to music</option>
                                                <option value="12">Meetup at a party</option>
                                                <option value="13">Group Hangout</option>
                                                <option value="14">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-hide-search-multi" multiple="multiple" id="idd" data-placeholder="Ideal Friendship D8">
                                                <!--<option disabled>Ideal Friendship D8</option>-->
                                                <option value="1">Getting your nails done</option>
                                                <option value="2">Wine night</option>
                                                <option value="3">Movie theatre</option>
                                                <option value="4">TV show/movie marathon</option>
                                                <option value="5">Playing a sport</option>
                                                <option value="6">Grabbing coffee</option>
                                                <option value="7">Grabbing a drink</option>
                                                <option value="8">Smoke sesh</option>
                                                <option value="9">Lunch</option>
                                                <option value="10">Dinner</option>
                                                <option value="11">Meetup at a party</option>
                                                <option value="12">Walk in the park</option>
                                                <option value="13">Board games/cards</option>
                                                <option value="14">Playing/Listening to music</option>
                                                <option value="15">Group Hangout</option>
                                                <option value="16">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="fdi" data-placeholder="Friendship Intent">
                                                <option value="" disabled selected>Friendship Intent</option>
                                                <option value="1">Looking to meet new people</option>
                                                <option value="2">Looking to meet someone just like me</option>
                                                <option value="3">Looking to make a best friend</option>
                                                <option value="4">Not kooking to make new friends but intrested in meeting new people</option>
                                                <option value="5">Intrested in using M8 in other ways</option>
                                                <option value="6">Not looking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="rel" data-placeholder="Relationship Intent">
                                                <option value="" disabled selected>Relationship Intent</option>
                                                <option value="1">Looking to have fun</option>
                                                <option value="2">Not necessarily looking for anything serious but am open to seeing where things go</option>
                                                <option value="3">Looking for boy/girl friend</option>
                                                <option value="4">Looking for settle down</option>
                                                <option value="5">Polygamous</option>
                                                <option value="6">Exploring my identity</option>
                                                <option value="7">Not looking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="cta">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-TheTea" role="tabpanel" aria-labelledby="v-pills-TheTea-tab">
                        <div class="editProfile_section editProfile_section_tea">
                            <h3 class="page_title">The Tea</h3>
                            <form action="" class="profileInput">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tagg_inputFields">
                                            <div>
                                                <input type="text" placeholder="Interest">
                                            </div>
                                            <span>|</span>
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck1">hobbies</label>
        
                                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck2">animals</label>
        
                                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck3">very general
                                                    stuff</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-hide-search-multi" multiple="multiple" id="rsb" data-placeholder="Recreational Substances">
                                                <!--<option disabled>Recreational Substances</option>-->
                                                <option value="1">Weed</option>
                                                <option value="2">Alcohol</option>
                                                <option value="3">Cocaine</option>
                                                <option value="4">Acid</option>
                                                <option value="5">MDMA</option>
                                                <option value="6">Heroine</option>
                                                <option value="7">Meth</option>
                                                <option value="8">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tagg_inputFields">
                                            <div>
                                                <input type="text" placeholder="Music">
                                            </div>
                                            <span>|</span>
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck4">genres</label>
        
                                                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck5">artists</label>
        
                                                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck6">songs</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tagg_inputFields">
                                            <div>
                                                <input type="text" placeholder="TV / Movies">
                                            </div>
                                            <span>|</span>
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck7">actors/actresses</label>
        
                                                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck8">movies</label>
        
                                                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck9">genres</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tagg_inputFields">
                                            <div>
                                                <input type="text" placeholder="Comedians">
                                            </div>
                                            <span>|</span>
                                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                                <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off"
                                                    checked>
                                                <label class="btn btn-outline-primary" for="btncheck10">comedians</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Sports Teams">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="inputFields">
                                            <input type="text" placeholder="Cities Visited/Lived">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="pol" data-placeholder="Politics">
                                                <option value="" disabled selected>Politics</option>
                                                <option value="1">Democratic</option>
                                                <option value="2">Republican</option>
                                                <option value="3">Independent</option>
                                                <option value="5">Other</option>
                                                <option value="4">Hate Politics</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" data-placeholder="Sexuality">
                                                <option value="" disabled selected>Sexuality</option>
                                                <option value="1">Straight</option>
                                                <option value="2">Gay</option>
                                                <option value="3">Bisexual</option>
                                                <option value="4">Asexual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="SelectField">
                                            <select class="js-example-basic-single" id="room" data-placeholder="Looking for Roommates">
                                                <option value="" disabled selected>Looking for Roommates</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="cta">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-ProfilePictures" role="tabpanel" aria-labelledby="v-pills-ProfilePictures-tab">
                        <div class="editProfile_section">
                            <h3 class="page_title">Profile Pictures</h3>
                            <h5 class="page_title">( Up to 06 )</h5>
                            <div class="default_img">
                                <img src="assets/images/member_img1.png">
                            </div>
                            <div class="addProperty_image">
                                <div class="upload_box">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/upload-img.png" alt="">
                                    </a>
                                    <p class="smallPara">Upload Image</p>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for=""></label>
                                            <input type="file" class="form-control" name="images[]" multiple="" id="upload-img">
                                        </div>
                                        <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <button type="submit" class="cta">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Your JavaScript for initializing Select2 with closeOnSelect: false -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-hide-search-multi').select2({
            closeOnSelect: false
        });
    });
</script>

<?php include 'includes/footer.php'; ?>