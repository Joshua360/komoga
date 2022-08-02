<?php include './partials/header.php'?>

    <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">


      <!-- Slides -->
      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1643874626341-86b9b950a675?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);"> slide 1 </div>

      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1638913974023-cef988e81629?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80);">slide 2</div>
      <div class="swiper-slide" style="background-image: url(https://images.unsplash.com/photo-1510878933023-e2e2e3942fb0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80);">slide 3</div>
      
   
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>




<div class="container">
<!-- Laid out using bootstrap flexbox -->

<section class="about">

    <div class="image-area" >
        <img class="company-img" src="https://images.unsplash.com/photo-1462899006636-339e08d1844e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
            
            <div class="img-overlay" >
                <h2>Welcome to our company</h2>
                
                <i style="color:green; font-size: larger; border-radius: 50%;" class="fas fa-play"></i>
               
              
            </div>
    </div>

    <div class="company-profile">
        <div class="vision-area">
            <i class="fas fa-graduation-cap"></i>
          <div class="vision">
            <h3>Our Vision</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
          </div>
            
        </div>

        <div class="vision-area">
            <i class="fas fa-graduation-cap"></i>
            <div class="mission">
                <h3>Our Mission</h3>
                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus ut tempore maxime magnam praesentium illum reprehenderit </p>
            </div>
            
        </div>

        <div class="vision-area">
            <i class="fas fa-graduation-cap"></i>
            <div class="our-goals">
                <h3>Our Goals</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus accusamus enim earum magni quaerat libero debitis aspernatur</p>
            </div>
           
            
        </div>
    </div>

</section>

</div>
        
<section class="counter">
    <h1>Social Media Traction</h1>

    <div>
    <div class="counter-inner-wrap container">
            <div class="youtube count">
            <i class="fab fa-youtube"></i>
            <div class="count-text">
                <div class="counting" data-target="5000">0</div>
                <span >Followers</span>
            </div>
          
     
          </div>

          <div class="twitter count">
            <i class="fab fa-twitter"></i>
            <div class="count-text">
                <div class="counting" data-target="15000">0</div>
                <span >Followers</span>
            </div>
          </div>

            <div class="facebook count">
                <i class="fab fa-facebook-square"></i>
                <div class="count-text">
                    <div class="counting" data-target="30000">0</div>
                    <span >Likes</span>
                </div>
            </div>

            <div class="linkedin count">
                <i class="fab fa-linkedin"></i>
                <div class="count-text">
                    <div class="counting" data-target="3000">0</div>
                    <span >Connections</span>
                </div>
            </div>
    </div>
    </div>
</section>


<section class="accordion-area">

<!-- Laid out using bootstrap columns -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="recent-posts-title"> Why Choose Us?</h1>
            </div>

            <div class="col">
                <img src="https://images.unsplash.com/photo-1430990480609-2bf7c02a6b1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
            </div>

            <div class="col">
                <div class="accordion" id="accordionExample" style="margin-top: 0;">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button   btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        We are awesome <i class="fas fa-plus"></i>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        We get it done <i class="fas fa-plus-circle"></i>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed  btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        We love our customers <i class="fas fa-plus-circle"></i>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed  btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            We are goal oriented<i class="fas fa-plus-circle"></i>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
</section>

<section class="recent-posts">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="recent-posts-title">Recent Posts</h1>
            </div>
          <div class="col single-recent">
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1519337265831-281ec6cc8514?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Design is awesome</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read more</a>
                </div>
              </div>
          </div>
          <div class="col single-recent">
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1519337265831-281ec6cc8514?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Earth is Hard</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
          </div>

          <!-- <div class="col single-recent">
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1519337265831-281ec6cc8514?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Earth is Hard</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
          </div> -->


          <div class="col single-recent">
            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1519337265831-281ec6cc8514?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Endure</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
                </div>
              </div>
          </div>
        </div>
      </div>

  

</section>





<section class="our-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="recent-posts-title">Our Partners</h1>
            </div>
            <div class="col-md-3">
                <img style="width:80px;" src="https://www.shell.com/etc.clientlibs/settings/wcm/designs/shell-rio/clientlibs/themes/theme-shell/resources/logo/logo.svg" class="img-fluid" alt="">

            </div>

            <div class="col-md-3">
                <img src="https://www.mcdonalds.com/content/dam/sites/usa/nfl/icons/arches-logo_108x108.jpg" class="img-fluid" alt="">

            </div>

            <div class="col-md-3">
                <img  style="width:40px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Tesla_Motors.svg/800px-Tesla_Motors.svg.png" class="img-fluid" alt="">

            </div>

            <div class="col-md-3">
                <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" class="img-fluid" alt="">

            </div>
    </div>
</section>

 

<?php include './partials/footer.php'?>