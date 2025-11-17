<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kankaditya Infra Private Limited - Biomass Fuel Pallets</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: #00913a;
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #fff;
        font-weight: 600;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        color: #fff;
    }
</style>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- breadcrumbs -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Biomass Fuel Pallets</li>
            </ol>
        </nav>
    </div>

    <!-- product details -->
    <section class="container py-5">
        <div class="bg-light rounded-4 shadow p-4 p-md-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="row align-items-center">

                <!-- Left Side: Product Image -->
                <div class="col-md-6 mb-4 mb-md-0 text-center">
                    <img src="assets/img/biomass_fuel_pallets.jpeg" alt="Biomass Fuel Pallets" height="auto" width="100%" class="img-fluid rounded shadow-sm border border-success">
                </div>

                <!-- Right Side: Product Details -->
                <div class="col-md-6">
                    <h2 class="fw-bold text-success mb-3">Biomass Fuel Pallets</h2>
                    <p class="lead text-dark">
                        Our 10 mm Biomass Fuel Pallets are high-quality, compacted wood pellets designed for efficient energy generation.
                        Made from sustainably sourced wood, these highly flammable pellets provide a clean and reliable source of heat.
                    </p>

                    <hr class="border-success opacity-75">

                    <h5 class="fw-semibold text-success mb-3">Key Features:</h5>
                    <ul class="list-unstyled text-dark">
                        <li class="mb-2">Diameter: 10 mm – uniform size for optimal combustion</li>
                        <li class="mb-2">Highly flammable for quick ignition and high heat output</li>
                        <li class="mb-2">Low moisture content for efficient burning</li>
                        <li class="mb-2">Eco-friendly alternative to fossil fuels</li>
                        <li class="mb-2">Ideal for residential and industrial heating systems</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-success px-4 py-2 rounded-pill shadow">
                            Enquiry Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>
