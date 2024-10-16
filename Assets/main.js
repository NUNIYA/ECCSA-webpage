document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");
  const heroContent = document.querySelector(".hero-content");
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector(".navbar-collapse");
  const sections = document.querySelectorAll(".section");

  // Show hero content with animation
  setTimeout(() => {
    heroContent.classList.add("visible");
  }, 500);

  // Navbar background change on scroll
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Custom navbar toggler animation
  navbarToggler.addEventListener("click", () => {
    navbarToggler.classList.toggle("active");
  });

  // Close navbar when clicking outside
  document.addEventListener("click", (event) => {
    const isClickInside = navbar.contains(event.target);

    if (!isClickInside && navbarCollapse.classList.contains("show")) {
      navbarToggler.click();
    }
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        const navbarHeight = navbar.offsetHeight;
        const targetPosition =
          targetElement.getBoundingClientRect().top +
          window.pageYOffset -
          navbarHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }
    });
  });

  // Add parallax effect to hero section
  window.addEventListener("scroll", () => {
    const scrollPosition = window.pageYOffset;
    document.querySelector(".hero").style.backgroundPositionY =
      scrollPosition * 0.5 + "px";
  });

  // Add fade-in animation for sections
  const fadeInOptions = {
    threshold: 0.3,
    rootMargin: "0px 0px -100px 0px",
  };

  const fadeInObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, fadeInOptions);

  sections.forEach((section) => {
    fadeInObserver.observe(section);
  });

  // Active nav item on scroll
  const navLinks = document.querySelectorAll(".nav-link");

  const activeNavObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const activeNavItem = document.querySelector(
            `.nav-link[href="#${entry.target.id}"]`
          );
          navLinks.forEach((link) => link.classList.remove("active"));
          if (activeNavItem) {
            activeNavItem.classList.add("active");
          }
        }
      });
    },
    { threshold: 0.5 }
  );

  sections.forEach((section) => {
    activeNavObserver.observe(section);
  });

  // Scroll-triggered animations
  const animateOnScroll = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate");
        observer.unobserve(entry.target);
      }
    });
  };

  const scrollObserver = new IntersectionObserver(animateOnScroll, {
    threshold: 0.1,
  });

  document.querySelectorAll(".animate-on-scroll").forEach((el) => {
    scrollObserver.observe(el);
  });
});
