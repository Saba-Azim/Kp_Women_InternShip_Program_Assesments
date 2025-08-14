<?php
include 'include/header.php';
$result = $conn->query("SELECT id, name, email, role FROM users");

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
                        <h2>User List</h2>
                        <!-- <a href="user_add.php" class="btn btn-success mb-3">Add New User</a> -->
                        <table class="table table-bordered table-hover ">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= htmlspecialchars($row['name']) ?></td>
                                        <td><?= htmlspecialchars($row['email']) ?></td>
                                        <td><?= $row['role'] ?></td>
                                        <td>
                                            <a href="user_edit.php?id=<?= $row['id'] ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="delete-user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
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
    <div class="clearfix"></div>
    <!-- Footer -->
    <?php include 'include/footer.php'; ?>

    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<?php include 'include/script.php'; ?>