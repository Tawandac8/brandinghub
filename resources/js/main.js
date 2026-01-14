// Branding Hub - Main JavaScript

// Mobile Menu Toggle
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener("click", function (event) {
        if (mobileMenu && !mobileMenu.classList.contains("hidden")) {
            if (
                !event.target.closest("#mobile-menu") &&
                !event.target.closest("#mobile-menu-btn")
            ) {
                mobileMenu.classList.add("hidden");
            }
        }
    });
});

// FAQ Accordion
function toggleFaq(button) {
    const faqItem = button.closest(".faq-item");
    const isActive = faqItem.classList.contains("active");

    // Close all FAQ items
    document.querySelectorAll(".faq-item").forEach((item) => {
        item.classList.remove("active");
    });

    // Open clicked item if it wasn't active
    if (!isActive) {
        faqItem.classList.add("active");
    }
}

// Quote Modal
function openQuoteModal() {
    const modal = document.getElementById("quote-modal");
    if (modal) {
        modal.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeQuoteModal() {
    const modal = document.getElementById("quote-modal");
    if (modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "";
    }
}

// Quote Form Submission
document.addEventListener("DOMContentLoaded", function () {
    const quoteModal = document.getElementById("quote-modal");
    if (quoteModal) {
        quoteModal.addEventListener("click", function (e) {
            if (e.target === quoteModal) {
                closeQuoteModal();
            }
        });
    }

    const quoteForm = document.getElementById("quote-form");

    if (quoteForm) {
        quoteForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const formData = new FormData(quoteForm);
            const data = Object.fromEntries(formData.entries());

            // Send to Laravel backend
            fetch("/api/quote-request", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN":
                        document.querySelector('meta[name="csrf-token"]')
                            ?.content || "",
                },
                body: JSON.stringify(data),
            })
                .then((response) => response.json())
                .then((result) => {
                    // Show success message
                    alert(
                        "Quote request submitted successfully! We'll get back to you soon."
                    );
                    closeQuoteModal();
                    quoteForm.reset();

                    // Optionally redirect to WhatsApp
                    const service = data.service;
                    const message = `Hi Branding Hub, I'd like a quote for ${service}. My name is ${data.name}.`;
                    window.open(
                        `https://wa.me/1234567890?text=${encodeURIComponent(
                            message
                        )}`,
                        "_blank"
                    );
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert(
                        "There was an error submitting your request. Please try again or contact us directly on WhatsApp."
                    );
                });
        });
    }
});

// Exit Intent Popup
let exitIntentShown = false;

document.addEventListener("mouseleave", function (e) {
    if (e.clientY <= 0 && !exitIntentShown) {
        showExitPopup();
        exitIntentShown = true;
    }
});

function showExitPopup() {
    const popup = document.getElementById("exit-intent-popup");
    if (popup) {
        popup.classList.remove("hidden");
    }
}

function closeExitPopup() {
    const popup = document.getElementById("exit-intent-popup");
    if (popup) {
        popup.classList.add("hidden");
    }
}

// Close Exit Popup on background click
document.addEventListener("DOMContentLoaded", function () {
    const exitPopup = document.getElementById("exit-intent-popup");
    if (exitPopup) {
        exitPopup.addEventListener("click", function (e) {
            if (e.target === exitPopup) {
                closeExitPopup();
            }
        });
    }
});

// Gallery Filtering
function filterGallery(category) {
    const items = document.querySelectorAll(".gallery-item");
    const buttons = document.querySelectorAll(".filter-btn");

    // Update active button
    buttons.forEach((btn) => {
        btn.classList.remove("active");
        if (btn.dataset.category === category) {
            btn.classList.add("active");
        }
    });

    // Filter items
    items.forEach((item) => {
        if (category === "all" || item.dataset.category === category) {
            item.style.display = "block";
            setTimeout(() => {
                item.style.opacity = "1";
                item.style.transform = "scale(1)";
            }, 10);
        } else {
            item.style.opacity = "0";
            item.style.transform = "scale(0.8)";
            setTimeout(() => {
                item.style.display = "none";
            }, 300);
        }
    });
}

// Lightbox
let currentImageIndex = 0;
let galleryImages = [];

function openLightbox(index) {
    galleryImages = Array.from(document.querySelectorAll(".gallery-item img"));
    currentImageIndex = index;

    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");

    if (lightbox && lightboxImg) {
        lightboxImg.src = galleryImages[currentImageIndex].src;
        lightbox.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }
}

function closeLightbox() {
    const lightbox = document.getElementById("lightbox");
    if (lightbox) {
        lightbox.classList.add("hidden");
        document.body.style.overflow = "";
    }
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    document.getElementById("lightbox-img").src =
        galleryImages[currentImageIndex].src;
}

function prevImage() {
    currentImageIndex =
        (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    document.getElementById("lightbox-img").src =
        galleryImages[currentImageIndex].src;
}

// Keyboard navigation for lightbox
document.addEventListener("keydown", function (e) {
    const lightbox = document.getElementById("lightbox");
    if (lightbox && !lightbox.classList.contains("hidden")) {
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") nextImage();
        if (e.key === "ArrowLeft") prevImage();
    }
});

// Contact Form Submission
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contact-form");

    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const formData = new FormData(contactForm);

            fetch("/contact", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN":
                        document.querySelector('meta[name="csrf-token"]')
                            ?.content || "",
                },
            })
                .then((response) => response.json())
                .then((result) => {
                    if (result.success) {
                        alert(
                            "Thank you for your message! We'll get back to you soon."
                        );
                        contactForm.reset();
                    } else {
                        alert(
                            "There was an error sending your message. Please try again."
                        );
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                    alert(
                        "There was an error sending your message. Please try contacting us on WhatsApp."
                    );
                });
        });
    }
});

// Smooth Scroll for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        if (href !== "#" && href.length > 1) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        }
    });
});

// Intersection Observer for Scroll Animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -100px 0px",
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("animate-fade-in-up");
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe elements with data-animate attribute
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("[data-animate]").forEach((el) => {
        observer.observe(el);
    });
});
