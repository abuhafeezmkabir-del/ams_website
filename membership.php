<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white text-center py-5">
    <h1 class="fw-bold">Membership Registration</h1>
    <p>Join the Association of Muslim Schools Abuja Branch and become part of a network of schools committed to academic excellence.</p>
</section>

<!-- BENEFITS SECTION -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Benefits of Membership</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100 p-4 text-center">
                    <h5 class="fw-bold">Networking</h5>
                    <p class="mt-2">Connect with other schools, administrators, and educators across Abuja.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 p-4 text-center">
                    <h5 class="fw-bold">Training & Workshops</h5>
                    <p class="mt-2">Access professional development programs and workshops.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100 p-4 text-center">
                    <h5 class="fw-bold">Events & Recognition</h5>
                    <p class="mt-2">Participate in competitions, conferences, and award ceremonies.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- REGISTRATION FORM -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h2 class="fw-bold mb-4 text-center">Membership Registration</h2>

                <form method="POST" action="process_membership.php">

                    <div class="mb-3">
                        <label class="form-label">School / Organization Name</label>
                        <input type="text" name="schoolName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact Person</label>
                        <input type="text" name="contactName" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Membership Category</label>
                        <select name="category" class="form-select" required>
                            <option value="">Select Category</option>
                            <option value="Primary School">Primary School</option>
                            <option value="Secondary School">Secondary School</option>
                            <option value="Islamic School (Madrasa)">Islamic School (Madrasa)</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Submit Registration</button>

                </form>

            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>