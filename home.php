<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Title -->
    <header>
        <img class="logo" src="image/linkedin.png">
        <ul class="navbar">
            <li>
                <svg class="icon_nav" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <a href="http://localhost/TADKP/home.php" class="active">Home</a>
            </li>
            <li><svg class="icon_nav" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                <a href="http://localhost/TADKP/about.php">About</a>
            </li>
        </ul>
    </header>
    <!-- Main page -->
    <main>
        <div class="menu">
            <form class="drop_down" action="job_listing.php" method="GET">
                <label for="field">Pilih bidang anda:</label>
                <select name="field" id="field">
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Data Science">Data Science</option>
                    <option value="Cloud Computing">Cloud Computing</option>
                    <option value="Enterprise Resource Planning">Enterprise Resource Planning</option>
                    <option value="Machine Learning">Machine Learning</option>
                </select>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="profile">
            <img class="cv" src="./image/CV.png">
        </div>
        <div class="training">
        <p>
            <a href="https://revou.co/fundamental-course-software-engineering?&source=webmc">
            RevoU Bootcamp
            </a>
            <img class="logo_boot" src="./image/logo_revou.png">
        </p>
            <a href="https://product.binaracademy.com/binargo">
            Binar Bootcamp
            </a>
            <img class="logo_boot" src="./image/logo_binar.png">
        </p>
        <p>
            <a href="https://www.hacktiv8.com/web-developer-program">
            Hacktiv8 Bootcamp
            </a>
            <img class="logo_boot" src="./image/logo_hacktiv8.png">
        </p>
        </div>
    </main>
    <!-- Footer -->
</body>

</html>