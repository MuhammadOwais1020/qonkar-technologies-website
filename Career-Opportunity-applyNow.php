<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.php');
?>
  <title>Careers | IT Services Company</title>
</head>
<body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M436PKCG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    
     <?php
     include('nav-bar.php')
     ?>
<section class="head-section">
    <div class="outer-container">
        <div class="heading">
          <div class="container">
          <h2 class="heading-head">Apply Now</h2>
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
        <form class="contact-form" method="post" id="career-Opportunity-applyNow">
            <div class="first-name field">
                <label for="first-name">Full Name *</label>
                <input type="text" name="first-name" id="first-name" class="name-field" placeholder="Your Answer" required  >
            </div>
            <div class="whatsapp-number field">
                <label for="number">Whats App Number *</label>
                <input type="number" id="number" name="number" class="number-field" placeholder="Your Answer" required >
            </div>
            <div class="email-field field">
                <label for="email">Email *</label>
                <input type="email" name="email"  id="email"  class="email-field" placeholder="Your Answer" required>
            </div>
            <div class="city field">
                <label for="country">Country *</label>
                <input type="text"id="country" name="country"  class="country-field" placeholder="Country" required >
            </div>
            <div class="select-container field">
                    <label class="qualification">Qualification</label>
                    <div id="qualification" class="select-help-body">
                        <select name="qualification" id="qualification">
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
            <div class="select-container field">
                    <label class="skills">Skills *</label>
                    <div id="skills" class="select-help-body">
                        <select name="skills" id="skills" required>
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
            <div class="applying-for field">
                <label for="applying-for">Applying For? *</label>
                <input type="text" name="applying-for" id="applying-for" class="applying-for--field" placeholder="Your Answer" required  >
            </div>
            <div class="description-field field">
                <label for="description">Give a concise description of yourself in 2-3 sentences.*</label>
                <textarea id="description"  name="description" class="description-field"  placeholder="Your Answer" rows="1" required></textarea>
            </div>
            <div class="outline-skills grid-span field">
                <label for="outline-skills">Can you outline how your skills will add value to our company?*</label>
                <textarea id="outline-skills"  name="outline-skills" class="outline-skills-field"  placeholder="Your Answer" rows="3" required></textarea>
            </div>
            <div class="experties field">
                <label for="experties">What sets you apart from other candidates?*</label>
                <input type="text" id="experties" name="experties" class="experties-field" placeholder="Your Answer" required>
            </div>
            <div class="time-period field">
              <label class="time-period">Are you Looking for?*</label>
              <div class="radio-group">
                <label class="custom-radio">
                  <input type="radio" name="radio-group" value="short-term">
                  <span class="radio-btn"></span>
                  Short Term
                </label>
                <label class="custom-radio">
                  <input type="radio" name="radio-group" value="long-term">
                  <span class="radio-btn"></span>
                  Long Term
                </label>
              </div>
            </div>
            <div class="future-goal-field grid-span field">
                <label for="future-goal">What are your future goals?*</label>
                <textarea id="future-goal"  name="future-goal" class="future-goal-field"  placeholder="Your Answer" rows="3" required></textarea>
            </div>
            <div class="select-container field">
              <label class="resume">Attach Resume*</label>
              <div id="resume" class="select-help-body file-upload-field">
                  <input type="file" name="resume" id="file-upload-resume" class="resume-field" required />
                  <label for="file-upload-resume" class="upload">Upload 1 supported file. Max 10 MB</label>

                  <div class="camera-icon">
                      <img src="assets/images/icons/form-icon/Camera.svg" alt="upload-icon">
                  </div>
              </div>
            </div>
            <div class="select-container field">
              <label class="portfolio">Attach Portfolio*</label>
              <div id="portfolio" class="select-help-body file-upload-field">
                  <input type="file" name="portfolio" id="file-upload-portfolio" class="portfolio-field" required />
                  <label for="file-upload-portfolio" class="upload">Upload 1 supported file. Max 10 MB</label>
                  <div class="camera-icon">
                      <img src="assets/images/icons/form-icon/Camera.svg" alt="upload-icon">
                  </div>
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
                <button class="btn full-width" type="submit" >Apply Now</button>
            </div>
        </form>

      </div>
    </div>
  </div>
</section>
  <?php
  include('footer.php')
  ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Function to update label with the file name
  function updateFileLabel(inputElement, labelElement) {
    const file = inputElement.files[0];
    if (file) {
      labelElement.textContent = file.name;
    } else {
      labelElement.textContent = 'Upload 1 supported file. Max 10 MB';
    }
  }

  // Handle resume file input change
  const resumeInput = document.getElementById('file-upload-resume');
  const resumeLabel = document.querySelector('label[for="file-upload-resume"]');
  
  if (resumeInput) {
    resumeInput.addEventListener('change', () => {
      updateFileLabel(resumeInput, resumeLabel);
    });
  }

  // Handle portfolio file input change
  const portfolioInput = document.getElementById('file-upload-portfolio');
  const portfolioLabel = document.querySelector('label[for="file-upload-portfolio"]');
  
  if (portfolioInput) {
    portfolioInput.addEventListener('change', () => {
      updateFileLabel(portfolioInput, portfolioLabel);
    });
  }

  // Handle form submission
  const form = document.querySelector('form'); // Adjust the selector if needed

  if (form) {
    form.addEventListener('submit', (event) => {
      // Optionally prevent default form submission for demonstration
      event.preventDefault();

      // Reset labels to their original text
      if (resumeLabel) {
        resumeLabel.textContent = 'Upload 1 supported file. Max 10 MB';
      }
      if (portfolioLabel) {
        portfolioLabel.textContent = 'Upload 1 supported file. Max 10 MB';
      }

      // Here you would handle the form submission via AJAX or any other method
    });
  }
});



    $(document).ready(function() {
      $('#career-Opportunity-applyNow').on('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this); 

        $.ajax({
          url: 'career-apply-fetch-data.php', 
          type: 'POST',
          data: formData,
          contentType: false, // Important for file uploads
          processData: false, // Important for file uploads
          success: function(response) {
            console.log('AJAX Success:', response); 
            if (response.trim() === 'success') {
              $('#successMessage').show(); 
              $('#career-Opportunity-applyNow')[0].reset(); 
            } else {
              $('#errorMessage').show(); 
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log('AJAX Error:', textStatus, errorThrown); 
            $('#errorMessage').show();
          }
        });
      });
    });



</script>
</body>
</html>
