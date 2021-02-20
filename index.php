<?php
//Main array of TODO tasks
include('db_connection.php');

$getTodosQuery = mysqli_query($con,"SELECT * FROM `tbl_todo` WHERE currentStatus != '3'");

//URL to fetch todos for UserID 1 from https://jsonplaceholder.typicode.com/todos
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UrbanDart Tech</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
    <!-- ADD YOUR HTML HERE -->

  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 taskbox" >
      <h1 class="mb-4">Tasks</h1>
      
      <div class="alert alert-success success_msg">
        <strong>Success!</strong> Todo added
      </div>

      <div class="alert alert-danger delete_msg">
        <strong>Todo </strong> Deleted
      </div>

      <div class="alert alert-info update_msg">
        <strong>Success!</strong> Todo Update
      </div>

      <div class="alert alert-danger error_msg">
        <strong>Error </strong> Occured. Please try again!
      </div>


      <div class="card rounded">
        <div class="card-body tasklist"  id="taskbox">
          <?php
              while ($todos = mysqli_fetch_assoc($getTodosQuery)) 
              {
            ?>              
            <div class="row taskitem">
                <div class="col-9">
                    <?php echo $todos['taskName']; ?>
                </div>
                <div class="col-3">
                    <div class="allbuttons">
                        <?php if($todos['currentStatus'] == 2) { ?>

                          <p class="btn btn-sm done">Done</p>

                        <?php
                        }
                        else
                        {
                        ?>
                        
                          <button class="btn btn-sm btn-success" id="completed" data-val="<?php echo $todos['taskId']; ?>">&#10003;</button>
                          <button class="btn btn-sm btn-danger" id="deleted" data-val="<?php echo $todos['taskId']; ?>">X</button>
                        
                        <?php
                        }
                        ?>
                </div>
            </div>
            </div> 
          <?php
              }
          ?>
        </div>
      </div>  


<div class="well">
  <form class="form" action="javascript:void(0);" id="todoAddForm">
    <div class="form-group">
      <input type="text" class="form-control form-control taskName" name="taskName" placeholder="Add Task">
    </div>
    <button type="submit" class="btn btn-block btn-primary" id="saveTodo">Save</button>
  </form>
</div>

    </div>
  </div>


    <!-- END OF YOUR HTML -->
   </div>
   <footer class="footer border-top">
      <div class="container">
        <span class="text-muted small">
        Your Name: Nikhil Kumar Linga       
        </span>
      </div>
    </footer>
    <script src="jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <script src="custom.js"></script>
  <script>
    
    </script>
  </body>
</html>
