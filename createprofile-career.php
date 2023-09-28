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
                        <h6 class="page_title mb-3">Career</h6>
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
                            <div class="col-12">
                                <a href="createprofile-physical.php" class="cta">Continue</a>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>