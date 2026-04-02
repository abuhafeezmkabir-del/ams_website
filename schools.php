<?php
// Include database connection
include 'includes/db.php';
include 'includes/header.php';
?>

<!-- PAGE HEADER -->
<section class="bg-success text-white text-center py-5">
    <h1>Registered Member Schools</h1>
    <p>List of schools registered under the Association of Muslim Schools Abuja Branch</p>
</section>

<!-- SEARCH + FILTER -->
<div class="container my-3 d-flex justify-content-between align-items-center flex-wrap">
    <!-- Search -->
    <input type="text" id="schoolSearch" class="form-control me-2 mb-2" placeholder="Search for a school..." style="flex:1; min-width:200px;">

    <!-- Type Filter -->
    <select id="schoolTypeFilter" class="form-select mb-2" style="width:200px;">
        <option value="all">All Types</option>
        <option value="Islamiyya">Islamiyya</option>
        <option value="Primary">Primary</option>
        <option value="Secondary">Secondary</option>
    </select>
</div>

<!-- SCHOOLS LIST -->
<div class="container">
    <div class="row" id="schoolsContainer">
        <?php
        // Fetch schools from the database
        $query = "SELECT * FROM schools ORDER BY created_at DESC";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-md-4 school-card mb-4" data-type="<?php echo htmlspecialchars($row['category']); ?>">
                    <div class="card shadow-sm h-100 p-4">
                        <h5 class="fw-bold"><?php echo htmlspecialchars($row['school_name']); ?></h5>
                        <p class="mb-1"><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                        <p class="mb-0"><strong>Type:</strong> <?php echo htmlspecialchars($row['category']); ?></p>
                        <p class="mb-0"><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
                        <p class="mb-0"><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p class="text-center">No schools registered yet.</p>';
        }
        ?>
    </div>

    <!-- Load More button (optional for pagination) -->
    <div class="text-center my-4">
        <button id="loadMoreBtn" class="btn btn-success">Load More</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Page JS -->
<script src="js/schools.js"></script>