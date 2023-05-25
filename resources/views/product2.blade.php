@extends('layout')
@section('content')
<style>
.header__navbar__light {
    background: #000
}
</style>
<div class="container pt-5 mt-5">
    <div class="row mt_6">
        <!-- galary section -->
        <div class="col-12 col-sm-12 col-md-6 ">
            <div id="imageGallery" class="container">
                <div id="mainImage" class="main-image card">
                    <img src="./images/g2.png" alt="Main Image" height="100%" width="100%" />
                </div>
                <div class="row my-3 justify-content-center justify-content-md-start">
                    <div class="col-md-3 card h-fit p-2 mx-3 my-2 itemCard1">
                        <img src="./images/g2.png" alt="Thumbnail 1" onclick="changeMainImage(this)" height="130px" />
                    </div>
                    <div class="col-md-3 card h-fit itemCard p-2 mx-3 my-2">
                        <img src="./images/g3.png" alt="Thumbnail 2" onclick="changeMainImage(this)" height="130px" />
                    </div>
                    <div class="col-md-3 card h-fit p-2 itemCard mx-3 my-2">
                        <img src="./images/g4.png" alt="Thumbnail 3" onclick="changeMainImage(this)" height="130px" />
                    </div>
                    <div class="col-md-3 card h-fit p-2 itemCard mx-3 my-2">
                        <img src="./images/g5.png" alt="Thumbnail 3" onclick="changeMainImage(this)" height="130px" />
                    </div>
                    <div class="col-md-3 card h-fit p-2 itemCard mx-3 my-2">
                        <img src="./images/g6.png" alt="Thumbnail 3" onclick="changeMainImage(this)" height="130px" />
                    </div>
                    <!-- Add more thumbnail images as needed -->
                </div>
            </div>
        </div>
        <!-- galary section end-->
        <!-- details Section -->
        <div class="col-12 col-sm-12 col-md-6">
            <p class="pr1">Teltonika TelcoCharge</p>
            <div>
                <div class="stars d-flex">
                    <!-- fill stars -->
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <!-- regular/empty star -->
                    <i class="fa-regular fa-star mt-1" style="color: #ffd43b"></i>
                </div>
                <div class="price">
                    <small class="fw-bold">$1,450.00</small>
                </div>
            </div>
            <!-- select-->
            <div class="my-3 d-flex">
                <select class="form-select optSelect mx-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select optSelect mx-2" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <!-- end selects -->
            <!-- quantity  select-->
            <div class="my-3 d-flex flex-column">
                <div class="d-flex justify-content-center justify-content-md-start">
                    <button class="btn qtyBtn decreaseBtn me-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 12.998H5V10.998H19V12.998Z" fill="black" />
                        </svg>
                    </button>
                    <input type="text" class="ms-3 ps-3" id="nInput" value="0" />
                    <button class="btn IncreaseBtn qtyBtn ms-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 19V13H5V11H11V5H13V11H19V13H13V19H11Z" fill="#0C0D10" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- end quantity  select-->
            <!-- cart and buy button -->
            <div class="my-4 d-flex flex-column flex-md-row">
                <button class="btn addCbtn my-2 ms-2">Add To Cart</button>
                <button class="btn btn-primary buyBtn ms-2 my-2">Buy it now</button>
            </div>
            <!-- end cart and buy buttons -->
            <hr class="mt-2" />
            <!-- add Section -->
            <div class="my-3">
                <div class="d-flex justify-content-between">
                    <p class="pa2">Add ons</p>
                    <a class="anchorp" href="#">
                        <p class="anchorp">+ Add ons </p>
                    </a>
                </div>
                <div class="row">
                    <!-- single item -->
                    <div class="col-md-12 p-3 my-2">
                        <div class="my-2 d-flex justify-content-between">
                            <p>charging cable</p>
                            <a class="itemRemoveColor" href="#">
                                <p class="text-danger fw-bold">Remove</p>
                            </a>
                        </div>
                        <div class="sItem p-3">
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <div class="itemImg ">
                                    <img src="./images/item1.png" alt="" height="60px" width="60px" />
                                </div>
                                <div class="d-flex flex-column itemDes">
                                    <p class="pa2">Charging Cable</p>
                                    <small class="">
                                        <span class="fw-bold"> $45.99</span>
                                        <span class="text-muted">per peice</span>
                                    </small>
                                </div>
                                <div class="selectQuantity my-auto">
                                    <button class="btn deBtn p-0">
                                        <svg width="10" height="3" viewBox="0 0 10 3" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.66658 2.99805H0.333252V0.998047H9.66658V2.99805Z"
                                                fill="black" />
                                        </svg>
                                    </button>
                                    <input type="text" class="ms-0 ps-2 mb-0 quantityInp p-0" id="qInput" value="0" />
                                    <button class="btn IncBtn ms-0 p-0">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            l
                                            <path
                                                d="M4.33325 9.66658V5.66658H0.333252V4.33325H4.33325V0.333252H5.66658V4.33325H9.66658V5.66658H5.66658V9.66658H4.33325Z"
                                                fill="#0C0D10" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="py-auto  d-flex justify-content-center justify-content-md-start">
                                    <button class="btn addBtn mt-3">Add To Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-md-12 p-3 my-2">
                        <div class="my-2 d-flex justify-content-between">
                            <p>charging cable</p>
                            <a class="itemRemoveColor" href="#">
                                <p class="text-danger fw-bold">Remove</p>
                            </a>
                        </div>
                        <div class="sItem p-3">
                            <div class="d-flex justify-content-between flex-column flex-md-row">
                                <div class="itemImg">
                                    <img src="./images/item2.png" alt="" height="60px" width="60px" />
                                </div>
                                <div class="d-flex flex-column itemDes">
                                    <p class="pa2">Charging Stand</p>
                                    <small class="">
                                        <span class="fw-bold"> $45.99</span>
                                        <span class="text-muted">per peice</span>
                                    </small>
                                </div>
                                <div class="selectQuantity my-auto">
                                    <button class="btn deBtn p-0">
                                        <svg width="10" height="3" viewBox="0 0 10 3" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.66658 2.99805H0.333252V0.998047H9.66658V2.99805Z"
                                                fill="black" />
                                        </svg>
                                    </button>
                                    <input type="text" class="ms-0 ps-2 mb-0 quantityInp p-0" id="qInput" value="0" />
                                    <button class="btn IncBtn ms-0 p-0">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.33325 9.66658V5.66658H0.333252V4.33325H4.33325V0.333252H5.66658V4.33325H9.66658V5.66658H5.66658V9.66658H4.33325Z"
                                                fill="#0C0D10" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="py-auto d-flex justify-content-center justify-content-md-start">
                                    <button class="btn addBtn mt-3">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end add section -->
            <hr />
            <!-- description section -->
            <div class="row">
                <div class="col-md-12">
                    <p class="pa2">Description</p>
                    <div class="my-3">
                        <p class="text-muted">
                            Teltonika Energy is a global manufacturer of
                            telecommunications networking hardware and has recently made
                            the move into the Electric Vehicle charging industry with
                            their Smart TelcoCharge Unit. The TelcoCharge is available in
                            3 power options (7.4kW, 11kW, 22kW) and five colour options.
                        </p>
                        <p class="text-muted mt-3">
                            The TelcoCharge is a premium quality, highly customizable and
                            easy-to-use EV charging solution, offering an exceptional
                            product that combines functionality, premium looks,
                            high-quality build and smart EV charging features to save you
                            time and money.
                        </p>
                        <ul>
                            <li class="textMcolor">
                                Smart Mobile App: Innovative solutions combining
                                functionality and smart EV charging features accessible via
                                the Teltonika Energy app.
                            </li>
                            <li class="textMcolor">
                                Customisable: Premium design with plenty of configuration
                                options to choose from.
                            </li>
                            <li class="textMcolor">
                                3-Year Warranty: Robust and reliable build to withstand even
                                the harshest outdoor elements.
                            </li>
                            <li class="textMcolor">
                                Connect your EV charger to your smart device via Teltonika
                                Energy APP to easily control your charger.
                            </li>
                            <li class="textMcolor">
                                Quick and easy EV charging authorization using NFC card or
                                app to prevent any unwanted usage.
                            </li>
                            <li class="textMcolor">
                                Dynamic LED lights indicator showing power, connectivity and
                                charging status.
                            </li>
                            <li class="textMcolor">
                                Enjoy TeltoCharge to the fullest and don’t worry about a
                                thing with their three-year warranty.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end description section -->
        </div>
        <!-- detaisl section end -->
    </div>
    <!-- Review Section -->
    <div class="row Justify-content-center mb-3">
        <div class="col-md-12 reviewCard p-3 d-flex justify-content-between">
            <div class="d-flex flex-column">
                <div class="d-flex">
                    <p class="pa2">Reviews</p>
                    <small class="mt-1">(no reviews yet)</small>
                </div>
                <div class="stars d-flex">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>
            <!-- revive Btton -->
            <div>
                <button class="btn reviewBtn ms-4 me-3 mt-2 fw-bold">
                    Write a review
                </button>
            </div>
        </div>
        <!-- write review -->
        <div class="col-md-12 reviewCard2 p-3 writeReview d-none">
            <div class="my-2">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email
                    </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" />
                </div>
            </div>
            <div class="my-2">
                <p class="mb-2">Rating</p>
                <div class="stars d-flex">
                    <i class="fa-regular fa-star rStar"></i>
                    <i class="fa-regular fa-star rStar"></i>
                    <i class="fa-regular fa-star rStar"></i>
                    <i class="fa-regular fa-star rStar"></i>
                    <i class="fa-regular fa-star rStar"></i>
                </div>
            </div>
            <div class="my-2">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Review</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                        placeholder="Write Review Here"></textarea>
                </div>
            </div>
            <div class="my-2">
                <p>Upload Photo</p>
                <div class="my-2 d-flex">
                    <div class="upload">
                        <img src="./images/upload.png" alt="" />
                    </div>
                    <div class="uploadedImg mx-3">
                        <img src="./images/uploadedImg.png" alt="" width="125px" ; height="138px" />
                    </div>
                </div>
            </div>
            <div class="my-3">
                <button class="btn subBtn fw-bold">Submit</button>
            </div>
        </div>

        <!-- write review end -->
        <!-- previous Review -->
        <div class="col-md-12 my-3 p-2 reviewCard borderSet">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <div class="stars d-flex">
                        <!-- fill stars -->
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        <!-- regular/empty star -->
                        <i class="fa-regular fa-star mt-1" style="color: #ffd43b"></i>
                    </div>
                    <p class="fw-bold">By Leonard De La Vega</p>
                </div>
                <small class="text-muted">01 Feb 2023</small>
            </div>
            <div class="my-2">
                <p class="text-muted">
                    Teltonika Energy is a global manufacturer of telecommunications
                    networking hardware and has recently made the move into the
                    Electric Vehicle charging industry with their Smart TelcoCharge
                    Unit. The TelcoCharge is available in 3 power options (7.4kW,
                    11kW,
                </p>
            </div>
            <div class="my-2 d-flex flex-column">
                <img src="./images/item1.png" alt="" height="100px" width="100px" />
                <a class="reply" href="#">Reply</a>
            </div>
        </div>
        <!-- previous review -->
    </div>
    <!-- end Review Section -->

</div>
<!-- end main container -->
<!-- add to cart modal -->
<div class="container-fluid addCartModal  d-none">
    <!-- add to cart modal -->
    <div class="  px-4">
        <p class="text-center">Just added to your cart</p>
        <div class="d-flex justify-content-end">
            <button class="btn addCartModalBtn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.4 19L5 17.6L10.6 12L5 6.4L6.4 5L12 10.6L17.6 5L19 6.4L13.4 12L19 17.6L17.6 19L12 13.4L6.4 19Z"
                        fill="black" />
                </svg>
            </button>
        </div>
        <div class="d-flex">
            <div class="cartmodalImage p-3">
                <img src="./images/g2.png" alt="" height="50px" width="50px" />
            </div>
            <div class="d-flex flex-column ms-2">
                <p class="pa1">Teltonika TelcoCharge</p>
                <small class="text-muted mt-0">
                    Power Options: 7.4kW <br />
                    Colour: Oak wood <br />
                    EV Charging Cable: No Integrated Charging Cable <br />
                    Qty: 1
                </small>
            </div>
        </div>
        <hr />
        <div class="addons d-flex flex-column">
            <div class="d-flex my-2">
                <div class="cartmodalImage">
                    <img src="./images/item1.png" alt="" height="50px" width="50px" />
                </div>
                <div class="d-flex flex-column ms-2">
                    <p class="pa1">charging cable</p>
                    <small class="text-muted mt-0"> Qty: 1 </small>
                </div>
            </div>
            <div class="d-flex my-2">
                <div class="cartmodalImage">
                    <img src="./images/item2.png" alt="" height="50px" width="50px" />
                </div>
                <div class="d-flex flex-column ms-2">
                    <p class="pa1">charging stand</p>
                    <small class="text-muted mt-0"> Qty: 1 </small>
                </div>
            </div>
        </div>

        <div class="my-3 d-flex justify-content-center">
            <a href="/cart"> <button class="btn reviewBtn fw-bold py-2 px-3 ">
                    View Cart <sup class="circle px-1 fw-bold">1 </s>
                </button>
            </a>
        </div>
    </div>
    <!-- add to cart modal end -->
</div>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- script -->
<script>
// galary code
function changeMainImage(element) {
    var mainImage = $("#mainImage");
    var clickedImage = element.getAttribute("src");
    var altText = element.getAttribute("alt");
    var zoomImage = element.getAttribute("data-zoom-image");

    mainImage.html(
        `<img  src="${clickedImage}" alt="${altText}" height="100%"><div class="zoom-pointer"></div>`
    );
    mainImage[0].scrollIntoView({
        behavior: 'smooth'
    });

}

//  quantity slelct code
// Get the elements
const decreaseBtn = document.querySelector(".decreaseBtn");
const increaseBtn = document.querySelector(".IncreaseBtn");
const input = document.getElementById("nInput");

// Decrease button click event
decreaseBtn.addEventListener("click", () => {
    let value = parseInt(input.value);

    if (value > 0) {
        value--;
        input.value = value;
    }

    if (value === 0) {
        decreaseBtn.disabled = true;
    } else {
        decreaseBtn.disabled = false;
    }
});

// Increase button click event
increaseBtn.addEventListener("click", () => {
    let value = parseInt(input.value);
    value++;
    input.value = value;

    if (value > 0) {
        decreaseBtn.disabled = false;
    }
});
// <!-- quantity select code for single item -->
// Get all the quantity sections on the page
const quantitySections = document.querySelectorAll(".selectQuantity");

// Add event listeners to each section
quantitySections.forEach((section) => {
    const decreaseBtn = section.querySelector(".deBtn");
    const increaseBtn = section.querySelector(".IncBtn");
    const quantityInput = section.querySelector(".quantityInp");

    // Decrease button event listener
    decreaseBtn.addEventListener("click", () => {
        // Get the current value of the input
        let currentValue = parseInt(quantityInput.value);

        // Decrease the value by 1 if it's greater than 0
        if (currentValue > 0) {
            currentValue--;
            quantityInput.value = currentValue;
        }
    });

    // Increase button event listener
    increaseBtn.addEventListener("click", () => {
        // Get the current value of the input
        let currentValue = parseInt(quantityInput.value);

        // Increase the value by 1
        currentValue++;
        quantityInput.value = currentValue;
    });
});

//  end quantity select code for single item
// rating stars
const stars = document.querySelectorAll(".rStar");

stars.forEach((star) => {
    star.addEventListener("click", () => {
        star.classList.toggle("fa-regular");
        star.classList.toggle("fa-solid");
        star.classList.toggle("rStarColor");
    });
});
// image upload
const uploadDiv = document.querySelector(".uploadedImg");
const uploadedImgContainer = document.querySelector(".upload");

uploadDiv.addEventListener("click", () => {
    // Trigger the click event on the file input element
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.click();

    // Handle the selected file
    fileInput.addEventListener("change", (event) => {
        const selectedFile = event.target.files[0];
        // Create an <img> element
        const imgElement = document.createElement("img");
        imgElement.src = URL.createObjectURL(selectedFile);
        imgElement.alt = "Uploaded Image";
        // Set the height and width of the image
        imgElement.style.height = "150px";
        imgElement.style.width = "150px";
        imgElement.style.margin = "10px"
        // Append the <img> element to the container
        uploadedImgContainer.appendChild(imgElement);
    });
});
// write review Btn
let writeBtn = document.querySelector(".reviewBtn");
let reviewSection = document.querySelector(".writeReview");
writeBtn.onclick = () => {
    reviewSection.classList.toggle("d-none");
};

// add to cart modal close btn
let cartModalCloseBtn = document.querySelector('.addCartModalBtn');
let cartModal = document.querySelector('.addCartModal');
cartModalCloseBtn.onclick = () => {
    cartModal.classList.add('d-none')
}
// add to cart modal open btn
let openCartModalBtn = document.querySelector('.addCbtn')
openCartModalBtn.onclick = () => {
    cartModal.classList.remove('d-none')
}
</script>
@endSection