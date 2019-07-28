$(document).ready(function(){

    $('.view-modal').click(function() {
        $('#name').html( $(this).data('name'));
        $('#name2').html( $(this).data('name'));
        $('#email').html( $(this).data('email'));
        $('#role').html( $(this).data('name'));
        $('#role2').html( $(this).data('role'));
        $('#creator').html( $(this).data('creator'));
        $('#photo').attr('src'," {{asset('')}}"+"{{"+$(this).data('photo')+"}}");
        // console.log('{{asset("")}}'+'{{'+$(this).data('photo')+'}}');
    });

});
