<?php
include 'include/header.php';
$result = $conn->query("SELECT id, name, email, phone, subject, message FROM contacts");

?>


<style>
    /* Custom responsive table styles */
    .custom-responsive-table {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        /* Smooth scrolling on iOS */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        /* Soft shadow */
        border-radius: 8px;
        /* Rounded corners */
        margin-bottom: 20px;
    }

    .custom-responsive-table table {
        min-width: 600px;
        /* Minimum width before scrolling */
        margin-bottom: 0;
        /* Remove default table margin */
    }

    .custom-responsive-table th {
        white-space: nowrap;
        /* Prevent header text wrapping */
        background-color: #f8f9fa;
        /* Light gray background */
        position: sticky;
        top: 0;
    }

    .custom-responsive-table td {
        vertical-align: middle;
        /* Center content vertically */
    }

    /* Message column styling */
    .message-cell {
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    /* Responsive actions column */
    .actions-column {
        white-space: nowrap;
    }

    /* Mobile-specific styles */
    @media (max-width: 768px) {
        .custom-responsive-table {
            border: 1px solid #dee2e6;
        }

        .message-cell {
            max-width: 150px;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    }
</style>

s

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
            <div class="col-lg-12">
                <div class="card" style="min-height: 500px; margin-top: 40px;">
                    <div class="card-header">
                        <strong class="card-title">Contact Messages</strong>
                    </div>
                    <div class="card-body">
                        <div class="custom-responsive-table">

                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()): ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= htmlspecialchars($row['name']) ?></td>
                                            <td><?= htmlspecialchars($row['email']) ?></td>
                                            <td><?= htmlspecialchars($row['phone']) ?></td>
                                            <td>
                                                <a href="contact_show.php?id=<?= $row['id'] ?>"
                                                    class="btn btn-info btn-sm">show</a>
                                                <a href="contact_edit.php?id=<?= $row['id'] ?>"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="contact_delete.php?id=<?= $row['id'] ?>"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>

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
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<?php include 'include/script.php'; ?>