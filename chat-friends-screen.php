<?php include 'includes/header.php'; ?>

<section class="chat_section1">
    <div class="container-fluid">
        <div class="titleSection">
            <h6 class="title">My M8s</h6>
        </div>
        <div class="row mt-3">
            <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 col-12">
                <div class="editProfile_left">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-allm8s-tab" data-bs-toggle="pill" data-bs-target="#v-pills-allm8s" type="button" role="tab" aria-controls="v-pills-allm8s" aria-selected="true">All M8s</button>
                        <button class="nav-link" id="v-pills-blockedm8s-tab" data-bs-toggle="pill" data-bs-target="#v-pills-blockedm8s" type="button" role="tab" aria-controls="v-pills-blockedm8s" aria-selected="false">Blocked M8s</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-allm8s" role="tabpanel" aria-labelledby="v-pills-allm8s-tab">
                        <div class="friendlist_blocklist row">
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart msgattachment">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="viewmore menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                        <div class="profile_login_detail viewmore_detail">
                                            <ul>
                                                <li class="account_detailList">
                                                    <a href="member-profile.php"><img src="assets/images/user_icon.png" alt=""> View Profile</a>
                                                </li>
                                                <li class="account_detailList">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blockModal"><img src="assets/images/friends.png" alt=""> Block M8</a>
                                                </li>
                                                <li class="account_detailList">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal"><img src="assets/images/cross.png" alt=""> unM8</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexStartBetween">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div class="d_flexStart">
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/message.png" alt=""></a>
                                        <a href="javascript:void(0)" class="menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-blockedm8s" role="tabpanel" aria-labelledby="v-pills-blockedm8s-tab">
                        <div class="friendlist_blocklist row">
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="friendlist_blocklist_message d_flexSpacebetweenGap">
                                    <div class="d_flexStart">
                                        <div class="user_img">
                                            <img src="assets/images/user_img1.png" alt="">
                                        </div>
                                        <div class="user_details">
                                            <p class="user_title">Albert Flores</p>
                                            <p class="user_desc">23 years old, Female</p>
                                            <p class="user_desc">New York, United State</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)" class="cta">Unblock</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="user_profile_friends">
                    <div class="profile_photo">
                        <img src="assets/images/user-img2.png" alt="">
                    </div>
                    <h3 class="user_title">Albert Flores</h3>
                    <p class="user_dess">23, Male, New York</p>
                    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum eleifend leo, quis ullamcorper est eleifend sit amet. Donec tempor turpis non hen drerit aliquet.</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="friend_photos">
                                <img src="assets/images/member_img1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="friend_photos">
                                <img src="assets/images/member_img2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="friend_photos">
                                <img src="assets/images/member_img3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="friend_photos">
                                <img src="assets/images/member_img4.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="friend_photos">
                                <img src="assets/images/member_img5.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="friend_photos">
                                <img src="assets/images/member_img6.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="view_all">
                        <a href="javascript:void(0)">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'includes/footer.php'; ?>