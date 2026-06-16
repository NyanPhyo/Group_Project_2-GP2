<?php 
session_start();
$page = 'home';
include 'header.inc';
include 'nav.inc'; 
?>
     
    <!--main contain main contents of the web page-->
    <main>
        <div class="banner">
            <video class="banner-bg" autoplay muted loop playsinline>
                <source src="resources/images/banner_bg_edited.mp4" type="video/mp4">
            </video>
            <div class="text">
                <h2>3A1W Cybersecurity</h2>
                <p class="tagline">Securing the future of digital innovation</p>
                <p class="description">
                At 3A1W, we build advanced security solutions to protect businesses, data, and infrastructure in an evolving cyber landscape.
                </p>
                <a href="#company-info" class="btn">Lets get started</a>
            </div>
        </div>

        <!--3 cards for company infos-->
        <section class="info-wrapper">
            <div class="info" id="company-info">

            <!--card 1-->
                <div class="card">
                    <img src="resources/svg/our_vision.svg" alt="svg of our_vision">
                    <h3>Our Vision</h3>
                    <p>To build a digitally secure future where organizations can operate with confidence, free from cyber threats. We aim to be a trusted leader in cybersecurity, protecting data, systems, and people in an increasingly connected world.</p>
                </div>
                <!--card 1-->
                <div class="card">
                    <img src="resources/svg/our_mission.svg" alt="svg of our_mission">
                    <h3>Our Mission</h3>
                    <p>Our mission is to deliver reliable, cutting-edge cybersecurity solutions that safeguard businesses from evolving threats. Through proactive monitoring, ethical hacking, and continuous innovation, we help organizations stay resilient against cyber attacks.</p>
                </div>
                <!--card 1-->
                <div class="card">
                    <img src="resources/svg/why_choose_us.svg" alt="svg of why_choose_us">
                    <h3>Why Choose Us</h3>
                    <p>We combine technical expertise with real-world experience to provide effective security solutions. Our team of skilled professionals uses industry-standard tools and best practices to identify vulnerabilities, respond to threats, and strengthen your overall security posture.</p>
                </div>
            </div>
        </section>
        
    </main>

<?php include 'footer.inc'; ?>

