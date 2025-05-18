<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primordeus Zodiac | Calendar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap');

    body {
      background: linear-gradient(to bottom, #c89f2d, #fdf7e2);
      font-family: 'Times New Roman', serif;
      color: #1a1a1a;
    }
    .header {
      background-color: #c6a500;
      padding: 1rem;
      position: relative;
      box-shadow: 0 2px 4px rgba(0,0,0,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .header h1 {
      font-family: 'UnifrakturCook', cursive;
      font-size: 2.7rem;
      color: #1e0f00;
      margin: 0;
    }
    .header p {
      font-weight: bold;
      color: #2d1c00;
      margin: 0;
      text-align: center;
      font-size: 1rem;
    }
    .home-btn {
      position: absolute;
      top: 65px;
      right: 15px;
      background-color: #3e2b00;
      color: #ffe4a0;
      border: none;
      padding: 5px 12px;
      border-radius: 8px;
      font-weight: bold;
      font-family: 'UnifrakturCook', cursive;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
      z-index: 10;
    }
    .calendar-container {
      padding: 2rem 1rem;
    }
    .calendar-box {
      background: #fffaf0;
      border: 1px solid #d1b75c;
      border-radius: 8px;
      padding: 0.8rem 1rem;
      margin-bottom: 1.2rem;
      box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    .day-title {
      font-weight: bold;
      color: #4e3e1c;
      font-size: 1rem;
      margin-bottom: 0.4rem;
    }
    .event-line {
      margin-left: 1rem;
      font-size: 0.9rem;
    }
    .footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #5c4e2a;
    }
  </style>
</head>
<body>
  <div class="header">
    <a href="index.html" class="home-btn">Home</a>
    <div>
      <h1>Primordeus Zodiac</h1>
      <p>Divine Calendar</p>
    </div>
  </div>

  <div class="container calendar-container">
    <div class="row">
      <div class="col-md-6">
        <div class="calendar-box">
          <div class="day-title">➀ ━━━ ﹝ Monday﹞</div>
          <div class="event-line">10pm - 10pm ⨾ AA</div>
          <div class="event-line">7pm - 12 midnight ⨾ games</div>
          <div class="event-line">9pm - 9pm ⨾ task / mission</div>
        </div>
        <div class="calendar-box">
          <div class="day-title">➂ ━━━ ﹝ Wednesday﹞</div>
          <div class="event-line">10pm - 10pm ⨾ AA</div>
          <div class="event-line">7pm - 12midnight ⨾ games</div>
          <div class="event-line">8pm - 12 midnight ⨾ foiase</div>
        </div>
        <div class="calendar-box">
          <div class="day-title">➄ ━━━ ﹝ Friday﹞</div>
          <div class="event-line">7pm - 12 midnight ⨾ games</div>
          <div class="event-line">8pm - 12 midnight ⨾ codes & ciphers</div>
        </div>
        <div class="calendar-box">
          <div class="day-title">➆ ━━━ ﹝ Sunday﹞</div>
          <div class="event-line">10pm - 10pm ⨾ AA</div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="calendar-box">
          <div class="day-title">➁ ━━━ ﹝ Tuesday﹞</div>
          <div class="event-line">10pm - 10pm ⨾ AA</div>
          <div class="event-line">7pm - 12 midnight ⨾ games</div>
          <div class="event-line">8pm - 12 midnight ⨾ lesson</div>
        </div>
        <div class="calendar-box">
          <div class="day-title">➃ ━━━ ﹝ Thursday﹞</div>
          <div class="event-line">10pm - 10pm ⨾ AA</div>
          <div class="event-line">7pm - 12 midnight ⨾ pssi</div>
          <div class="event-line">8pm - 10pm ⨾ debate</div>
        </div>
        <div class="calendar-box">
          <div class="day-title">➅ ━━━ ﹝ Saturday﹞</div>
          <div class="event-line">9am - 10pm ⨾ open forum</div>
          <div class="event-line">RECORDING DAY</div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">Primordeus Zodiac © 2025</div>
</body>
</html>
