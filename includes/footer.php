<footer></footer>

<!--Search Filter Modal -->
<div class="modal fade searchfilter_Modal" id="searchfilterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="search_filter_field">
                    <div class="col-lg-12">
                    <h3 class="page_title new_h">Category Name</h3>
                    <div class="inputFields" style="width: 320px;">
                                <input type="text" placeholder="Category Name" >
                                
                            </div>
                            </div>
                    <h3 class="page_title">Basics</h3>
                    <div class="row">
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputField_height">
                                <div class="inputField_height_ft">
                                    <input type="number" placeholder="Age">
                                    <span class="input_bg">min</span>
                                </div>
                                <div class="inputField_height_ft">
                                    <input type="number" placeholder="Age">
                                    <span class="input_bg">max</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Current City">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="email" placeholder="Email Address">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                    <h3 class="page_title">Career</h3>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="School">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Job">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Company">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-hide-search-multi" multiple="multiple" id="reg" data-placeholder="Income">
                                    <option value="1">0-50,000</option>
                                    <option value="2">50,000-100,000</option>
                                    <option value="3">100,000-200,000</option>
                                    <option value="4">200,000-400,000</option>
                                    <option value="5">400,000-1,000,000</option>
                                    <option value="6">1,000,000+</option>
                                    <option value="8">Prefer not to say</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                    <h3 class="page_title">Physical</h3>
                    <div class="row">
                        <div class="col-lg-3">
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
                        <div class="col-lg-3">
                             <div class="inputField_height">
                                <div class="inputField_height_ft">
                                    <input type="number" placeholder="Weight">
                                    <span class="input_bg">min</span>
                                </div>
                                <div class="inputField_height_ft">
                                    <input type="number" placeholder="Weight">
                                    <span class="input_bg">max</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-single" id="eye" data-placeholder="Eye Colour">
                                    <option value="" disabled selected>Eye Colour</option>
                                    <option value="1">Amber</option>
                                    <option value="2">Blue</option>
                                    <option value="3">Brown</option>
                                    <option value="4">Gray</option>
                                    <option value="5">Green</option>
                                    <option value="6">Hazel</option>
                                    <option value="7">Red</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-hide-search-multi" multiple="multiple" id="bod" data-placeholder="Body Type (Scale)">
                                    <!--<option disabled>Body Type (Scale)</option>-->
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">Prefer not to say</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                                
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <a href="javascript:void(0)" class="cta" data-bs-toggle="modal" data-bs-target="#bodyscale"  style="display: flex; justify-content: center;">View body type scale</a>
                            </div>
                        </div>
                    </div>
                    <h3 class="page_title">Personality</h3>
                    <div class="row">
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-single" id="mgi" data-placeholder="Morning / Night">
                                    <option value="" disabled selected>Morning / Night</option>
                                    <option value="1">Morning</option>
                                    <option value="2">Night</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-single" id="int" data-placeholder="Introverted / Extroveted">
                                    <option value="" disabled selected>Introverted / Extroveted</option>
                                    <option value="1">Introverted</option>
                                    <option value="2">Extroverted</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3 emoji_sect">
                            <label for="">Enter your 3 favorite emojis </label>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="inputFields">
                                        <span class=""><img src="assets/images/smile.png" alt=""></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="inputFields">
                                        <span class=""><img src="assets/images/face-smile-hearts.png" alt=""></span>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="inputFields">
                                        <span class=""><img src="assets/images/sad.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                    </div>
                    <h3 class="page_title">The Tea</h3>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Interest">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
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
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Music">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="TV / Movies">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Comedians">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Sports Teams">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inputFields">
                                <input type="text" placeholder="Cities Visited / Lived">
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-single" id="pol" data-placeholder="Politics">
                                    <option value="" disabled selected>Politics</option>
                                    <option value="1">Democratic</option>
                                    <option value="2">Republican</option>
                                    <option value="3">Independent</option>
                                    <option value="5">Other</option>
                                    <option value="4">Hate Politics</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-single" data-placeholder="Sexuality">
                                    <option value="" disabled selected>Sexuality</option>
                                    <option value="1">Straight</option>
                                    <option value="2">Gay</option>
                                    <option value="3">Bisexual</option>
                                    <option value="4">Asexual</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="SelectField">
                                <select class="js-example-basic-single" id="room" data-placeholder="Looking for Roommates">
                                    <option value="" disabled selected>Looking for Roommates</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                                <span class="star_icon"><img src="assets/images/star.png" alt=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 search-now-btn">
                                <a href="search-result.php" class="cta"><span><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></span>Search Now</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade delete_Modal" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="addCard_modal">
                    <form action="">
                        <div class="row deleteRow">
                            <p class="paragraph">Are you sure you want to delete Albert Flores?</p>
                            <div class="col-6 btnSection">
                                <button type="submit" class="cta">Yes, Delete</button>
                            </div>
                            <div class="col-6 btnSection">
                                <button type="submit" class="cta cta2">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Block Modal -->
