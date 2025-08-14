<?php
include 'include/header.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: contact-list.php");
    exit;
}

$stmt = $conn->prepare("SELECT id, name, email, phone, subject, message, created_at FROM contacts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$contact = $result->fetch_assoc();

if (!$contact) {
    header("Location: contact-list.php");
    exit;
}
?>

<style>
    .contact-details-card {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .contact-header {
        color: black;
        padding: 20px;
    }

    .contact-body {
        padding: 30px;
    }

    .detail-row {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .detail-row:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .detail-label {
        font-weight: 600;
        color: #6c757d;
        margin-bottom: 5px;
    }

    .detail-value {
        font-size: 1.1rem;
    }

    .message-content {
        white-space: pre-wrap;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        border-left: 4px solid #4e73df;
    }

    .action-buttons .btn {
        min-width: 100px;
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .contact-body {
            padding: 20px;
        }

        .action-buttons .btn {
            width: 100%;
            margin-bottom: 10px;
            margin-right: 0;
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
                    <div class="card contact-details-card">
                        <div class="contact-header">
                            <h4 class="mb-0">Contact Details</h4>
                            <div class="contact-header">
                                <h4 class="mb-0">Contact Details</h4>
                                <?php if (!empty($contact['created_at'])): ?>
                                    <p class="mb-0">Received:
                                        <?= date('M j, Y \a\t g:i a', strtotime($contact['created_at'])) ?>
                                    </p>
                                <?php else: ?>
                                    <p class="mb-0">Received: Date not available</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="contact-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-row">
                                        <div class="detail-label">ID</div>
                                        <div class="detail-value"><?= $contact['id'] ?></div>
                                    </div>

                                    <div class="detail-row">
                                        <div class="detail-label">Name</div>
                                        <div class="detail-value"><?= htmlspecialchars($contact['name']) ?></div>
                                    </div>

                                    <div class="detail-row">
                                        <div class="detail-label">Email</div>
                                        <div class="detail-value">
                                            <a href="mailto:<?= htmlspecialchars($contact['email']) ?>">
                                                <?= htmlspecialchars($contact['email']) ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="detail-row">
                                        <div class="detail-label">Phone</div>
                                        <div class="detail-value">
                                            <a href="tel:<?= htmlspecialchars($contact['phone']) ?>">
                                                <?= htmlspecialchars($contact['phone']) ?>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="detail-row">
                                        <div class="detail-label">Subject</div>
                                        <div class="detail-value"><?= htmlspecialchars($contact['subject']) ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="detail-row">
                                        <div class="detail-label">Message</div>
                                        <div class="message-content"><?= htmlspecialchars($contact['message']) ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 action-buttons">
                                    <a href="contact-list.php" class="btn btn-secondary">
                                        <i class="fa fa-arrow-left"></i> Back to List
                                    </a>
                                    <a href="contact_edit.php?id=<?= $contact['id'] ?>" class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <a href="contact_delete.php?id=<?= $contact['id'] ?>" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this contact?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </div>
                            </div>
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