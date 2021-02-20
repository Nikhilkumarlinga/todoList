$( document ).ready(function() {

    
    //setTimeout(, 30000);
    //setTimeout(function(){$("#taskbox").load(location.href + " #taskbox");}, 5000);

$("#saveTodo").on("click", function(){
    $.ajax({
        type: 'POST',
        url: 'add.php',
        data: $('#todoAddForm').serialize(),
        success: function (response) {
            console.log(response);
                  var resp = JSON.parse(response);
                  console.log(resp.status);
                  $( ".tasklist" ).append( '<div class="row taskitem"><div class="col-9">'+ resp.taskName +'</div><div class="col-3"><div class="allbuttons"><button class="btn btn-sm btn-success" id="completed" data-val="'+resp.taskId+'">&#10003;</button><button class="btn btn-sm btn-danger" id="deleted" data-val="'+resp.taskId+'">X</button></div></div>' );
                  if(resp.success == true) { $('.success_msg').show(); }
                  else { $('.error_msg').show(); }
                  $('.taskName').val("");
        }
    });
 //   location.reload();
});

$( document ).delegate( ".btn-danger", "click", function() {    
    var taskId = {  'taskId': $(this).data('val')   };  
    $.ajax({
        type: 'POST',
        url: 'delete.php',
        data: taskId,
        success: function (response) {
            console.log(response);
                  var resp = JSON.parse(response);
                  console.log(resp.success);
                  if(resp.success == true) { $('.delete_msg').show(); }
                  else { $('.error_msg').show(); }
        }
    
});
$(this).parent().parent().parent().hide();
});

$( document ).delegate( ".btn-success", "click", function() {  
    var taskId = {  'taskId': $(this).data('val')   };  
    $.ajax({
        type: 'POST',
        url: 'done.php',
        data: taskId,
        success: function (response) {
            console.log(response);
                  var resp = JSON.parse(response);
                  console.log(resp.status);
                  if(resp.success == true) { $('.update_msg').show(); }
                  else { $('.error_msg').show(); }
        }
    
});

$(this).parent().html('<p class="btn btn-sm done">Done</p>');
});

});