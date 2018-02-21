$(document).ready(function () {
    /*sweetalert confirm*/
    $(document.body).on('click', '.js-submit-confirm', function (event) {
        event.preventDefault();
        var $form = $(this).closest('form');
        var $el = $(this);
        var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'You will not be able to recover this imaginary file!';
        swal({   
            title: "Are you sure?",   
            text: "You won't be able to revert this!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            $form.submit() 
        });
    });

    // Select2
    $(".select2").select2();
});