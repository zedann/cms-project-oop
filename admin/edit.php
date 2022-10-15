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

$current_cate = [];
if(isset($_GET['id'])){
    $cate = new category;
    $id = $_GET['id'];
    $updated = false;
    $current_cate = $cate->getOneCategory($id);
    if(isset($_POST['edit'])){
        
        $name = $_POST['category'];
        $data = [
            'name'=>$name,
        ];
        $res = $cate->editCategory($id,$data);
        $updated = true;
        redirect('category',3);
        
    }
}else {
    redirect('category',0);
}

?>
<?php require_once "header.php";?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
          <h3 class="card-title">Edit Category</h3>
            
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
           <!-- general form elements -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Category Informations</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <?php if($updated):?>
                    <div class="alert alert-success m-2">
                        Category Has Been Updated..
                    </div>
                <?php endif;?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Category">Category Name</label>
                    
                    <input type="text" class="form-control" id="Category" name="category" value="<?=$current_cate['name']?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    <?php require_once "footer.php";?>
  