<section class="section-contact-us">
  <div class="form-sections">
    <div class="form-container">
      <div class="details-section">
        <div class="section-heading">
          <h2 class="heading">Let's Connect With Our Experts</h2>
          <div class="heading-svg">
            <svg class="svg-path" viewBox="0 0 297 35" fill="" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.22961 19.3056C3.69595 15.4548 12.9448 12.4865 17.2609 11.4837C36.9917 6.67039 68.7458 4.26347 82.0024 5.46693C95.2591 6.67039 80.7693 9.07692 68.1292 11.4836C55.4892 13.8904 64.738 15.0937 76.1449 13.8904C87.5517 12.687 111.29 11.4836 131.638 10.882C151.985 10.2803 131.329 9.07692 111.29 9.07692C91.2513 9.07692 91.5595 6.67029 98.6503 5.46693C105.741 4.26357 121.772 -0.549874 140.578 0.0518062C159.384 0.653487 203.778 1.85685 222.893 6.06861C242.007 10.2804 281.468 21.7123 291.025 25.3224C300.583 28.9325 299.349 39.161 282.393 33.1442C265.437 27.1274 230.292 16.2972 153.218 14.4921C76.1449 12.6871 17.5691 22.9157 11.4032 27.1274C5.23738 31.3392 0.921268 31.3392 3.38762 27.7291C5.85396 24.119 6.47059 23.5174 4.00425 24.7207C1.5379 25.9241 -1.85333 24.119 1.22961 19.3056Z"
                fill="#8AD2DC"></path>
            </svg>
          </div>
        </div>
        <p>
          Get valuable consultation from our professionals to discuss your mobile application development project. We
          are here to help you with all of your queries.
        </p>
        <h2 class="sub-heading">Revolutionize Your Business</h2>
        <p>
          Collaborate with us and become a trendsetter with our reliable mobile application development company.
        </p>
        <div class="contact-images">
          <div class="contact-item">
            <div class="contact-award-image goodfrims">
              <a href="">
                <img class="test" src="/assets/image/goodfrims.webp" alt="">
              </a>
              <div class="contact-content">
                <h6>5.0</h6>
                <h6 class="font">Goodfirms</h6>
                
              </div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-award-image">
              <a href="">
                <img class="test" src="/assets/image/rightfirms.webp" alt="">
              </a>
              <div class="contact-content">
                <h6>5.0</h6>
                <h6 class="font">Rightfirms</h6>
              </div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-award-image">
              <a href="">
                <img class="test" src="/assets/image/clutch_rating.webp" alt="">
              </a>
              <div class="contact-content clutch">
                <h6>5.0</h6>
                <h6 class="font">Clutch</h6>
              </div>
            </div>
          </div>
         
        </div>
        <div class="contact-info-web">
          <h5>Contact Info:</h5>
          <div class="contact-info-content">
            <img src="/assets/image/mail.jpg" alt="">
            <a href="">info@qonkar.com</a>
          </div>
          <div class="contact-info-content">
            <img class="country-flag" src="/assets/image/united-kingdom-flag.webp" alt="">
            <a href="">+44 74 76451747</a>
          </div>
        </div>
        
        <!-- <div class="badges">
          <div class="badge">
            <img src="" alt="">
            <div class="rating">
              <p>5.0</p>
              <p>Goodfirms</p>
            </div>
          </div>
          <div class="badge">
            <img src="" alt="">
            <div class="rating">
              <p>5.0</p>
              <p>Goodfirms</p>
            </div>
          </div>
          <div class="badge">
            <img src="" alt="">
            <div class="rating">
              <p>5.0</p>
              <p>Goodfirms</p>
            </div>
          </div>
        </div>
        <p>Contact Info:</p>
        <div class="contact-info">
          <img src="" alt="">
          <p>info@qonkar.com</p>
        </div>
        <div class="contact-info">
          <img src="" alt="">
          <p>+44 74 76451747</p>
        </div>
      </div> -->
      

    </div>
    <div class="form-section">
        <h2>Contact Us</h2>
        <form id="contactForm">
          <!-- <label for="fullName">Full Name</label> -->
          <input type="text" id="fullName" name="fullName" required placeholder="Full Name">

          <!-- <label for="email">Email</label> -->
          <input type="email" id="email" name="email" required placeholder="Email">

          <!-- <label for="number">Number</label> -->
          <input type="tel" id="number" name="number" required placeholder="Number">

          <!-- <label for="aboutProject">About Project</label> -->
          <textarea id="aboutProject" name="aboutProject" rows="4" required placeholder="About Project"></textarea>

          <button class="button"  type="submit">Submit</button>
        </form>
        <div id="formMessage" style="display:none;"></div>
      </div>
  </div>
</section>
<!-- ajax request for sending email to info@qonakr.com -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#contactForm').on('submit', function(e) {
    e.preventDefault();

    var formData = {
      fullName: $('#fullName').val(),
      email: $('#email').val(),
      number: $('#number').val(),
      aboutProject: $('#aboutProject').val()
    };

    $.ajax({
      url: 'send-email.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        $('#formMessage').text(response).addClass('success').removeClass('error').show();
        $("#formMessage").fadeIn("slow");
        setTimeout(function() {
          $("#formMessage").fadeOut("slow");
        }, 3000);
      },
      error: function() {
        $('#formMessage').text('There was an error sending the email.').addClass('error').removeClass(
          'success').show();
        $("#formMessage").fadeIn("slow");
        setTimeout(function() {
          $("#formMessage").fadeOut("slow");
        }, 3000);
      }
    });
  });
});
</script>