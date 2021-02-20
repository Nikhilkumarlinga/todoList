$( document ).ready(function() {

    
    //setTimeout(, 30000);
    //setTimeout(function(){$("#taskbox").load(location.href + " #taskbox");}, 5000);

$("#saveTodo").click(function () {
    $.ajax({
        type: 'POST',
        url: 'add.php',
        data: $('#todoAddForm').serialize(),
        success: function (response) {
            //console.log(response);
                  var resp = JSON.parse(response);
                  console.log(resp.status);
                
        }
    });
    location.reload();
});

$(".btn-danger").on("click", function(){
    
    var taskId = {  'taskId': $(this).data('val')   };  
    $.ajax({
        type: 'POST',
        url: 'delete.php',
        data: taskId,
        success: function (response) {
            console.log(response);
                  var resp = JSON.parse(response);
                  console.log(resp.status);
                
        }
    
});
$(this).parent().parent().parent().hide();
});

$(".btn-success").on("click", function(){

    var taskId = {  'taskId': $(this).data('val')   };  
    $.ajax({
        type: 'POST',
        url: 'done.php',
        data: taskId,
        success: function (response) {
            console.log(response);
                  var resp = JSON.parse(response);
                  console.log(resp.status);
                
        }
    
});
//location.reload();
//$(".allbuttons").html('<p class="btn btn-sm done">Done</p>');
$(this).parent().html('<p class="btn btn-sm done">Done</p>');
});

});