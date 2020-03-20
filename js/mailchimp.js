// mailchimp subscribe form js
(function($) {
    'use strict';
        // validations start here
        $('#signup').validate({

            rules: {

                subscriber_email: {
                    required: true,
                    email: true
                },
                nama: {
                    required: true
                },
                pesan: {
                    required: true
                }
            },

            messages: {

                subscriber_email: {
                    required: 'Email harus diisi.',
                    email: 'Email harus valid.'
                },
                nama:{
                    required: 'Nama harus diisi.'
                },
                pesan:{
                    required: 'Pesan harus diisi.'
                }
            },

            submitHandler: function() {

                var subscriber_email = $('#subscriber_email').val();

                $('#subscribe_message').html('<i class="fas fa-spinner"></i>');

                $.ajax({
                    type: 'post',
                    url: 'post.php',
                    data: $('form').serialize(),
                    success: function(data) {
                        $('#signup').hide();
                        $('#success_message').show();
                    }
                    // success: after_form_submitted,
                    // success: function () {
                    //   alert('form was submitted');
                    // }
                });

            }

        });
}(jQuery));