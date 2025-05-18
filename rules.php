<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Primordeus Zodiac - Organized Rules</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=UnifrakturCook:wght@700&display=swap" rel="stylesheet" />

<style>
  body {
    background-color: #fce5b3;
    color: #4d3200;
    font-family: 'Roboto', sans-serif;
  }
  header, footer {
    background-color: #cda900;
    color: #3c2600;
    font-family: 'UnifrakturCook', cursive;
    text-align: center;
    padding: 1rem 0;
    text-shadow: 1px 1px 2px #6b4f00;
    position: relative; /* for positioning the button */
  }
  /* Back to homepage button styling */
  .btn-homepage {
    position: absolute;
    top: 0.8rem;
    right: 1rem;
    font-weight: 700;
    font-family: 'UnifrakturCook', cursive;
    background-color: #4d3200;
    color: #fce5b3;
    border: none;
    padding: 0.4rem 0.75rem;
    border-radius: 4px;
    text-decoration: none;
    box-shadow: 1px 1px 3px #3c2600;
    transition: background-color 0.3s ease;
  }
  .btn-homepage:hover,
  .btn-homepage:focus {
    background-color: #6b4f00;
    color: #fff3b0;
    text-decoration: none;
  }
  .sidebar {
    position: sticky;
    top: 1rem;
    max-height: 90vh;
    overflow-y: auto;
    background: #f7e38b;
    border-radius: 8px;
    padding: 1rem;
  }
  .sidebar a {
    display: block;
    margin-bottom: 0.75rem;
    color: #4d3200;
    text-decoration: none;
    font-weight: 600;
  }
  .sidebar a:hover {
    text-decoration: underline;
  }
  .accordion-button {
    font-family: 'UnifrakturCook', cursive;
    font-weight: 700;
    font-size: 1.1rem;
    color: #4a3200;
    background: linear-gradient(145deg, #d1a900, #c09000);
  }
  .accordion-body {
    background-color: #fff3b0;
    color: #3c2600;
    font-size: 0.95rem;
    font-family: 'Roboto', sans-serif;
  }
  .constellation-title {
    font-weight: 700;
    margin-top: 0.75rem;
    margin-bottom: 0.4rem;
    color: #4a3200;
  }
  .edict {
    margin-left: 1.25rem;
    margin-bottom: 0.5rem;
  }
</style>
</head>
<body>

<header>
  <h1>Primordeus Zodiac</h1>
  <p>Rules & Decrees</p>
  <a href="index.html" class="btn-homepage" title="Back to Homepage">Home</a>
</header>

<div class="container my-4">
  <div class="row">

    <!-- Main content -->
    <div class="col-md-9">
      <div class="accordion" id="rulesAccordion">

        <div class="accordion-item" id="decree1">
          <h2 class="accordion-header" id="heading1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
              Primordeus Decree No. 0001 : Sigil of Identity
            </button>
          </h2>
          <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
              <div class="constellation-title">Constellation 01:</div>
              <p>All disciples, elders, and lords must wear their Sigil Tags (ID cards) every weekday.</p>
              <div class="constellation-title">Constellation 02:</div>
              <p>Before entering the Academy properly, new disciples must visit the Sigil Hall to craft their Sigil Tag (ID).</p>
              <div class="constellation-title">Constellation 03:</div>
              <p>Disciples without their Sigil Tag cannot join Guild Circles (GCs) or access Academy activities.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree2">
          <h2 class="accordion-header" id="heading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
              Primordeus Decree No. 0002 : Ledger of Shadows
            </button>
          </h2>
          <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
              <div class="constellation-title">Constellation 01:</div>
              <p>Each Disciple may only hold one Echo Seal (account). Having more than one is strictly forbidden and punishable.</p>
              <div class="constellation-title">Constellation 02:</div>
              <p>Disciples must guard their true identity. Sharing real names, real photos, or real voices inside the Academy is forbidden to protect everyone’s safety.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree3">
          <h2 class="accordion-header" id="heading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              Primordeus Decree No. 0003 : Code of Eloquence
            </button>
          </h2>
          <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
              <div class="constellation-title">Constellation 01 — Digital Conduct:</div>
              <ul>
                <li class="edict">Edict 001: Always speak with respect. No insults, curses, or hateful words, whether in chats, comments, or posts.</li>
                <li class="edict">Edict 002: Share disagreements kindly. Explain yourself calmly without hurting others.</li>
              </ul>
              <div class="constellation-title">Constellation 02 — Voice of Virtue:</div>
              <p class="edict">Edict 003: Words shape your legacy. Use pure language, no cussing or cruel words. Help build a noble, kind community inside Primordeus Zodiac.</p>
              <div class="constellation-title">Constellation 03 — Echo of Accountability</div>
              <p>Failure to acknowledge or send notice of a violation (unsent VIO) shall be regarded as a breach of duty. When a disciple knowingly avoids sending a valid report or chooses to ignore clear misconduct, the consequence shall be double the demerit points (bawas points). For silence in the presence of injustice is no different from the act itself.</p>
              <div class="constellation-title">Constellation 04 — No Place for Ableism</div>
              <p>Within the sacred halls of Primordeus Zodiac, all forms of ableism are forbidden. Disciples, Guardians, and Elders shall uphold the dignity of every individual, regardless of physical, mental, or developmental condition. Words such as “baliw” or phrases that mock, insult, or reduce one's capability due to disability, whether visible or unseen, shall be treated as violations of the Code of Eloquence.</p>
              <div class="constellation-title">Constellation 05 — Uniformity in Script</div>
              <p>To maintain clarity and avoid miscommunication, the use of distorted, stylized, or unreadable fonts within official messages, submissions, and public spaces of the academy is discouraged. Let all scripts be legible and accessible, serving as a bridge, not a barrier, among the stars.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree4">
          <h2 class="accordion-header" id="heading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              Primordeus Decree No. 0004 : Sanctum of Boundaries
            </button>
          </h2>
          <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
                <div class="constellation-title">Constellation 01: No Forbidden Bonds Honor the Order.</div>
              <p>Disciples must not form romantic ties with Elders, Guardians, or higher authorities.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree5">
          <h2 class="accordion-header" id="heading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
              Primordeus Decree No. 0005 : Oath of Solemn Allegiance
            </button>
          </h2>
          <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
                <div class="constellation-title">Constellation 01: One Constellation, One Path:</div>
              <p>Disciples, Guardians, and Elders shall pledge their loyalty solely to Primordeus Zodiac. Membership or participation in other academies, orders, or rival institutions is strictly forbidden.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree6">
          <h2 class="accordion-header" id="heading6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
              Primordeus Decree No. 0006 : Lingua Concordia
            </button>
          </h2>
          <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
                <div class="constellation-title">Constellation 01 : Common Voice of the Stars: </div>
              <p>To preserve harmony within the Order and ensure clarity across all constellations, only the tongues of Tagalog and English shall be used within the halls of Primordeus Zodiac, whether in written or spoken form. Languages beyond the chosen tongues are discouraged within Academy circles to avoid confusion, misinterpretation, and exclusion among fellow Disciples and Elders.</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree7">
          <h2 class="accordion-header" id="heading7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
              Primordeus Decree No. 0007 : Veil of Absence
            </button>
          </h2>
          <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
              <div class="constellation-title">Constellation 01 — Passage of the Void:</div>
              <p>No Disciple shall withdraw from academy duties, be it daily engagements, missions, or assemblies without securing a Leave Scroll (official excuse form) or presenting a valid cause. Leave Scrolls must be submitted to the appointed Guardian or Constellation Overseer before the day of absence, unless hindered by emergency. Excuses made after the absence without prior notice will be reviewed under scrutiny and are subject to rejection.</p>
              <div class="constellation-title">Constellation 02 — Consequence of Silence:</div>
              <p>Disciples who vanished without a trace, giving neither reason nor record, shall be marked under the Mark of the Faded, subject to demerit points, exclusion from upcoming rites, and public listing in the Ledger of Lapses (Banned Students).</p>
            </div>
          </div>
        </div>

        <div class="accordion-item" id="decree8">
          <h2 class="accordion-header" id="heading8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
              Primordeus Decree No. 0008 : Mirror of the Council
            </button>
          </h2>
          <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#rulesAccordion">
            <div class="accordion-body">
              <p>Formal evaluations shall take place twice every month, allowing Disciples regular opportunities to voice their thoughts with respect and honesty. Alongside the weekly rankings during the second week, Disciples will also cast votes to recognize the Council member who has shown exceptional leadership, fairness, and spirit.
The one chosen will be awarded the title "Council of the Week", a badge of honor among the constellations.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<footer>
  <p>© Primordeus Zodiac</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






