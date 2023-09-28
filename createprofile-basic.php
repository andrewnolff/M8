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
                    <form action="" class="profileInput">
                        <h6 class="page_title mb-3">Basics</h6>
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
                            <style>

                            </style>
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
                                <a href="createprofile-career.php" class="cta">Continue</a>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>