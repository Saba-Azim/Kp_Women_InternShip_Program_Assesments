<?php
include 'include/header.php';
$result = $conn->query("SELECT id, name, gender, date_of_birth,  phone, address FROM student");

?>

<!-- Left Panel -->
<?php include 'include/sidebar.php'; ?>

<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php include 'include/nav.php'; ?>

    <!-- /#header -->
    <!-- Content -->
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="col-lg-12 ">
                <div class="card " style="min-height: 500px; margin-top: 40px;">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                                    <div>
                                        <h4 class="card-title mb-0">Students Record</h4>
                                    </div>
                                    <button class="btn btn-primary mt-2 mt-md-0" data-bs-toggle="modal" data-bs-target="#addModal">
                                        <i class="fa fa-plus"></i> 
                                    </button>
                                </div>
                        <!-- <a href="user_add.php" class="btn btn-success mb-3">Add New User</a> -->
                        <table class="table table-bordered table-hover ">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>D.O.B</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['date_of_birth']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['address']; ?></td>

                                        <td>
                                            <a href="edit-student.php?id=<?= $row['id'] ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="delete-student.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
     <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Add Student</h5>
                        </div>
                        <div class="modal-body">

                            <form class="form" id="addForm" action="submit-student.php" method="post" enctype="multipart/form-data">
                                
                                    <div class="col-md-12 mb-4">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="name" name="name" class="form-control" placeholder="Student Name" required>
                                    </div>
                                    
                                    <div class="col-md-12 mb-4">
                                        <label for="gender" class="form-label">Gender: </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleInline" value="Male" checked>
                                            <label class="form-check-label" for="maleInline">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleInline" value="Female">
                                            <label class="form-check-label" for="femaleInline">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherInline" value="Other">
                                            <label class="form-check-label" for="otherInline">Other</label>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-12 mb-4">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required>
                                    </div>
                                    
                                    <div class="col-md-12 mb-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" name="phone" class="form-control"  placeholder="Phone Number" required>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                                    </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="addForm" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
    <div class="clearfix"></div>
    <!-- Footer -->
    <?php include 'include/footer.php'; ?>

    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<?php include 'include/script.php'; ?>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>