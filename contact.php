<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<main class="page contact-page">
    <div class="container">
        <h2>Contact Us</h2>
        <p>We’d love to hear from you! Reach out to us using the details below:</p>

        <div class="contact-grid">
            <div class="contact-card">
                <h3>Address</h3>
                <p>South Indian Welfare Society College<br>Wadala, Mumbai - 400031, Maharashtra</p>
            </div>
            <div class="contact-card">
                <h3>Phone</h3>
                <p>+91-22-2414-0000</p>
            </div>
            <div class="contact-card">
                <h3>Email</h3>
                <p>info@siwscollege.edu.in</p>
            </div>
        </div>

        <h3>Send Us a Message</h3>
        <form class="contact-form" method="post" action="contact.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</main>

<?php include('includes/footer.php'); ?>
