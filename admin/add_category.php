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
    
    
    
    $success = "";
    $error = "";
    if(isset($_POST['category'])){
        $valRes = Validation::string_empty($_POST['category']);
        if(!$valRes){
            $category = new category;
            $res =  $category->addNewCategory(['name'=>$_POST['category']]);
            if($res){
            redirect("category",1);
            $success = "category inserted";
            }
        }else {
            $error = "category name is require!!";
        }
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
            <h1>Add Category Page</h1>
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
          <h3 class="card-title">Add Category</h3>
            
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
              <?php
            if(strlen($success)>0):
            ?>
            <div class="alert alert-info alert-dismissible m-2">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Alert!</h5>
                  <?= $success?>
                </div>
            
            <?php endif;?>
            <?php
            if(strlen($error)>0):
            ?>
            <div class="alert alert-danger alert-dismissible m-2">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Alert!</h5>
                  <?= $error?>
                </div>
            
            <?php endif;?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="Category">Category Name</label>
                    <input type="text" class="form-control" id="Category" name="category" placeholder="Enter Category...">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add" class="btn btn-primary">Add</button>
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
  