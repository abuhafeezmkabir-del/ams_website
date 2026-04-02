<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white text-center py-5">
    <h1>Upcoming & Past Events</h1>
</section>

<!-- EVENTS GRID -->
<section class="py-5">
    <div class="container">
        <div class="row g-4" id="eventsContainer">

            <?php
            // Example PHP loop for dynamic events (replace with DB query)
            $events = [
                [
                    'title' => 'Annual Teachers Workshop',
                    'date' => '12th April 2026',
                    'description' => 'A workshop to improve teaching standards across member schools.',
                    'image' => 'img/image5.jpg'
                ],
                [
                    'title' => 'Science & Math Competition',
                    'date' => '25th May 2026',
                    'description' => 'Inter-school competition for students in Science and Math subjects.',
                    'image' => 'img/image4.jpg'
                ],
                [
                    'title' => 'Leadership Conference',
                    'date' => '10th June 2026',
                    'description' => 'Conference for school administrators to share best practices.',
                    'image' => 'img/image5.jpg'
                ]
            ];

            foreach ($events as $event) :
            ?>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="<?= $event['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($event['title']) ?>">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($event['title']) ?></h5>
                        <p class="text-muted mb-2"><?= htmlspecialchars($event['date']) ?></p>
                        <p class="card-text"><?= htmlspecialchars($event['description']) ?></p>
                        <button class="btn btn-success mt-auto">View Details</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>