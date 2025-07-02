<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Get In Touch</h5>
            <h1 class="mb-3">Silahkan menghubungi kami </h1>
            <p class="mb-2">Butuh solusi kreatif? Tim ahli Sacoret siap mendampingi Anda. Jangan ragu, kami selalu di
                sini untuk Anda
                <!--<ahref="https://htmlcodex.com/contact-form">Download Now</a>.-->
            </p>
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">Jl.
                                Watugede 58, Ngaglik, Sleman, Yogyakarta</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">+62 811-2972-666</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                            style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="h5" href="mailto:info@example.com" target="_blank">sacoret@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.540258541584!2d110.37892237420571!3d-7.732371876634164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a596687d6821d%3A0x7917dc875e8b3a9f!2sKolektif%20Coworking%20Space%20%26%20Collaboraction!5e0!3m2!1sid!2sid!4v1728637171610!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="p-5 rounded contact-form">
                        <div class="mb-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control border-0 py-3" placeholder="Project">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn bg-primary text-white py-3 px-5" type="button"
                                onclick="sendWhatsAppMessage()">Send
                                Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sendWhatsAppMessage() {
        // Get form values
        const name = document.querySelector('input[placeholder="Your Name"]').value;
        const email = document.querySelector('input[placeholder="Your Email"]').value;
        const project = document.querySelector('input[placeholder="Project"]').value;
        const message = document.querySelector('textarea[placeholder="Message"]').value;

        // Construct the WhatsApp message
        const whatsappMessage = `Name: ${name}\nEmail: ${email}\nProject: ${project}\nMessage: ${message}`;
        const encodedMessage = encodeURIComponent(whatsappMessage);

        // Create the WhatsApp link
        const whatsappLink = `https://wa.me/628112972666?text=${encodedMessage}`;

        // Open the WhatsApp link
        window.open(whatsappLink, '_blank');
    }
</script>
