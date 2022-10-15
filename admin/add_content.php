<?php 
    require "../lib/category.php";
    require "../lib/validation.php";
    require "../lib/helper.php";
    require "../lib/content.php";
    session_start();
    if(empty($_SESSION['user'])){
      redirect('../login',0);
    }
    $categoryAll = new category;
    $categoryAll =  $categoryAll->getCategories();

?>
<?php 
    $success = "";
    $error = "";

    if(isset($_POST['add'])){
        $content= new content;
        //get image 
        $filename = $_FILES['cover']['name'];
        $filetmp = $_FILES['cover']['tmp_name'];
        $sizeMb = ($_FILES['cover']['size'])/1000000;
        $type = explode(".",$filename);
        $type = strtolower(end($type)) ;
        if($type == 'jpeg' || $type == 'png' || $type == 'jpg'){
            if($sizeMb < 5){
                //insert data here
                date_default_timezone_set("America/New_York");  
                $filename = date("Ymdhis").$filename;
                $fileUploaded = "../design/imgs/".$filename;
                move_uploaded_file($filetmp,$fileUploaded);
                $path = "design/imgs/".$filename;
                $data = [
                    "name"=>$_POST['name'],
                    "cover"=>$path,
                    "short_desc"=>$_POST['short_desc'],
                    "main_content"=>$_POST['main_content'],
                    "user_id"=>$_SESSION['user']['id'],
                    "category_id"=>$_POST['category_id'],
                ];
                $res = $content->addContent($data);
                if($res){
                    $success = "Content Has Been Uploaded";
                    redirect('content',1);
                }else {
                    $error = "Some Thing Went Wronge";
                }
            }else {
                $error = "file less than 5 mb";
            }
        }else {
            $error = "extention should one of jpeg or png";
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
            <h1>Add Content Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Content</li>
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
          <h3 class="card-title">Add Content</h3>
            
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
              <div class="card-header bg-warning">
                <h3 class="card-title">Content Informations</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="" enctype="multipart/form-data">
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
                    <label for="Category">Name</label>
                    <input name="name" type="text" class="form-control" id="Category"  placeholder="Enter Name...">
                  </div>
                  <div class="form-group ">
                    <label for="formFileSm" class="form-label">Cover</label>
                    <input name="cover" class="form-control form-control p-2" id="formFileSm" type="file">
                    </div>
                  <div class="form-group">
                    <label for="Category">Short Description</label>
                    <textarea type="text" name="short_desc" class="form-control" id="Category"  placeholder="..."></textarea>
                  </div>
                  <div class="form-group">
                  <label for="Category">Main Content</label>
                    <textarea name="main_content" type="text" class="form-control" id="Category"  placeholder="..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="Category">Categories</label>
                    <select name="category_id" class="form-select w-100 p-2" aria-label="Default select example">
                        <option value="" disabled selected></option>
                        <?php foreach($categoryAll as $category):?>
                        <option value="<?= $category['id']?>"><?= $category['name']?></option>
                        <?php endforeach;?>
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add" class="btn btn-warning">Add</button>
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
  