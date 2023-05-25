<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ---Customized Style Sheet---- -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- ---Bootstrap CDN---- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- ---Font Awesome CDN---- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <title>eFleetPass Energy</title>
</head>

<body>
    <!-- --------------------------------Header----------------------------- -->
    <header class="border-bottom transparent__header" id="main__header">
        <nav class="navbar navbar-expand-lg navbar-light header__navbar__light">
            <div class="container">
                <!-- ---Header Logo--- -->
                <div class="header_logo">
                    <a href="/" class="navbar-brand" href="#"><img src="images/Group 27.png" alt="" /></a>
                </div>
                <!-- ---Header Toggle Button--- -->
                <button class="navbar-toggler header__navbar_toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon header__navbar__toggler_icon">
                        <i class="fa-solid fa-bars"></i></span>
                </button>
                <!-- ---Header NavBar Button--- -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav header__navbar__nav mx-auto mb-5 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item header__navbar__nav__dropdown dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                            <ul class="dropdown-menu header__dropdown__menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item btn header__dropdown_item" href="/product2">Teltonika
                                        TelcoChargers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Charging</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact US</a>
                        </li>
                    </ul>
                    <!-- ---Header Social Button--- -->
                    <div class="d-flex me-6">
                        <div class="header__social__icons">
                            <input class="form-control d-none" type="text" id="searchInp" placeholder="search here">
                            <i class="fa-solid fa-user"></i>
                            <i class="fa-solid fa-magnifying-glass" id="searchBtn"></i>
                            <a href="/cart"> <i class="fa-solid fa-bag-shopping"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <!-- --------------------------------Footer----------------------------- -->
    <footer>
        <div class="footer__bg__color">
            <div class="container">
                <div class="row py-5">
                    <!-- ---column 1--- -->
                    <div class="col-md-3">
                        <div class="footer__col">
                            <div class="footer__col__img">
                                <img src="images/Group 27copy.png" alt="" />
                            </div>
                            <p>
                                Smart electric car charging is an entirely new reality. Each
                                morning you will find a fully charged serviced car.
                            </p>
                        </div>
                    </div>
                    <!-- ---column 2--- -->
                    <div class="col-md-3 d-md-flex justify-content-md-center">
                        <div class="footer__col col__1">
                            <h4>Quick Links</h4>
                            <ul class="ps-0">
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact</a></li>
                                <li><a href="">eFleetPass API</a></li>
                                <li><a href="">eFleetPass Fees</a></li>
                                <li><a href="">eFleetPass Charges</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ---column 3--- -->
                    <div class="col-md-2">
                        <div class="footer__col col__1">
                            <h4>Useful Links</h4>
                            <ul class="">
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Disclaimer</a></li>
                                <li><a href="">Cookie Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ---column 4--- -->
                    <div class="col-md-3">
                        <div class="footer__col">
                            <h4>Find Us</h4>
                            <i class="fa-solid fa-location-dot d-flex">
                                <p>Level 1, 5 George St, North Strathfield NSW 2137</p>
                            </i>
                            <i class="fa-solid fa-phone d-flex">
                                <p>1300 88 53 67</p>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center footer__row__2">
                    <div class="col-6">
                        <p>Copyright © 2023. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- ---Bootstrap Script---- -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- sript fot search input -->
    <script>
    let searchInp = document.getElementById('searchInp');
    let searchBtn = document.getElementById('searchBtn');
    searchBtn.onclick = () => {
        searchInp.classList.toggle('d-none')
    }
    </script>



</body>

</html>