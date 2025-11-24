<?php 
$page = 'events'; 
include 'includes/header.php'; 
include 'includes/nav.php'; 

$events = json_decode(file_get_contents("data/events.json"), true);
?>

<main class="page events-page">
    <section class="events-all my-5">
        <div class="container">
            <h2>Upcoming Events</h2>
            <?php if (empty($events)): ?>
                <p>No upcoming events at the moment.</p>
            <?php else: ?>
                <div class="event-grid">
                <?php foreach ($events as $event): ?>
                    <div class="event-card">
                        <?php if(!empty($event['image'])): ?>
                            <img src="<?php echo $event['image']; ?>" alt="<?php echo htmlspecialchars($event['title']); ?>">
                        <?php endif; ?>
                        <div class="event-body">
                            <h4><?php echo htmlspecialchars($event['title']); ?></h4>
                            <small><?php echo date('d M Y', strtotime($event['date'])); ?></small>
                            <?php if(!empty($event['description'])): ?>
                                <p><?php echo nl2br(htmlspecialchars($event['description'])); ?></p>
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
