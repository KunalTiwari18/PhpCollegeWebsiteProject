<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<main class="page faculty-page">
    <h2>Our Faculty</h2>
    <p>SIWS College is proud to have highly qualified and experienced faculty members dedicated to student success.</p>

    <div class="faculty-list">
        <?php
        $faculty_members = [
            ["img"=>"/siws-website/assets/images/faculty1.jpg","name"=>"Dr. A. Sharma","dept"=>"Principal, Department of Commerce"],
            ["img"=>"/siws-website/assets/images/faculty2.jpg","name"=>"Prof. S. Iyer","dept"=>"Head, Department of Physics"],
            ["img"=>"/siws-website/assets/images/faculty3.jpg","name"=>"Dr. R. Menon","dept"=>"Head, Department of Biotechnology"],
            ["img"=>"/siws-website/assets/images/faculty4.jpg","name"=>"Prof. K. Rao","dept"=>"Head, Department of Computer Science"],
            ["img"=>"/siws-website/assets/images/faculty5.jpg","name"=>"Dr. M. Desai","dept"=>"Head, Department of Mathematics"]
        ];

        foreach($faculty_members as $faculty): ?>
            <div class="faculty-member">
                <img src="<?php echo $faculty['img']; ?>" alt="<?php echo $faculty['name']; ?>">
                <h4><?php echo $faculty['name']; ?></h4>
                <p><?php echo $faculty['dept']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include('includes/footer.php'); ?>
