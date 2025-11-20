    <!--  FOOTER SECTION -->
    <footer class="footer-section text-white pt-5" style="background: linear-gradient(135deg, #0f5132, #198754);">
        <div class="container">
            <div class="row g-4">

                <!-- About Company -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <h4 class="fw-bold mb-3">Kankaditya Infra Pvt Ltd</h4>
                    <p>
                        We specialize in premium eco-friendly products like Vermicompost, Coriander Seeds, Kaju, Makhana
                        & Dryfruits.
                        Our mission is to provide natural solutions for a sustainable future.
                    </p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white text-decoration-none footer-link">Home</a></li>
                        <li><a href="about.php" class="text-white text-decoration-none footer-link">About</a></li>
                        <li><a href="#" class="text-white text-decoration-none footer-link">Products</a></li>
                        <li><a href="services.php" class="text-white text-decoration-none footer-link">Services</a></li>
                        <li><a href="blog.php" class="text-white text-decoration-none footer-link">Blog</a></li>
                        <li><a href="contact.php" class="text-white text-decoration-none footer-link">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="fw-bold mb-3">Contact Info</h5>
                    <p><i class="bi bi-geo-alt-fill me-2"></i> 394, Kalamkar colony Guna,473001</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> <a href="mailto:kapilgolwalkar@gmail.com"
                            class="text-white text-decoration-none">Kankadityainfra@gmail.com</a></p>
                    <p><i class="bi bi-telephone-fill me-2"></i> +91 7000377300 || 9993216948</p>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="fw-bold mb-3">Newsletter</h5>
                    <p>Subscribe for latest updates & offers</p>
                    <form class="d-flex">
                        <input type="email" class="form-control rounded-start" placeholder="Email Address" required>
                        <button type="submit" class="btn btn-success rounded-end"><i
                                class="bi bi-envelope-paper"></i></button>
                    </form>
                </div>

            </div>

            <hr class="bg-white mt-5">
            <div class="text-center py-3">
                &copy; 2025 Kankaditya Infra Pvt Ltd. All Rights Reserved. <span>Managed By<a href="https://trade4export.com/"
                        class="text-dark text-decoration-none"> Trade4Export</a></span>
            </div>
        </div>
    </footer>

    <!-- Enquiry Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" data-aos="zoom-in">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="enquiryForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="number" placeholder="Your Number" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg rounded-pill">Send via WhatsApp</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--  Modal Styles -->
    <style>
        .modal-content {
            border-radius: 15px;
        }

        #enquiryForm input,
        #enquiryForm textarea {
            border-radius: 10px;
            border: 1px solid #198754;
            padding: 10px;
        }

        #enquiryForm input:focus,
        #enquiryForm textarea:focus {
            border-color: #25d366;
            box-shadow: 0 0 10px rgba(37, 211, 102, 0.5);
            outline: none;
        }

        .btn-success {
            background: linear-gradient(135deg, #25d366, #198754);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #198754, #128c7e);
            transform: scale(1.05);
        }
    </style>

    <!-- Modal JS to Send WhatsApp -->
    <script>
        document.getElementById('enquiryForm').addEventListener('submit', function (e) {
            e.preventDefault();

            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let number = document.getElementById('number').value;
            let subject = document.getElementById('subject').value;
            let message = document.getElementById('message').value;

            let whatsappMessage = `*Enquiry Form Submission*\n\nName: ${name}\nEmail: ${email}\nNumber: ${number}\nSubject: ${subject}\nMessage: ${message}`;

            // Replace with your WhatsApp number (with country code)
            let whatsappNumber = "917000377300";
            let whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

            window.open(whatsappURL, '_blank');
        });
    </script>
    <!--  WHATSAPP SCRIPT -->
    <script>
        document.getElementById("whatsappBtn").addEventListener("click", function () {
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const message = document.getElementById("message").value.trim();
            const phoneNumber = "917000377300"; // Your WhatsApp number (without +)

            if (name && email && message) {
                const whatsappURL = `https://wa.me/${phoneNumber}?text=*New%20Enquiry%20from%20Website*%0A%0A*Name:*%20${encodeURIComponent(name)}%0A*Email:*%20${encodeURIComponent(email)}%0A*Message:*%20${encodeURIComponent(message)}`;
                window.open(whatsappURL, "_blank");
            } else {
                alert("Please fill out all fields before sending your message.");
            }
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
 
</body>

</html>