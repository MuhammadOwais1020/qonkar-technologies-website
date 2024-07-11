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
    fetchTableData();
});

function fetchTableData() {
    $.ajax({
        url: 'fetch-data.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            var tbody = $('#infoTableBody');
            tbody.empty(); // Clear existing table data
            data.forEach(function(item) {
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
                viewEmailBtn.click(function() {
                    alert('Email: ' + item.email);
                });
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching data:', textStatus, errorThrown);
        }
    });
}


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