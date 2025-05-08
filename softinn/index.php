<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMU Malaysia - Multimedia University</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navigation Bar - Blue background -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/mmu2.png" alt="MMU Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About MMU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-section">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Blue background -->
    <div class="bg-primary text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Multimedia University Malaysia</h1>
            <p class="lead">Pioneering the Digital Future</p>
            <a href="about.php" class="btn btn-danger btn-lg mt-3">About MMU</a>
        </div>
    </div>

    <!-- Faculties Section -->
    <div class="container my-5">
        <h2 class="text-center mb-5 text-primary">Our Faculties</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-primary">
                    <img src="images/FET.jpg" class="card-img-top" alt="FET">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Faculty of Engineering & Technology (FET)</h5>
                        <p class="card-text">Offering cutting-edge engineering programmes with industry collaboration and hands-on learning experiences.</p>
                        <a href="fet.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-danger">
                    <img src="images/FIST.jpg" class="card-img-top" alt="FIST">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Faculty of Information Science & Technology (FIST)</h5>
                        <p class="card-text">Leading in ICT education with innovative programmes that meet the demands of the digital economy.</p>
                        <a href="fist.php" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-primary">
                    <img src="images/FOB.jpg" class="card-img-top" alt="FOB">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Faculty of Business (FOB)</h5>
                        <p class="card-text">Developing business leaders through comprehensive programmes with strong industry linkages.</p>
                        <a href="fob.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Facts Section - Light red background -->
    <div class="bg-danger bg-opacity-10 py-5">
        <div class="container">
            <h2 class="text-center mb-5 text-danger">MMU at a Glance</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="display-4 text-primary">25+</div>
                    <p class="lead">Years of Excellence</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="display-4 text-danger">20,000+</div>
                    <p class="lead">Students</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="display-4 text-primary">100+</div>
                    <p class="lead">Programmes</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="display-4 text-danger">50+</div>
                    <p class="lead">Nationalities</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="container my-5" id="contact-section">
        <h2 class="mb-4 text-center text-primary">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">Our Campuses</h4>
                <div class="mb-4">
                    <h5 class="text-danger">Cyberjaya Campus</h5>
                    <p>Multimedia University, Jalan Multimedia, 63100 Cyberjaya, Selangor Darul Ehsan, Malaysia</p>
                    <p><i class="bi bi-telephone text-primary"></i> +603-8312 5083</p>
                </div>
                <div class="mb-4">
                    <h5 class="text-danger">Melaka Campus</h5>
                    <p>Jalan Ayer Keroh Lama, 75450 Bukit Beruang, Melaka, Malaysia</p>
                    <p><i class="bi bi-telephone text-primary"></i> +606-252 3253</p>
                </div>
                <div class="mb-4">
                    <h5 class="text-danger">Email</h5>
                    <p><i class="bi bi-envelope text-primary"></i> connect@mmu.edu.my</p>
                </div>
            </div>
            <div class="col-md-6">
                <form id="contactForm" action="submit_form.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label text-primary">Name</label>
                        <input type="text" class="form-control border-primary" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-primary">Email</label>
                        <input type="email" class="form-control border-primary" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label text-primary">Subject</label>
                        <select class="form-select border-primary" id="subject" name="subject">
                            <option value="Admission">Admission Inquiry</option>
                            <option value="Programme">Programme Information</option>
                            <option value="Campus">Campus Visit</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-primary">Message</label>
                        <textarea class="form-control border-primary" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal - Blue header -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalLabel">Confirm Submission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to submit this inquiry to MMU?</p>
                    <div class="mb-3">
                        <strong class="text-primary">Name:</strong> <span id="modalName"></span>
                    </div>
                    <div class="mb-3">
                        <strong class="text-primary">Email:</strong> <span id="modalEmail"></span>
                    </div>
                    <div class="mb-3">
                        <strong class="text-primary">Subject:</strong> <span id="modalSubject"></span>
                    </div>
                    <div class="mb-3">
                        <strong class="text-primary">Message:</strong> <span id="modalMessage"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancelBtn">No, Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmBtn">Yes, Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal - Blue header -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Submission Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you for contacting Multimedia University!</p>
                    <p>Our team will get back to you within 2-3 working days.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer - Blue background -->
    <footer class="bg-primary text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Multimedia University Malaysia</h5>
                    <p>© 2025 All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="https://www.facebook.com/mmumalaysia/" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="https://www.linkedin.com/school/mmumalaysia/posts/?feedView=all" class="text-white me-3"><i class="bi bi-linkedin fs-4"></i></a>
                    <a href="https://www.youtube.com/user/mmumalaysiatv" class="text-white me-3"><i class="bi bi-youtube fs-4"></i></a>
                    <a href="https://x.com/mmumalaysia" class="text-white"><i class="bi bi-twitter fs-4"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            let formData;

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                // Populate confirmation modal
                document.getElementById('modalName').textContent = name;
                document.getElementById('modalEmail').textContent = email;
                document.getElementById('modalSubject').textContent = subject;
                document.getElementById('modalMessage').textContent = message;
                
                // Store form data for later submission
                formData = new FormData(contactForm);
                
                // Show confirmation modal
                confirmationModal.show();
            });

            // Handle confirmation
            document.getElementById('confirmBtn').addEventListener('click', function() {
                // Submit the form data via AJAX
                fetch('submit_form.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    console.log('Success:', data);
                    confirmationModal.hide();
                    successModal.show();
                    contactForm.reset();
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('There was an error submitting the form.');
                });
            });

            // Handle cancellation
            document.getElementById('cancelBtn').addEventListener('click', function() {
                confirmationModal.hide();
            });
        });
    </script>
</body>
</html>