
$(document).ready(function(){
    $('.view-modal').click(function() {
        $('#role').html( $(this).data('role'));
        $('#role2').html( $(this).data('role'));
        // $('#photo').attr('src'," {{asset('')}}"+"{{"+$(this).data('photo')+"}}");
        // console.log('{{asset("")}}'+'{{'+$(this).data('photo')+'}}');
        // console.log($(this).data('id'));
        $.ajax({
            type: 'GET',
            url: $(this).data('id'),
            dataType:'json',
            success: function(data) {
                $('.view-modal').show();
                // ... the other stuff
                $('#photo').attr('src',"{{asset('')}}{{$data->photo}}");
                $('#name').html( data.name );
                $('#name2').html( data.name );
                $('#email').html( data.email);
                $('#creator').html( data.creator);
            },
            error : function(data) {
                alert(data.name);
            }
        });
    });



});
