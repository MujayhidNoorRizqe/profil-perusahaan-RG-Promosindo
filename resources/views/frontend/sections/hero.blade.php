<section id="home" class="hero-slider">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide" style="background-image:url('{{ asset('assets/images/hero1.jpg') }}')">
        <div class="hero-content">
          <h1>CLEAN & MINIMAL</h1>
          <a href="#portfolio" class="btn-main">View Project</a>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide" style="background-image:url('{{ asset('assets/images/hero2.jpg') }}')">
        <div class="hero-content">
          <h1>MODERN DESIGNS</h1>
          <a href="#portfolio" class="btn-main">View Project</a>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide" style="background-image:url('{{ asset('assets/images/hero3.jpg') }}')">
        <div class="hero-content">
          <h1>PERSONALIZE AND CUSTOMIZE</h1>
          <a href="#portfolio" class="btn-main">View Project</a>
        </div>
      </div>
    </div>

    <!-- Custom Nav -->
    <div class="nav-arrows">
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>

<style>
/* ====== HERO SECTION ====== */
.hero-slider {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  background-size: cover;
  background-position: center;
  position: relative;
}

/* overlay halus */
.swiper-slide::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.25);
  z-index: 1;
}

.hero-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
  z-index: 2;
}

.hero-content h1 {
  font-size: 72px;
  font-weight: 900;
  text-transform: uppercase;
  line-height: 1.1;
  margin-bottom: 25px;
}

.btn-main {
  background-color: #c4a68a;
  color: #fff;
  padding: 14px 32px;
  font-weight: 600;
  text-transform: uppercase;
  border-radius: 2px;
  transition: all 0.3s ease;
}
.btn-main:hover {
  background-color: #b18a6e;
}

/* Nav tombol di pojok bawah kanan */
.nav-arrows {
  position: absolute;
  bottom: 30px;
  right: 40px;
  display: flex;
  gap: 10px;
  z-index: 5;
}

.swiper-button-prev,
.swiper-button-next {
  position: relative;
  background: #c4a68a;
  color: #fff;
  width: 45px;
  height: 45px;
  border-radius: 3px;
}
.swiper-button-prev::after,
.swiper-button-next::after {
  font-size: 20px;
}

/* Hapus default posisi swiper */
.swiper-button-prev,
.swiper-button-next {
  top: unset;
  margin-top: unset;
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  new Swiper(".mySwiper", {
    loop: true,
    effect: "fade",
    autoplay: { delay: 4000 },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
</script>
