@extends('layout')
@section('content')
<main>
    <!-- ------------------Hero Banner--------------------- -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner carousel_banner mb-6">
            <!-- ---carousel item 1 content--- -->
            <div class="carousel-item hero__banner__bg active">
                <img src="images/chuttersnap-xJLsHl0hIik-unsplash 1.png" class="d-block w-100" alt="..." />
                <div class="hero__banner__gradient__overlay"></div>
                <div class="hero__carousel__item">
                    <div class="container">
                        <div class="row carousel__row d-flex justify-content-md-start">
                            <div class="col-lg-8 col-md-9 col-sm-10 pe-5">
                                <h6 class="text-uppercase">we serve what you need.</h6>
                                <h1 class="mb-4">
                                    Empowering Electric Vehicle with
                                    <span>Smarter Charging Solutions</span>
                                </h1>
                                <p class="lh-base mb-4">
                                    With the rise in popularity of electric vehicles (EVs),
                                    the need for intelligent and efficient charging solutions
                                    has become increasingly evident. The advent of smarter
                                    chargers has brought about a paradigm shift in how we fuel
                                    our EVs, introducing a new era of convenience, safety, and
                                    sustainability. These innovative chargers incorporate
                                    state-of-the-art technologies and functionalities that not
                                    only streamline the charging process but also offer a
                                    multitude of advantages for EV owners.
                                </p>
                                <!-- ---carousel content buttons--- -->
                                <div class="hero__banner__carousel__buttons d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary carousel__btn__primary_1">
                                        More About Us
                                    </button>
                                    <button type="submit" class="btn btn-primary carousel__btn__primary_2">
                                        Explore Our Products
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---carousel item 2 content--- -->
            <div class="carousel-item hero__banner__bg">
                <img src="images/banner4.jpg" class="d-block w-100" alt="..." />
                <div class="hero__banner__gradient__overlay"></div>
                <div class="hero__carousel__item">
                    <div class="container">
                        <div class="row carousel__row d-flex justify-content-md-start justify-content-sm-center">
                            <div class="col-lg-8 col-md-9 col-sm-10 pe-5">
                                <h6 class="text-uppercase">we serve what you need.</h6>
                                <h1 class="mb-4">
                                    Empowering Electric Vehicle with
                                    <span>Smarter Charging Solutions</span>
                                </h1>
                                <p class="lh-base mb-4">
                                    With the rise in popularity of electric vehicles (EVs),
                                    the need for intelligent and efficient charging solutions
                                    has become increasingly evident. The advent of smarter
                                    chargers has brought about a paradigm shift in how we fuel
                                    our EVs, introducing a new era of convenience, safety, and
                                    sustainability. These innovative chargers incorporate
                                    state-of-the-art technologies and functionalities that not
                                    only streamline the charging process but also offer a
                                    multitude of advantages for EV owners.
                                </p>
                                <!-- ---carousel content buttons--- -->
                                <div class="hero__banner__carousel__buttons d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary carousel__btn__primary_1">
                                        More About Us
                                    </button>
                                    <button type="submit" class="btn btn-primary carousel__btn__primary_2">
                                        Explore Our Products
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ---carousel item 3 content--- -->
            <div class="carousel-item hero__banner__bg">
                <img src="images/banner5.jpg" class="d-block w-100" alt="..." />
                <div class="hero__banner__gradient__overlay"></div>
                <div class="hero__carousel__item">
                    <div class="container">
                        <div class="row carousel__row d-flex justify-content-md-start justify-content-sm-center">
                            <div class="col-lg-8 col-md-9 col-sm-10 pe-5">
                                <h6 class="text-uppercase">we serve what you need.</h6>
                                <h1 class="mb-4">
                                    The Smart Choice: Unleashing the Smarter
                                    <span>Chargers for EVs</span>
                                </h1>
                                <p class="lh-base mb-4">
                                    Smart chargers contribute to sustainability by supporting
                                    energy management and grid integration. They can
                                    intelligently balance the load on the electrical grid,
                                    leveraging renewable energy sources and avoiding peak
                                    demand periods. Additionally, some chargers offer
                                    bidirectional capabilities, enabling vehicle-to-grid (V2G)
                                    functionality. This means that EVs can not only consume
                                    electricity but also feed excess energy back into the
                                    grid, making them valuable assets in balancing energy
                                    supply and demand.
                                </p>
                                <!-- ---carousel content buttons--- -->
                                <div class="hero__banner__carousel__buttons d-flex justify-content-start">
                                    <button type="submit" class="btn btn-primary carousel__btn__primary_1">
                                        More About Us
                                    </button>
                                    <button type="submit" class="btn btn-primary carousel__btn__primary_2">
                                        Explore Our Products
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev carousel_left_button" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon carousel_button_icon_bg" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel_right_button" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon carousel_button_icon_bg" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- ------------------Providing Electric Vehicle Bannar--------------------- -->

    <div class="container mb-6">
        <div class="content__row row justify-content-lg-center">
            <!-- ----column 1----- -->
            <div class="col-lg-5 col-md-6 mt-4 mb-5">
                <div class="providing__vehicle__banner__img">
                    <img src="images/Rectangle 3.png" alt="" />
                    <div class="customer__count">
                        <span id="counter" class="count">0</span>+ <br />
                        <p>Happy Customers</p>
                    </div>
                </div>
            </div>
            <!-- ----column 2----- -->
            <div class="col-lg-4 col-md-6 ms-lg-5 ms-md-0">
                <!-- ---Banner content--- -->
                <div class="banners__content__1">
                    <h6 class="">ABOUT efleetpass ENERGY</h6>
                    <h1 class="mb-4">
                        We Provide Best Solutions For Your <span>Electric Vehicle</span>
                    </h1>
                    <p class="lh-base mb-3">
                        When it comes to electric vehicles (EVs), finding the best
                        solutions is essential to maximize your driving experience and
                        ensure optimal performance. Our dedicated team is committed to
                        providing top-notch solutions tailored specifically to your EV
                        needs.
                    </p>
                    <!-- ---Banner content buttons--- -->
                    <div class="Content__button d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary content__btn__primary">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------Find Us Bannar------------------------------------ -->
    <div class="container-fluid p-0 m-0">
        <div class="find__us__bg mb-6">
            <div class="container py-5">
                <div class="row justify-content-lg-center align-items-center">
                    <!-- ---column 1--- -->
                    <div class="col-lg-4 col-md-6 mb-5">
                        <!-- ---Banner content--- -->
                        <div class="banners__content__1">
                            <h6 class="text-uppercase">We are near you</h6>
                            <h1 class="mb-4">Here's Where You'll <span>Find Us</span></h1>
                            <p class="lh-base mb-3">
                                At eFleetPass Energy, we are committed to providing
                                exceptional service and solutions for your electric vehicle
                                needs.
                            </p>
                            <!-- ---Banner content buttons--- -->
                            <div class="Content__button d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary content__btn__primary">
                                    Learn More
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- ---column 2--- -->
                    <div class="col-lg-6 col-md-6">
                        <div class="providing__vehicle__banner__img">
                            <img src="images/Group 1.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------Best EV Charging Stations Bannar------------------- -->
    <div class="container mb-6">
        <!-- ---row 1--- -->
        <div class="row justify-content-center mb-5">
            <div class="col-8">
                <div class="banner__content__2">
                    <!-- ---Banner content 2--- -->
                    <h6 class="text-uppercase">WHY choose us</h6>
                    <h1 class="mb-4">Best EV <span>Charging Station</span></h1>
                    <p class="lh-base mb-3">
                        When it comes to choosing the best EV charging station for your
                        electric vehicle, several factors come into play to ensure a
                        seamless and efficient charging experience. Here are some key
                        aspects to consider when looking for the best EV charging
                        station:
                    </p>
                </div>
            </div>
        </div>
        <!-- ---row 2--- -->
        <div class="row justify-content-center">
            <!-- ---column 1--- -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ev__div">
                    <div class="div__left__side__content mb-4">
                        <div class="banner__content__2__img">
                            <img src="images/Group 15.png" alt="" />
                        </div>
                        <h4>Charging</h4>
                        <p>
                            The primary function of an EV charging station is to provide
                            electric power to charge the battery of an electric vehicle.
                        </p>
                    </div>
                    <div class="div__left__side__content">
                        <div class="banner__content__2__img">
                            <img src="images/Frame.png" alt="" />
                        </div>
                        <h4>Connectivity & Communication</h4>
                        <p>
                            Charging stations often include features for data
                            communication and connectivity.
                        </p>
                    </div>
                </div>
            </div>
            <!-- ---column 2--- -->
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="ev__div__center__img">
                    <img src="images/8686D349-47E4-4682-98D5-66527C651A11 1.png" alt="" />
                </div>
            </div>
            <!-- ---column 3--- -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ev__div">
                    <div class="div__left__side__content mb-5">
                        <div class="banner__content__2__img">
                            <img src="images/Group 16.png" alt="" />
                        </div>
                        <h4>Safety & Protection</h4>
                        <p>
                            EV charging stations incorporate safety mechanisms to ensure
                            secure and reliable charging.
                        </p>
                    </div>
                    <div class="div__left__side__content">
                        <div class="banner__content__2__img">
                            <img src="images/Group 17.png" alt="" />
                        </div>
                        <h4>Billing & Payment</h4>
                        <p>
                            Many EV charging stations provide functionality for billing
                            and payment processing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------------Download Our App Bannar----------------------- -->
    <div class="find__us__bg app__banner py-5">
        <div class="container">
            <!-- ---row 1--- -->
            <div class="row justify-content-center mb-5">
                <div class="col-8">
                    <div class="banner__content__2">
                        <!-- ---Banner content 2--- -->
                        <h6 class="text-uppercase">DOwnload our app</h6>
                        <h1 class="mb-4">Find, Charge, <span>Pay</span></h1>
                        <p class="lh-base mb-3">
                            The "Find, Charge, Pay" approach revolutionizes the EV
                            charging experience by providing a seamless and user-friendly
                            journey for EV owners.
                        </p>
                    </div>
                </div>
            </div>

            <!-- ---row 2--- -->
            <div class="row justify-content-center app__banner__row mb-2">
                <div class="col-6">
                    <div class="ev__charging_img__2">
                        <img src="images/Group 22.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="ev__charging_content__2">
                        <h4 class="mb-4">
                            Find Your High Tech, Smart & Simple Solution With Best Overall
                            Economy Charge!
                        </h4>
                        <p class="lh-base mb-3">
                            Discover the perfect balance of high-tech innovation,
                            simplicity, and cost-effectiveness with our comprehensive
                            charging solution, designed to meet your electric vehicle (EV)
                            charging needs. We offer a range of cutting-edge products and
                            services that provide the best overall economy charge for EV
                            owners
                        </p>
                    </div>
                </div>
                <img class="position__img" src="images/Frame (1).png" alt="" />
            </div>

            <!-- ---row 3--- -->
            <div class="row justify-content-center app__banner__row mb-5">
                <div class="col-lg-4 col-md-6 col-sm-12 row__order__1 d-flex justify-content-center">
                    <div class="ev__charging_content__2">
                        <h4 class="mb-4">
                            Find Your High Tech, Smart & Simple Solution With Best Overall
                            Economy Charge!
                        </h4>
                        <p class="lh-base mb-3">
                            Discover the perfect balance of high-tech innovation,
                            simplicity, and cost-effectiveness with our comprehensive
                            charging solution, designed to meet your electric vehicle (EV)
                            charging needs. We offer a range of cutting-edge products and
                            services that provide the best overall economy charge for EV
                            owners
                        </p>
                    </div>
                </div>
                <div class="col-6 row__order__2">
                    <div class="ev__charging_img__2">
                        <img src="images/Group 9.png" alt="" />
                    </div>
                </div>
                <img class="position__img__1" src="images/Frame (2).png" alt="" />
            </div>

            <!-- ---row 4--- -->
            <div class="row justify-content-center app__banner__row mb-6">
                <div class="col-6">
                    <div class="ev__charging_img__2">
                        <img src="images/Group 20.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                    <div class="ev__charging_content__2">
                        <h4 class="mb-4">
                            Find Your High Tech, Smart & Simple Solution With Best Overall
                            Economy Charge!
                        </h4>
                        <p class="lh-base mb-3">
                            Discover the perfect balance of high-tech innovation,
                            simplicity, and cost-effectiveness with our comprehensive
                            charging solution, designed to meet your electric vehicle (EV)
                            charging needs. We offer a range of cutting-edge products and
                            services that provide the best overall economy charge for EV
                            owners
                        </p>
                    </div>
                </div>
                <img class="position__img__2" src="images/Frame91.png" alt="" />
            </div>

            <!-- ---row 5--- -->
            <div class="row justify-content-center mb-md-5">
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="anchor_f_1">
                        <img src="images/Frame92.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="anchor_f_2">
                        <img src="images/Frame93.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- script -->
