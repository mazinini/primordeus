<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ARS CAELORUM</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet" />

  <!-- AOS (Animate On Scroll) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to bottom,rgb(234, 134, 240),rgb(98, 41, 116));
      color: #f3e8ff;
      margin: 0;
      padding: 0;
    }

    h1, h2 {
      font-family: 'Playfair Display', serif;
    }

    .header {
      background: linear-gradient(120deg,rgb(117, 15, 138), #b5179e);
      padding: 4rem 1rem 2rem;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .header h1 {
      font-size: 3.8rem;
      font-family: 'UnifrakturCook', cursive;
      color: rgb(240, 214, 255);
      text-shadow:
        2px 2px 4px #000,
        0 0 10px #fff,
        0 0 20px #c77dff,
        0 0 30px #c77dff;
    }

    .tagline {
      font-family: 'UnifrakturCook', cursive;
      font-size: 1.2rem;
      opacity: 0.85;
      margin-top: 0.5rem;
    }

    .nav-buttons {
      margin: 2rem auto;
      text-align: center;
    }

    .nav-buttons .btn {
      margin: 0.5rem;
      border-radius: 50px;
      background-color: #ffffff10;
      color: #f3e8ff;
      border: 1px solid #e0b3ff;
      transition: all 0.3s ease;
    }

    .nav-buttons .btn:hover {
      background-color: #e0b3ff;
      color: #3a0ca3;
    }

    .section {
      padding: 4rem 1rem;
    }

    .card-section {
      background-color: rgba(120, 19, 135, 0.93);
      border-radius: 1rem;
      padding: 2.5rem;
      margin-bottom: 2rem;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, background-color 0.3s;
    }

    .card-section:hover {
      transform: translateY(-5px);
      background-color: rgba(255, 255, 255, 0.07);
    }

    .section-title {
      font-size: 2rem;
      font-family: 'UnifrakturCook', cursive;
      color: #ffffff;
      margin-bottom: 1rem;
    }

    .image-space {
      max-width: 300px;
      max-height: 300px;
      background-color: rgba(216, 191, 216, 0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      font-style: italic;
      color: #e6ccff;
      margin: 2rem auto 0;
      border-radius: 0.75rem;
      padding: 10px;
      overflow: hidden;
    }

    .image-space img {
      max-width: 100%;
      max-height: 100%;
      height: auto;
      border-radius: 0.5rem;
      object-fit: contain;
    }

    .officer-list p {
      margin-bottom: 0.4rem;
    }

    .role-title {
      font-weight: bold;
      color: #e0b3ff;
      margin-top: 1.5rem;
    }

    .footer {
      background-color:rgb(120, 35, 157);
      padding: 1.5rem;
      text-align: center;
      font-size: 0.95rem;
      color: #e0b3ff;
    }

    @media (min-width: 768px) {
      .section {
        padding: 4rem 6rem;
      }
    }
  </style>
</head>

<body>

  <header class="header" data-aos="fade-down">
    <h1>ARS CAELORUM</h1>
    <p class="tagline">arte vincimus‚ through art we conquer.</p>
    <div class="nav-buttons" data-aos="fade-up" data-aos-delay="100">
      <a href="index.html" class="btn btn-outline-light">Home</a>
      <a href="#motto" class="btn btn-outline-light">Motto</a>
      <a href="#color" class="btn btn-outline-light">Symbolism</a>
      <a href="#officers" class="btn btn-outline-light">Pillars</a>
      <a href="#origin" class="btn btn-outline-light">Origin</a>
    </div>
  </header>

<section class="section">
    <div class="card-section text-center" data-aos="fade-up">
      <h2 class="section-title">Ars Caelorum: The Knights of the Zodiac</h2>
      <p>
        Beneath the vast expanse of the cosmos, where constellations blaze with timeless glory, the spirit of artistry awakens. In the realm of <strong>Ars Caelorum,</strong>
        creativity is our armor, and imagination is our weapon.
      </p>
      <div class="image-space">
  <img src="arsss.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>
    </div>

    <div class="card-section text-center" id="motto" data-aos="fade-up" data-aos-delay="100">
      <h2 class="section-title">Our Motto</h2>
      <p><em>arte vincimus‚ through art we conquer.</em></p>
      <div class="image-space">
  <img src="arss.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>
    </div>

    <div class="card-section text-center" id="color" data-aos="fade-up" data-aos-delay="200">
      <h2 class="section-title">Our Official Color</h2>
      <p>
        Purple — the shade of crowned kings and noble hearts‚ of power seized and ambition fulfilled. Through its hue‚ we conquer‚ for in art lies our sovereign strength.
      </p>
      <div class="image-space">
  <img src="id2.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>
    </div>

    <div class="card-section" id="officers" data-aos="fade-up" data-aos-delay="300">
      <h2 class="section-title">The Pillars of Ars Caelorum</h2>
      <div class="officer-list">
        <p class="role-title">──━━ Arcguardian</p>
        <p>𖥔 Ms. Dean Cahorie</p>

        <p class="role-title">──━━ Officers</p>
        <p>𖥔. Caelarch ─ Xione Monzueri </p>
        <p>𖥔. Noctivar — Dyreixia Montclair</p>
        <p>𖥔. Chronet — Hera Ardani</p>
        <p> 𖥔. Caelpen ─ Rzıean Vıeur</p>
        <p>𖥔. Luxerra — Varkhiel Lucendreth</p>
        <p>𖥔. Paxor — Maureen Kleist</p>
        <p>  𖥔. Versar
      ─ Yulistinia Tsvetkov and Seara Valithra
</p>
      </div>
    </div>

    <div class="card-section text-center" id="origin" data-aos="fade-up" data-aos-delay="400">
      <h2 class="section-title">Our Art's Origin</h2>
      <p>
        Like the fabled Knights of the Zodiac, we rise, guided by the stars, conquering barriers through the power of art. In every stroke, every shade, and every masterpiece, we etch our legacy among the stars.
      </p>
            <div class="image-space">
  <img src="orig.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>

    </div>
  </section>

  <footer class="footer" data-aos="fade-in" data-aos-delay="500">
    <p>&copy; ARS CAELORUM | Through art we conquer</p>
    <p>Credits to the pictures used</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true,
    });
  </script>
</body>
</html>
