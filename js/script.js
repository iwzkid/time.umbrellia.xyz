console.log("Script loadsssss!");

jQuery(document).ready(function($){
    $('.important_checkbox').on('click', function(){
        console.log( $(this).parents('tr').data('id') , 'is checked' , $(this).prop('checked') );

        $.post( window.location, {
            "id": $(this).parents('tr').data('id'),
            "mark_important": $(this).prop('checked')
        }, function(result){
            console.log(result);
        })
    });
});