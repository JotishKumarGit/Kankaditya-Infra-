<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kankaditya Infra Private Limited - Contact Us Page</title>
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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>

    
    <!--  CONTACT US SECTION -->
    <section id="contact" class="contact-section py-5 bg-light">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="fw-bold text-success">Get in Touch</h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    We’d love to hear from you! Whether you have questions about our products, services, or want to
                    partner with us,
                    feel free to reach out. We’re here to help you grow naturally.
                </p>
            </div>

            <!-- Contact Row -->
            <div class="row g-4 align-items-center">
                <!-- Left: Google Map -->
                <div class="col-lg-6 col-md-12" data-aos="fade-right">
                    <div class="map-container shadow-sm rounded overflow-hidden">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.869429464492!2d77.29078037442154!3d24.62818475451445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397a5be6a14177c5%3A0xb9260c995041cad0!2sOmkar%20College%2C%20Kalamkar%20Colony%2C%20Guna!5e0!3m2!1sen!2sin!4v1762863497816!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="col-lg-6 col-md-12" data-aos="fade-left">
                    <div class="contact-form bg-white shadow-sm p-4 rounded">
                        <h4 class="fw-bold text-success mb-3">Send Us a Message</h4>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-semibold">Your Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Type your message..."
                                    required></textarea>
                            </div>
                            <button type="button" id="whatsappBtn"
                                class="btn btn-success w-100 py-2 rounded-pill fw-semibold shadow-sm">
                                <i class="bi bi-whatsapp me-2"></i> Send via WhatsApp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include('footer.php') ?>