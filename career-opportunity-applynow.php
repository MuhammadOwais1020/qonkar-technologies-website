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
                    <label class="skills" for="skills">Skills *</label>
                    <div id="skills" class="select-help-body">
                    <select name="skills[]" id="skills/" required
                          data-placeholder="Select Skills"
                          multiple
                          data-multi-select
                        >
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
  function updateFileLabel(inputElement, labelElement) {
    const file = inputElement.files[0];
    if (file) {
      labelElement.textContent = file.name;
    } else {
      labelElement.textContent = 'Upload 1 supported file. Max 10 MB';
    }
  }
  const resumeInput = document.getElementById('file-upload-resume');
  const resumeLabel = document.querySelector('label[for="file-upload-resume"]');
  
  if (resumeInput) {
    resumeInput.addEventListener('change', () => {
      updateFileLabel(resumeInput, resumeLabel);
    });
  }
  const portfolioInput = document.getElementById('file-upload-portfolio');
  const portfolioLabel = document.querySelector('label[for="file-upload-portfolio"]');
  
  if (portfolioInput) {
    portfolioInput.addEventListener('change', () => {
      updateFileLabel(portfolioInput, portfolioLabel);
    });
  }

  const form = document.querySelector('form'); 

  if (form) {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
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

//select box- multiselect options
    class MultiSelect {
      constructor(element, options = {}) {
        let defaults = {
          placeholder: "Select item(s)",
          max: null,
          search: true,
          selectAll: true,
          listAll: true,
          closeListOnItemSelect: false,
          name: "",
          width: "",
          height: "",
          dropdownWidth: "",
          dropdownHeight: "",
          data: [],
          onChange: function () {},
          onSelect: function () {},
          onUnselect: function () {},
        };
        this.options = Object.assign(defaults, options);
        this.selectElement =
          typeof element === "string"
            ? document.querySelector(element)
            : element;
        for (const prop in this.selectElement.dataset) {
          if (this.options[prop] !== undefined) {
            this.options[prop] = this.selectElement.dataset[prop];
          }
        }
        this.name = this.selectElement.getAttribute("name")
          ? this.selectElement.getAttribute("name")
          : "multi-select-" + Math.floor(Math.random() * 1000000);
        if (!this.options.data.length) {
          let options = this.selectElement.querySelectorAll("option");
          for (let i = 0; i < options.length; i++) {
            this.options.data.push({
              value: options[i].value,
              text: options[i].innerHTML,
              selected: options[i].selected,
              html: options[i].getAttribute("data-html"),
            });
          }
        }
        this.element = this._template();
        this.selectElement.replaceWith(this.element);
        this._updateSelected();
        this._eventHandlers();
      }

      _template() {
        let optionsHTML = "";
        for (let i = 0; i < this.data.length; i++) {
          optionsHTML += `
                <div class="multi-select-option${
                  this.selectedValues.includes(this.data[i].value)
                    ? " multi-select-selected"
                    : ""
                }" data-value="${this.data[i].value}">
                    <span class="multi-select-option-radio"></span>
                    <span class="multi-select-option-text">${
                      this.data[i].html ? this.data[i].html : this.data[i].text
                    }</span>
                </div>
            `;
        }
        let selectAllHTML = "";
        if (
          this.options.selectAll === true ||
          this.options.selectAll === "true"
        ) {
          selectAllHTML = `<div class="multi-select-all">
                <span class="multi-select-option-radio"></span>
                <span class="multi-select-option-text">Select all</span>
            </div>`;
        }
        let template = `
            <div class="multi-select ${this.name}"${
          this.selectElement.id ? ' id="' + this.selectElement.id + '"' : ""
        } style="${this.width ? "width:" + this.width + ";" : ""}${
          this.height ? "height:" + this.height + ";" : ""
        }">
                ${this.selectedValues
                  .map(
                    (value) =>
                      `<input type="hidden" name="${this.name}[]" value="${value}">`
                  )
                  .join("")}
                <div class="multi-select-header" style="${
                  this.width ? "width:" + this.width + ";" : ""
                }${this.height ? "height:" + this.height + ";" : ""}">
                    <span class="multi-select-header-max">${
                      this.options.max
                        ? this.selectedValues.length + "/" + this.options.max
                        : ""
                    }</span>
                    <span class="multi-select-header-placeholder">${
                      this.placeholder
                    }</span>
                </div>
                <div class="multi-select-options" style="${
                  this.options.dropdownWidth
                    ? "width:" + this.options.dropdownWidth + ";"
                    : ""
                }${
          this.options.dropdownHeight
            ? "height:" + this.options.dropdownHeight + ";"
            : ""
        }">
                    ${
                      this.options.search === true ||
                      this.options.search === "true"
                        ? '<input type="text" class="multi-select-search" placeholder="Search...">'
                        : ""
                    }
                    ${selectAllHTML}
                    ${optionsHTML}
                </div>
            </div>
        `;
        let element = document.createElement("div");
        element.innerHTML = template;
        return element;
      }

      _eventHandlers() {
        let headerElement = this.element.querySelector(".multi-select-header");
        this.element
          .querySelectorAll(".multi-select-option")
          .forEach((option) => {
            option.onclick = () => {
              let selected = true;
              if (!option.classList.contains("multi-select-selected")) {
                if (
                  this.options.max &&
                  this.selectedValues.length >= this.options.max
                ) {
                  return;
                }
                option.classList.add("multi-select-selected");
                if (
                  this.options.listAll === true ||
                  this.options.listAll === "true"
                ) {
                  if (
                    this.element.querySelector(".multi-select-header-option")
                  ) {
                    let opt = Array.from(
                      this.element.querySelectorAll(
                        ".multi-select-header-option"
                      )
                    ).pop();
                    opt.insertAdjacentHTML(
                      "afterend",
                      `<span class="multi-select-header-option" data-value="${
                        option.dataset.value
                      }">${
                        option.querySelector(".multi-select-option-text")
                          .innerHTML
                      }</span>`
                    );
                  } else {
                    headerElement.insertAdjacentHTML(
                      "afterbegin",
                      `<span class="multi-select-header-option" data-value="${
                        option.dataset.value
                      }">${
                        option.querySelector(".multi-select-option-text")
                          .innerHTML
                      }</span>`
                    );
                  }
                }
                this.element
                  .querySelector(".multi-select")
                  .insertAdjacentHTML(
                    "afterbegin",
                    `<input type="hidden" name="${this.name}[]" value="${option.dataset.value}">`
                  );
                this.data.filter(
                  (data) => data.value == option.dataset.value
                )[0].selected = true;
              } else {
                option.classList.remove("multi-select-selected");
                this.element
                  .querySelectorAll(".multi-select-header-option")
                  .forEach((headerOption) =>
                    headerOption.dataset.value == option.dataset.value
                      ? headerOption.remove()
                      : ""
                  );
                this.element
                  .querySelector(`input[value="${option.dataset.value}"]`)
                  .remove();
                this.data.filter(
                  (data) => data.value == option.dataset.value
                )[0].selected = false;
                selected = false;
              }
              if (
                this.options.listAll === false ||
                this.options.listAll === "false"
              ) {
                if (this.element.querySelector(".multi-select-header-option")) {
                  this.element
                    .querySelector(".multi-select-header-option")
                    .remove();
                }
                headerElement.insertAdjacentHTML(
                  "afterbegin",
                  `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
                );
              }
              if (!this.element.querySelector(".multi-select-header-option")) {
                headerElement.insertAdjacentHTML(
                  "afterbegin",
                  `<span class="multi-select-header-placeholder">${this.placeholder}</span>`
                );
              } else if (
                this.element.querySelector(".multi-select-header-placeholder")
              ) {
                this.element
                  .querySelector(".multi-select-header-placeholder")
                  .remove();
              }
              if (this.options.max) {
                this.element.querySelector(
                  ".multi-select-header-max"
                ).innerHTML =
                  this.selectedValues.length + "/" + this.options.max;
              }
              if (
                this.options.search === true ||
                this.options.search === "true"
              ) {
                this.element.querySelector(".multi-select-search").value = "";
              }
              this.element
                .querySelectorAll(".multi-select-option")
                .forEach((option) => (option.style.display = "flex"));
              if (
                this.options.closeListOnItemSelect === true ||
                this.options.closeListOnItemSelect === "true"
              ) {
                headerElement.classList.remove("multi-select-header-active");
              }
              this.options.onChange(
                option.dataset.value,
                option.querySelector(".multi-select-option-text").innerHTML,
                option
              );
              if (selected) {
                this.options.onSelect(
                  option.dataset.value,
                  option.querySelector(".multi-select-option-text").innerHTML,
                  option
                );
              } else {
                this.options.onUnselect(
                  option.dataset.value,
                  option.querySelector(".multi-select-option-text").innerHTML,
                  option
                );
              }
            };
          });
        headerElement.onclick = () =>
          headerElement.classList.toggle("multi-select-header-active");
        if (this.options.search === true || this.options.search === "true") {
          let search = this.element.querySelector(".multi-select-search");
          search.oninput = () => {
            this.element
              .querySelectorAll(".multi-select-option")
              .forEach((option) => {
                option.style.display =
                  option
                    .querySelector(".multi-select-option-text")
                    .innerHTML.toLowerCase()
                    .indexOf(search.value.toLowerCase()) > -1
                    ? "flex"
                    : "none";
              });
          };
        }
        if (
          this.options.selectAll === true ||
          this.options.selectAll === "true"
        ) {
          let selectAllButton = this.element.querySelector(".multi-select-all");
          selectAllButton.onclick = () => {
            let allSelected = selectAllButton.classList.contains(
              "multi-select-selected"
            );
            this.element
              .querySelectorAll(".multi-select-option")
              .forEach((option) => {
                let dataItem = this.data.find(
                  (data) => data.value == option.dataset.value
                );
                if (
                  dataItem &&
                  ((allSelected && dataItem.selected) ||
                    (!allSelected && !dataItem.selected))
                ) {
                  option.click();
                }
              });
            selectAllButton.classList.toggle("multi-select-selected");
          };
        }
        if (
          this.selectElement.id &&
          document.querySelector('label[for="' + this.selectElement.id + '"]')
        ) {
          document.querySelector(
            'label[for="' + this.selectElement.id + '"]'
          ).onclick = () => {
            headerElement.classList.toggle("multi-select-header-active");
          };
        }
        document.addEventListener("click", (event) => {
          if (
            !event.target.closest("." + this.name) &&
            !event.target.closest('label[for="' + this.selectElement.id + '"]')
          ) {
            headerElement.classList.remove("multi-select-header-active");
          }
        });
      }

      _updateSelected() {
        if (this.options.listAll === true || this.options.listAll === "true") {
          this.element
            .querySelectorAll(".multi-select-option")
            .forEach((option) => {
              if (option.classList.contains("multi-select-selected")) {
                this.element
                  .querySelector(".multi-select-header")
                  .insertAdjacentHTML(
                    "afterbegin",
                    `<span class="multi-select-header-option" data-value="${
                      option.dataset.value
                    }">${
                      option.querySelector(".multi-select-option-text")
                        .innerHTML
                    }</span>`
                  );
              }
            });
        } else {
          if (this.selectedValues.length > 0) {
            this.element
              .querySelector(".multi-select-header")
              .insertAdjacentHTML(
                "afterbegin",
                `<span class="multi-select-header-option">${this.selectedValues.length} selected</span>`
              );
          }
        }
        if (this.element.querySelector(".multi-select-header-option")) {
          this.element
            .querySelector(".multi-select-header-placeholder")
            .remove();
        }
      }

      get selectedValues() {
        return this.data
          .filter((data) => data.selected)
          .map((data) => data.value);
      }

      get selectedItems() {
        return this.data.filter((data) => data.selected);
      }

      set data(value) {
        this.options.data = value;
      }

      get data() {
        return this.options.data;
      }

      set selectElement(value) {
        this.options.selectElement = value;
      }

      get selectElement() {
        return this.options.selectElement;
      }

      set element(value) {
        this.options.element = value;
      }

      get element() {
        return this.options.element;
      }

      set placeholder(value) {
        this.options.placeholder = value;
      }

      get placeholder() {
        return this.options.placeholder;
      }

      set name(value) {
        this.options.name = value;
      }

      get name() {
        return this.options.name;
      }

      set width(value) {
        this.options.width = value;
      }

      get width() {
        return this.options.width;
      }

      set height(value) {
        this.options.height = value;
      }

      get height() {
        return this.options.height;
      }
    }
    document
      .querySelectorAll("[data-multi-select]")
      .forEach((select) => new MultiSelect(select));


</script>
</body>
</html>
