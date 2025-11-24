<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<main class="home-page">

<!-- Hero Slider -->
<section class="hero-slider">
    <div class="slide active">
        <img src="/siws-website/assets/images/hero1.jpg" alt="Campus View">
        <div class="hero-text">
            <h2>Welcome to SIWS College</h2>
            <p>Vidya Dhanam Sarva Dhanat Pradhanam</p>
        </div>
    </div>
    <div class="slide">
        <img src="/siws-website/assets/images/hero2.jpg" alt="Students">
        <div class="hero-text">
            <h2>Excellence in Education</h2>
            <p>Empowering students for a bright future</p>
        </div>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</section>

<!-- Notices Section -->
<section class="notices my-5">
    <h2>Latest Notices</h2>
    <div class="notice-grid">
        <?php
        $notices = json_decode(file_get_contents("data/notices.json"), true);
        $notice_count = 0;
        foreach ($notices as $notice) {
            if($notice_count++ == 4) break; // Show only 4 notices
            echo "<div class='notice-card'>";
            echo "<h4>" . htmlspecialchars($notice['title']) . "</h4>";
            echo "<small>" . date('d M Y', strtotime($notice['date'])) . "</small>";
            if(!empty($notice['content'])){
                echo "<p>" . htmlspecialchars($notice['content']) . "</p>";
            }
            if(!empty($notice['attachment'])){
                echo "<a href='" . htmlspecialchars($notice['attachment']) . "' target='_blank' class='download-btn'>Download</a>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <div class="text-right mt-3">
        <a href="notices.php" class="view-all">View All Notices</a>
    </div>
</section>

<!-- Events Section -->
<section class="events my-5">
    <h2>Upcoming Events</h2>
    <div class="event-grid">
        <?php
        $events = json_decode(file_get_contents("data/events.json"), true);
        $event_count = 0;
        foreach ($events as $event) {
            if($event_count++ == 4) break; // Show only 4 events
            echo "<div class='event-card'>";
            echo "<h4>" . htmlspecialchars($event['title']) . "</h4>";
            echo "<small>" . date('d M Y', strtotime($event['date'])) . "</small>";
            echo "</div>";
        }
        ?>
    </div>
    <div class="text-right mt-3">
        <a href="events.php" class="view-all">View All Events</a>
    </div>
</section>

</main>

<?php include('includes/footer.php'); ?>

<!-- Hero Slider JS -->
<script>
let slideIndex = 0;
const slides = document.querySelectorAll('.hero-slider .slide');
const prevBtn = document.querySelector('.hero-slider .prev');
const nextBtn = document.querySelector('.hero-slider .next');

function showSlide(index){
    slides.forEach((slide,i) => slide.classList.toggle('active', i === index));
}
function nextSlide(){
    slideIndex = (slideIndex + 1) % slides.length;
    showSlide(slideIndex);
}
function prevSlide(){
    slideIndex = (slideIndex - 1 + slides.length) % slides.length;
    showSlide(slideIndex);
}
nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);
setInterval(nextSlide, 5000); // Auto slide every 5 seconds
</script>
