<?php include 'includes/header.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white text-center py-5">
    <h1>Contact Us</h1>
    <p>Get in touch with the Association of Muslim Schools Abuja Branch</p>
</section>

<!-- CONTACT FORM -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form id="contactForm" method="POST" action="contact_process.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="you@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Send Message</button>
                </form>

                <div id="formAlert" class="mt-3"></div>

            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>