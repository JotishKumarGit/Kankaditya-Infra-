<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kankaditya Infra Private Limited - Services Page</title>
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
            <li class="breadcrumb-item active" aria-current="page">Services </li>
        </ol>
    </nav>


       <!-- OUR SERVICES SECTION -->
    <section class="services-section py-5 bg-light" id="services">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="fw-bold text-success">Our Services</h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    At <strong>Kankaditya Infra Private Limited</strong>, we’re committed to promoting eco-friendly
                    agriculture,
                    sustainable growth, and quality-driven supply chains.
                    Our services are designed to empower farmers, distributors, and consumers alike.
                </p>
            </div>

            <!-- Service Boxes -->
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="100">
                    <div class="service-card text-center p-4 shadow-sm bg-white rounded h-100">
                        <div
                            class="icon-box bg-success bg-opacity-10 text-success fs-1 rounded-circle mx-auto mb-3 p-3">
                            <i class="bi bi-tree"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-2">Organic Farming Support</h4>
                        <p class="text-muted">
                            We promote sustainable agriculture by providing high-quality organic fertilizers like
                            Vermicompost
                            that enhance soil fertility and crop health naturally.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="200">
                    <div class="service-card text-center p-4 shadow-sm bg-white rounded h-100">
                        <div
                            class="icon-box bg-success bg-opacity-10 text-success fs-1 rounded-circle mx-auto mb-3 p-3">
                            <i class="bi bi-basket2-fill"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-2">Agro Product Supply</h4>
                        <p class="text-muted">
                            We supply premium agricultural products including Coriander Seeds, Makhana, Kaju, and
                            Dryfruits,
                            ensuring freshness and nutritional value in every delivery.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="300">
                    <div class="service-card text-center p-4 shadow-sm bg-white rounded h-100">
                        <div
                            class="icon-box bg-success bg-opacity-10 text-success fs-1 rounded-circle mx-auto mb-3 p-3">
                            <i class="bi bi-recycle"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-2">Sustainability Consulting</h4>
                        <p class="text-muted">
                            We guide communities and businesses toward greener solutions — from organic waste recycling
                            to
                            eco-conscious farming techniques.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="400">
                    <div class="service-card text-center p-4 shadow-sm bg-white rounded h-100">
                        <div
                            class="icon-box bg-success bg-opacity-10 text-success fs-1 rounded-circle mx-auto mb-3 p-3">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-2">Export & Distribution</h4>
                        <p class="text-muted">
                            With a robust logistics network, we export and distribute our products globally,
                            ensuring timely delivery and top-notch quality assurance.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="500">
                    <div class="service-card text-center p-4 shadow-sm bg-white rounded h-100">
                        <div
                            class="icon-box bg-success bg-opacity-10 text-success fs-1 rounded-circle mx-auto mb-3 p-3">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-2">Farmer Training Programs</h4>
                        <p class="text-muted">
                            We organize workshops and awareness programs to educate farmers
                            about organic farming methods and sustainable practices.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="600">
                    <div class="service-card text-center p-4 shadow-sm bg-white rounded h-100">
                        <div
                            class="icon-box bg-success bg-opacity-10 text-success fs-1 rounded-circle mx-auto mb-3 p-3">
                            <i class="bi bi-droplet-half"></i>
                        </div>
                        <h4 class="fw-bold text-success mb-2">Quality Testing & Assurance</h4>
                        <p class="text-muted">
                            Each of our products undergoes strict quality testing to maintain purity, taste, and safety
                            standards —
                            ensuring complete customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="contact.php" class="btn btn-success px-5 py-2 rounded-pill fw-semibold shadow-sm">
                    Contact Us for Services
                </a>
            </div>
        </div>
    </section>

        <!--  FAQ SECTION -->
    <section id="faq" class="faq-section py-5 bg-light">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="fw-bold text-success">Frequently Asked Questions</h1>
                <p class="text-muted mx-auto" style="max-width: 700px;">
                    Find answers to the most common questions about our products, services, and sustainable farming
                    practices at
                    <strong>Kankaditya Infra Private Limited</strong>.
                </p>
            </div>

            <!-- FAQ Accordion -->
            <div class="accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            1. What is Vermicompost and how is it beneficial?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Vermicompost is an organic fertilizer produced using earthworms. It improves soil fertility,
                            enhances
                            plant growth, and increases crop yield naturally — without harmful chemicals.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            2. Are your products 100% organic and chemical-free?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Yes, all our agricultural products — including Vermicompost, Coriander Seeds, and Dryfruits
                            — are
                            grown and processed naturally without synthetic fertilizers or pesticides.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            3. Do you provide bulk or wholesale supply?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Absolutely! We cater to both retail and bulk orders across India and abroad with proper
                            packaging
                            and timely delivery for every product.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            4. What regions do you serve or deliver to?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            We deliver across India and also manage exports to several international markets through our
                            trusted
                            distribution partners.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                            aria-controls="collapseFive">
                            5. How is Makhana from your company different?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Our Makhana is sourced directly from organic farmers, ensuring freshness, crispness, and
                            high nutritional
                            value — rich in protein and low in calories.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix">
                            6. Do you offer customized packaging for bulk buyers?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Yes, we provide flexible and eco-friendly packaging options for bulk and export clients to
                            meet their
                            branding and logistics requirements.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="700">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven">
                            7. How do I place an order or enquiry?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            You can place an order or enquiry directly through our website’s contact page or by calling
                            us at
                            <a href="tel:+917000377300" class="text-success text-decoration-none">+91 7000377300</a>.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="800">
                    <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                            aria-controls="collapseEight">
                            8. Are your Dryfruits sourced from certified farms?
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Yes, all our Dryfruits — including Cashews (Kaju) — are procured from certified farms that
                            follow
                            strict quality and safety standards.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 9 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="900">
                    <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                            aria-controls="collapseNine">
                            9. What makes your Coriander Seeds high quality?
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Our Coriander Seeds are sun-dried, naturally processed, and sorted to preserve their aroma,
                            oil content, and freshness — perfect for both culinary and medicinal use.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 10 -->
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="1000">
                    <h2 class="accordion-header" id="headingTen">
                        <button class="accordion-button collapsed text-success fw-semibold" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                            aria-controls="collapseTen">
                            10. Why choose Kankaditya Infra Private Limited?
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Because we combine agricultural excellence, sustainability, and integrity.
                            Our mission is to promote natural farming and deliver the highest quality products globally.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- footer -->
    <?php include('footer.php') ?>