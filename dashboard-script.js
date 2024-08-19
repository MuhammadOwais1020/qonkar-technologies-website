$(document).ready(function() {
  if ($('#loginContainer').length) {
      $('#dashboard').hide();
  }

  $('#login_btn').click(function(event) {
      event.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
      if (email != '' && password != '') {
          $.ajax({
              url: "fetch-data.php",
              method: "POST",
              data: {email: email, password: password},
              success: function(data) {
                  console.log('Server response:', data);
                  if (data.trim() == 'No') {
                      alert("Wrong data");
                  } else if (data.trim() == 'Yes') {
                      location.reload();
                  }
              }
          });
      }
  });

  // Fetch table data
//   fetchTableData();
});

// function fetchTableData() {
//   $.ajax({
//       url: 'fetch-data.php',
//       method: 'GET',
//       dataType: 'json',
//       success: function(data) {
//           var tbody = $('#infoTableBody');
//           tbody.empty(); // Clear existing table data
//           data.forEach(function(item) {
//               var row = $('<tr></tr>');
//               row.append('<td>' + item.id + '</td>');
//               row.append('<td>' + item.fullname + '</td>');
//               row.append('<td>' + item.form_help + '</td>');
//               row.append('<td>' + item.number + '</td>');
//               var viewEmailBtn = $('<button class="btn-read">View Email</button>');
//               var emailTd = $('<td></td>');
//               emailTd.append(viewEmailBtn);
//               row.append(emailTd);
//               tbody.append(row);
//               viewEmailBtn.click(function() {
//                   alert('Email: ' + item.email);
//               });
//           });
//       },
//       error: function(jqXHR, textStatus, errorThrown) {
//           console.error('Error fetching data:', textStatus, errorThrown);
//       }
//   });
// }


$(document).ready(function() {
    // Function to fetch and display contact data
    function fetchContactTableData() {
        $.ajax({
            url: 'fetch-data.php', // Adjust the URL if necessary
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data); // Log the data structure for debugging
                if (data && Array.isArray(data.contact)) {
                    var tbody = $('#infoTableBody');
                    tbody.empty(); // Clear existing table data
                    data.contact.forEach(function(item) {
                        var row = $('<tr></tr>');
                        row.append('<td>' + item.id + '</td>');
                        row.append('<td>' + item.fullname + '</td>');
                        row.append('<td>' + item.form_help + '</td>');
                        row.append('<td>' + item.number + '</td>');
                        var viewEmailBtn = $('<button class="btn-read">View Email</button>');
                        var emailTd = $('<td></td>');
                        emailTd.append(viewEmailBtn);
                        row.append(emailTd);
                        tbody.append(row);

                        // Add click event for the "View Email" button
                        viewEmailBtn.click(function() {
                            alert('Email: ' + item.email);
                        });
                    });
                } else {
                    console.error("Contact data is not an array or is undefined");
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching contact data:', textStatus, errorThrown);
            }
        });
    }

    // Function to fetch and display career data
    function fetchCareerTableData() {
        $.ajax({
            url: 'fetch-data.php', // Adjust the URL if necessary
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data); // Log the data structure for debugging
                if (data && Array.isArray(data.career)) {
                    var tbody = $('#career-info');
                    tbody.empty(); // Clear existing table data
                    data.career.forEach(function(item) {
                        var row = $('<tr></tr>');
                        row.append('<td>' + item.id + '</td>');
                        row.append('<td>' + item.full_name + '</td>');
                        row.append('<td>' + item.country + '</td>');
                        row.append('<td>' + item.qualification + '</td>');
                        row.append('<td>' + item.skills + '</td>');
                        row.append('<td>' + item.applying_for + '</td>');
                        var viewEmailBtn = $('<button class="btn-read">View Email</button>');
                        var emailTd = $('<td></td>');
                        emailTd.append(viewEmailBtn);
                        row.append(emailTd);
                        tbody.append(row);

                        // Add click event for the "View Email" button
                        viewEmailBtn.click(function() {
                            alert('Email: ' + item.email);
                        });
                    });
                } else {
                    console.error("Career data is not an array or is undefined");
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching career data:', textStatus, errorThrown);
            }
        });
    }

    // Fetch contact data initially
    fetchContactTableData();

    // When switching to career info section, fetch career data
    $('#carrierApplicantBtn').click(function() {
        fetchCareerTableData();
    });
});



$('#logout').click(function(){
  var action = 'logout';
  $.ajax({
      url: "fetch-data.php",
      method: "POST",
      data: {action:action},
      success:function(data){
          location.reload();
      }
  });
});