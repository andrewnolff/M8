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
                        <h6 class="page_title mb-3">Profile Pictures</h6>
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
                                    <a href="chat.php" class="cta">Continue</a>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>