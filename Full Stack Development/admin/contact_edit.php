<?php
include 'include/header.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: contact_list.php");
    exit;
}

// Fetch the contact details
$stmt = $conn->prepare("SELECT id, name, email, phone, subject, message FROM contacts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$contact = $result->fetch_assoc();

if (!$contact) {
    header("Location: contact_list.php");
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $updateStmt = $conn->prepare("UPDATE contacts SET name=?, email=?, phone=?, subject=?, message=? WHERE id=?");
    $updateStmt->bind_param("sssssi", $name, $email, $phone, $subject, $message, $id);
    $updateStmt->execute();

    $_SESSION['success_message'] = "Contact updated successfully!";
    header("Location: contact_show.php?id=$id");
    exit;
}
?>

<style>
    .edit-contact-card {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .edit-header {
        background-color: #4e73df;
        color: white;
        padding: 20px;
        border-radius: 10px 10px 0 0;
    }

    .edit-body {
        padding: 30px;
    }

    .form-label {
        font-weight: 600;
        color: #6c757d;
    }

    textarea {
        min-height: 150px;
    }

    .action-buttons .btn {
        min-width: 100px;
    }

    @media (max-width: 768px) {
        .edit-body {
            padding: 20px;
        }
    }
</style>

<!-- Left Panel -->
<?php include 'include/sidebar.php'; ?>

<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php include 'include/nav.php'; ?>

    <!-- Content -->
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card edit-contact-card">
                        <div class="edit-header">
                            <h4 class="mb-0">Edit Contact #<?= $contact['id'] ?></h4>
                        </div>

                        <div class="edit-body">
                            <form method="POST">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="<?= htmlspecialchars($contact['name']) ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="<?= htmlspecialchars($contact['email']) ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                value="<?= htmlspecialchars($contact['phone']) ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                value="<?= htmlspecialchars($contact['subject']) ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message"
                                        required><?= htmlspecialchars($contact['message']) ?></textarea>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12 action-buttons">
                                        <a href="contact_show.php?id=<?= $contact['id'] ?>" class="btn btn-secondary">
                                            <i class="fa fa-times"></i> Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i> Save Changes
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <?php include 'include/footer.php'; ?>
</div>

<?php include 'include/script.php'; ?>