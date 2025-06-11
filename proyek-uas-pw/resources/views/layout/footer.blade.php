<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        .footer {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            padding: 40px 20px;
            font-family: sans-serif;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .footer-logo {
            flex: 1;
            min-width: 250px;
        }

        .logo-img {
            width: 130px;
            margin: 30px;
            margin-left: 250px;
            margin-top: 60px;
        }

        .footer-about {
            flex: 1;
            min-width: 230px;
            margin-left: 100px;
            margin-top: 45px;
        }

        .footer-about h4 {
            margin-bottom: 10px;
        }

        .footer-about ul {
            list-style: none;
            padding: 0;
        }

        .footer-about ul li {
            margin-bottom: 8px;
        }

        .footer-about ul li a {
            color: #000000;
            text-decoration: none;
        }

        .footer-about ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="{{asset('assets/img/bird.png')}}" alt="Trapel" class="logo-img">
            </div>
            <div class="footer-about">
                <h3>Contact Us</h3>
                <ul>
                    <li>Hubungi kami untuk pertanyaan, masukan, keluhan, dan komplimen.</li>
                    <li><b class="bi bi-telephone"> No Telp:</b> +62 0997 367</li>
                    <li><b class="bi bi-envelope"> Email:</b> trapel@gmail.com</li>
                </ul>
            </div>
            <div class="footer-about">
                <h4>About Trapel</h4>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
        <div style="text-align: center; margin-top: 30px; font-size: 16px;">
            © 2025 Trapel. All rights reserved.
        </div>
    </footer>
</body>


</html>