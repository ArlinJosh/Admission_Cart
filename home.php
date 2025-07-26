<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- 
    - primary meta tag
  -->
  <title>EduWeb - The Best Program to Enroll for Exchange</title>
  <meta
    name="title"
    content="EduWeb - The Best Program to Enroll for Exchange" />
  <meta
    name="description"
    content="This is an education html template made by codewithsadee" />

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css" />

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet" />

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg" />
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg" />
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg" />
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg" />
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png" />
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <a
        href="#"
        class="logo"
        style="display: flex; align-items: center; gap: 1rem">
        <img
          src="./assets/images/LOGO.png"
          width="60"
          height="60"
          style="border-radius: 50%"
          alt="EduWeb logo" />
        <h3 style="color: black">Admission Cart</h3>
      </a>

      <nav class="navbar" data-navbar>
        <div class="wrapper">
          <a href="#" class="logo">
            <img
              src="./assets/images/LOGO.png"
              width="60"
              height="60"
              style="border-radius: 50%"
              alt="EduWeb logo" />
          </a>

          <button
            class="nav-close-btn"
            aria-label="close menu"
            data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="./home.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="./about.html" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="./courses.html" class="navbar-link" data-nav-link>Courses</a>
          </li>
          <li class="navbar-item">
            <a href="./quiz.php" class="navbar-link" data-nav-link>Quiz</a>
          </li>

          <li class="navbar-item">
            <a href="./contact.html" class="navbar-link" data-nav-link>Contact</a>
          </li>
        </ul>
      </nav>

      <div class="header-actions">
        <a href="./admission.php" class="btn has-before" id="openFormBtn">
          <span class="span">Admissions</span>

          <ion-icon
            name="arrow-forward-outline"
            aria-hidden="true"></ion-icon>
        </a>
        <style>
          /* Modal styles */
          .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, 0.6);
          }

          .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 12px;
            width: 90%;
            max-width: 700px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            animation: slideDown 0.4s ease;
          }

          .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
          }

          .close:hover,
          .close:focus {
            color: black;
          }

          @keyframes slideDown {
            from {
              transform: translateY(-30px);
              opacity: 0;
            }

            to {
              transform: translateY(0);
              opacity: 1;
            }
          }
        </style>
        <script>
          const modal = document.getElementById("admissionModal");
          const btn = document.getElementById("openFormBtn");
          const closeBtn = document.querySelector(".close");

          btn.onclick = function() {
            modal.style.display = "block";
            document.body.style.overflow = "hidden"; // prevent background scroll
          }

          closeBtn.onclick = function() {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
          }

          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
              document.body.style.overflow = "auto";
            }
          }
        </script>


        <button
          class="header-action-btn"
          aria-label="open menu"
          data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
      </div>
      <!-- Admission Form Modal -->
      <div id="admissionModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>

          <!-- Paste your form here -->
          <!-- Paste the form container (the one starting with <div class="container">...</form>) -->

        </div>
      </div>


      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <section
        class="section hero has-bg-image"
        id="home"
        aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">
          <div class="hero-content">
            <?php
            include("./conn/conn.php");

            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $questionNumber = 0;
            if ($result) {
              $name = $result[0]['name'];
            } else {
              $name = "guest";
            }

            foreach ($result as $row) {
              $name = $row['name'];
            }
            ?>

            <h3 class="col-9">Hello <?= $name ?>! Welcome To EduWeb</h3>
            <h1 class="h1 section-title">
              The Best Platform to <span class="span">Enhance</span> Your
              Skills
            </h1>

            <p class="hero-text">
              Admissions | Courses | 24/7 Support | Online Learning
            </p>

            <a href="./courses.html" class="btn has-before">
              <span class="span">Find courses</span>

              <ion-icon
                name="arrow-forward-outline"
                aria-hidden="true"></ion-icon>
            </a>
          </div>

          <figure class="hero-banner">
            <div class="img-holder one" style="--width: 270; --height: 300">
              <img
                src="./assets/images/hero-banner-1.jpg"
                width="270"
                height="300"
                alt="hero banner"
                class="img-cover" />
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370">
              <img
                src="./assets/images/hero-banner-2.jpg"
                width="240"
                height="370"
                alt="hero banner"
                class="img-cover" />
            </div>



            <img
              src="./assets/images/hero-shape-2.png"
              width="622"
              height="551"
              alt=""
              class="shape hero-shape-2" />
          </figure>
        </div>
      </section>

      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">
          <p class="section-subtitle">Categories</p>

          <h2 class="h2 section-title">
            Online <span class="span">Classes</span> For Remote Learning.
          </h2>

          <p class="section-text">
            Consectetur adipiscing elit sed do eiusmod tempor.
          </p>

          <ul class="grid-list">
            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">
                <div class="card-icon">
                  <img
                    src="./assets/images/category-1.svg"
                    width="40"
                    height="40"
                    loading="lazy"
                    alt="Online Degree Programs"
                    class="img" />
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Online Degree Programs</a>
                </h3>


              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">
                <div class="card-icon">
                  <img
                    src="./assets/images/category-2.svg"
                    width="40"
                    height="40"
                    loading="lazy"
                    alt="Non-Degree Programs"
                    class="img" />
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Non-Degree Programs</a>
                </h3>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">
                <div class="card-icon">
                  <img
                    src="./assets/images/category-3.svg"
                    width="40"
                    height="40"
                    loading="lazy"
                    alt="Off-Campus Programs"
                    class="img" />
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Off-Campus Programs</a>
                </h3>


              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">
                <div class="card-icon">
                  <img
                    src="./assets/images/category-4.svg"
                    width="40"
                    height="40"
                    loading="lazy"
                    alt="Hybrid Distance Programs"
                    class="img" />
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hybrid Distance Programs</a>
                </h3>


              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">
          <figure class="about-banner">
            <div class="img-holder" style="--width: 520; --height: 370">
              <img
                src="./assets/images/about-banner.jpg"
                width="520"
                height="370"
                loading="lazy"
                alt="about banner"
                class="img-cover" />
            </div>

            <img
              src="./assets/images/about-shape-1.svg"
              width="360"
              height="420"
              loading="lazy"
              alt=""
              class="shape about-shape-1" />

            <img
              src="./assets/images/about-shape-2.svg"
              width="371"
              height="220"
              loading="lazy"
              alt=""
              class="shape about-shape-2" />

            <img
              src="./assets/images/about-shape-3.png"
              width="722"
              height="528"
              loading="lazy"
              alt=""
              class="shape about-shape-3" />
          </figure>

          <div class="about-content">
            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              Over 10 Years in <span class="span">Distant learning</span> for
              Skill Development
            </h2>

            <p class="section-text">
              EduWeb is a leading online education platform dedicated to providing high-quality learning experiences for students worldwide. With a decade of expertise in distant learning, we offer a wide range of courses designed to enhance skills and foster personal growth. Our mission is to make education accessible, flexible, and engaging for everyone.
            </p>



            <img
              src="./assets/images/about-shape-4.svg"
              width="100"
              height="100"
              loading="lazy"
              alt=""
              class="shape about-shape-4" />
          </div>
        </div>
      </section>

      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course">
        <div class="container">
          <p class="section-subtitle">Popular Courses</p>

          <h2 class="h2 section-title">Pick A Course To Get Started</h2>

          <ul class="grid-list">
            <li>
              <div class="course-card">
                <figure
                  class="card-banner img-holder"
                  style="--width: 370; --height: 220">
                  <img
                    src="./assets/images/course-1.jpg"
                    width="370"
                    height="220"
                    loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS"
                    class="img-cover" />
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">
                  <span class="badge">Beginner</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Build Responsive Real- World Websites with HTML and
                      CSS</a>
                  </h3>

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Rating)</p>
                  </div>


                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <ion-icon
                        name="library-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">8 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon
                        name="people-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">20 Students</span>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li>
              <div class="course-card">
                <figure
                  class="card-banner img-holder"
                  style="--width: 370; --height: 220">
                  <img
                    src="./assets/images/course-2.jpg"
                    width="370"
                    height="220"
                    loading="lazy"
                    alt="Java Programming Masterclass for Software Developers"
                    class="img-cover" />
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">8 Weeks</span>
                </div>

                <div class="card-content">
                  <span class="badge">Advanced</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Java Programming Masterclass for Software Developers</a>
                  </h3>

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /9 Rating)</p>
                  </div>


                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <ion-icon
                        name="library-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">15 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon
                        name="people-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">35 Students</span>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <li>
              <div class="course-card">
                <figure
                  class="card-banner img-holder"
                  style="--width: 370; --height: 220">
                  <img
                    src="./assets/images/course-3.jpg"
                    width="370"
                    height="220"
                    loading="lazy"
                    alt="The Complete Camtasia Course for Content Creators"
                    class="img-cover" />
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">
                  <span class="badge">Intermediate</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">The Complete Camtasia Course for Content Creators</a>
                  </h3>

                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.9 /7 Rating)</p>
                  </div>


                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <ion-icon
                        name="library-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">13 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon
                        name="people-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">18 Students</span>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>

          <a href="./courses.html" class="btn has-before">
            <span class="span">Browse more courses</span>

            <ion-icon
              name="arrow-forward-outline"
              aria-hidden="true"></ion-icon>
          </a>
        </div>
      </section>

      <!-- 
        - #VIDEO
      -->

      <section
        class="video has-bg-image"
        aria-label="video"
        style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">
          <div class="video-card">
            <div
              class="video-banner img-holder has-after"
              style="--width: ; --height: ">

            </div>

            <img
              src="./assets/images/video-shape-1.png"
              width="1089"
              height="605"
              loading="lazy"
              alt=""
              class="shape video-shape-1" />

            <img
              src="./assets/images/video-shape-2.png"
              width="158"
              height="174"
              loading="lazy"
              alt=""
              class="shape video-shape-2" />
          </div>
        </div>
      </section>

      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">
          <ul class="grid-list">
            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">29.3k</h3>

                <p class="card-text">Student Enrolled</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">32.4K</h3>

                <p class="card-text">Class Completed</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">100%</h3>

                <p class="card-text">Satisfaction Rate</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 42, 94%, 55%">
                <h3 class="card-title">354+</h3>

                <p class="card-text">Top Instructors</p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #BLOG
      -->

      <section
        class="section blog has-bg-image"
        id="blog"
        aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container">
          <p class="section-subtitle">Latest Articles</p>

          <h2 class="h2 section-title">Get News With Eduweb</h2>

          <ul class="grid-list">
            <li>
              <div class="blog-card">
                <figure
                  class="card-banner img-holder has-after"
                  style="--width: 370; --height: 370">
                  <img
                    src="./assets/images/blog-1.jpg"
                    width="370"
                    height="370"
                    loading="lazy"
                    alt="Become A Better Blogger: Content Planning"
                    class="img-cover" />
                </figure>

                <div class="card-content">
                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon
                      name="arrow-forward-outline"
                      aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                  </h3>

                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <ion-icon
                        name="calendar-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">Oct 10, 2021</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon
                        name="chatbubbles-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">Com 09</span>
                    </li>
                  </ul>

                  
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure
                  class="card-banner img-holder has-after"
                  style="--width: 370; --height: 370">
                  <img
                    src="./assets/images/blog-2.jpg"
                    width="370"
                    height="370"
                    loading="lazy"
                    alt="Become A Better Blogger: Content Planning"
                    class="img-cover" />
                </figure>

                <div class="card-content">
                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon
                      name="arrow-forward-outline"
                      aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                  </h3>

                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <ion-icon
                        name="calendar-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">Oct 10, 2021</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon
                        name="chatbubbles-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">Com 09</span>
                    </li>
                  </ul>

                  
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure
                  class="card-banner img-holder has-after"
                  style="--width: 370; --height: 370">
                  <img
                    src="./assets/images/blog-3.jpg"
                    width="370"
                    height="370"
                    loading="lazy"
                    alt="Become A Better Blogger: Content Planning"
                    class="img-cover" />
                </figure>

                <div class="card-content">
                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon
                      name="arrow-forward-outline"
                      aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                  </h3>

                  <ul class="card-meta-list">
                    <li class="card-meta-item">
                      <ion-icon
                        name="calendar-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">Oct 10, 2021</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon
                        name="chatbubbles-outline"
                        aria-hidden="true"></ion-icon>

                      <span class="span">Com 09</span>
                    </li>
                  </ul>

                  
                </div>
              </div>
            </li>
          </ul>

          <img
            src="./assets/images/blog-shape.png"
            width="186"
            height="186"
            loading="lazy"
            alt=""
            class="shape blog-shape" />
        </div>
      </section>
    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer
    class="footer"
    style="background-image: url('./assets/images/footer-bg.png')">
    <div class="footer-top section">
      <div class="container grid-list">
        <div class="footer-brand">
          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">#1234, on earth, in solar system, Milkyway</address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+011234567890" class="footer-link">+91 6364541431</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@eduweb.com" class="footer-link">info@eduweb.com</a>
          </div>
        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>

          <li>
            <a href="./about.html" class="footer-link">About</a>
          </li>

          <li>
            <a href="./courses.html" class="footer-link">Courses</a>
          </li>

         

          <li>
            <a href="./quiz.php" class="footer-link">Quiz</a>
          </li>

         

          
        </ul>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="./contact.html" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="./index.php" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link">Coming Soon</a>
          </li>
        </ul>

        <div class="footer-list">
          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter
            subscription
          </p>

          <form action="" class="newsletter-form">
            <input
              type="email"
              name="email_address"
              placeholder="Your email"
              required
              class="input-field" />

            <button type="submit" class="btn has-before">
              <span class="span">Contact</span>

              <ion-icon
                name="arrow-forward-outline"
                aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          Copyright 2025 All Rights Reserved by
          <a href="#" class="copyright-link">Arlin</a>
        </p>
      </div>
    </div>
  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a
    href="#top"
    class="back-top-btn"
    aria-label="back top top"
    data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>