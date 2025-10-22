<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rehan School Online Academy</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f8ff;
    }

    header {
      background: #0056b3;
      color: white;
      text-align: center;
      padding: 15px 0;
    }

    nav {
      background: #003f8a;
      text-align: center;
      padding: 10px 0;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    section {
      display: none;
      padding: 40px;
      background: white;
      margin: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .active {
      display: block;
    }

    h2 {
      color: #0056b3;
    }

    .facilitator {
      background: #f9f9f9;
      border-radius: 12px;
      padding: 15px;
      margin: 10px 0;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .facilitator h3 {
      color: #003f8a;
    }

    .facilitator a {
      color: #0056b3;
      text-decoration: none;
    }

    footer {
      text-align: center;
      background: #003f8a;
      color: white;
      padding: 15px;
      margin-top: 30px;
    }
  </style>
  <script>
    function showSection(id) {
      var sections = document.querySelectorAll("section");
      sections.forEach(s => s.classList.remove("active"));
      document.getElementById(id).classList.add("active");
    }
  </script>
</head>
<body onload="showSection('home')">

  <header>
    <h1>Rehan School Online Academy</h1>
  </header>

  <nav>
    <a href="#" onclick="showSection('home')">Home</a>
    <a href="#" onclick="showSection('curriculum')">Curriculum</a>
    <a href="#" onclick="showSection('facilitators')">Facilitators</a>
    <a href="#" onclick="showSection('contact')">Contact</a>
  </nav>

  <!-- Home Section -->
  <section id="home">
    <h2>Welcome to Rehan School Online Academy</h2>
    <p>We are educating the students based on the life experiences of travel, business, and networking by Sir Rehan Allahwala. Our focus is to prepare students for the Internet and AI Era.</p>
  </section>

  <!-- Curriculum Section -->
  <section id="curriculum">
    <h2>Curriculum</h2>
    <p>Our current curriculum plan:</p>
    <p>We are educating the students based on my life’s experiences of travel, business, and networking...</p>
    <p>Our core value is to focus on making a positive impact on 10 million human beings.</p>
    <ul>
      <li>5th Grade – Level One: Learn design, ChatGPT, interviews, videos, yoga, meditation.</li>
      <li>6th Grade – Level Two: Freelancing, networking, TEDx wala talks.</li>
      <li>7th Grade – Level Three: Earn $300 a month goals.</li>
      <li>8th Grade – Level Four: Build startups and grow.</li>
      <li>12th–13th Grade – Prepare for GED/Matric.</li>
    </ul>
  </section>

  <!-- Facilitators Section -->
  <section id="facilitators">
    <h2>Facilitators</h2>

    <div class="facilitator">
      <h3>Rehan Allahwala — Founder</h3>
      <p>I run a High School designed for the Internet & AI Era – <a href="https://rehanschool.net" target="_blank">RehanSchool.net</a></p>
      <p>
        <a href="https://facebook.com/rehanallahwala" target="_blank">Facebook</a> |
        <a href="https://youtube.com/rehanallahwala" target="_blank">YouTube</a> |
        <a href="https://linkedin.com/in/rehanallahwala" target="_blank">LinkedIn</a>
      </p>
    </div>

    <div class="facilitator">
      <h3>Momina Allahwala — Director</h3>
      <p>“A mind that is stretched by a new experience can never go back to its old dimension.”</p>
      <p>
        <a href="https://facebook.com" target="_blank">Facebook</a> |
        <a href="https://youtube.com" target="_blank">YouTube</a> |
        <a href="https://linkedin.com" target="_blank">LinkedIn</a>
      </p>
    </div>

    <div class="facilitator">
      <h3>Maryam TrainingWali — Vice Principal</h3>
      <p>Vice Principal at Rehan School Online Academy | Podcaster | AI Enthusiast</p>
      <p>
        <a href="https://tiktok.com/@maryamtrainingwali" target="_blank">TikTok</a> |
        <a href="https://youtube.com/@maryamzulfiqartrainingwali" target="_blank">YouTube</a>
      </p>
    </div>

    <div class="facilitator">
      <h3>Sir Doulat — Principal</h3>
      <p>Leading Rehan School System Online | Nurturing future leaders through AI & Networking</p>
      <p>
        <a href="https://instagram.com/doulattailorswala" target="_blank">Instagram</a> |
        <a href="https://tiktok.com/@doulattailorswala" target="_blank">TikTok</a>
      </p>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h2>Contact Us</h2>
    <p>📍 R554+WF9, Sector 50 C Korangi, Karachi</p>
    <p>📍 Opp PAF Falcon, KAECHS Block 6, Shaheed e Millat road, Khi.</p>
    <p>📍 Seri Chowk, Near Arqam School, Bank Colony Phulgran, Barakahu, Islamabad.</p>
    <p>📞 UAN: +92 304 111 6044</p>
    <p>📧 info@rehanschool.net</p>

    <h3>Subscribe to our YouTube Channels</h3>
    <p><a href="https://youtube.com/@rehanschoolKorangicampus" target="_blank">Korangi Campus</a></p>
    <p><a href="https://youtube.com/@rehanschoolmunawwarcampus" target="_blank">Munawwar Campus</a></p>
  </section>

  <footer>
    © 2025 Rehan School Online Academy | All Rights Reserved
  </footer>
</body>
</html>