<script>
//Header

// const header = document.getElementById("main__header");
// let prevScrollPos = window.pageYOffset;
// function handleScroll() {
//   const currentScrollPos = window.pageYOffset;
//   if (prevScrollPos > currentScrollPos || currentScrollPos === 0) {
//     header.style.top = "0";
//   } else {
//     header.style.top = `-${header.offsetHeight}px`;
//   }
//   prevScrollPos = currentScrollPos;
// }
// window.addEventListener("scroll", handleScroll);

const header = document.getElementById("main__header");
let prevScrollPos = window.pageYOffset;

function handleScroll() {
    const currentScrollPos = window.pageYOffset;
    console.log(currentScrollPos);

    if (currentScrollPos > 100) {
        header.style.backgroundColor = "#000";
    } else {
        header.style.backgroundColor = "transparent";
    }

    prevScrollPos = currentScrollPos;
}

window.addEventListener("scroll", handleScroll);

// Hero Section

let myCarousel = document.querySelectorAll(
    "#featureContainer .carousel .carousel-item"
);
myCarousel.forEach((el) => {
    const minPerSlide = 4;
    let next = el.nextElementSibling;
    for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
            next = myCarousel[0];
        }
        let cloneChild = next.cloneNode(true);
        el.appendChild(cloneChild.children[0]);
        next = next.nextElementSibling;
    }
});

// Providing Electric Vehicle Bannar JavaScript counter code

function startCounter() {
    let count = 0;
    const endValue = 867;
    const counterElement = document.getElementById("counter");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const intervalId = setInterval(() => {
                    count++;
                    counterElement.textContent = count.toLocaleString();

                    if (count >= endValue) {
                        clearInterval(intervalId);
                    }
                }, 5);
                counterElement.classList.add("counter");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    observer.observe(document.querySelector(".providing__vehicle__banner__img"));
}

startCounter();
</script>
@endSection