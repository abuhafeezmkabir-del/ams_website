<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white text-center py-5">
    <h1 class="fw-bold">Gallery</h1>
    <p>Photos from workshops, competitions, conferences, and school activities</p>
</section>

<!-- IMAGE GRID -->
<section class="py-5">
    <div class="container">
        <div class="row g-3" id="galleryContainer">

            <?php
            // Example: Dynamic images (replace with DB query)
            $images = [
                ['src' => 'img/image2.jpg', 'alt' => 'Event Image 1'],
                ['src' => 'img/image1.jpg', 'alt' => 'Event Image 2'],
                ['src' => 'img/image4.jpg', 'alt' => 'Event Image 3'],
                ['src' => 'img/image5.jpg', 'alt' => 'Event Image 4']
            ];

            foreach ($images as $image) :
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="gallery-card">
                    <img src="<?= $image['src'] ?>" alt="<?= htmlspecialchars($image['alt']) ?>" class="img-fluid rounded shadow-sm">
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>