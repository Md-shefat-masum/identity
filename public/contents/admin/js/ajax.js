
$(document).ready(function(){
    $('.view-modal').click(function(e) {
        e.preventDefault();
        $('#role').html( $(this).data('role'));
        $('#role2').html( $(this).data('role'));
        // $('#photo').attr('src'," {{asset('')}}"+"{{"+$(this).data('photo')+"}}");
        // console.log('{{asset("")}}'+'{{'+$(this).data('photo')+'}}');
        // console.log($(this).data('id'));
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
                // $('#pro-pic').append( '<img src="{{asset()}}{{'+data.photo+'}}">');
                // $('#photo').attr('src',"{{asset('')}}"+"{{"+data.photo+"}}");
                $('#photo').attr('src',"https://avatars1.githubusercontent.com/u/28534134?s=460&v=4");
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

});
