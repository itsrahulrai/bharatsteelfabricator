<!-- Floating Buttons -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <a href="https://wa.me/9711727223" target="_blank" class="whatsapp-btn">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Call -->
    <a href="tel:9711727223" class="call-btn">
        <i class="fa-solid fa-phone"></i>
    </a>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBZ4D88D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- JS here -->
   <script src="{{ asset('assets/js/jquery.js') }}"></script>
   <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('assets/js/ordain-it.js') }}"></script>
   <script src="{{ asset('assets/js/three.js') }}"></script>
   <script src="{{ asset('assets/js/hover-img-effect.js') }}"></script>
   <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('assets/js/purecounter.js') }}"></script>
   <script src="{{ asset('assets/js/range-slider.js') }}"></script>
   <script src="{{ asset('assets/js/nice-select.js') }}"></script>
   <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
   <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
   <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
   <script src="{{ asset('assets/js/slider.js') }}"></script>
   <script src="{{ asset('assets/js/wow.js') }}"></script>
   <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const name = document.getElementById("name");
            const email = document.getElementById("email");
            const phone = document.getElementById("phone");
            const desc = document.getElementById("description");
            const form = document.getElementById("contactForm");

            function containsScript(val) {
                return /<\s*script/gi.test(val);
            }

            function showError(input, message) {
                let box = input.closest(".it-contact-input-box");

                // remove old error
                let old = box.querySelector(".live-error");
                if (old) old.remove();

                // add new error
                let error = document.createElement("small");
                error.className = "live-error";
                error.style.color = "red";
                error.style.fontSize = "12px";
                error.innerText = message;

                box.appendChild(error);

                input.style.border = "1px solid red";
            }

            function clearError(input) {
                let box = input.closest(".it-contact-input-box");
                let old = box.querySelector(".live-error");
                if (old) old.remove();

                input.style.border = "";
            }

            // NAME
            name.addEventListener("input", function() {
                let v = this.value;

                if (containsScript(v)) {
                    showError(this, "Script not allowed");
                } else if (!/^[A-Za-z\s]*$/.test(v)) {
                    showError(this, "Only letters allowed");
                } else {
                    clearError(this);
                }
            });

            // EMAIL
            email.addEventListener("input", function() {
                let v = this.value;

                if (containsScript(v)) {
                    showError(this, "Script not allowed");
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v)) {
                    showError(this, "Invalid email");
                } else {
                    clearError(this);
                }
            });

            // PHONE
            phone.addEventListener("input", function() {
                let v = this.value.replace(/\D/g, "");
                this.value = v;

                if (containsScript(v)) {
                    showError(this, "Script not allowed");
                } else if (v.length > 10) {
                    showError(this, "Max 10 digits");
                } else if (v.length < 10) {
                    showError(this, "Enter 10 digit number");
                } else {
                    clearError(this);
                }
            });

            // DESCRIPTION
            desc.addEventListener("input", function() {
                let v = this.value;

                if (containsScript(v)) {
                    showError(this, "Script not allowed");
                } else {
                    clearError(this);
                }
            });

            // SUBMIT BLOCK
            form.addEventListener("submit", function(e) {
                if (document.querySelectorAll(".live-error").length > 0) {
                    e.preventDefault();
                }
            });

        });
    </script>
   @stack('scripts')