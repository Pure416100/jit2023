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
        margin: 5px 0 20px 0;
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

                                <form method="get" action="{{ url('store') }}" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Content1 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>
                                        <br><br>

                                        <h3 for="customRange2">วันนี้ความรู้สึกเป็นสีอะไร:</h3>

                                        <div class="row">
                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-warning" type="radio"
                                                        value="สีเหลือง" name="flexRadioDefault" id="color_feel_today1"
                                                        checked>
                                                    <label class="form-check-label" for="color_feel_today1">
                                                        สีเหลือง = ความสุข
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-danger" type="radio" value="สีแดง"
                                                        name="flexRadioDefault" id="color_feel_today2" checked>
                                                    <label class="form-check-label" for="color_feel_today2">
                                                        สีแดง = ความโกรธ
                                                    </label>
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-success" type="radio"
                                                        value="สีเขียว" name="flexRadioDefault" id="color_feel_today3"
                                                        checked>
                                                    <label class="form-check-label" for="color_feel_today3">
                                                        สีเขียว = ความกลัว
                                                    </label>
                                                </div>

                                            </div>
                                            <br>

                                            <div class="col-md-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input bg-primary" type="radio" value="สีฟ้า"
                                                        name="flexRadioDefault" id="color_feel_today4" checked>
                                                    <label class="form-check-label" for="color_feel_today4">
                                                        สีฟ้า = ความเศร้า
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br>

                                        <div class="slidecontainer">
                                            <h3 for="customRange2">ระดับความรู้สึก: <label for="" id="demo"
                                                    style="font-weight:bold;color:red"></label></h3>
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

                                        <br><br><br><br><br>

                                        <h3 for="customRange2">อะไรทำให้คุณรู้สึกอย่างนั้น:</h3>
                                        <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="8"
                                            placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น..."></textarea>
                                    </div>

                                    {{-- Content2 --}}
                                    <div class="mySlides">
                                        <!-- Nested Row within Card Body -->
                                        <div class="text-center">
                                            <label class="choose_taital">
                                                <span class="badge rounded-pill bg-info">บันทึกความรู้สึก</span>
                                            </label>
                                            <h1><span>วันที่ปัจจุบัน : </span>
                                                <span class="badge rounded-pill bg-info">
                                                    <script>
                                                        var date = new Date();
                                                        document.write(
                                                            date.getDate() + "-" +
                                                            (parseInt(date.getMonth()) + 1) + "-" +
                                                            date.getFullYear()
                                                        );
                                                    </script>
                                                </span>
                                            </h1>
                                        </div>
                                        <br><br>

                                        <div class="text-center">
                                            <h2>รู้ทันกาย รู้ทันใจ รู้ทันความคิดในชีวิตประจำวัน...</h2>
                                            <h3>(Daili thought record)</h3>
                                            <p>มาดูตารางกันว่าเราแอบใช้ กับดักความคิด อะไรอยู่บ้าง แล้วจะคิดใหม่อย่างไรบ้าง
                                            </p>
                                            <img class="img-fluid rounded mx-auto d-block"
                                                src="https://scontent.fbkk10-1.fna.fbcdn.net/v/t1.15752-9/323924207_926043702103987_3054380521469122473_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_ohc=rK0KI8l4ahkAX_muwRj&_nc_ht=scontent.fbkk10-1.fna&oh=03_AdQal_mRbbRfIPOGnAkMWRMtX2yL_O8mOQ8FZA34UvuBuQ&oe=63E32E4B"
                                                width="800" height="600">
                                        </div>
                                        <br>
                                        <hr><br>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="">สถานการณ์: </label>
                                                <input type="text" class="form-control" placeholder="สถานการณ์...">
                                            </div>
                                            <div class="col">
                                                <div class="slidecontainer">
                                                    <h3 for="customRange2">ระดับความรู้สึก: <label for=""
                                                            id="demo2" style="font-weight:bold;color:red"></label></h3>
                                                    <input type="range" min="1" max="10" name="value"
                                                        value="{{ old('value') }}" class="slider" id="myRange2">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="">ความคิด: </label>
                                                <input type="text" class="form-control" placeholder="ความคิด...">
                                            </div>
                                            <div class="col">
                                                <label for="">กับดักความคิด: </label>
                                                <input type="text" class="form-control"
                                                    placeholder="กับดักความคิด...">
                                            </div>
                                        </div>

                                        <div class="row py-5 mb-3">
                                            <div class="col">
                                                <label for="">คิดใหม่: </label>
                                                <input type="text" class="form-control" placeholder="คิดใหม่...">
                                            </div>
                                            <div class="col">
                                                <div class="slidecontainer">
                                                    <h3 for="customRange2">ระดับความรู้สึกใหม่: <label for=""
                                                            id="demo3" style="font-weight:bold;color:red"></label>
                                                    </h3>
                                                    <input type="range" min="1" max="10" name="value"
                                                        value="{{ old('value') }}" class="slider" id="myRange3">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 col-4 mx-auto">
                                            <button class="btn btn-primary w-100" type="submit"
                                                onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')"
                                                href="{{ url('/day5') }}">บันทึก</button>
                                        </div>

                                    </div>
                                </form>
                                <br>
                                <!-- Comment Form End -->
                            </div>
                        </div>

                        <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle"
                            style="width:100%">
                            <div class="w3-btn w3-round-xlarge w3-left w3-hover-text-khaki" onclick="plusSlides(-1)">
                                &#10094;</div>
                            <div class="w3-btn w3-round-xlarge w3-right w3-hover-text-khaki" onclick="plusSlides(1)">
                                &#10095;</div>
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
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

        <script>
            var slider2 = document.getElementById("myRange2");
            var output2 = document.getElementById("demo2");
            output2.innerHTML = slider2.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider2.oninput = function() {
                output2.innerHTML = this.value;
            }
        </script>

        <script>
            var slider3 = document.getElementById("myRange3");
            var output3 = document.getElementById("demo3");
            output3.innerHTML = slider3.value; // Display the default slider value

            // Update the current slider value (each time you drag the slider handle)
            slider3.oninput = function() {
                output3.innerHTML = this.value;
            }
        </script>

        </html>
    @endsection
