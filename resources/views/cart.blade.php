@extends('layout')
@section('content')


<style>
.cartCard {
    border: 1px solid #b8b8b8;
    border-radius: 8px;
}

.tArea {
    border: 1px solid #0C0D10;
    border-radius: 8px;
}

.checKBtn {
    background: #00AEEF;
    border-radius: 8px;
    color: #fff;
    width: 100%;

}

.header__navbar__light {
    background: #000
}

.footer__bg__color {
    display: none
}
</style>


<!-- --------------------------------Main Section----------------------------- -->

<div class="container pt-5 my-5">
    <div class="row">
        <div class="col-md-8 pt-5">
            <p class="fw-bold">Your Cart</p>
            <div class="cartCard">
                <div class="px-4 py-4">
                    <p class="fw-bold">product</p>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="d-flex">
                            <div class="cartmodalImage p-3">
                                <img src="./images/g2.png" alt="" height="50px" width="50px" />
                            </div>
                            <div class="d-flex flex-column ms-2">
                                <p class="pa1">Teltonika TelcoCharge</p>
                                <small class="text-muted mt-0">
                                    Power Options: 7.4kW <br />
                                    Colour: Oak wood <br />
                                    EV Charging Cable: No Integrated Charging Cable
                                </small>
                            </div>
                        </div>
                        <div class="selectQuantity my-auto">
                            <p>Qty</p>
                            <button class="btn deBtn p-0">
                                <svg width="10" height="3" viewBox="0 0 10 3" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.66658 2.99805H0.333252V0.998047H9.66658V2.99805Z" fill="black" />
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
                    </div>
                    <hr />
                    <div class="addons d-flex flex-column">
                        <div class="d-flex flex-column flex-md-row justify-content-between">
                            <div class="d-flex my-2">
                                <div class="cartmodalImage">
                                    <img src="./images/item1.png" alt="" height="50px" width="50px" />
                                </div>
                                <div class="d-flex flex-column ms-2">
                                    <p class="pa1">charging cable</p>
                                </div>
                            </div>
                            <div class="selectQuantity my-auto">
                                <p>Qty</p>
                                <button class="btn deBtn p-0">
                                    <svg width="10" height="3" viewBox="0 0 10 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.66658 2.99805H0.333252V0.998047H9.66658V2.99805Z" fill="black" />
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
                        </div>
                        <div class="d-flex flex-column flex-md-row justify-content-between">
                            <div class="d-flex my-2">
                                <div class="cartmodalImage">
                                    <img src="./images/item2.png" alt="" height="50px" width="50px" />
                                </div>
                                <div class="d-flex flex-column ms-2">
                                    <p class="pa1">charging stand</p>
                                </div>
                            </div>
                            <div class="selectQuantity my-auto">
                                <p>Qty</p>
                                <button class="btn deBtn p-0">
                                    <svg width="10" height="3" viewBox="0 0 10 3" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.66658 2.99805H0.333252V0.998047H9.66658V2.99805Z" fill="black" />
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
                        </div>
                    </div>

                    <hr />
                    <div class="my-2 d-flex justify-content-end">
                        <div>
                            <p class="fw-bold">
                                Total: <span class="mx-4"></span> $1598.98AUD
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-5 mt-5">
            <div class="cartCard p-3">
                <p class="fw-bold mt-2 mb-4">Order Summary</p>
                <div class="d-flex justidy-content-between">
                    <p class="text-muted ">Subtotal(3items)

                    </p>
                    <p class="fw-bold"></span> Total: <span class="mx-2"></span> $1598.98AUD</p>
                </div>
                <div class="my-3">
                    <label for="exampleFormControlTextarea" class="form-label fw-bold">Add Notes</label>
                    <textarea class="form-control tArea" id="exampleFormControlTextarea1" rows="5"
                        placeholder="Write Review Here"></textarea>
                </div>
                <div class="my-3">
                    <a href="/order"><button class="btn checKBtn py-2 px-5 fw-bold">
                            Check Out
                        </button></a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
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
</script>


@endSection