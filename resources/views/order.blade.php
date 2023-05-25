@extends('layout')
@section('content')



<style>
.header__navbar__light {
    background: #000
}

.footer__bg__color {
    display: none
}
</style>

<!-- --------------------------------Main Section----------------------------- -->
<!-- progress -->
<div class="container my-2 ms-0 ps-0 ms-md-5 ps-md-5 pt-5" style="margin-top: 6rem !important;">
    <div class="d-flex flex-column flex-md-row ms-0 ms-md-5">
        <dvi class="progressCircle text-center activo fw-bold mx-2"> 1</dvi>
        <small class="mx-2 fw-bold">Introduction</small>
        <span class="line d-none d-md-block"><svg width="26" height="2" viewBox="0 0 26 2" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <line y1="1" x2="26" y2="1" stroke="#B8B8B8" stroke-width="2" />
            </svg>
        </span>
        <div class="progressCircle text-center text-muted mx-2" id="progress2">
            2
        </div>
        <small class="text-muted mx-2 fw-bold" id="progress2Text">Shipping</small>
        <span class="line d-none d-md-block"><svg width="26" height="2" viewBox="0 0 26 2" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <line y1="1" x2="26" y2="1" stroke="#B8B8B8" stroke-width="2" />
            </svg>
        </span>
        <div class="progressCircle text-center text-muted mx-2" id="progress3">
            3
        </div>
        <small class="text-muted mx-2 fw-bold" id="progress3Text">Payment</small>
    </div>
