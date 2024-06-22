<!DOCTYPE html>
<html lang="en">

<?php
include('header.php');
?>

<body>
  <?php
 include('nav-bar.php');
 ?>

<section class="contact-form-section">

    <div class="heading-container">
      <div class="heading">
        <h1 class="heading-head">Contact us</h1>
        <h4 class="heading-body">We appreciate your interest in <span class="text-secondary" >Qonkar Technologies.</span> Please fill the form<br /> so we can get to the right <span class="text-secondary">help and <span class="text-secondary">support.</span></h4>
      </div>
    </div>

    <!-- <div class="success-message" id="successMessage">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      Form Submitted successfully!
    </div> -->
    
    <div class="form-section">
      <div class="form-container">
        <form action="contact-us.php" class="contact-form" method="post" id="contactForm">
            <div class="input-help field">
                  <label for="form_help">How can we help you *</label>
                  <select name="form_help" id="form_help" class="help-form" required>
                      <option value="" disabled selected hidden>Please Select One</option>
                      <option value="support">Support</option>
                      <option value="sales">Sales</option>
                      <option value="feedback">Feedback</option>
                  </select>
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
                <label for="number">What's App Number *</label>
                <input type="number" id="number" name="number" class="number-field" placeholder="What's App Number" required >
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
            <span class="success">Success!</span> We have received your contact information, We will contact you shortly, Thank you for contacting us!
          </div>

          <div class="error-message grid-span" id="errorMessage">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <span class="error">Error!</span> Sorry for inconvinence due to some server issues your contact information is not received by us please try again!
          </div>


            <div class="button grid-span">
                <button class="btn" type="submit" >Submit</button>
            </div>
        </form>

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
    var form_help = document.querySelector("select[name='form_help']").value;
		var fullname = document.querySelector("input[name='fullname']").value;
		var email = document.querySelector("input[name='email']").value;
    var number = document.querySelector("input[name='number']").value;
    var country = document.querySelector("input[name='country']").value;
    var company = document.querySelector("input[name='company']").value;
		var message = document.querySelector("textarea[name='message']").value;
		var agree_newsletter = document.querySelector("input[name='agree_newsletter']").value;
    var agree_terms = document.querySelector("input[name='agree_terms']").value;
	
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
        console.log(xhr,response.Text);
        document.getElementById("errorMessage").style.display= "block";
      }
		});
	});
</script>

</html>