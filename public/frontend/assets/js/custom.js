

$(document).ready(function () {
    $(".bu, .so, .se , .ie , .as").click(function () {
        var product = $(this).data("product");
        console.log(product);
        $(".product_id").val(product.id);
        $(".product_name").val(product.name);
    });
});


$(document).ready(function () {
    $("#supplier-enquiry-form , #buying-enquiry-form, #sourcing-enquiry-form").submit(function (e) {
        e.preventDefault(); 
        var formData = new FormData(this);
        var form = this;
        $.ajax({
            type: "POST",
            url: $(this).attr("action"), 
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                  })
                  form.reset(); 
                  $('.modal').modal('hide');
                console.log("Success: ", response); 
            },
            error: function (xhr, status, error) {
              
                console.error("Error: ", error);
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    alert(value);
                });
            },
        });
    });
});

$(document).ready(function () {
    $("#investmentGET-form , #availableGET_form ").submit(function (e) {
        e.preventDefault(); 
        
        var formData = new FormData(this);
       var form = this;
        $.ajax({
            type: "POST",
            url: $(this).attr("action"), 
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                });

                
                form.reset(); 

                $('.modal').modal('hide');
                console.log("Success: ", response);
            },
            error: function (xhr, status, error) {
                console.error("Error: ", error);
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    alert(value);
                });
            },
        });
    });
});


$(document).ready(function() {
    $('#businessGET_form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this); 
        var form = this;
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500
                });

                
                form.reset(); 

                $('.modal').modal('hide');
                console.log("Success: ", response);
            },
            error: function(error) {
                console.log(error.responseText);
            }
        });
    });
});

