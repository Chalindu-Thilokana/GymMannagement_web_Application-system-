@include('component.navigation');


    <header class="section__container header__container" id="header">
      <div class="header__content" >
        <span class="bg__blur"></span>
        <span class="bg__blur header__blur"></span>
        <h4>BEST FITNESS IN THE TOWN</h4>
        <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
        <p>
          Unleash your potential and embark on a journey towards a stronger,
          fitter, and more confident you. Sign up for 'Make Your Body Shape' now
          and witness the incredible transformation your body is capable of!
        </p>
      <!--  <button class="btn">Get Started</button>-->
      </div>
      <div class="header__image">
        <img src="assets/header.png" alt="header" />
      </div>
    </header>

    <section class="section__container explore__container"id="explore">
      <div class="explore__header">
        <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
        <div class="explore__nav">
          <span><i class="ri-arrow-left-line"></i></span>
          <span><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>
          <h4>Strength</h4>
          <p>
            Embrace the essence of strength as we delve into its various
            dimensions physical, mental, and emotional.
          </p>
         <!-- <a href="#">Join Now <i class="ri-arrow-right-line"></i></a> -->
        </div>
        <div class="explore__card">
          <span><i class="ri-heart-pulse-fill"></i></span>
          <h4>Physical Fitness</h4>
          <p>
            It encompasses a range of activities that improve health, strength,
            flexibility, and overall well-being.
          </p>
          <!--<a href="#">Join Now <i class="ri-arrow-right-line"></i></a> -->
        </div>
        <div class="explore__card">
          <span><i class="ri-run-line"></i></span>
          <h4>Fat Lose</h4>
          <p>
            Through a combination of workout routines and expert guidance, we'll
            empower you to reach your goals.
          </p>
          <!-- <a href="#">Join Now <i class="ri-arrow-right-line"></i></a> -->
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Weight Gain</h4>
          <p>
            Designed for individuals, our program offers an effective approach
            to gaining weight in a sustainable manner.
          </p>
          <!-- <a href="#">Join Now <i class="ri-arrow-right-line"></i></a> -->
        </div>
       
      
      </div>
    </section>

    <section class="section__container class__container"id="class">
      <div class="class__image">
        <span class="bg__blur"></span>
        <img src="assets/class-1.jpg" alt="class" class="class__img-1" />
        <img src="assets/class-2.jpg" alt="class" class="class__img-2" />
      </div>
      <div class="class__content">
        <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
        <p>
          Led by our team of expert and motivational instructors, "The Class You
          Will Get Here" is a high-energy, results-driven session that combines
          a perfect blend of cardio, strength training, and functional
          exercises. Each class is carefully curated to keep you engaged and
          challenged, ensuring you never hit a plateau in your fitness
          endeavors.
        </p>
        <button class="btn">Book A Class</button>
       
      </div>
      
    </section>
   @include('component.BMI')
    

    <section class="section__container join__container"id="About">
      <h2 class="section__header">
        POWER UP YOUR FITNESS WITH TITAN FITNESS CENTER </h2>
      <p class="section__subheader">
      Power World Gyms pioneered the Sri Lankan gym industry in 1994 and has remained the largest chain of fitness centres since its inception, earning an undisputed reputation among fitness enthusiasts. We also pride ourselves in being able to train both the novice and the elite athlete while specializing in providing healthcare services that are both prophylactic and therapeutic to all our members.


      </p>
      <div class="join__image">
        <img src="assets/join.jpg" alt="Join" />
        <div class="join__grid">
          <div class="join__card">
            <span><i class="ri-user-star-fill"></i></span>
            <div class="join__card__content">
              <h4>Personal Trainer</h4>
              <p>Unlock your potential with our expert Personal Trainers.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-vidicon-fill"></i></span>
            <div class="join__card__content">
              <h4>Practice Sessions</h4>
              <p>Elevate your fitness with practice sessions.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-building-line"></i></span>
            <div class="join__card__content">
              <h4>Good Management</h4>
              <p>Supportive management, for your fitness success.</p>
            </div>
          </div>
        </div>
      </div>
      
    </section>


    <section class="section__container price__container"id="price">
      <h2 class="section__header">OUR PRICING PLAN</h2>
      <p class="section__subheader">
        Our pricing plan comes with various membership tiers, each tailored to
        cater to different preferences and fitness aspirations.
      </p>
      <div class="price__scroll-container">
      @foreach($membership_types as $membership_typ)
      <div class="price__grid">
        <div class="price__card">
          <div class="price__card__content">
            <h3> {{$membership_typ->membership_type}}</h3>
            <h4>RS{{$membership_typ->price}}</h4>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              {{$membership_typ->facilities}}
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              {{$membership_typ->trainers}}
            </p>
          </div>
          <button class="btn price__btn">Join Now</button>
        </div>
        
      </div>
      @endforeach
     
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="section__container contact__content">
        <h2>Contact Us</h2>
        <p>  At Power World Gyms, we believe that fitness
           is not just a destination; it's a journey towards
            a healthier, happier, and stronger version of
             yourself. We are dedicated to empowering you 
             on this transformative journey with our state-of-the-art
              facilities, regardless of your fitness level or goals
            </p>
      </div>
      <div class="section__container contact___container">

        <div class="contactinfo">
          <div class="box">

            <div class="icon"><b></b><i class="fa-solid fa-location-dot"></i></div>
            <div class="text">
              <h3>Address</h3>
              <p>255,nawatiya ,thekkawatha<br>kiridiwala<br>02225638</p>
            </div>
          </div>
          <div class="box">

            <div class="icon"><b></b><i class="fa-solid fa-phone"></i></div>
            <div class="text">
              <h3>Phone</h3>
              <p>0779641512</p>
            </div>
          </div>

          <div class="box">

            <div class="icon"><b></b><i class="fa-solid fa-envelope"></i></div>
            <div class="text">
              <h3>Email</h3>
              <p>upadkarunanayka@gmail.com</p>
            </div>
          </div>
          <h2 class="txt">Contact with us</h2>
          <ul class="sci">
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          </ul>




          
          @include('sweetalert::alert')

          @if ($errors->any())
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
          <script>
              Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'There were some problems with your input.',
                  html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
              });
          </script>
      @endif


        </div>
        <div class="contactform">
          <form action="{{ route('massage_save')}} " method="post">
            @csrf

            <h2>Send massage</h2>
            <div class="inputbox">
              <input type="text" name="name" required="required">
              <span>full name</span>
            </div>
            <div class="inputbox">
              <input type="email" name="email"  required="required">
              <span>Email</span>
            </div>
            <div class="inputbox">
              <textarea name="massage" required="required" ></textarea>
              <span>Send your Massage...</span>
            </div>
            <div class="inputbox">
              <input type="submit" value="send">
              
            </div>



          </form>


        </div>
      </div>

    </section>
    

    <section class="review"id="review">
      <div class="section__container review__container">
        <span><i class="ri-double-quotes-r"></i></span>
        <div class="review__content">
          <h4>MEMBER REVIEW</h4>
          <p>
            What truly sets this gym apart is their expert team of trainers. The
            trainers are knowledgeable, approachable, and genuinely invested in
            helping members achieve their fitness goals. They take the time to
            understand individual needs and create personalized workout plans,
            ensuring maximum results and safety.
          </p>
          <div class="review__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-half-fill"></i></span>
          </div>
          <div class="review__footer">
            <div class="review__member">
              <img src="assets/member.jpg" alt="member" />
              <div class="review__member__details">
                <h4>Jane Cooper</h4>
                <p>Software Developer</p>
              </div>
            </div>
            
            <div class="review__nav">
              <span><i class="ri-arrow-left-line"></i></span>
              <span><i class="ri-arrow-right-line"></i></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('component.galery')
    
 
<script>



</script>
    @include('component.footer')