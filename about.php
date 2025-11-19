<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kankaditya Infra Private Limited - About Us Page</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<style>
    /* Background setup */
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        background: url('https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
        color: #fff;
    }

    /* Breadcrumb container */
    nav[aria-label="breadcrumb"] {
        background: rgba(255, 255, 255, 0.15);
        /* transparent white */
        backdrop-filter: blur(10px);
        padding: 15px 25px;
        border-radius: 10px;
        width: fit-content;
        margin: 30px auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Breadcrumb items */
    .breadcrumb {
        margin: 0;
        background: transparent;
    }

    .breadcrumb-item a {
        color: #00b050;
        /* green color */
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: #00913a;
        /* darker green on hover */
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #fff;
        font-weight: 600;
    }

    /* Optional: make separators white for better contrast */
    .breadcrumb-item+.breadcrumb-item::before {
        color: #fff;
    }
</style>

<body>

    <!-- header -->

    <?php include('header.php') ?>

    <!-- bread crums -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>

    <!--  ABOUT US SECTION -->
    <section class="about-section py-5 bg-light" id="about">
        <div class="container">
            <!-- Heading -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="fw-bold text-success">About Us</h1>
                <p class="text-dark mx-auto" style="max-width: 700px;">
                    Welcome to <strong>Kankaditya Infra Private Limited</strong> — a trusted name in natural and organic
                    products.
                    We believe in building a sustainable future through eco-friendly solutions and quality agricultural
                    products that nurture both people and the planet.
                </p>
            </div>

            <div class="row align-items-center g-5">
                <!-- Image Side -->
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/Coriander.jpg" alt="About Kankaditya Infra"
                        class="img-fluid rounded shadow-lg">
                </div>

                <!-- Content Side -->
                <div class="col-lg-6" data-aos="fade-left">
                    <h3 class="text-success mb-3 ">Who We Are</h3>
                    <p class="text-dark">
                        Founded with a vision to promote sustainable living,
                        <strong>Kankaditya Infra Private Limited</strong> specializes in producing and supplying
                        premium quality <em>Organic Manure, Coriander Seeds, Kaju, Makhana, and Dryfruits.</em>
                    </p>
                    <p class="text-dark">
                        Our products are carefully sourced and processed to maintain their natural purity,
                        offering nourishment, growth, and long-term environmental balance.
                    </p>

                    <div class="mt-4">
                        <a href="contact.php" class="btn btn-success rounded-pill px-4">Get in Touch</a>
                    </div>
                </div>
            </div>

            <!-- Mission Vision Values -->
            <div class="row text-center mt-5 g-4" data-aos="fade-up">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4">
                        <div class="text-success fs-2 mb-3"><i class="bi bi-bullseye"></i></div>
                        <h4 class="text-success">Our Mission</h4>
                        <p class="text-muted">
                            To deliver sustainable, organic, and eco-friendly products that
                            enrich soil health, improve human wellbeing, and promote green living.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4">
                        <div class="text-success fs-2 mb-3"><i class="bi bi-eye"></i></div>
                        <h4 class="text-success">Our Vision</h4>
                        <p class="text-muted">
                            To become a globally recognized brand in organic agriculture and natural products
                            by ensuring quality, sustainability, and customer satisfaction.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4">
                        <div class="text-success fs-2 mb-3"><i class="bi bi-heart-fill"></i></div>
                        <h4 class="text-success">Our Values</h4>
                        <p class="text-muted">
                            Integrity, Sustainability, Quality, and Innovation —
                            the four pillars that guide our every step toward a greener tomorrow.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>