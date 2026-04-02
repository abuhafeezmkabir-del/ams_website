<?php
include 'includes/db.php';

// Get POST data
$search = isset($_POST['search']) ? mysqli_real_escape_string($conn, $_POST['search']) : '';
$type = isset($_POST['type']) ? mysqli_real_escape_string($conn, $_POST['type']) : 'all';
$offset = isset($_POST['offset']) ? (int)$_POST['offset'] : 0;
$limit = 6; // Number of schools per batch

// Build SQL query
$sql = "SELECT * FROM schools WHERE 1";

if ($search !== '') {
    $sql .= " AND school_name LIKE '%$search%'";
}

if ($type !== 'all') {
    $sql .= " AND category = '$type'";
}

$sql .= " ORDER BY created_at DESC LIMIT $offset, $limit";

$result = mysqli_query($conn, $sql);

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
    if ($offset === 0) {
        echo '<p class="text-center">No schools found.</p>';
    }
}
?>