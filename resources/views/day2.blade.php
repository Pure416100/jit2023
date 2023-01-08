<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */


    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }


    input[type=radio] {
        transform: scale(1.5);
    }

    /* Range */
    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 15px;
        border-radius: 5px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #04AA6D;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #04AA6D;
        cursor: pointer;
    }

    /**/

    .slider:hover {
        opacity: 1;
    }

    .sliderticks {
        display: flex;
        justify-content: space-between;
        padding: 0 12px;
    }

    .sliderticks p {
        position: relative;
        display: flex;
        justify-content: center;
        text-align: center;
        width: 1px;
        background: #D3D3D3;
        height: 10px;
        line-height: 40px;
        margin: 0 0 20px 0;
    }
</style>

@section('content')

    <body>
        @extends('layouts.app')
        <!-- Comment Form Start -->
        <div class="layout_padding">
          <div class="container">
                <div class="row justify-content-center">

                  <div class="card o-hidden border-0 shadow-lg my-5  w3-theme-l4">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="mySlides">
                                    <div class="text-center">
                                        <!-- Nested Row within Card Body -->
                                        <label class="choose_taital"><span
                                                class="badge rounded-pill bg-info">บันทึกความรู้สึก<span></span></label><br><br>
                                        <h1><span>วันที่ปัจจุบันคือ</span> <span class="badge rounded-pill bg-info">
                                                <script>
                                                    var date = new Date();
                                                    document.write(
                                                        date.getDate() + "-" +
                                                        (parseInt(date.getMonth()) + 1) + "-" +
                                                        date.getFullYear()
                                                    );
                                                </script>
                                            </span></h1>
                                    </div>
                                    <form method="get" action="{{ url('store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <label for="customRange2">วันนี่ความรู้ศึกเป็นสีอะไร : </label>
                                        <div class="row">

                                            <div class="col">

                                                <div class="form-check">
                                                    <input class="form-check-input bg-warning" type="radio"
                                                        value="สีเหลือง" name="flexRadioDefault" id="color_feel_today"
                                                        checked>
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        สีเหลือง = ความสุข
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-danger" type="radio" value="สีแดง"
                                                        name="flexRadioDefault" id="color_feel_today" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        สีแดง = ความโกรธ
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-success" type="radio"
                                                        value="สีเขียว" name="flexRadioDefault" id="color_feel_today"
                                                        checked>
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        สีเขียว = ความกลัว
                                                    </label>
                                                </div>

                                            </div>
                                            <br>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-primary" type="radio" value="สีฟ้า"
                                                        name="flexRadioDefault" id="color_feel_today" checked>
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        สีฟ้า = ความเศร้า
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="slidecontainer">
                                            <label for="customRange2">ระดับความรู้สึก: </label>
                                            <label for="" id="demo" style="font-weight:bold;color:red"></label>
                                            <input type="range" min="1" max="5" name="value"
                                                value="{{ old('value') }}" class="slider" id="myRange">
                                            <div class="sliderticks">
                                                <p>น้อยที่สุด</p>
                                                <p>น้อย</p>
                                                <p>ปานกลาง</p>
                                                <p>มาก</p>
                                                <p>มากที่สุด</p>
                                            </div>
                                        </div>

                                        <br><br><br>
                                        <hr>

                                        <br>

                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="5"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>

                                </div>

                                <div class="mySlides">

                                    <div class="text-center">
                                        <label class="choose_taital"><span
                                                class="badge rounded-pill bg-info">ฝึกรู้ทันความคิด<span></span></label><br><br>
                                        <h5><span class="badge rounded-pill bg-info">
                                                มีเรื่องอะไรบ้างนะที่ทำให้หนูกลัวแล้วตอนนั้นหนูคิดอะไรนะ
                                            </span></h5>
                                    </div>


                                    <div class="row mb-2">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">เหตุการณ์
                                            :</label>

                                        <div class="col-md-6">
                                            <textarea name="v5" id="v5" class="form-control" rows="5" placeholder="เหตุการณ์นั้น"></textarea>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-2">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">ความคิด : </label>

                                        <div class="col-md-6">
                                            <textarea name="v5" id="v5" class="form-control" rows="5" placeholder="หนูคิดอะไร"></textarea>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <img class="profile_img" src="images/1.png" alt="student dp" width="220"
                                                height="200">
                                      
                                        </div>
                                    </div>
                                    <h4>
                                </div>



                                <div class="mySlides">
                                    <div class="text-center">
                                        <label class="choose_taital"><span
                                                class="badge rounded-pill bg-info">เกมข้อดีมีในตัว...<span></span></label><br><br>
                                        <h1><span>วันที่ปัจจุบันคือ</span> <span class="badge rounded-pill bg-info">
                                                <script>
                                                    var date = new Date();
                                                    document.write(
                                                        date.getDate() + "-" +
                                                        (parseInt(date.getMonth()) + 1) + "-" +
                                                        date.getFullYear()
                                                    );
                                                </script>
                                            </span></h1>

                                        <h3>วิธีการเล่นเกมนี้ง่ายมาก!</h3>
                                        <h2>คุณเพียงแค่ต้องมองหาข้อดีจากคำๆนั้นให้เจอ</h2>
                                        <h2>เช่น " มีคนเดินมาชน คุณจะรู้สึกอย่างไร "</h2>


                                        <br><br>
                                    </div>
                                    <textarea name="v4" id="v4" class="form-control" rows="5"
                                        placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>

                                    <button type="submit" class="btn btn-primary">
                                        ส่งแบบบันทึก
                                    </button>
                                </div>

                                </form>

                                <br>

                                <!-- Comment Form End -->
                            </div>
                            <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle"
                                style="width:100%">
                                <div class="w3-left w3-hover-text-khaki" onclick="plusSlides(-1)">&#10094;</div>
                                <div class="w3-right w3-hover-text-khaki" onclick="plusSlides(1)">&#10095;</div>
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>


        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function() {
                output.innerHTML = this.value;
            }
        </script>

        </html>
    @endsection
