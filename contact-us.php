<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('header.php');
?>
  <title>Contact Us | Qonkar IT Services Company</title>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M436PKCG"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php
 include('nav-bar.php');
 ?>


<section class="head-section">
    <div class="outer-container">
        <div class="heading">
          <div class="container">
          <h2 class="heading-head">Contact us</h2>
          <h4 class="heading-body">We appreciate your interest in <span class="text-secondary" >Qonkar Technologies.</span> Please fill the form<br /> so we can get to the right <span class="text-secondary">help and <span class="text-secondary">support.</span></h4>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="contact-form-section">
  <div class="container">    
    <div class="form-section">
      <div class="form-container">
        <form action="contact-us.php" class="contact-form" method="post" id="contactForm">
              <div class="select-container field">
                    <label class="form_help">How can we help you *</label>
                    <div id="form_help" class="select-help-body">
                        <select name="category" id="form_help">
                          <option value="" disabled selected hidden>Please Select One</option>
                          <option value="SEO">SEO</option>
                          <option value="Digital Marketing">Digital Marketing</option>
                          <option value="Website Development">Website Development</option>
                          <option value="E-commerce Development ">E-commerce Development </option>
                          <option value="Shopify">Shopify</option>
                          <option value="WordPress">WordPress</option>
                          <option value="Mobile App">Mobile App</option>
                          <option value="Social Media Marketing">Social Media Marketing</option>
                          <option value="PPC">PPC</option>
                          <option value="Design & Branding">Design & Branding</option>
                          <option value="UI/UX">UI/UX</option>
                          <option value="Photography & Videography">Photography & Videography</option>
                        </select>
                        <div class="select-icon">
                            <img src="assets/images/icons/form-icon/arrow-down.svg" alt="arrow-down">
                        </div>
                    </div>
            </div>
            <div class="fullname field">
                <label for="fullname">Full Name *</label>
                <input type="text" name="fullname" id="fullname" class="name-field" placeholder="Full Name" required  >
            </div>
            <div class="email-field field">
                <label for="email">Email *</label>
                <input type="email" name="email"  id="email"  class="email-field" placeholder="Email" required>
            </div>
            <div class="whatsapp-number field">
                <label for="number">Whats App Number *</label>
                <input type="number" id="number" name="number" class="number-field" placeholder="Whats App Number" required >
            </div>
            <div class="country field">
                <label for="country">Country *</label>
                <input type="text"id="country" name="country"  class="country-field" placeholder="Country" required >
            </div>
            <div class="company field">
                <label for="company">Company/Organization</label>
                <input type="text" id="company" name="company" class="company-field" placeholder="Company/Organization" >
            </div>
            <div class="message grid-span field">
                <label for="message">Message</label>
                <textarea id="message"  name="message" class="message-field"  placeholder="Type Here" rows="3"></textarea>
            </div>
            <div class="checkbox grid-span">
              <div class="agree-newsletter grid-span">
                  <input type="checkbox" id="agree_newsletter" name="agree_newsletter" class="agree-newsletter-field" >
                  <label for="agree-newsletter">I agree to sign up for the newsletter</label>
              </div>
              <div class="agree-terms grid-span">
                  <input type="checkbox" id="agree_terms" name="agree_terms" class="agree-terms-field" required>
                  <label for="agree-terms">I agree to the <a href="#">Privacy policy </a> and Terms and Conditions</label>
              </div>
          </div>


          <div class="success-message grid-span" id="successMessage">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p><span class="success">Success!</span>We have received your contact information, We will contact you shortly, Thank you for contacting us!</p>
          </div>

          <div class="error-message grid-span" id="errorMessage">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p><span class="error">Error!</span> Sorry for inconvinence due to some server issues your contact information is not received by us please try again!<p>
          </div>


            <div class="button">
                <button class="btn full-width" type="submit" >Submit</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</section>

<section class="countries-section">
  <div class="container">
    <div class="country-grid">
      <div class="country-block" id="Pakistan">
        <div class="country-img">
          <img src="assets/images/icons/footer/pakistan-icon.png" alt="pakistan-icon" />
          <p>Pakistan</p>
        </div>
        <div class="country-address">
          <p>Nazim-ud-din Rd, F-7/1 F 7/1 Blue Area, Islamabad, Pakistan</p>
          <a href="#"><p>(+92) 305 8214945</p></a>
        </div>
      </div>
      <div class="country-block" id="UK">
        <div class="country-img">
          <img src="assets/images/icons/footer/UK-icon.png" alt="pakistan-icon"  />
          <p>United Kingdom</p>
        </div>
        <div class="country-address">
          <p>63-66, Hatton Gardens 
            Fifth Floor, Suite 23
            London
            EC1N 8LE</p>
          <a href="#"><p>(+44) 7476451747</p></a>
        </div>
      </div>
    </div>
  </div>
</section>
 
  <?php
  include('footer.php')
  ?>
  <script src="assets/script.js"></script>
  
</body>

<script>
 document.getElementById("contactForm").addEventListener("submit", function(event){
    event.preventDefault();
    var form_help = document.querySelector("select[name='category']").value;
    var fullname = document.querySelector("input[name='fullname']").value;
    var email = document.querySelector("input[name='email']").value;
    var number = document.querySelector("input[name='number']").value;
    var country = document.querySelector("input[name='country']").value;
    var company = document.querySelector("input[name='company']").value;
    var message = document.querySelector("textarea[name='message']").value;
    var agree_newsletter = document.querySelector("input[name='agree_newsletter']").checked;
    var agree_terms = document.querySelector("input[name='agree_terms']").checked;
    
    $.ajax({
        type: "POST",
        url: "save-contact-information.php",
        data: {
            form_help: form_help,
            fullname: fullname,
            email: email,
            number: number,
            country: country,
            company: company,
            message: message,
            agree_newsletter: agree_newsletter,
            agree_terms: agree_terms
        },
        success: function(response){
            console.log(response);
            document.getElementById("successMessage").style.display = "block";
            document.getElementById("contactForm").reset();
        },
        error: function(xhr, status, error){
            console.log(xhr.responseText);
            document.getElementById("errorMessage").style.display = "block";
        }
    });
  });
</script>

</html>