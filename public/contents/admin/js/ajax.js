
$(document).ready(function(){

    // view user ajax
    $('.view-modal').click(function(e) {
        e.preventDefault();
        $('#role').html( $(this).data('role'));
        $('#role2').html( $(this).data('role'));
        $('#photo').attr('src',$(this).data('photo'));
        $.ajax({
            type: 'GET',
            url: $(this).data('id'),
            dataType:'json',
            contentType: 'image/png',
            processData: true,
            beforeSend: function(data){
                $('.loading').css('display', 'block');
            },
            success: function(data){
                $('#name').html( data.name );
                $('#name2').html( data.name );
                $('#email').html( data.email);
                $('#creator').html( data.creator);
            },
            complete: function(data){
                $('.loading').css('display', 'none');
            }
        });
    });

    // update user ajax
    $('.update-modal').click(function(e) {
        e.preventDefault();
        $('#update_role').html($(this).data('role'));
        $('#update_role').attr('value', $(this).data('roles'));
        $('#update_name').attr('value', $(this).data('name'));
        $('#update_email').attr('value', $(this).data('email'));
        $('#loginform').attr('action', $(this).data('id'));
        console.log($(this).data('id'));
        // $("#submit_btn").click(function(){
        //     $("#loginform").submit(); // Submit the form
        // });
        var formdata = new FormData($(this)[0]);
        $.ajax({
            type: 'post',
            url: $(this).data('id'),
            dataType:'JSON',
            contentType: false,
            processData: false,
            beforeSend: function(data){
                $('.loading').css('display', 'block');
            },
            success: function(data){
                // if(data == 'success'){
                //     setInterval(function(){
                //         $("#tbody").load(' #tbody')
                //     },1000);
                // }
            },
            complete: function(data){
                $('.loading').css('display', 'none');
            }
        });

    });

});
