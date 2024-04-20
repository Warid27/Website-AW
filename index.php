<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Warid</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img\logo_AW.svg">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#"><img src="img\logo_AW.svg" alt="AW"></a>
            </div>
            <ul class="links" >
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=skill">Skill</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
            <div class="toggleNav">
                <i class="fa-solid fa-sun" id="toggleDark"></i>
                <a href="index.php?page=login" class="login_btn">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <div class="toggle_btn i">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>

        <div class="dropdown_menu open">
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=skill">Skill</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li>
                <a href="index.php?page=login" class="login_btn"><i class="fa-solid fa-user"></i></a>
            </li>
        </div>
    </header>

    <div class="contents-container">
    <div id="contents">
        <?php
           if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "page\home.php";
                    break;
                case 'about':
                    include "page\about.php";
                    break;
                case 'contact':
                    include "page\contact.php";
                    break;
                case 'skill':
                    include "page\skill.php";
                    break;
                case 'login':
                    include "page\login.php";
                    break;
            }
           }
           else{
            include "page\home.php";
            }
        ?>
    </div>
    </div>

    <footer>
        <p>&copy; Copyright PPLG 2024 | SMK Bisa SMK Hebat SMK Negeri 2 Magelang Unggul dan Juara</p>
    </footer>
</body>
</html>