</div>
<!-- end progress -->
<div class="container">
    <div class="row" id="mainRow">
        <div class="col-md-8" id="coutSection">
            <div class="chech_innersection1">
                <!-- ---------- check innersection 1 part 1 ------->
                <div class="check_innersection1_part1">
                    <h2 class="text_styling">Shipping Address</h2>
                    <div class="form_main_div">
                        <!-- ---------- Form  --------------------->
                        <form action="">
                            <div class="inputfield">
                                <label for="" class="label_text_style">Email<span class="bgred">*</span></label>
                                <input type="email" placeholder="Email Address" class="input_text_style"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                            </div>
                            <div class="inputfield">
                                <label for="" class="label_text_style">Country/Region</label>
                                <select name="" id="" class="input_text_style pdng">
                                    <option value="">Country/Region</option>
                                    <option value="">Pakistan</option>
                                    <option value="">India</option>
                                    <option value="">Turky</option>
                                </select>
                            </div>

                            <div class="username">
                                <div class="firstname_field inputfield">
                                    <label for="" class="label_text_style">First Name</label>
                                    <input type="text" placeholder="First Name" class="input_text_style" required />
                                </div>
                                <div class="lastname_field inputfield">
                                    <label for="" class="label_text_style">Last Name</label>
                                    <input type="text" placeholder="Last Name" class="input_text_style" required />
                                </div>
                            </div>
                            <div class="inputfield">
                                <label for="" class="label_text_style">Company<span
                                        class="optional_design">(Optional)</span></label>
                                <input type="text" placeholder="Company Name" class="input_text_style" />
                            </div>
                            <div class="inputfield">
                                <label for="" class="label_text_style">Apartment/Suite/Other<span
                                        class="optional_design">(Optional)</span></label>
                                <input type="text" placeholder="Apartment,Suite" class="input_text_style" />
                            </div>

                            <div class="username">
                                <div class="city_name inputfield">
                                    <label for="" class="label_text_style">City</label>
                                    <input type="text" placeholder="City" class="input_text_style" required />
                                </div>
                                <div class="state_name inputfield">
                                    <label for="" class="label_text_style">State</label>
                                    <input type="text" placeholder="State" class="input_text_style" required />
                                </div>
                                <div class="postcode_name inputfield">
                                    <label for="" class="label_text_style">Postcode</label>
                                    <input type="number" placeholder="Postcode" class="input_text_style"
                                        pattern="[0-9]{3}" required />
                                </div>
                            </div>

                            <div class="inputfield">
                                <label for="" class="label_text_style">Contact Number</label>
                                <input type="number" placeholder="Number" class="input_text_style" max="12345678910"
                                    min="9" required />
                            </div>

                            <div class="continue_main_btn mb-5">
                                <button class="main_btn" id="conShip">
                                    Continue to shipping
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 d-none" id="shipSection">
            <form action="" class="shipping_form2">
                <h1>Shipping Method</h1>
                <div class="standard_express">
                    <div class="standard" for="radiobtn">
                        <div class="radio_input" name="radiobtn">
                            <input type="radio" name="price" />
                        </div>
                        <div class="standard_text">
                            <h1>Standard</h1>
                            <p>Arrives Friday 19 - Sunday 21</p>
                            <h2>Free</h2>
                        </div>
                    </div>

                    <div class="express" for="radiobtn">
                        <div class="radio_input" name="radiobtn">
                            <input type="radio" name="price" />
                        </div>
                        <div class="standard_text">
                            <h1>Express</h1>
                            <p>Estimated delivery Thursday 18 - Friday 19</p>
                            <h2>$5.00 AUD</h2>
                        </div>
                    </div>
                </div>
                <div class="information_continue">
                    <div class="information">
                        <h1>information</h1>
                    </div>
                    <div class="continue">
                        <button class="paymentBtn" id="paymentBtn">
                            Continue to Payment
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 d-none" id="paymentSection">
            <!-- ----------------- Payment form 2 ----------------- -->
            <form action="" class="payment_form3">
                <h1>Shipping Method</h1>
                <div class="standard_express">
                    <div class="standard" for="radiobtn">
                        <!-- --------------------------- Radio Button -------------------------- -->
                        <div class="radio_input" name="radiobtn">
                            <input type="radio" name="price" required />
                        </div>
                        <div class="payment_card">
                            <!-- --------------------------- Visa icon Logo -------------------------- -->
                            <div class="visa_icon">
                                <svg width="42" height="28" viewBox="0 0 42 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="41" height="27" rx="3.5" fill="white"
                                        stroke="#F3F3F3" />
                                    <path d="M18.6459 19.2033H15.8496L17.5986 9.40283H20.3947L18.6459 19.2033Z"
                                        fill="#15195A" />
                                    <path
                                        d="M28.7815 9.64234C28.23 9.44404 27.3552 9.2251 26.2735 9.2251C23.5121 9.2251 21.5676 10.5596 21.5557 12.4674C21.5327 13.8751 22.9479 14.6569 24.0063 15.1263C25.0882 15.6059 25.4559 15.9189 25.4559 16.3464C25.4449 17.003 24.5817 17.3056 23.7767 17.3056C22.6603 17.3056 22.0621 17.1496 21.1531 16.7843L20.7848 16.6277L20.3936 18.8277C21.0494 19.0985 22.2577 19.3388 23.5121 19.3493C26.4462 19.3493 28.3563 18.0355 28.3789 16.0023C28.3901 14.8867 27.6428 14.0318 26.0318 13.3333C25.0538 12.8848 24.4548 12.5825 24.4548 12.1236C24.4663 11.7065 24.9614 11.2793 26.0654 11.2793C26.9745 11.2584 27.6424 11.4564 28.1483 11.6546L28.4012 11.7586L28.7815 9.64234Z"
                                        fill="#15195A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M33.7908 9.40283H35.9537L38.2095 19.2032H35.6205C35.6205 19.2032 35.3671 18.0771 35.2868 17.7331H31.6967C31.5928 17.9936 31.1098 19.2032 31.1098 19.2032H28.1758L32.3292 10.216C32.617 9.57993 33.1238 9.40283 33.7908 9.40283ZM33.6144 12.9891C33.6144 12.9891 32.7283 15.1681 32.498 15.7312H34.8223C34.7073 15.2412 34.1777 12.8953 34.1777 12.8953L33.9823 12.0508C33.9 12.2682 33.781 12.5672 33.7008 12.7689C33.6463 12.9055 33.6097 12.9975 33.6144 12.9891Z"
                                        fill="#15195A" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.73353 9.40283H8.23242C8.84222 9.42348 9.33703 9.60072 9.49804 10.2267L10.4717 14.711C10.4739 14.7175 10.476 14.7239 10.4781 14.7304L10.7773 16.0858L13.5158 9.40283H16.4726L12.0774 19.1929H9.12041L6.62849 10.6784C5.768 10.2223 4.78579 9.85538 3.6875 9.60085L3.73353 9.40283Z"
                                        fill="#15195A" />
                                </svg>
                            </div>
                            <!-- --------------------------- red orange icon Logo -------------------------- -->
                            <div class="red_orange_icon">
                                <svg width="42" height="28" viewBox="0 0 42 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="41" height="27" rx="3.5" fill="white"
                                        stroke="#F3F3F3" />
                                    <path d="M24.8433 20.2839H17.3477V7.35889H24.8433V20.2839Z" fill="#FF5F00" />
                                    <path
                                        d="M17.8288 13.82C17.8288 11.1981 19.1082 8.86263 21.1006 7.35753C19.6436 6.25693 17.8048 5.60002 15.8064 5.60002C11.0753 5.60002 7.24023 9.28018 7.24023 13.82C7.24023 18.3599 11.0753 22.04 15.8064 22.04C17.8048 22.04 19.6436 21.3831 21.1006 20.2825C19.1082 18.7774 17.8288 16.4419 17.8288 13.82Z"
                                        fill="#EB001B" />
                                    <path
                                        d="M34.9537 13.82C34.9537 18.3599 31.1187 22.04 26.3876 22.04C24.3892 22.04 22.5503 21.3831 21.0928 20.2825C23.0857 18.7774 24.3652 16.4419 24.3652 13.82C24.3652 11.1981 23.0857 8.86263 21.0928 7.35753C22.5503 6.25693 24.3892 5.60002 26.3876 5.60002C31.1187 5.60002 34.9537 9.28018 34.9537 13.82Z"
                                        fill="#F79E1B" />
                                </svg>
                            </div>
                            <!-- --------------------------- AmerIcon Express icon Logo -------------------------- -->
                            <div class="americon_express_icon">
                                <svg width="40" height="28" viewBox="0 0 40 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="39" height="27" rx="3.5" fill="#006FCF"
                                        stroke="#F3F3F3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.1827 20.2258V14.4616H14.6128L15.3027 15.3153L16.0154 14.4616H39.3551V19.8283C39.3551 19.8283 38.7447 20.22 38.0388 20.2258H25.1151L24.3373 19.3172V20.2258H21.7885V18.6747C21.7885 18.6747 21.4403 18.8912 20.6876 18.8912H19.82V20.2258H15.9608L15.2719 19.3539L14.5725 20.2258H8.1827ZM0.69043 10.1171L2.13716 6.90845H4.63912L5.46016 8.70579V6.90845H8.57033L9.05909 8.20751L9.53293 6.90845H23.4944V7.56153C23.4944 7.56153 24.2283 6.90845 25.4345 6.90845L29.9645 6.92351L30.7713 8.69733V6.90845H33.3741L34.0904 7.92736V6.90845H36.7171V12.6726H34.0904L33.4039 11.6504V12.6726H29.5799L29.1954 11.764H28.1673L27.789 12.6726H25.1957C24.1578 12.6726 23.4944 12.0329 23.4944 12.0329V12.6726H19.5843L18.8082 11.764V12.6726H4.26847L3.88418 11.764H2.85943L2.47785 12.6726H0.69043V10.1171ZM0.697901 11.9349L2.64922 7.61886H4.12857L6.07802 11.9349H4.77963L4.42145 11.0706H2.32835L1.96831 11.9349H0.697901ZM4.00905 10.1335L3.37105 8.62324L2.73118 10.1335H4.00905ZM6.21271 11.9345V7.61851L8.01804 7.62489L9.06807 10.4076L10.093 7.61851H11.8839V11.9345H10.7496V8.75431L9.54732 11.9345H8.5526L7.34694 8.75431V11.9345H6.21271ZM12.6591 11.9345V7.61851H16.3602V8.58394H13.8052V9.32221H16.3005V10.2308H13.8052V10.9975H16.3602V11.9345H12.6591ZM17.0164 11.9349V7.61886H19.5404C20.3768 7.61886 21.1261 8.11085 21.1261 9.01909C21.1261 9.79551 20.4943 10.2956 19.8818 10.3448L21.3742 11.9349H19.9881L18.6282 10.4016H18.1506V11.9349H17.0164ZM19.4474 8.58447H18.1509V9.49311H19.4642C19.6916 9.49311 19.9847 9.32553 19.9847 9.03879C19.9847 8.81592 19.7585 8.58447 19.4474 8.58447ZM22.7478 11.9345H21.5897V7.61851H22.7478V11.9345ZM25.494 11.9345H25.244C24.0345 11.9345 23.3001 11.028 23.3001 9.79427C23.3001 8.53003 24.0263 7.61851 25.5537 7.61851H26.8073V8.64073H25.5078C24.8878 8.64073 24.4493 9.10105 24.4493 9.80492C24.4493 10.6408 24.9507 10.9918 25.6731 10.9918H25.9716L25.494 11.9345ZM26.011 11.9349L27.9623 7.61886H29.4417L31.3911 11.9349H30.0927L29.7346 11.0706H27.6415L27.2814 11.9349H26.011ZM29.3222 10.1335L28.6842 8.62324L28.0443 10.1335H29.3222ZM31.5234 11.9345V7.61851H32.9655L34.8067 10.3302V7.61851H35.941V11.9345H34.5456L32.6577 9.15184V11.9345H31.5234ZM8.95803 19.4873V15.1713H12.6592V16.1367H10.1042V16.875H12.5995V17.7836H10.1042V18.5503H12.6592V19.4873H8.95803ZM27.0945 19.4873V15.1713H30.7957V16.1367H28.2407V16.875H30.7241V17.7836H28.2407V18.5503H30.7957V19.4873H27.0945ZM12.8032 19.4873L14.6053 17.3559L12.7603 15.1713H14.1893L15.2881 16.5218L16.3906 15.1713H17.7636L15.9429 17.3293L17.7483 19.4873H16.3195L15.2527 18.1581L14.2117 19.4873H12.8032ZM17.8823 19.4881V15.1721H20.3877C21.4157 15.1721 22.0163 15.8024 22.0163 16.6238C22.0163 17.6153 21.2505 18.1252 20.2403 18.1252H19.0464V19.4881H17.8823ZM20.3042 16.1479H19.0468V17.1417H20.3004C20.6317 17.1417 20.8638 16.9329 20.8638 16.6448C20.8638 16.3382 20.6305 16.1479 20.3042 16.1479ZM22.5086 19.4874V15.1714H25.0327C25.869 15.1714 26.6184 15.6634 26.6184 16.5716C26.6184 17.3481 25.9866 17.8481 25.3741 17.8973L26.8665 19.4874H25.4804L24.1204 17.9541H23.6429V19.4874H22.5086ZM24.9397 16.137H23.6432V17.0457H24.9565C25.1838 17.0457 25.477 16.8781 25.477 16.5913C25.477 16.3685 25.2507 16.137 24.9397 16.137ZM31.3209 19.4873V18.5503H33.5909C33.9268 18.5503 34.0722 18.3776 34.0722 18.1883C34.0722 18.0068 33.9272 17.8234 33.5909 17.8234H32.5651C31.6735 17.8234 31.1769 17.3066 31.1769 16.5307C31.1769 15.8387 31.6317 15.1713 32.9566 15.1713H35.1654L34.6878 16.1424H32.7775C32.4124 16.1424 32.3 16.3247 32.3 16.4988C32.3 16.6777 32.4389 16.875 32.7178 16.875H33.7924C34.7863 16.875 35.2176 17.4114 35.2176 18.1137C35.2176 18.8689 34.737 19.4873 33.7382 19.4873H31.3209ZM35.3179 19.4873V18.5503H37.5878C37.9237 18.5503 38.0691 18.3776 38.0691 18.1883C38.0691 18.0068 37.9241 17.8234 37.5878 17.8234H36.5621C35.6704 17.8234 35.1738 17.3066 35.1738 16.5307C35.1738 15.8387 35.6286 15.1713 36.9535 15.1713H39.1623L38.6847 16.1424H36.7745C36.4093 16.1424 36.2969 16.3247 36.2969 16.4988C36.2969 16.6777 36.4358 16.875 36.7148 16.875H37.7893C38.7832 16.875 39.2145 17.4114 39.2145 18.1137C39.2145 18.8689 38.7339 19.4873 37.7352 19.4873H35.3179Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <!-- --------------------------- Discover icon Logo -------------------------- -->
                            <div class="discover_icon">
                                <svg width="42" height="28" viewBox="0 0 42 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="41" height="27" rx="3.5" fill="white"
                                        stroke="#F3F3F3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.8096 14.2253C13.8096 15.9348 15.1982 17.2602 16.9852 17.2602C17.4903 17.2602 17.9231 17.1643 18.4565 16.9214V15.5861C17.9874 16.0399 17.5718 16.2231 17.0398 16.2231C15.8578 16.2231 15.019 15.3946 15.019 14.2168C15.019 13.1003 15.8843 12.2195 16.9852 12.2195C17.5449 12.2195 17.9686 12.4125 18.4565 12.8738V11.5391C17.9414 11.2866 17.5179 11.1819 17.0128 11.1819C15.2349 11.1819 13.8096 12.5343 13.8096 14.2253ZM10.7971 12.8133C10.7971 13.1277 11.0037 13.2937 11.708 13.5456C13.0429 14.0177 13.4385 14.4358 13.4385 15.36C13.4385 16.4857 12.5829 17.2696 11.3635 17.2696C10.4705 17.2696 9.82106 16.9297 9.28041 16.1623L10.0386 15.4566C10.3087 15.9617 10.7597 16.2324 11.3194 16.2324C11.8431 16.2324 12.2305 15.8833 12.2305 15.4121C12.2305 15.1678 12.1131 14.9582 11.8786 14.8101C11.7608 14.74 11.5269 14.6358 11.0674 14.4789C9.96518 14.0956 9.58723 13.6853 9.58723 12.8841C9.58723 11.9323 10.3991 11.2178 11.4637 11.2178C12.1234 11.2178 12.727 11.4357 13.2316 11.8624L12.6175 12.6396C12.3119 12.3084 12.0227 12.1687 11.6713 12.1687C11.1655 12.1687 10.7971 12.4471 10.7971 12.8133ZM7.66798 17.1294H8.84156V11.3135H7.66798V17.1294ZM5.2665 15.6824C4.89785 16.0044 4.41879 16.1448 3.66057 16.1448H3.34562V12.2987H3.66057C4.41879 12.2987 4.87902 12.43 5.2665 12.7692C5.67233 13.1184 5.9164 13.6599 5.9164 14.2169C5.9164 14.7753 5.67233 15.3332 5.2665 15.6824ZM3.89839 11.3135H2.17578V17.1292H3.88932C4.80049 17.1292 5.45829 16.9216 6.0359 16.4578C6.72229 15.9089 7.12813 15.0814 7.12813 14.2255C7.12813 12.5091 5.8016 11.3135 3.89839 11.3135ZM26.163 11.3135L27.7673 15.22L29.3925 11.3135H30.6647L28.0655 17.2786H27.434L24.8809 11.3135H26.163ZM31.1935 17.1294H34.5215V16.1448H32.3661V14.5749H34.4423V13.5898H32.3661V12.299H34.5215V11.3135H31.1935V17.1294ZM36.4649 13.9908H36.8077C37.5573 13.9908 37.9546 13.6761 37.9546 13.0914C37.9546 12.5254 37.5573 12.2295 36.8263 12.2295H36.4649V13.9908ZM37.0353 11.3135C38.3885 11.3135 39.1644 11.9417 39.1644 13.0306C39.1644 13.921 38.6777 14.5057 37.7937 14.6794L39.6879 17.1294H38.2447L36.6204 14.793H36.4672V17.1294H35.295V11.3135H37.0353Z"
                                        fill="#1D1D1B" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.7327 15.9091C25.6852 14.4693 25.2502 12.5567 23.761 11.636C22.2718 10.7154 20.2928 11.1357 19.3403 12.5754C18.388 14.0148 18.8232 15.9281 20.3124 16.8487C21.8016 17.7694 23.7805 17.3485 24.7327 15.9091Z"
                                        fill="url(#paint0_linear_72_367)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_72_367" x1="26.457" y1="13.3027" x2="21.1722"
                                            y2="9.80639" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F6A000" />
                                            <stop offset="0.623918" stop-color="#E47E02" />
                                            <stop offset="1" stop-color="#D36002" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="express" for="radiobtn">
                        <div class="radio_input" name="radiobtn">
                            <input type="radio" name="price" />
                        </div>
                        <div class="payment_card">
                            <!-- --------------------------- apple pay icon Logo -------------------------- -->

                            <div class="apple_pay_icon">
                                <svg width="32" height="13" viewBox="0 0 32 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.10842 2.52944C5.32427 2.52944 4.69168 3.0087 4.28314 3.0087C3.85483 3.0087 3.28154 2.55607 2.60283 2.55607C1.3113 2.55607 0 3.64107 0 5.67128C0 6.94265 0.487619 8.28059 1.08726 9.15259C1.59465 9.87814 2.04932 10.4772 2.69508 10.4772C3.33426 10.4772 3.61761 10.0512 4.41493 10.0512C5.21884 10.0512 5.40335 10.4639 6.10842 10.4639C6.81349 10.4639 7.28134 9.81823 7.72283 9.17921C8.21045 8.44035 8.42131 7.72145 8.4279 7.68817C8.38836 7.67486 7.04412 7.12238 7.04412 5.56477C7.04412 4.22017 8.09843 3.6211 8.15773 3.5745C7.46584 2.55607 6.40494 2.52944 6.10842 2.52944ZM5.746 1.67076C6.06229 1.27803 6.28633 0.74552 6.28633 0.206349C6.28633 0.133129 6.27974 0.0599078 6.26656 0C5.75259 0.0199693 5.12 0.346134 4.7444 0.792115C4.45446 1.13159 4.17771 1.67076 4.17771 2.20993C4.17771 2.28981 4.19089 2.37634 4.19748 2.40297C4.23042 2.40963 4.28314 2.41628 4.33586 2.41628C4.80371 2.41628 5.39676 2.09677 5.746 1.67076Z"
                                        fill="black" />
                                    <path
                                        d="M11.0181 0.752176V10.3574H12.7182V7.20891H14.7807C16.7048 7.20891 18.049 5.90425 18.049 4.00051C18.049 2.06349 16.7509 0.752176 14.8532 0.752176H11.0181ZM12.7182 2.18996H14.4051C15.6307 2.18996 16.3226 2.82232 16.3226 4.00051C16.3226 5.14542 15.6109 5.78443 14.3985 5.78443H12.7182V2.18996Z"
                                        fill="black" />
                                    <path
                                        d="M21.2389 9.17921C20.514 9.17921 19.9935 8.81311 19.9935 8.20072C19.9935 7.60829 20.4218 7.27547 21.3377 7.21557L22.9653 7.10906V7.68817C22.9653 8.53354 22.2273 9.17921 21.2389 9.17921ZM20.7579 10.4772C21.7001 10.4772 22.4909 10.0645 22.8928 9.35894H23.0049V10.3574H24.5797V5.38505C24.5797 3.84076 23.5386 2.92883 21.687 2.92883C19.9737 2.92883 18.781 3.74757 18.6492 5.03226H20.1912C20.3427 4.53968 20.8567 4.27343 21.6079 4.27343C22.4909 4.27343 22.9653 4.67281 22.9653 5.38505V5.99744L21.1071 6.1106C19.3543 6.2171 18.3725 6.97593 18.3725 8.29391C18.3725 9.62519 19.3675 10.4772 20.7579 10.4772Z"
                                        fill="black" />
                                    <path
                                        d="M26.399 13C28.0134 13 28.7843 12.4009 29.3972 10.5904L32 3.07527H30.2736L28.5933 8.75986H28.4812L26.7943 3.07527H25.002L27.5785 10.3907L27.4928 10.7102C27.282 11.3825 26.8932 11.6487 26.2013 11.6487C26.0893 11.6487 25.8455 11.6421 25.7532 11.6221V12.9734C25.8586 12.9933 26.3001 13 26.399 13Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <!-- --------------------------- Google icon Logo -------------------------- -->
                            <div class="google_icon">
                                <svg width="28" height="12" viewBox="0 0 28 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.287 5.79849V8.96336H12.3086V1.14795H14.9023C15.5597 1.14795 16.1202 1.37289 16.5788 1.82278C17.0476 2.27266 17.282 2.82193 17.282 3.4706C17.282 4.13497 17.0476 4.68424 16.5788 5.12889C16.1253 5.57354 15.5648 5.79325 14.9023 5.79325H13.287V5.79849ZM13.287 2.11049V4.83594H14.9227C15.31 4.83594 15.6361 4.69993 15.8909 4.43314C16.1508 4.16635 16.2833 3.84202 16.2833 3.47583C16.2833 3.11488 16.1508 2.79578 15.8909 2.52899C15.6361 2.25173 15.3151 2.11572 14.9227 2.11572H13.287V2.11049Z"
                                        fill="#5F6368" />
                                    <path
                                        d="M20.0911 3.27979C20.76 3.27979 21.2875 3.47812 21.6738 3.8748C22.0601 4.27147 22.2532 4.81429 22.2532 5.50325V8.79148H21.3912V8.05033H21.3535C20.9814 8.661 20.4821 8.96372 19.8603 8.96372C19.328 8.96372 18.8852 8.79148 18.5272 8.44178C18.1692 8.09208 17.9902 7.65887 17.9902 7.13693C17.9902 6.58367 18.1787 6.14524 18.5555 5.82164C18.9323 5.49281 19.4363 5.33101 20.0628 5.33101C20.5998 5.33101 21.0426 5.44062 21.3865 5.65984V5.43018C21.3865 5.08048 21.264 4.78819 21.0143 4.54288C20.7647 4.29757 20.4726 4.17752 20.1382 4.17752C19.6342 4.17752 19.2338 4.4124 18.9417 4.88736L18.1457 4.33411C18.5837 3.62948 19.2338 3.27979 20.0911 3.27979ZM18.9229 7.15259C18.9229 7.41356 19.0218 7.63277 19.2244 7.80501C19.4222 7.97725 19.6577 8.06598 19.9262 8.06598C20.3078 8.06598 20.6469 7.9094 20.9437 7.59624C21.2404 7.28307 21.3912 6.91771 21.3912 6.49494C21.1085 6.24963 20.7176 6.12436 20.2136 6.12436C19.8462 6.12436 19.54 6.22353 19.295 6.41665C19.0454 6.62021 18.9229 6.86552 18.9229 7.15259Z"
                                        fill="#5F6368" />
                                    <path
                                        d="M27.9412 3.27979L24.8267 11.0952H23.8632L25.0214 8.36087L22.9678 3.27979H23.9848L25.4642 7.17687H25.4837L26.9241 3.27979H27.9412Z"
                                        fill="#5F6368" />
                                    <path
                                        d="M9.45827 4.93735C9.45827 4.60789 9.42918 4.29265 9.37517 3.9895H5.19531V5.72626L7.60257 5.72679C7.50493 6.30465 7.19072 6.79726 6.70926 7.12567V8.25245H8.14219C8.97889 7.46776 9.45827 6.30781 9.45827 4.93735Z"
                                        fill="#4285F4" />
                                    <path
                                        d="M6.72025 6.8037C6.35181 7.06939 5.87735 7.22481 5.32229 7.22481C4.25007 7.22481 3.34049 6.45235 3.01475 5.41113H1.64941V6.54365C2.32584 7.97879 3.71613 8.96359 5.32229 8.96359C6.4324 8.96359 7.36501 8.57326 8.04384 7.90134L6.72025 6.8037Z"
                                        fill="#34A853" />
                                    <path
                                        d="M2.91693 4.70057C2.91693 4.38475 2.97083 4.07947 3.06898 3.79246V2.56909H1.45434C1.12359 3.21014 0.9375 3.93375 0.9375 4.70057C0.9375 5.46739 1.12415 6.19099 1.45434 6.83204L3.06898 5.60868C2.97083 5.32167 2.91693 5.01638 2.91693 4.70057Z"
                                        fill="#FABB05" />
                                    <path
                                        d="M5.3061 2.17629C5.90934 2.17629 6.44953 2.39941 6.87605 2.83538L8.04384 1.58233C7.33457 0.872967 6.40989 0.4375 5.3061 0.4375C3.7075 0.4375 2.32286 1.4223 1.64941 2.85744L3.00873 3.98996C3.33304 2.94874 4.23861 2.17629 5.3061 2.17629Z"
                                        fill="#E94235" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------- Card Number ----------- -->
                <div class="card_container">
                    <div class="card_number">
                        <label for="">Card Number</label>
                        <input type="number" placeholder="1233 4654 4545 6566" required />
                    </div>

                    <div class="expiry_date-cvc_input">
                        <div class="card_number">
                            <label for="">Expiry Date</label>
                            <input type="date" placeholder="MM/DD/YY" max="2010-01-01" min="2009-01-01" required />
                        </div>
                        <div class="card_number">
                            <label for="">CVC</label>
                            <input type="number" placeholder="CVC" max="1000" min="1" required />
                        </div>
                    </div>
                </div>
                <!-- ----------------- Forward and Backward Button -------------- -->
                <div class="shipping_continue">
                    <div class="shipping">
                        <h1>
                            < shipping</h1>
                    </div>
                    <div class="continue">
                        <button id="paymentBtn2">Continue to Payment</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="chech_innersection2">
                <div class="innersection2">
                    <div class="order_edit">
                        <h2>Order Summary</h2>
                        <h3><a href="#">Edit cart</a></h3>
                    </div>
                    <div class="text_price">
                        <div class="text_left">
                            <p>Teltonika TeloCharge</p>
                            <p>Charging Cable</p>
                            <p>Charging Stand</p>
                            <p>Shipping & Handling</p>
                            <p>Tax</p>
                        </div>
                        <div class="price_right">
                            <p>$1,450.00 AUD</p>
                            <p>$45.99 AUD</p>
                            <p>$102.99 AUD</p>
                            <p>$11.99 AUD</p>
                            <p>$05.99 AUD</p>
                        </div>
                    </div>
                    <div class="order_total">
                        <p>Order Total:</p>
                        <p>$1616.96 AUD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order complete box -->
    <div class="ordercmplt_container d-none" id="orderComplete">
        <div class="order_form4">
            <div class="true_icon">
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="svg-popup">
                    <path
                        d="M23.2663 31.7999L17.533 26.0666C17.0441 25.5777 16.4219 25.3333 15.6663 25.3333C14.9108 25.3333 14.2886 25.5777 13.7997 26.0666C13.3108 26.5555 13.0663 27.1777 13.0663 27.9333C13.0663 28.6888 13.3108 29.311 13.7997 29.7999L21.3997 37.3999C21.933 37.9333 22.5552 38.1999 23.2663 38.1999C23.9775 38.1999 24.5997 37.9333 25.133 37.3999L40.1997 22.3333C40.6886 21.8444 40.933 21.2221 40.933 20.4666C40.933 19.711 40.6886 19.0888 40.1997 18.5999C39.7108 18.111 39.0886 17.8666 38.333 17.8666C37.5775 17.8666 36.9552 18.111 36.4663 18.5999L23.2663 31.7999ZM26.9997 53.6666C23.3108 53.6666 19.8441 52.9661 16.5997 51.5653C13.3552 50.1644 10.533 48.2648 8.13301 45.8666C5.73301 43.4666 3.83345 40.6444 2.43434 37.3999C1.03523 34.1555 0.334786 30.6888 0.333008 26.9999C0.333008 23.311 1.03345 19.8444 2.43434 16.5999C3.83523 13.3555 5.73479 10.5333 8.13301 8.13325C10.533 5.73325 13.3552 3.8337 16.5997 2.43459C19.8441 1.03547 23.3108 0.33503 26.9997 0.333252C30.6886 0.333252 34.1552 1.0337 37.3997 2.43459C40.6441 3.83547 43.4663 5.73503 45.8663 8.13325C48.2663 10.5333 50.1668 13.3555 51.5677 16.5999C52.9686 19.8444 53.6681 23.311 53.6663 26.9999C53.6663 30.6888 52.9659 34.1555 51.565 37.3999C50.1641 40.6444 48.2646 43.4666 45.8663 45.8666C43.4663 48.2666 40.6441 50.167 37.3997 51.5679C34.1552 52.9688 30.6886 53.6684 26.9997 53.6666Z"
                        fill="#00AEEF" />
                </svg>
            </div>
            <h1>Your order is complete!</h1>
            <p>You will be receiving a confirmation email with order details.</p>
            <div class="back_to_home_btn">
                <a href="/">
                    <button class="btn">Back To Home</button>
                </a>
            </div>
            </d>
        </div>
        <!-- end order complete box -->
    </div>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- multi step From script  -->
    <script>
    let conShipBtn = document.getElementById("conShip");
    let coutSection = document.getElementById("coutSection");
    let progress2Circle = document.getElementById("progress2");
    let progress2Text = document.getElementById("progress2Text");
    let progress3Circle = document.getElementById("progress3");
    let progress3Text = document.getElementById("progress3Text");
    let shipSection = document.getElementById("shipSection");
    let paymentSection = document.getElementById("paymentSection");
    let paymentBtn = document.getElementById("paymentBtn");
    conShipBtn.onclick = () => {
        coutSection.classList.add("d-none");
        progress2Circle.classList.add("activo");
        progress2Circle.classList.remove("text-muted");
        progress2Text.classList.remove("text-muted");
        shipSection.classList.remove("d-none");
    };
    paymentBtn.onclick = (e) => {
        e.preventDefault();

        shipSection.classList.add("d-none");
        progress3Circle.classList.add("activo");
        progress3Circle.classList.remove("text-muted");
        progress3Text.classList.remove("text-muted");
        paymentSection.classList.remove("d-none");
    };
    let paymentBtn2 = document.getElementById("paymentBtn2");
    let mianRow = document.getElementById("mainRow");
    let orderComplete = document.getElementById("orderComplete");
    paymentBtn2.onclick = () => {
        mianRow.classList.add("d-none");
        orderComplete.classList.remove("d-none");
    };
    </script>


    @endSection