<div class="modal fade delete_Modal" id="blockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="addCard_modal">
                    <form action="">
                        <div class="row deleteRow">
                            <p class="paragraph">Are you sure you want to block Albert Flores?</p>
                            <div class="col-6 btnSection">
                                <button type="submit" class="cta">Yes, Block</button>
                            </div>
                            <div class="col-6 btnSection">
                                <button type="submit" class="cta cta2">No</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Escape Modal -->
<div class="modal fade escape_Modal" id="escapeModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Escape Room Austin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="escape_content">
                <div class="escape_img">
                    <img src="assets/images/escape_img1.png" alt="">
                </div>
                <div class="eventDetial">
                    <div class="d_flexSpacebetween">
                        <p class="tags">Valid : July 03, 2023</p>
                        <p class="tags">$ Free</p>
                    </div>
                    <p class="tags">#M8s : 2+</p>
                    <p class="tags">Distance : 3.2miles</p>
                    <p class="tags">Category : Foods Outdoor act.</p>
                    <p class="paragraph">Handing out free bagels in Zilker Park to M8 users. Everything bagels and schmear will be provided. 5 star Michewin star rating. </p>
                </div>
                <div class="btnSect"> 
                    <a href="javascript:void(0)" data-bs-target="#paymentModal" data-bs-toggle="modal" data-bs-dismiss="modal" class="cta">Claim</a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade escape_Modal" id="paymentModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Payment Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <form>
               <div class="row">
                   <div class="col-12">
                       <div class="inputFields">
                            <input type="text" placeholder="Card holder name">
                        </div>
                   </div>
                   <div class="col-12">
                       <div class="inputFields">
                            <input type="text" placeholder="Card number">
                        </div>
                   </div>
                   <div class="col-8">
                       <div class="inputFields">
                            <input type="text" placeholder="Exp date">
                        </div>
                   </div>
                   <div class="col-4">
                       <div class="inputFields">
                            <input type="text" placeholder="CVV">
                        </div>
                   </div>
                   <div class="col-12 escape_content mt-3">
                       <div class="btnSect"> 
                            <a href="javascript:void(0)" class="cta">Pay now</a>
                        </div>
                   </div>
               </div>
           </form>
        </div>
    </div>
  </div>
</div>


