<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Kerukunan Umat Beragama Kabupaten Pelalawan</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/frontsite/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header.masthead {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-size: cover;
            background-position: center;
            color: white;
            transition: background-image 3s ease-in-out; /* Tambahkan animasi transisi */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .marquee-container {
            padding: 20px;
        }

        .masthead-heading {
            font-size: 36px;
        }
    </style>
</head>

<body>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url(<?= BASEURL; ?>/assets/frontsite/img/home.jpg)">
        <div class="overlay">
            <div class="marquee-container">
                <marquee behavior="scroll" direction="left" scrollamount="10">
                    <span>
                        <b><font color="white">
                            <font color="yellow">/////</font> 
                                Selamat Datang di Website Forum Kerukunan Umat Beragama Kabupaten Pelalawan 
                            <font color="yellow">|||||</font>
                        </font></b>
                    </span>
                    <span>
                        <b><font color="white">
                                Ini Adalah Website Resmi Dari Forum Kerukunan Umat Beragama Kabupaten Pelalawan 
                            <font color="yellow">\\\\\</font>
                        </font></b>
                    </span>
                </marquee>
            </div>
            <br><br><br><br><br>
            <div class="container">
                <div class="masthead-heading text-uppercase"><font color="#ffc800">Forum Kerukunan Umat Beragama Kabupaten Pelalawan</font></div>
            </div>
            </br></br></br></br></br>
        </div>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var backgroundImages = [
                "<?= BASEURL; ?>/assets/frontsite/img/foto_galery/fb33.jpeg",
                "<?= BASEURL; ?>/assets/frontsite/img/foto_galery/fb11.jpeg",
                "<?= BASEURL; ?>/assets/frontsite/img/foto_galery/fb22.jpeg",
                "<?= BASEURL; ?>/assets/frontsite/img/home.jpg",
                
            ];

            var currentIndex = 0;
            var interval = 5000; // Ganti kecepatan perubahan latar belakang dalam milidetik

            function changeBackground() {
                currentIndex = (currentIndex + 1) % backgroundImages.length;
                var imageUrl = backgroundImages[currentIndex];
                document.querySelector(".masthead").style.backgroundImage = "url(" + imageUrl + ")";
            }

            setInterval(changeBackground, interval);
        });
    </script>
</body>

</html>
