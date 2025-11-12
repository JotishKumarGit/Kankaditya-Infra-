<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kankaditya Infra Private Limited - Blog Page</title>
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
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </nav>

    <!--  BLOG SECTION -->
    <section id="blog" class="blog-section py-5 bg-white">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="fw-bold text-success">Latest from Our Blog</h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    Stay updated with the latest news, tips, and insights on organic farming, sustainability, and
                    agricultural innovation from
                    <strong>Kankaditya Infra Private Limited</strong>.
                </p>
            </div>

            <!-- Blog Cards -->
            <div class="row g-4">
                <!-- Blog 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card shadow-sm rounded overflow-hidden h-100">
                        <img src="assets/img/Vermicompost.jpg" class="img-fluid blog-img" alt="Vermicompost">
                        <div class="p-4">
                            <h5 class="text-success fw-bold mb-2">The Power of Vermicompost: Nature’s Best Fertilizer
                            </h5>
                            <p class="text-muted small mb-3">
                                Discover how vermicompost enhances soil fertility, promotes plant growth, and supports
                                sustainable farming practices naturally.
                            </p>
                            <a href="blog.php" class="btn btn-outline-success btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card shadow-sm rounded overflow-hidden h-100">
                        <img src="assets/img/Seeds.jpg" class="img-fluid blog-img" alt="Coriander Seeds">
                        <div class="p-4">
                            <h5 class="text-success fw-bold mb-2">Coriander Seeds: The Unsung Hero of Organic Spices
                            </h5>
                            <p class="text-muted small mb-3">
                                Learn why our naturally grown coriander seeds stand out for their aroma, oil content,
                                and health benefits.
                            </p>
                            <a href="blog.php" class="btn btn-outline-success btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-card shadow-sm rounded overflow-hidden h-100">
                        <img src="assets/img/Makhana.jpg" class="img-fluid blog-img" alt="Makhana">
                        <div class="p-4">
                            <h5 class="text-success fw-bold mb-2">Makhana: The Superfood for a Healthy Lifestyle</h5>
                            <p class="text-muted small mb-3">
                                From Bihar’s ponds to your kitchen, Makhana offers a protein-rich, low-calorie snack
                                that supports fitness and wellness.
                            </p>
                            <a href="blog.php" class="btn btn-outline-success btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="blog-card shadow-sm rounded overflow-hidden h-100">
                        <img src="assets/img/Cashew.jpg" class="img-fluid blog-img" alt="Kaju Cashew">
                        <div class="p-4">
                            <h5 class="text-success fw-bold mb-2">Kaju: Rich in Taste, Rich in Health</h5>
                            <p class="text-muted small mb-3">
                                Explore how our organically sourced cashews (Kaju) are packed with nutrients and
                                produced through sustainable farming.
                            </p>
                            <a href="blog.php" class="btn btn-outline-success btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="blog-card shadow-sm rounded overflow-hidden h-100">
                        <img src="assets/img/Dryfruits.webp" class="img-fluid blog-img" alt="Dryfruits">
                        <div class="p-4">
                            <h5 class="text-success fw-bold mb-2">Why Choose Organic Dryfruits?</h5>
                            <p class="text-muted small mb-3">
                                Organic dryfruits are not just tastier — they’re safer, richer in nutrients, and
                                environmentally friendly. Learn more here.
                            </p>
                            <a href="blog.php" class="btn btn-outline-success btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 6 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="blog-card shadow-sm rounded overflow-hidden h-100">
                        <img src="assets/img/baner_2.jpg" class="img-fluid blog-img" alt="Sustainability">
                        <div class="p-4">
                            <h5 class="text-success fw-bold mb-2">Building a Sustainable Future with Organic Farming
                            </h5>
                            <p class="text-muted small mb-3">
                                Kankaditya Infra Private Limited is on a mission to build a greener tomorrow through
                                organic growth and sustainable solutions.
                            </p>
                            <a href="blog.php" class="btn btn-outline-success btn-sm rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="blog.php" class="btn btn-success px-5 py-2 rounded-pill fw-semibold shadow-sm">
                    View All Blog Posts
                </a>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>