<section>
        <div class="container">
            <div class="inner_container">
                <div class="content">
                    <div class="content_1">
                        <div class="h2">
                            <h2 class="poppins-bold">Let's Connect With Our Experts</h2>
                        </div>
                        <p class="poppins-regular">Get valuable consultation from our professionals to discuss your mobile application development project. We are here to help you with all of your queries.</p>
                        <h5 class="poppins-semibold">Revolutionize Your Business</h5>
                        <p class="poppins-regular">Collaborate with us and become a trendsetter with our reliable mobile application development company.</p>
                        <div class="flexx flexx_center block_award">
                            <div class="flexx">
                                <div>
                                    <a href=""><img src="images/goodfrims.webp" alt=""></a>
                                </div>
                                <div class="poppins-semibold margin">
                                    <h6>5.0</h6>
                                    <h6>Goodfrims</h6>
                                </div>
                            </div>
                            <div  class="flexx margin-left">
                                <div>
                                    <a href=""><img src="images/rightfirms.webp" alt=""></a>
                                </div>
                                <div class="poppins-semibold margin">
                                    <h6>4.8</h6>
                                    <h6>Rightfrims</h6>
                                </div>
                            </div>
                            <div  class="flexx margin-left">
                                <div>
                                    <a href=""><img src="images/clutch_rating.webp" alt=""></a>
                                </div>
                                <div class="poppins-semibold margin">
                                    <h6>4.8</h6>
                                    <h6>Clutch</h6>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info">
                            <h5 class="poppins-semibold">Contact info:</h5>
                            <div class="flexx email">
                                <div>
                                    <img src="images/mail.webp" alt="">
                                </div>
                                <div>
                                    <a href="mailto:info@tekrevol.com" aria-label="TekRevol Contact" class="poppins-regular">info@tekrevol.com</a>
                                </div>
                            </div>
                            <div class="flexx call">
                                <div>
                                    <img src="images/phone_num.webp" alt="">
                                </div>
                                <div>
                                    <a href="tel:+18003629239" aria-label="TekRevol Contact" class="poppins-regular">+1 800-362-9239</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content_2">
                        <div class="content_2_inner">
                            <form id="contactForm"> <!-- Added form ID for AJAX -->
                                <h3 class="poppins-semibold">Get in Touch Now!</h3>
                                <div class="form-group from_item"> 
                                  <input placeholder="Full Name" name="footer_name" class="form-control" id="footer_name" type="text" required="">
                                </div>
                                <div class="form-group from_item">
                                  <input type="email" class="form-control" id="footer_email" name="footer_email" placeholder="Email" required="">
                                </div>
                                <div class="form-group from_item">
                                  <input type="tel" class="form-control" id="footer_phone" name="footer_phone" placeholder="Number" required="">
                                </div>
                                <div class="form-group text_area">
                                  <textarea class="form-control" rows="4" id="footer_description" name="footer_description" placeholder="Describe Your Project Need." required=""></textarea>
                                </div>
                                <p class="privacy poppins-regular">
                                  By submitting this form, you agree to our
                                  <a href="https://www.tekrevol.com/privacy-policy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                                </p>
                                <button type="submit" class="btn btn_submit">Get In Touch</button>
                                
                              </form>
                              <div id="formMessage" class="poppins-medium" style="display: none;"></div> <!-- Message div for AJAX response -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery and AJAX script for form submission -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        var formData = {
          fullName: $('#footer_name').val(),
          email: $('#footer_email').val(),
          number: $('#footer_phone').val(),
          aboutProject: $('#footer_description').val()
        };

        $.ajax({
          url: 'send-email.php', // Ensure this PHP file handles form data and email sending
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
            $('#formMessage').text('There was an error sending the email.').addClass('error').removeClass('success').show();
            $("#formMessage").fadeIn("slow");
            setTimeout(function() {
              $("#formMessage").fadeOut("slow");
            }, 3000);
          }
        });
      });
    });
</script>