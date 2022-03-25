<!DOCTYPE html>
<html>
<head>
  <title>HOME BASED SERVICES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
    <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
    <meta name="author" content="Pedro Botelho for Codrops" />
    <link rel = "shortcut icon" href = "./images/ico.png" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="./includes/style.css">
     <script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>
    <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style3.css">
     <link rel="stylesheet" type="text/css" href="./css/style4.css">
     <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Bootstrap Datatables -->
  
    <!-- Bootstrap social button library -->
    
    <!-- Admin Stye -->
    <link rel="stylesheet" href="./css6/style.css">
</head>
<body>

 <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row"> 
  <div class="row header col-sm-12" style="text-align:center;color:green;">
    <div style="height: 50px;"></div>
    <table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
      <thead>
        <th><center>HOMID</center></th>
        <th><center>ACTIVITY</center></th>
        <th><center>POST</center></th>
        <th><center><a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add New</a>   </center></th>
      </thead>
      <tbody>
      <?php 
              include('./includes/db.php');
              if(isset($_GET['page'])){
                $page = $_GET['page'];
              }
              else{
                 $page = "1";
              }
              $num_per_page = 05;
              $start_form = ($page-1)*05;
              $result=$mysqli->query("select * from services limit $start_form,$num_per_page");
              while($row=$result->fetch_assoc()){

      ?>

          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['activities']; ?></td>
          <td><?php echo $row['post']; ?></td>
            <td>
          <a href="#detail<?php echo $row['id'];?>" data-toggle="modal" class="btn btn-success "><span class="glyphicon glyphicon-th-large"></span> Detail</a>&nbsp;
         <a href="#edit<?php echo $row['id'];?>" data-toggle="modal" class="btn btn-warning "><span class="glyphicon glyphicon-edit"></span> Edit</a>&nbsp;
         <a href="#del<?php echo $row['id'];?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>&nbsp;
         <a  class="btn btn-success" href="export.php?export=true"><span class="glyphicon glyphicon-folder"></span>Export</a>
         <!-- include insert modal --> 
      
     <!-- End -->
                 <!-- include edit modal -->
                 <?php include('show_detail_modal.php');?>
                 <!-- End -->
                 <!-- include edit modal --> 
                 <?php include('show_edit_modal.php');?>
                 <!-- End -->
                 <!-- include delete modal --> 
                <?php include('show_delete_modal.php');?>
                <!-- End -->
             </td>
        </tr>
             <?php } ?>
        
      </tbody>
    </table>
    <?php
          $pr_query = "select * from services";
          $pr_result = mysqli_query($mysqli, $pr_query);
          $total_record = mysqli_num_rows($pr_result);
          $total_page = ceil($total_record/$num_per_page);
          if($page>1)
          {
            echo "<a href='manage_house.php?page=".($page-1)."' class='btn btn-success'>Previous</a>";
          }
          for($i=1;$i<$total_page;$i++){
      echo "<a href='manage_house.php?page=".$i."' class='btn btn-success'>$i</a>";
          }
           if($i>$page)
          {
            echo "<a href='manage_house.php?page=".($page+1)."' class='btn btn-success'>Next</a>";
          }
    ?>

  </div>
</div>
</div>
</div>
</div>
   <?php include('show_add_modal.php');?>
</body>

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
 <script src="./js2/jquery.min.js"></script>
  <script src="./js2/main.js"></script>
</html>
