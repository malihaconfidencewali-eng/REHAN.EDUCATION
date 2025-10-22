<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Courses - Rehan.Education</title>
<style>
body{font-family:Arial;background:#f8f9fa;margin:0;}
header{background:#007bff;color:white;text-align:center;padding:20px;}
nav a{color:white;margin:10px;text-decoration:none;font-weight:bold;}
nav a:hover{text-decoration:underline;}
.container{padding:30px;text-align:center;}
.card{background:white;margin:20px auto;padding:20px;width:80%;border-radius:10px;
box-shadow:0 4px 8px rgba(0,0,0,0.1);}
h2{color:#007bff;}
ul{list-style:none;padding:0;}
ul li{padding:8px 0;}
button{background:#007bff;color:white;border:none;padding:10px 20px;border-radius:5px;cursor:pointer;}
button:hover{background:#0056b3;}
</style>
<script>
function go(page){window.location=page;}
</script>
</head>
<body>

<header>
<h1>Courses Offered</h1>
<nav>
<a href="#" onclick="go('index.php')">Home</a>
<a href="#" onclick="go('curriculum.php')">Curriculum</a>
<a href="#" onclick="go('courses.php')">Courses</a>
<a href="#" onclick="go('facilitators.php')">Facilitators</a>
<a href="#" onclick="go('founder.php')">Founder’s Message</a>
<a href="#" onclick="go('contact.php')">Contact Us</a>
</nav>
</header>

<div class="container">
<div class="card">
<h2>Digital Skills Program</h2>
<ul>
<li>✔ Introduction to Digital Literacy</li>
<li>✔ AI Tools and ChatGPT Skills</li>
<li>✔ Canva and Graphic Design</li>
<li>✔ Video Creation and Editing</li>
<li>✔ Building Online Income Streams</li>
</ul>
</div>

<div class="card">
<h2>Advanced Courses</h2>
<ul>
<li>✔ Website Development using HTML, CSS, PHP</li>
<li>✔ AI Automation & Prompt Engineering</li>
<li>✔ Teaching Online through Rehan School</li>
<li>✔ Social Media Branding</li>
</ul>
</div>

<div class="card">
<h2>Special Workshop</h2>
<p>“How to Impact 10 Million Lives” — a mentorship-based online course that guides students toward global impact and financial independence.</p>
</div>
</div>
</body>
</html>
