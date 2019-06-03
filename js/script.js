console.log("Script loadsssss!");

jQuery(document).ready(function($){

//posts parameters for updating the table row - update is done in db_functions
    $('.important_checkbox').on('click', function(){
        console.log( $(this).parents('tr').data('id') , 'is checked' , $(this).prop('checked') );

        $.post( window.location, {
            "id": $(this).parents('tr').data('id'),
            "mark_important": $(this).prop('checked')
        }, function(result){
            console.log(result);
        });
    });

//deletes row from db and clears table row, delete query is in db_functions.php
    $('.delete_event').on('click', function(){
        var that=$(this);

        $.post( window.location, {
            "id": $(this).parents('tr').data('id'),
            "delete_event": true
        }, function(result){
            console.log(result);
            that.parents('tr').remove();
        });
    return false;
    });

//date and time pickers for adding events and notes

$(function () {
    $('#datetimepicker2').datetimepicker({
        format: 'YYYY-MM-DD HH:mm'
    });
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD HH:mm' 
    });
});

//CLOCK
/*
var myVar = setInterval(function() {
    myTimer();
  }, 1000);
  
  function myTimer() {
    var d = new Date();
    document.getElementById("clock").innerHTML = d.toLocaleTimeString();
  }
*/
//do not delete my end of jquery function >.<
});