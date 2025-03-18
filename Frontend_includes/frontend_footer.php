<html>
<head>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#myservice_section">Course</a></li>
                        <li><a href="#myservice_section">Class</a></li>
                        <li><a href="#myservice_section">Exams</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Team</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Code Warriors</h3>
                    <p>We are the EEY4189 Software Design in Group Project Team. We created this system for online education.</p>
                </div>
                <div class="col item social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <p class="copyright">Code Warriors © 2025</p>
        </div>
    </footer>
</div>

<style>
/* Footer Styles */
.footer-dark {
    padding: 50px 0;
    color: #f0f9ff;
    background-color: #282d32;
}

.footer-dark h3 {
    margin-top: 0;
    margin-bottom: 12px;
    font-weight: bold;
    font-size: 16px;
}

.footer-dark ul {
    padding: 0;
    list-style: none;
    line-height: 1.6;
    font-size: 14px;
    margin-bottom: 0;
}

.footer-dark ul a {
    color: inherit;
    text-decoration: none;
    opacity: 0.6;
}

.footer-dark ul a:hover {
    opacity: 0.8;
}

@media (max-width: 767px) {
    .footer-dark .item:not(.social) {
        text-align: center;
        padding-bottom: 20px;
    }
}

.footer-dark .item.text {
    margin-bottom: 36px;
}

@media (max-width: 767px) {
    .footer-dark .item.text {
        margin-bottom: 0;
    }
}

.footer-dark .item.text p {
    opacity: 0.6;
    margin-bottom: 0;
}

.footer-dark .item.social {
    text-align: center;
}

@media (max-width: 991px) {
    .footer-dark .item.social {
        text-align: center;
        margin-top: 20px;
    }
}

/* Social Icons Styling */
.footer-dark .item.social > a {
    font-size: 20px;
    width: 36px;
    height: 36px;
    line-height: 36px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
    margin: 0 8px;
    color: #fff;
    opacity: 0.75;
    transition: all 0.3s ease-in-out; /* Smooth transition */
}

/* Hover Effect: Changes to White */
.footer-dark .item.social > a:hover {
    background-color: white;
    color: #282d32;
    opacity: 1;
    transform: scale(1.1); /* Slight zoom effect */
}

.footer-dark .copyright {
    text-align: center;
    padding-top: 24px;
    opacity: 0.3;
    font-size: 13px;
    margin-bottom: 0;
}
</style>

</html>
