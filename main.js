/* ====== Mobile Navigation Toggle ====== */
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

/* ====== Gallery Lightbox ====== */
const galleryItems = document.querySelectorAll('.gallery-item img');

galleryItems.forEach(img => {
    img.addEventListener('click', () => {
        // Create lightbox overlay
        const lightbox = document.createElement('div');
        lightbox.classList.add('lightbox-overlay');

        // Create lightbox image container
        const lightboxContent = document.createElement('div');
        lightboxContent.classList.add('lightbox-content');

        const lightboxImg = document.createElement('img');
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;

        // Close button
        const closeBtn = document.createElement('span');
        closeBtn.classList.add('lightbox-close');
        closeBtn.innerHTML = '&times;';

        // Append elements
        lightboxContent.appendChild(lightboxImg);
        lightboxContent.appendChild(closeBtn);
        lightbox.appendChild(lightboxContent);
        document.body.appendChild(lightbox);

        // Close lightbox on click
        closeBtn.addEventListener('click', () => {
            document.body.removeChild(lightbox);
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                document.body.removeChild(lightbox);
            }
        });
    });
});

/* ====== Notices Automatic Rotation ====== */
const noticeCards = document.querySelectorAll('.notice-cards .notice-card');
let noticeIndex = 0;

function showNextNotice() {
    noticeCards.forEach((card, idx) => {
        card.style.display = idx === noticeIndex ? 'block' : 'none';
    });
    noticeIndex = (noticeIndex + 1) % noticeCards.length;
}

// Initialize display
showNextNotice();

// Rotate every 5 seconds (SIWS style)
setInterval(showNextNotice, 5000);
