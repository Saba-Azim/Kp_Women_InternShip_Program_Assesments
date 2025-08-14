<?php
include 'include/header.php';
$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: student.php");
    exit;
}

$student = $conn->query("SELECT * FROM student WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("UPDATE student SET name=?, gender=?, date_of_birth=?,  phone=?, address=? WHERE id=?");
    $stmt->bind_param("sssssi", $name, $gender, $dob,  $phone, $address, $id);
    $stmt->execute();

    header("Location: student.php");
    exit;
}
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
    <div class="content" style="margin-top: 40px;">
        <!-- Animated -->
        <div class="animated fadeIn">
            <div class="col-lg-12 ">
                <div class="card " style="min-height: 500px;">
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" name="name" class="form-control"
                                    value="<?= ($student['name']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input id="gender" name="gender" class="form-control"
                                    value="<?= ($student['gender']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input id="dob" name="dob" class="form-control"
                                    value="<?= ($student['date_of_birth']) ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input id="phone" name="phone" class="form-control"
                                    value="<?= ($student['phone']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input id="address" name="address" class="form-control"
                                    value="<?= ($student['address']) ?>" required>
                            </div>
                            
                            <button type="submit" class="btn btn-success w-30">Update student</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <?php include 'include/footer.php'; ?>

    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<?php include 'include/script.php'; ?>