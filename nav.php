<nav class="main-nav">
    <div class="nav-container">
        <a href="/siws-website/index.php" class="logo">
            <img src="/siws-website/assets/images/logo.png" alt="SIWS College Logo">
            SIWS College
        </a>

        <div class="nav-toggle" id="nav-toggle">&#9776;</div>

        <ul class="nav-menu" id="nav-menu">
            <li><a href="/siws-website/index.php" class="<?php echo ($page=='home') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="/siws-website/about.php" class="<?php echo ($page=='about') ? 'active' : ''; ?>">About Us</a></li>
            <li><a href="/siws-website/academics.php" class="<?php echo ($page=='academics') ? 'active' : ''; ?>">Academics</a></li>
            <li><a href="/siws-website/admissions.php" class="<?php echo ($page=='admissions') ? 'active' : ''; ?>">Admissions</a></li>
            <li><a href="/siws-website/departments.php" class="<?php echo ($page=='departments') ? 'active' : ''; ?>">Departments</a></li>
            <li><a href="/siws-website/faculty.php" class="<?php echo ($page=='faculty') ? 'active' : ''; ?>">Faculty</a></li>
            <li><a href="/siws-website/gallery.php" class="<?php echo ($page=='gallery') ? 'active' : ''; ?>">Gallery</a></li>
            <li><a href="/siws-website/contact.php" class="<?php echo ($page=='contact') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
const toggle = document.getElementById('nav-toggle');
const menu = document.getElementById('nav-menu');

toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
});
</script>
