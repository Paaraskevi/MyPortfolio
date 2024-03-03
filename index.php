<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
       <script src="https://unpkg.com/htmlincludejs"></script>
    <title>My Personal Portfolio</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <!-- <include src="./header.html"></include> -->
    <?php include 'header.php'; ?>

    <!-- Home Section  -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello</h3>
            <h2>My name is Asprou Paraskevi</h2>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <div class="social-media">
                <a href="https://www.facebook.com/profile.php?id=100022614636397"><i class="fab fa-facebook"></i></a>
                <a href="https://github.com/Paaraskevi"><i class="fab fa-github"></i></a>
                <a href="www.linkedin.com/in/eva-asprou-8a38831a9"><i class="fab fa-linkedin"></i></a>
            </div>
            <a href="assets/files/CV_Asprou_Paraskevi.pdf" download class="btn">Download CV</a>
        </div>
        <div class="home-img">
            <img src="assets/images/image1.jpg" class="rounder-circle">
        </div>
    </section>
    <!--About Section-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="assets/images/image1.jpg" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Full Stack Web development</h3>
            <p>
                With little experience in the IT field, looking<br> for a challenging position
                where I can utilize my knowledge and skills.
                Having developed solutions from front-end to back-end<br>
                As a result, I have been able to grow as my skills adapt to rapidly changing<br>
                requirements and communicate effectively with development teams,<br>
                making me an ideal candidate in the IT industry.
            </p>
            <a href="#" class="btn">Read more </a>
        </div>
    </section>
    <!--Services section-->
    <section class="services" id="services">
        <h2 class="headinng">My <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class="fa-solid fa-code"></i>
                <h3>Web Development</h3>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-palette"></i>
                <h3>CSS Desing</h3>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-database"></i>
                <h3>SQL</h3>
            </div>
            <div class="services-box">
                <i class="fa-brands fa-php"></i>
                <h3>PHP</h3>
            </div>
            <div class="services-box">
                <i class="fa-brands fa-html5"></i>
                <h3>HTML</h3>
            </div>
            <div class="services-box">
                <i class="fa-brands fa-js"></i>
                <h3>JavaScript</h3>
            </div>
          
        </div>
    </section>
    <!--Porfolio senction-->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Projects</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="assets/images/logo.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Desing</h4>
                    <i class="fa-soild fa-up-right-form-square"></i>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/images/logo.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Desing</h4>
                    <i class="fa-soild fa-up-right-form-square"></i>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="assets/images/logo.png" alt="">
                <div class="portfolio-layer">
                    <h4>Web Desing</h4>
                 
                    <i class="fa-soild fa-up-right-form-square"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Contact section-->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <form action="https://api.web3forms.com/submit" method="POST" id="form">
            <input type="hidden" name="access_key" value="b48fc2e6-bb12-42cb-bcc3-98f8788bc6de" />

            <div class="input-box">
                <input type="text" name="fullName" placeholder="Full Name">
                <input type="email" name="email" placeholder="E-mail Address">
            </div>
            <div class="input-box">
                <input type="tel" name="mobile" placeholder="Mobile">
                <input type="text" name="subject" placeholder="E-mail Subject">
            </div>
            <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
            <!-- <input type="hidden" name="redirect" value="file:///C:/Users/euawh/OneDrive/Documents/porfolio/home.html#portfolio"> -->
            <input type="submit" value="Send Message" class="btn">
        </form>

    </section>
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Asprou Paraskevi</p>
        </div>
        <div class="footer-iconTop">
            <a href="home.html"><i class="fas fa-angle-up"></i></a>
        </div>
    </footer>


    <script>
        document.getElementById("contact-form").addEventListener("submit", function (event) {
            event.preventDefault();

            var fullname = document.getElementById("fullname").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("mobile").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;


            document.getElementById("contact-form").reset();

        });
    </script>
    <!-- Script -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="JS/main.js"></script>
    <script src="JS/contact.js"></script>
    <script src="JS/nav.js"></script>
</body>

</html>