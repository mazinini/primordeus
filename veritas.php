<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VERITAS FLAME</title>

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
      background: linear-gradient(to bottom, #073a66, #0e4a86);
      color: #e6f2ff;
      margin: 0;
      padding: 0;
    }

    h1, h2 {
      font-family: 'Playfair Display', serif;
    }

    .header {
      background: linear-gradient(120deg, #1b52e8, #91bce6);
      padding: 4rem 1rem 2rem;
      text-align: center;
      color: #fff;
      position: relative;
    }

  .header h1 {
    font-size: 3.8rem;
    font-family: 'UnifrakturCook', cursive;
    color:rgb(168, 208, 251);
    text-shadow:
      2px 2px 4px #000,     /* black shadow */
      0 0 10px #fff,        /* white outer glow */
      0 0 20px #91bce6,     /* soft blue glow */
      0 0 30px #91bce6;
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
      color: #e6f2ff;
      border: 1px solid #aacfff;
      transition: all 0.3s ease;
    }

    .nav-buttons .btn:hover {
      background-color: #aacfff;
      color: #003366;
    }

    .section {
      padding: 4rem 1rem;
    }

    .card-section {
      background-color: rgba(255, 255, 255, 0.05);
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
  background-color: rgba(173, 216, 230, 0.1);
  /* border: 2px dashed #aacfff; */  /* Remove or comment this line */
  display: flex;
  align-items: center;
  justify-content: center;
  font-style: italic;
  color: #c0dbf3;
  margin: 2rem auto 0;
  border-radius: 0.75rem;
  padding: 10px;
  overflow: hidden;
}


.image-space img {
  max-width: 100%;           /* image will not exceed container width */
  max-height: 100%;          /* image will not exceed container height */
  height: auto;              /* maintain aspect ratio */
  border-radius: 0.5rem;
  object-fit: contain;       /* ensure whole image fits inside container */
}


    .officer-list p {
      margin-bottom: 0.4rem;
    }

    .role-title {
      font-weight: bold;
      color: #bcdcff;
      margin-top: 1.5rem;
    }

    .footer {
      background-color: #0a3e71;
      padding: 1.5rem;
      text-align: center;
      font-size: 0.95rem;
      color: #aacfff;
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
    <h1>VERITAS FLAME</h1>
    <p class="tagline">we burn falsehood, we stand by the truth</p>
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
      <h2 class="section-title">We’re not just a section; we’re a team with a purpose.</h2>
      <p>
        Amidst the shadows of deceit and the whispers of illusion, a flame burns bright—unyielding and pure. In the spirit of <strong>Veritas Flame,</strong> 
        we illuminate the path of truth, casting aside falsehood with unwavering resolve. 
</p>
      <div class="image-space">
  <img src="vf.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>
    </div>

    <div class="card-section text-center" id="motto" data-aos="fade-up" data-aos-delay="100">
      <h2 class="section-title">Our Motto</h2>
      <p><em>we burn falsehood ⨾<br>we stand by the truth</em></p>
      <div class="image-space">
  <img src="phoenix.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>
    </div>

    <div class="card-section text-center" id="color" data-aos="fade-up" data-aos-delay="200">
      <h2 class="section-title">Our Official Color</h2>
      <p>
        Blue — calm like the sky, deep like the ocean, and strong like our spirit. We align ourselves with clarity, guidance, and the courage to shine even in the dark.
      </p>
      <div class="image-space">
  <img src="id.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>
    </div>

    <div class="card-section" id="officers" data-aos="fade-up" data-aos-delay="300">
      <h2 class="section-title">The Pillars of Veritas Flame</h2>
      <div class="officer-list">
        <p class="role-title">──━━ Arcguardian</p>
        <p>ᘞ Ms. Elyraeth Noctare</p>

        <p class="role-title">──━━ Officers</p>
        <p>ᘞ Caelarch ⨾ Ioanthe Noqh</p>
        <p>ᘞ Noctivar ⨾ Caden</p>
        <p>ᘞ Chronet ⨾ Dion</p>
        <p>ᘞ Caelpen ⨾ Zyzaeine Frenaultier</p>
        <p>ᘞ Luxerra ⨾ Nikki</p>
        <p>ᘞ Paxor ⨾ Ariadne Hugo</p>
        <p>ᘞ Versar ⨾ [Insert Name]</p>
      </div>
    </div>

    <div class="card-section text-center" id="origin" data-aos="fade-up" data-aos-delay="400">
      <h2 class="section-title">Our Flame's Origin</h2>
      <p>
        Born from a desire to uphold what’s right in all things, Veritas Flame arose to unify voices, light the shadows, and inspire truth through bold action. Our legacy is not just forged — it's fired in passion, and tempered in wisdom.
      </p>
            <div class="image-space">
  <img src="phoe.jpg" alt="Veritas Flame Logo" class="img-fluid rounded" style="max-height: 230px;">
</div>

    </div>
  </section>

  <footer class="footer" data-aos="fade-in" data-aos-delay="500">
    <p>&copy; VERITAS FLAME | Designed for truth and passion</p>
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




