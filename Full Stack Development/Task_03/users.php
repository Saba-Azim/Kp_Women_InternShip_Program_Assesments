<?php 
	include_once 'includes/header.php';
	include_once 'includes/navbar.php';
	include_once 'includes/sidebar.php';
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Record</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Record</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Data</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              		<?PHP
                        include "includes/config.php";
                        $sql= "SELECT * FROM users ";
                        $result= mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                    ?>
                <table class="table table-hover text-nowrap">
                	 
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                        while($row=mysqli_fetch_assoc($result)){
					 ?>
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
                <?php }?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
</div>
<? 
	include_once 'includes/footer.php';
?>