<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIST - Multimedia University</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About MMU</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Faculty Hero Section - Red background -->
    <div class="bg-danger text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Faculty of Information Science & Technology</h1>
            <p class="lead">Leading the Digital Revolution</p>
        </div>
    </div>

    <!-- Faculty Overview -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-danger mb-4">About FIST</h2>
                <p>The Faculty of Information Science & Technology (FIST) is MMU's flagship faculty, renowned for its excellence in ICT education. We offer cutting-edge programmes that prepare students for careers in the rapidly evolving digital landscape.</p>
                <p>With strong industry partnerships and a curriculum aligned with current technological trends, FIST graduates are highly sought after by employers worldwide.</p>
            </div>
            <div class="col-md-6">
                <img src="images/IT.jpg" alt="FIST Building" class="img-fluid rounded border border-danger">
            </div>
        </div>
    </div>

    <!-- Programmes Offered -->
    <div class="bg-danger bg-opacity-10 py-5">
        <div class="container">
            <h2 class="text-center mb-5 text-danger">Our Programmes</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-danger">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Bachelor of Computer Science (Hons)</h5>
                            <p class="card-text">Specializations in Software Engineering, Data Science, and Cybersecurity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-danger">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Bachelor of Information Technology (Hons)</h5>
                            <p class="card-text">Focus on networking, cloud computing, and enterprise systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-danger">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Bachelor of Artificial Intelligence (Hons)</h5>
                            <p class="card-text">Comprehensive AI education covering machine learning and neural networks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Research Areas -->
    <div class="container my-5">
        <h2 class="text-center mb-5 text-danger">Research Focus Areas</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Cybersecurity</h5>
                        <p class="card-text">Advanced research in network security and cryptography.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-danger">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Data Science</h5>
                        <p class="card-text">Big data analytics and business intelligence solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Cloud Computing</h5>
                        <p class="card-text">Distributed systems and cloud-native applications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-danger">
                    <div class="card-body">
                        <h5 class="card-title text-danger">Blockchain</h5>
                        <p class="card-text">Decentralized applications and smart contract development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer - Blue background -->
    <footer class="bg-primary text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Faculty of Information Science & Technology</h5>
                    <p>© 2025 Multimedia University Malaysia. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="https://www.facebook.com/mmumalaysia/" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="https://www.linkedin.com/school/mmumalaysia/" class="text-white me-3"><i class="bi bi-linkedin fs-4"></i></a>
                    <a href="https://www.youtube.com/user/mmumalaysiatv" class="text-white me-3"><i class="bi bi-youtube fs-4"></i></a>
                    <a href="https://x.com/mmumalaysia" class="text-white"><i class="bi bi-twitter fs-4"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>