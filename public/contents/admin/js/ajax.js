
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
            },
            error : function(data) {
                alert(data.name);
            }
        });
    });

    // update user ajax
    $('.update-modal').click(function(e) {
        e.preventDefault();
        $('#update_role').attr('value', $(this).data('role'));
        $('#update_name').attr('value', $(this).data('name'));
        $('#update_email').attr('value', $(this).data('email'));
        console.log($(this).data('role'));
        console.log($(this).data('name'));
        // $.ajax({
        //     type: 'GET',
        //     url: $(this).data('id'),
        //     dataType:'json',
        //     contentType: 'image/png',
        //     processData: true,
        //     beforeSend: function(data){
        //         $('.loading').css('display', 'block');
        //     },
        //     success: function(data){
        //         $('#name').html( data.name );
        //         $('#name2').html( data.name );
        //         $('#email').html( data.email);
        //         $('#creator').html( data.creator);
        //     },
        //     complete: function(data){
        //         $('.loading').css('display', 'none');
        //     },
        //     error : function(data) {
        //         alert(data.name);
        //     }
        // });
    });

});
