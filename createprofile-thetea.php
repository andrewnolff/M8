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
                    <form action="" class="profileInput profile_thetea_sect">
                        <h6 class="page_title mb-3">The Tea</h6>
                        <div class="row profile_thetea_Fields">
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

                            <!-- ABOVE COL-12 DIV IS INPLACE OF BELOW COMMENTED COL-12 DIV -->

                            <!-- <div class="col-12">
                                <div class="tagg_inputFields">
                                    <div>
                                        <input type="text" placeholder="Sports Teams">
                                    </div>
                                    <span>|</span>
                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="btncheck13">genres</label>

                                        <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="btncheck14">artists</label>

                                        <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="btncheck15">Other</label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-12">
                                <div class="inputFields">
                                    <input type="text" placeholder="Cities Visited/Lived">
                                </div>
                            </div>

                            <!-- ABOVE COL-12 DIV IS INPLACE OF BELOW COMMENTED COL-12 DIV -->

                            <!-- <div class="col-12">
                                <div class="tagg_inputFields">
                                    <div>
                                        <input type="text" placeholder="Cities Visited / Lived">
                                    </div>
                                    <span>|</span>
                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off"
                                            checked>
                                        <label class="btn btn-outline-primary" for="btncheck16">genres</label>

                                        <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off"
                                            checked>
                                        <label class="btn btn-outline-primary" for="btncheck17">artists</label>

                                        <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off"
                                            checked>
                                        <label class="btn btn-outline-primary" for="btncheck18">Other</label>
                                    </div>
                                </div>
                            </div> -->
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
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                               <a href="createprofile-profilepictures.php" class="cta">Continue</a>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>