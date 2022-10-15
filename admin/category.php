
<?php 
    require "../lib/category.php";
    require "../lib/validation.php";
    require "../lib/helper.php";
    session_start();
    if(empty($_SESSION['user'])){
      redirect('../login',0);
    }
?>
<?php
$category = new category;
$data = $category->getCategories();
?>
<?php require_once "header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Page</li>
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
          <h3 class="card-title">All Categories</h3>

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
            <a href="add_category.php" class="btn btn-success my-2">Add New</a>
            <?php if(isset($_GET['error'])):?>
              <div class="alert alert-danger" role="alert">
                Some thing went wronge..!
              </div>
              <?php endif;?>
          <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10%;">id</th>
                      <th>Name</th>
                      <th style="width: 10%;">Edit</th>
                      <th style="width: 10%;">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($data)):?>
                        <?php foreach($data as $cate):?>
                    <tr>
                      <td><?= $cate['id']?></td>
                      <td><?= $cate['name']?></td>
                      <td class="text-center">
                        <a  href="edit.php?id=<?=$cate['id']?>" class="btn btn-success w-100">Edit</a>
                      </td>
                      <td class="text-center"><a class="btn btn-danger w-100" href="delete_category.php?id=<?=$cate['id']?> ">Delete</a></td>
                    </tr>
                    <?php endforeach;?>
                    <?php else :?>
                        <tr>
                      <td>Category Table Empty!!</td>
                         </tr>
                    <?php endif;?>
                  </tbody>
                </table>
        </div>
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?php require_once "footer.php";?>
  