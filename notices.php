<?php
$page = 'notices';
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/functions.php'; 

$all_notices = load_notices();
?>

<main class="page notices-page">
    <section class="notices-all my-5">
        <div class="container">
            <h2>All Notices</h2>

            <?php if (empty($all_notices)): ?>
                <p>No notices available.</p>
            <?php else: ?>
                <div class="notice-grid">
                    <?php foreach ($all_notices as $notice): ?>
                        <div class="notice-card">
                            <div class="notice-header">
                                <h4><?php echo htmlspecialchars($notice['title']); ?></h4>
                                <span class="notice-date"><?php echo human_date($notice['date']); ?></span>
                            </div>
                            <div class="notice-body">
                                <?php if(!empty($notice['content'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($notice['content'])); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($notice['attachment'])): ?>
                                    <a href="<?php echo htmlspecialchars($notice['attachment']); ?>" class="download-btn" target="_blank">
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