<!-- Notification Modal -->
<div class="modal fade escape_Modal" id="notifiactionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="notification_content">
                    <div class="notifications">
                        <div class="d_flexSpacebetween">
                            <p class="semiBold">lorem ipsum dollar set</p>
                            <p><small>2 hrs ago</small></p>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, dolores blanditiis tenetur aliquam ab nemo. Beatae magni impedit error fuga.</p>
                    </div>
                    <div class="notifications">
                        <div class="d_flexSpacebetween">
                            <p class="semiBold">lorem ipsum dollar set</p>
                            <p><small>2 hrs ago</small></p>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, dolores blanditiis tenetur aliquam ab nemo. Beatae magni impedit error fuga.</p>
                    </div>
                    <div class="notifications">
                        <div class="d_flexSpacebetween">
                            <p class="semiBold">lorem ipsum dollar set</p>
                            <p><small>2 hrs ago</small></p>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, dolores blanditiis tenetur aliquam ab nemo. Beatae magni impedit error fuga.</p>
                    </div>
                    <div class="notifications">
                        <div class="d_flexSpacebetween">
                            <p class="semiBold">lorem ipsum dollar set</p>
                            <p><small>2 hrs ago</small></p>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, dolores blanditiis tenetur aliquam ab nemo. Beatae magni impedit error fuga.</p>
                    </div>
                    <div class="notifications">
                        <div class="d_flexSpacebetween">
                            <p class="semiBold">lorem ipsum dollar set</p>
                            <p><small>2 hrs ago</small></p>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, dolores blanditiis tenetur aliquam ab nemo. Beatae magni impedit error fuga.</p>
                    </div>
                    <div class="notifications">
                        <div class="d_flexSpacebetween">
                            <p class="semiBold">lorem ipsum dollar set</p>
                            <p><small>2 hrs ago</small></p>
                        </div>
                        <p class="paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit, dolores blanditiis tenetur aliquam ab nemo. Beatae magni impedit error fuga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profile left Sect -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">User Profile</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="sideBar_profile">
            <div class="member_desc d_flexStart">
                <div class="member_descLeft">
                    <div class="memberProfile">
                        <img src="assets/images/member_detailProfile.png" alt="">
                    </div>
                </div>
                <div class="member_descRight">
                    <div class="member_info d_flexStartBetween">
                        <div class="member_infoLeft">
                            <p class="member_name">Albert Flores</p>
                            <p class="desc">23 years old</p>
                            <p class="desc">New York, United State</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="member_description">
                <p class="titleBold">BIO / Description</p>
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum eleifend leo, quis ullamcorper est eleifend sit amet. </p>
            </div>
            <div class="member_basicInfo">
                <div class="member_basicInfo_title">
                    <div class="d_flexSpacebetween">
                        <p class="titleBold">Basics</p>

                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Name</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Date of Birth</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Gender Identity</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Stage of Life</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Religion</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Current City</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Religion</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="member_basicInfo_title">
                    <div class="d_flexSpacebetween">
                        <p class="titleBold">Career</p>

                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">School (s)</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Job</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Company</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Income</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="member_basicInfo_title">
                    <div class="d_flexSpacebetween">
                        <p class="titleBold">Physical</p>

                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Height</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Weight</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Ethnicity</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Eye Color</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Hair Color</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Body Type</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="member_basicInfo_title">
                    <div class="d_flexSpacebetween">
                        <p class="titleBold">Personality</p>

                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Personality Type</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">What do you like?</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">What are you?</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Enter your 3 favorite emojis</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Ideal relationship D8</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Ideal Friend D8</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Relationship Intent</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Friend Intent</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="member_basicInfo_title">
                    <div class="d_flexSpacebetween">
                        <p class="titleBold">The Tea</p>

                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Interest</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Drugs / Alcohol</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Music</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">TV / Movies</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Comedians</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Sports Teams</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Cities Visited / Lived</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Politics</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Sexuality</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">BIO / Description</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                    <div class="member_basicInfo_row d_flexStart">
                        <div class="memberbasicInfo_rowLeft">
                            <p class="semiBold">Looking for Roommates</p>
                        </div>
                        <div class="memberbasicInfo_rowRight">
                            <p class="paragraph">Lorem ipsum </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chat Screen1 Users Relationships -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="relationshipChats" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header d_flexCenterGap">
        <h5 id="offcanvasRightLabel">Relationship</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="group_allchat">
            <div class="all_users_tabs">
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img1.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs user_message_tabs_active d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img6.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Tennis Buddies</p>
                        <p class="user_desc">15 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img3.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img4.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img5.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
            </div>
            <div class="btn_sect">
                <a href="javascript:void(0)" class="cta" data-bs-toggle="modal" data-bs-target="#searchfilterModal"><img src="assets/images/add.png" alt=""> Add a Category </a>
            </div>
        </div>
    </div>
