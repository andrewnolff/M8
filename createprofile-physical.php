<?php include 'includes/header-links.php'; ?>


<section class="initial-sec createProfile_login">
    <div class="initial-row">
        <div class="leftCol">
            <a class="logo" href="">
                <img src="assets/images/logo-2.png" alt="">
            </a>
        </div>
        <div class="rightCol xy-center p-3">

            <form action="" class="loginForm create-profile">
                <div class="editProfile_section">
                    <h3 class="loginHeading mb-3">Create Profile</h3>
                    <h6 class="page_title mb-3">Physical</h6>
                    <div class="row profile_thetea_Fields">
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
                        <h6 class="page_title mt-3 mb-3">Personality Type</h6>
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
                                    <option value="4">Not kooking to make new friends but intrested in meeting new
                                        people</option>
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
                                    <option value="2">Not necessarily looking for anything serious but am open to seeing
                                        where things go</option>
                                    <option value="3">Looking for boy/girl friend</option>
                                    <option value="4">Looking for settle down</option>
                                    <option value="5">Polygamous</option>
                                    <option value="6">Exploring my identity</option>
                                    <option value="7">Not looking</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <a href="createprofile-thetea.php" class="cta">Continue</a>
                            <!--<button type="submit" class="cta">Continue</button>-->
                            <!--createprofile-thetea.php-->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>