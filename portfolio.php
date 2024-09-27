<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title>My Portfolio (Prerit Sharma)</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      scroll-behavior: smooth;
    }
    
    body {
      background-color: #f5f5f5;
      color: #333;
      transition: background-color 0.3s, color 0.3s;
      font-family: 'Poppins', sans-serif;
    }
    
    nav {
      position: fixed;
      width: 100%;
      padding: 20px 0;
      z-index: 998;
      transition: all 0.3s ease;
      font-family: 'Ubuntu', sans-serif;
      background-color: #4070f4;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    nav.sticky {
      background-color: #4070f4;
      padding: 13px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    nav .navbar {
      width: 90%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: auto;
    }
    
    nav .navbar .logo a {
      font-weight: 500;
      font-size: 35px;
      color: #fff;
      transition: color 0.3s ease;
    }
    
    nav.sticky .navbar .logo a {
      color: #fff;
    }
    
    nav .navbar .menu {
      display: flex;
      position: relative;
    }
    
    nav .navbar .menu li {
      list-style: none;
      margin: 0 20px;
      transition: margin 0.3s ease;
      animation: slideIn 1s ease-in-out;
    }
    
    nav .navbar .menu li:hover {
      margin: 0 30px;
    }
    
    @keyframes slideIn {
      0% {
        margin: 0 0;
      }
      100% {
        margin: 0 20px;
      }
    }
    
    .navbar .menu a {
      font-size: 18px;
      font-weight: 500;
      color: #fff;
      padding: 6px 0;
      transition: color 0.3s ease;
    }
    
    .navbar .menu a:hover {
      color: #333;
    }
    
    nav.sticky .menu a {
      color: #fff;
    }
    
    nav.sticky .menu a:hover {
      color: #333;
    }
    
    .navbar .media-icons a {
      color: #fff;
      font-size: 18px;
      margin: 0 6px;
      transition: color 0.3s ease;
    }
    
    nav.sticky .media-icons a {
      color: #fff;
    }
    
    nav .menu-btn,
    .navbar .menu .cancel-btn {
      position: absolute;
      color: #fff;
      right: 30px;
      top: 20px;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: none;
      animation: fadeIn 1s ease-in-out;
    }
    
    nav .menu-btn {
      color: #fff;
    }
    
    nav.sticky .menu-btn {
      color: #fff;
    }
    
    .navbar .menu .menu-btn {
      color: #fff;
    }
    
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    
    .home {
      height: 100vh;
      width: 100%;
      background: url("images/background.png") no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      font-family: 'Ubuntu', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .home .home-content {
      width: 90%;
      height: 100%;
      margin: auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .home .text-one {
      font-size: 25px;
      color: seagreen;
      font-weight: 800;
    }
    
    .home .text-two {
      color: seagreen;
      font-size: 75px;
      font-weight: 600;
      margin-left: -3px;
      animation: fadeIn 2s ease-in-out;
    }
    
    .home .text-three {
      font-size: 40px;
      margin: 5px 0;
      color: brown;
      font-weight: 500;
      animation: fadeIn 2.5s ease-in-out;
    }
    
    .home .text-four {
      font-size: 23px;
      margin: 5px 0;
      font-weight: 300;
      color: brown;
      animation: fadeIn 3s ease-in-out;
    }
    
    .home .button {
      margin: 14px 0;
      animation: fadeIn 3.5s ease-in-out;
    }
    
    .home .button button {
      outline: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-size: 25px;
      font-weight: 400;
      background: #4070f4;
      color: #fff;
      cursor: pointer;
      border: 2px solid transparent;
      transition: all 0.4s ease;
      animation: pulse 2s infinite ease-in-out;
    }
    
    .home .button button:hover {
      border-color: #4070f4;
      background-color: #fff;
      color: #4070f4;
    }
    
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }
    
    .about {
      padding-top: 40px;
    }
    
    .about .content {
      width: 80%;
      margin: 40px auto;
      font-family: 'Poppins', sans-serif;
    }
    
    .about .about-details {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .about .about-details .left {
      width: 45%;
    }
    
    .about .left img {
      height: 400px;
      width: 400px;
      object-fit: cover;
      border-radius: 12px;
    }
    
    .about-details .right {
      width: 55%;
    }
    
    .about-details .right .topic {
      color: #0E2431;
      font-size: 25px;
      font-weight: 500;
      margin-bottom: 10px;
    }
    
    .about-details .right p {
      text-align: justify;
      color: #0E2431;
    }
    
    .about .button {
      margin: 16px 0;
    }
    
    .about .button button {
      outline: none;
      padding: 8px 16px;
      border-radius: 4px;
      font-size: 25px;
      font-weight: 400;
      background: #4070f4;
      color: #fff;
      border: 2px solid transparent;
      cursor: pointer;
      transition: all 0.4s ease;
    }
    
    .about .button button:hover {
      border-color: #4070f4;
      background-color: #fff;
      color: #4070f4;
    }
    
    .skills {
      background: #F0F8FF;
    }
    
    .skills .content {
      padding: 40px 0;
    }
    
    .skills .skills-details {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .skills-details .text {
      width: 50%;
    }
    
    .skills-details p {
      color: #0E2431;
      text-align: justify;
    }
    
    .skills-details .experience {
      display: flex;
      align-items: center;
      margin: 0 10px;
    }
    
    .skills-details .experience .num {
      color: #0E2431;
      font-size: 80px;
    }
    
    .skills-details .experience .exp {
      color: #0E2431;
      margin-left: 20px;
      font-size: 18px;
      font-weight: 500;
      margin: 0 6px;
    }
    
    .skills-details .boxes {
      width: 45%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    
    .skills-details .box {
      width: calc(100% / 2 - 20px);
      margin: 20px 0;
    }
    
    .skills-details .boxes {
      font-size: 20px;
      color: #4070f4;
    }
    
    .skills-details .boxes .per {
      font-size: 60px;
      color: #4070f4;
    }
    
    .services {
      padding-top: 40px;
    }
    
    .services .content {
      width: 80%;
      margin: 40px auto;
      font-family: 'Poppins', sans-serif;
    }
    
    .services .title {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
    }
    
    .services .title span {
      color: #0E2431;
      font-size: 30px;
      font-weight: 600;
      position: relative;
      padding-bottom: 8px;
    }
    
    .services .title span::before,
    .services .title span::after {
      content: '';
      position: absolute;
      height: 3px;
      width: 100%;
      background: #4070f4;
      left: 0;
      bottom: 0;
    }
    
    .services .title span::after {
      bottom: -7px;
      width: 70%;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .services .boxes {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    
    .services .boxes .box {
      margin: 20px 0;
      width: calc(100% / 3 - 20px);
      text-align: center;
      border-radius: 12px;
      padding: 30px 10px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
      cursor: default;
      transition: all 0.4s ease;
    }
    
    .services .boxes .box:hover {
      background: #4070f4;
      color: #fff;
    }
    
    .services .boxes .box .icon {
      height: 50px;
      width: 50px;
      background: #4070f4;
      border-radius: 50%;
      text-align: center;
      line-height: 50px;
      font-size: 18px;
      color: #fff;
      margin: 0 auto 10px auto;
      transition: all 0.4s ease;
    }
    
    .boxes .box:hover .icon {
      background-color: #fff;
      color: #4070f4;
    }
    
    .services .boxes .box:hover,
    .services .boxes .box:hover p {
      color: #0E2431;
      transition: all 0.4s ease;
    }
    
    .services .boxes .box:hover,
    .services .boxes .box:hover p {
      color: #fff;
    }
    
    .contact {
      background: #F0F8FF;
      padding-top: 40px;
    }
    
    .contact .content {
      width: 80%;
      margin: 40px auto;
      font-family: 'Poppins', sans-serif;
    }
    
    .contact .title {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
    }
    
    .contact .title span {
      color: #0E2431;
      font-size: 30px;
      font-weight: 600;
      position: relative;
      padding-bottom: 8px;
    }
    
    .contact .title span::before,
    .contact .title span::after {
      content: '';
      position: absolute;
      height: 3px;
      width: 100%;
      background: #4070f4;
      left: 0;
      bottom: 0;
    }
    
    .contact .title span::after {
      bottom: -7px;
      width: 70%;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .contact .text {
      width: 80%;
      text-align: center;
      margin: auto;
    }

    .contact .text p {
      font-size: 20px;
      font-weight: 500;
      margin-bottom: 20px;
    }
    
    .contact .text p span {
      font-weight: 600;
      color: #4070f4;
    }
    
    .contact .social-links {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
    .contact .social-links li {
      margin: 0 10px;
    }
    
    .contact .social-links a {
      font-size: 20px;
      color: #4070f4;
      transition: all 0.4s ease;
    }
    
    .contact .social-links a:hover {
      color: #333;
    }
    
    footer {
      background: #4070f4;
      padding: 15px 0;
      text-align: center;
      font-family: 'Poppins', sans-serif;
    }
    
    footer .text span {
      font-size: 17px;
      font-weight: 400;
      color: #fff;
    }
    
    footer .text span a {
      font-weight: 500;
      color: #FFF;
    }
    
    footer .text span a:hover {
      text-decoration: underline;
    }
    
    footer .social-media {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }
    
    footer .social-media a {
      font-size: 20px;
      color: #fff;
      margin: 0 10px;
      transition: all 0.4s ease;
    }
    
    footer .social-media a:hover {
      color: #333;
    }
  </style>
</head>
<body>
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  
  <nav>
    <div class="navbar">
      <div class="logo"><img src="PSLogo.jpg" alt="Logo" height="90px" width="100px"></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#project">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>
  
  <section class="home" id="home">
    <div class="home-content">
      <div class="text">
        <div class="text-one">Hello,</div>
        <div class="text-two">I'm Prerit Sharma</div>
        <div class="text-three">Web Designer</div>
        <div class="text-four">From Jaipur</div>
      </div>
      <div class="button">
        <button><a href="https://wa.me/+916375338302" target="_blank">Hire Me</a></button>
      </div>
    </div>
  </section>
  
  <section class="about" id="about">
    <div class="content">
      <div class="title"><span>About Me</span></div>
      <div class="about-details">
        <div class="left">
          <img src="myimg.jpg" alt="Profile Image" />
        </div>
        <div class="right">
          <div class="topic">Designing Is My Passion</div>
          <p>
            <?php
              echo "I am a Full-Stack developer based in Jaipur, India. I'm a Science graduate from J.S.University, and my journey in web development began after my final year of college. I'm passionate about creating beautiful, functional, and user-friendly websites, and I'm constantly pushing myself to learn and grow as a developer. Love building full-stack clones and side projects.";
            ?>
          </p>
          <div class="button">
            <button><a href="RESUME.pdf" download="My_Resume.pdf" class="download-btn">Download Resume</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="skills" id="skills">
    <div class="content">
      <div class="title"><span>My Skills</span></div>
      <div class="skills-details">
        <div class="text">
          <div class="topic">Skills Reflects Our Knowledge</div>
          <p>
            As a developer fluent in HTML, CSS, JavaScript, and PHP, my skill set is the cornerstone of my ability to craft compelling and functional web experiences. With HTML, I structure content with precision and accessibility in mind, ensuring seamless navigation for users. CSS allows me to bring designs to life, implementing layouts that are both visually stunning and responsive across devices. JavaScript adds interactivity to my projects, enabling dynamic features and enhancing user engagement. Meanwhile, PHP empowers me to build robust server-side logic, enabling seamless data processing and secure user authentication. It's the fusion of these skills that enables me to create personalized, feature-rich web solutions that leave a lasting impact.
          </p>
          <div class="experience">
            <?php
              $experience = "Fresher";
              $years = "In This Field Experience";
              echo "<div class='num'>$experience</div>";
              echo "<div class='exp'>$years</div>";
            ?>
          </div>
        </div>
        <div class="boxes">
          <div class="box">
            <div class="topic">HTML</div>
          </div>
          <div class="box">
            <div class="topic">CSS</div>
          </div>
          <div class="box">
            <div class="topic">JavaScript</div>
          </div>
          <div class="box">
            <div class="topic">PHP</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="project" id="project">
    <div class="content">
      <div class="title"><span>My Projects</span></div>
      <div class="projects">
        <div class="project-card">
          <div class="image">
            <img src="Images/Matrimony.jpg" alt="Matrimony Site Screenshot">
          </div>
          <div class="details">
            <h3>Matrimony Website</h3>
            <p>Developed a user-friendly platform to connect singles seeking meaningful relationships. Implemented advanced search filters and matching algorithms to ensure compatibility.</p>
            <a href="#">View Project</a>
          </div>
        </div>
        <div class="project-card">
          <div class="image">
            <img src="Images/ecom-banner.png" alt="E-commerce Site Screenshot">
          </div>
          <div class="details">
            <h3>E-commerce Website</h3>
            <p>Built a scalable e-commerce platform for seamless online shopping. Integrated secure payment gateways and efficient product management features.</p>
            <a href="#">View Project</a>
          </div>
        </div>
        <div class="project-card">
          <div class="image">
            <img src="Images/placeholder_image_keygen.jpg" alt="Key Generation Control Panel Screenshot">
          </div>
          <div class="details">
            <h3>Key Generation Control Panel</h3>
            <p>Developed a secure system for generating and managing API keys used to access various applications. Implemented robust access control and encryption mechanisms.</p>
            <a href="#">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="services" id="services">
    <div class="content">
      <div class="title"><span>My Services</span></div>
      <div class="boxes">
        <div class="box">
          <div class="icon">
            <i class="fas fa-desktop"></i>
          </div>
          <div class="topic">Web Development</div>
          <p>Web development is the art of building engaging and functional websites and web applications. It encompasses a wide range of skills and technologies, including HTML, CSS, JavaScript, and various backend languages like PHP, Python, or Node.js. From simple static websites to complex e-commerce platforms and interactive web applications, web developers bring ideas to life in the digital realm. Their expertise in design, coding, and problem-solving ensures that every aspect of a website, from its layout and functionality to its performance and security, meets the needs and expectations of users. In an ever-evolving digital landscape, web developers play a crucial role in shaping the online world, driving innovation, and enhancing the user experience across the internet.</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-paint-brush"></i>
          </div>
          <div class="topic">Graphic Design</div>
          <p>Graphic designers harness the power of tools like CorelDRAW and Photoshop to create stunning visual masterpieces. With CorelDRAW's intuitive vector-based design capabilities, they craft intricate logos, illustrations, and layouts with precision and flexibility. Meanwhile, Photoshop serves as their digital canvas, allowing them to manipulate images, apply effects, and retouch photos with unparalleled finesse. Together, these software packages empower designers to unleash their creativity, bringing ideas to life in vibrant colors and captivating compositions. Whether designing print materials, digital assets, or multimedia presentations, CorelDRAW and Photoshop are indispensable allies in the arsenal of any graphic designer, enabling them to turn imagination into reality with skill and flair.</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-globe"></i>
          </div>
          <div class="topic">Digital Marketing</div>
          <p>Digital marketing is a dynamic and multifaceted field that leverages online platforms and technologies to promote brands, engage audiences, and drive business growth. From search engine optimization (SEO) and pay-per-click (PPC) advertising to social media marketing and email campaigns, digital marketers employ a variety of strategies to reach and resonate with target audiences. By harnessing the power of data analytics and consumer insights, they optimize campaigns for maximum impact and ROI, ensuring every marketing dollar delivers measurable results. In an increasingly digital world, digital marketing is not just a tool but a strategic imperative for businesses looking to thrive and succeed in the competitive marketplace.</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact" id="contact">
    <div class="content">
      <div class="title"><span>Contact Me</span></div>
      <div class="contact-info">
        <p><i class="fas fa-user"></i> Name: Prerit Mudgal</p>
        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:Prerit.sharma1150@gmail.com">prerit.sharma1150@gmail.com</a></p>
        <p><i class="fas fa-phone"></i> Phone: +91 6375338302</p>
        
        <p><i class="fas fa-map-marker-alt"></i> Location: Jaipur , Rajasthan.</p>
        
        <ul class="social-links">
          <li><a href="https://www.facebook.com/prerit.sharma.5680"><i class="fab fa-facebook-f"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <footer>
    <div class="content">
      <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> Prerit Sharma . All Rights Reserved.</p>
      </div>
      <div class="social-media">
        <a href="https://github.com/Prerit-S" class="fab fa-github"></a>
        <a href="https://www.linkedin.com/in/prerit-sharma-558843136" class="fab fa-linkedin"></a>
        <a href="https://www.instagram.com/__.yours_._yashu" class="fab fa-instagram"></a>
      </div>
    </div>
  </footer>
  
  <script>
    document.addEventListener('DOMContentLoaded', function()){
      const nav = document.querySelector("nav");
      const scrollBtn = document.querySelector(".scroll-button a");
      const body = document.body;
      const navBar = document.querySelector(".navbar");
      const menuBtn = document.querySelector(".menu-btn");
      const cancelBtn = document.querySelector(".cancel-btn");
      const themeToggleBtn = document.getElementById('theme-toggle');
      const navLinks = document.querySelectorAll(".menu li a");
      let isDarkMode = false;}
  
      window.onscroll = function() {
        if (document.documentElement.scrollTop > 20) {
          nav.classList.add("sticky");
          scrollBtn.style.display = "block";
        } else {
          nav.classList.remove("sticky");
          scrollBtn.style.display = "none";
        }
      };
  
      menuBtn.onclick = function() {
        navBar.classList.add("active");
        menuBtn.style.opacity = "0";
        menuBtn.style.pointerEvents = "none";
        body.style.overflow = "hidden";
        scrollBtn.style.pointerEvents = "none";
      };
  
      cancelBtn.onclick = function() {
        navBar.classList.remove("active");
        menuBtn.style.opacity = "1";
        menuBtn.style.pointerEvents = "auto";
        body.style.overflow = "auto";
        scrollBtn.style.pointerEvents = "auto";
      };
  
      navLinks.forEach(link => {
        link.addEventListener("click", function() {
          navBar.classList.remove("active");
          menuBtn.stylelink.addEventListener("click", function() {
            navBar.classList.remove("active");
            menuBtn.style.opacity = "1";
            menuBtn.style.pointerEvents = "auto";
            body.style.overflow = "auto";
            scrollBtn.style.pointerEvents = "auto";
            navLinks.forEach(link => {
              link.style.animation = "fadeOut 0.5s ease-in-out";
            });
            setTimeout(() => {
              navLinks.forEach(link => {
                link.style.animation = "";
              });
            }, 500);
          });
        });
      });
    </script>
  </body>
</html>
