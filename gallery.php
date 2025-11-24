<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<main class="page gallery-page">
    <h2>Gallery</h2>
    <p>Explore glimpses of our campus, events, and student activities.</p>

    <div class="gallery">
        <?php
        $gallery_images = [
            ["src" => "/siws-website/assets/images/gallery1.jpg", "caption" => "Campus View"],
            ["src" => "/siws-website/assets/images/gallery2.jpg", "caption" => "Annual Event"],
            ["src" => "/siws-website/assets/images/gallery3.jpg", "caption" => "Seminar"],
            ["src" => "/siws-website/assets/images/gallery4.jpg", "caption" => "Workshop"],
            ["src" => "/siws-website/assets/images/gallery5.jpg", "caption" => "Cultural Fest"],
        ];

        foreach($gallery_images as $img): ?>
            <div class="gallery-item" onclick="openLightbox('<?php echo $img['src']; ?>', '<?php echo $img['caption']; ?>')">
                <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['caption']; ?>">
                <div class="caption"><?php echo $img['caption']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <span class="close" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img" src="" alt="">
    <div id="lightbox-caption"></div>
</div>

<?php include('includes/footer.php'); ?>

<!-- Gallery JS -->
<script>
function openLightbox(src, caption) {
    document.getElementById('lightbox').style.display = 'flex';
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-caption').innerText = caption;
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}
</script>