</div>

<!-- Chat Screen1 Users Tennisbudies -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="Tennisbudieschats" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header d_flexCenterGap">
        <h5 id="offcanvasRightLabel">Tennisbuddies</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="chat_all_users">
            <div class="message_section d_flexStartBetween">
                <div>
                    <p class="semiBold">Tennis Buddies</p>
                    <p class="user_desc">18 Members</p>
                </div>
                <div class="msgattachment">
                    <a href="javascript:void(0)" class="viewmoredetail menu-dots"><img src="assets/images/menu-dots.png" alt=""></a>
                    <div class="viewmore_detail2">
                        <ul>
                            <li class="account_detailList">
                                <a href="member-profile.php">Add/Remove Members</a>
                            </li>
                            <li class="account_detailList">
                                <a href="">Edit Group Name</a>
                            </li>
                            <li class="account_detailList">
                                <a href="">Delete Group</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="messages_search">
                <input type="text" placeholder="Search here...">
            </div>
            <div class="allUser_msgs">
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img1.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img6.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs user_message_tabs_active d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img3.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img4.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
                <div class="user_message_tabs d_flexStart">
                    <div class="user_img">
                        <img src="assets/images/user_img5.png" alt="">
                    </div>
                    <div class="user_details">
                        <p class="user_title">Relashionship</p>
                        <p class="user_desc">18 Members</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Block Modal -->
<div class="modal fade body_scale_Modal" id="bodyscale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="width:auto; margin:0 auto;">
            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            <div class="modal-body">
                <div class="body_scale">
                    <p class="desc">Body Type Scale (1 to 7)</p>
                    <div>
                        <img src="assets/images/body_scale.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BOOTSTRAP 5 --> 
<script src="assets/js/bootstrap.min.js"></script>
<!-- BOOTSTRAP 5 -->
<!-- JQUERY  -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- JQUERY  -->
<!-- SELECT2 CSS -->
<script src="assets/js/select2.min.js"></script>
<!-- SELECT2 CSS -->
<!-- RESPONSIVE NAVIFATION -->
<script src="assets/js/stellarnav.min.js"></script>
<!-- RESPONSIVE NAVIFATION -->
<!-- SWIPER SLIDER -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- SWIPER SLIDER -->
<!-- FANCY BOX IMAGE VIEWER -->
<script src="assets/js/jquery.fancybox.min.js"></script>
<!-- FANCY BOX IMAGE VIEWER -->
<!-- FONT AWESOME JS -->
<script src="assets/js/font-awesome-all.min.js"></script>
<!-- JAVASCRIPT SHEETS -->
<script src="assets/js/custom.js"></script>
<!-- JAVASCRIPT SHEETS -->

<script>
$(".js-select2").select2({
  closeOnSelect: false,
  placeholder: "",
  minimumResultsForSearch: Infinity,
  allowHtml: true,
  allowClear: true,
  tags: true // создает новые опции на лету
});

$('.js-example-basic-hide-search-multi').select2();

$('.js-example-basic-hide-search-multi').on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
});

$(document).ready(function () {
    $('.js-example-basic-single').select2({
      placeholder: 'Select an option', // Specify a placeholder text
      allowClear: true, // Allow clearing the selection
      tags: true, // Enable the "Tags" feature
    });
  });
// $(".js-example-theme-single").select2({
//   theme: "classic"
// });

$(".js-example-templating").select2({
  templateSelection: formatState
});
</script>
<script>
    function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}
</script>

</body>

</html>