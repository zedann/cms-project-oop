
<?php 
    require "../lib/category.php";
    require "../lib/content.php";
    require "../lib/validation.php";
    require "../lib/helper.php";
    session_start();
    if(empty($_SESSION['user'])){
      redirect('../login',0);
    }
    $allContent = new content;
    $allContent =  $allContent->getAllContents();
    
?>

<?php require_once "header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Content Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Content Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Content</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <a href="add_content.php" class="btn btn-success my-2">Add New</a>
            
          <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%;">id</th>
                      <th>Name</th>
                      <th>Cover</th>
                      <th>Short Description</th>
                      <th>Main Content</th>
                      <th>User</th>
                      <th>Category</th>
                      <th style="width: 20px;">Edit</th>
                      <th style="width: 20px;">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach($allContent as $content):?>
                   
                    <tr>
                      <td><?=$content['id']?></td>
                      <td><?=$content['name']?></td>
                      <td><img src="../<?=$content['cover']?>" class="img-fluid" alt=""></td>
                      <td><?=$content['short_desc']?></td>
                      <td><?=$content['main_content']?></td>
                      <td><?=$content['user_id']?></td>
                      <td><?=$content['category_id']?></td>                      
                      <td class="text-center">
                        <a href="edit.php?id=" class="btn btn-success w-100">Edit</a>
                      </td>
                      <td class="text-center"><a class="btn btn-danger w-100" href="delete_category.php?id=">Delete</a></td>
                    </tr>
                    <?php endforeach;?>
                    
                      
                   
                  </tbody>
                </table>
        </div>
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?php require_once "footer.php";?>
  