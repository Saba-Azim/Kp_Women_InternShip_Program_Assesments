<?php
include 'include/header.php';
$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: user-list.php");
    exit;
}

$user = $conn->query("SELECT * FROM users WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, role=? WHERE id=?");
    $stmt->bind_param("sssi", $username, $email, $role, $id);
    $stmt->execute();

    header("Location: user_list.php");
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
                                    value="<?= htmlspecialchars($user['name']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" class="form-control"
                                    value="<?= htmlspecialchars($user['email']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" id="role" class="form-select form-control">
                                    <option value="visitor" <?= $user['role'] == 'visitor' ? 'selected' : '' ?>>Visitor
                                    </option>
                                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-30">Update User</button>
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