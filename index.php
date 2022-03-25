<?php include 'insert.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="./css/css2.css">
<link rel="stylesheet" href="./css/main.css">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</head>
<body>
	
<br/><br/><br/><br/><br/><br/>
          <center><div class="clock">
              <span class="clock-time"></span>
              <span class="clock-ampm"></span>
            </div>
          </center>

         

 <div class="panel panel-default">
  <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm" style = "float:right; margin-right:100px; margin-top: 3px;"><span class="glyphicon glyphicon-plus"></span> Add New</a> 
    <div class="panel-heading"><center><font color="green"><b>DAILY HOME TASKS</b></font></center>
      </div>

    <div class="panel-body">
     <span id="message"></span>
     <div class="table-responsive" id="user_data">
      
     </div>
     <script>

     $(document).ready(function(){
      
      load_user_data();
      
      function load_user_data()
      {
       var action = 'fetch';
       $.ajax({
        url:'action.php',
        method:'POST',
        data:{action:action},
        success:function(data)
        {
         $('#user_data').html(data);
        }
       });
      }
      
      $(document).on('click', '.action', function(){
       var id = $(this).data('id');
       var dtime = $(this).data('dtime');
       var status = $(this).data('status');
       var action = 'change_status';
       
        this.dtime=dtime;
       console.log(this.dtime);
  
       $('#message').html('');
       if(confirm("Are you Sure you want to change status of this User?"))
       {
        $.ajax({
         url:'action.php',
         method:'POST',
         data:{id:id, dtime:dtime, status:status, action:action},
         success:function(data)
         {
          if(data != '')
          {
           load_user_data();
           $('#message').html(data);
          }
         }
        });
       }
       else
       {
        return false;
       }
      });
       

     });
  
     </script>
       <?php include('show_add_modal.php');?>
    </div>
   </div>

  
</body>
<script type="text/javascript" src="./js/dtime.js"></script>


</html>
