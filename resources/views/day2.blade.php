<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display: none}
img {vertical-align: middle;}

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

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

input[type="radio"].form-check-input {
  border-radius: 50%;
}
input[type=radio]{
  transform:scale(1.5);
}
</style>

@section('content')

<body>
  @extends('layouts.app')
  <!-- Comment Form Start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="card bg-grey">
        <div class="card-body">
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
                  <form>
                    <hr>
                  <div class="row">
                    <div class="col">
                      <div class="form-check">
                        <input class="form-check-input bg-warning" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          สีเหลือง = ความสุข
                        </label>
                      </div>
                    </div>
                    <br>
                    <div class="col">
                      <div class="form-check">
                        <input class="form-check-input bg-danger" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        สีแดง = ความโกรธ
                      </label>
                      </div>
                    </div>
                    <br>
                    <div class="col">
                      <div class="form-check">
                        <input class="form-check-input bg-success" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                          สีเขียว = ความกลัว
                        </label>
                      </div>

                    </div>
                    <br>
                    <div class="col">
                      <div class="form-check">
                        <input class="form-check-input bg-primary" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                          สีฟ้า = ความเศร้า
                        </label>
                      </div>
                    </div>
                   </div>



                    <hr>
      

                    <select name="v2" id="v2" class="form-select" placeholder="ระดับความรู้สึก"
                      style="height: 55px;">
                      <option value="">-- ระดับความรู้สึก --</option>
                      <option value="volvo">1 = รู้สึกน้อยที่สุด</option>
                      <option value="volvo">2 = รู้สึกน้อย</option>
                      <option value="volvo">3 = รู้สึกปานกลาง</option>
                      <option value="volvo">4 = รู้สึกมาก</option>
                      <option value="volvo">5 = รู้สึกมากที่สุด</option>
                    </select>

                    <br>
                    
                    <textarea name="v3" id="v3" class="form-control shadow-textarea " rows="5"
                      placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>
               
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
                  <textarea name="v3" id="v3" class="form-control" rows="5"
                    placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>

                </div>






                <div class="mySlides">
                  <div class="text-center">
                  <label class="choose_taital"><span
                      class="badge rounded-pill bg-info">เพลง<span></span></label><br><br>
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
                  <iframe style="width:100%" src="https://www.youtube.com/embed/K_aFdCvnwFk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                  <br><br>
                  <textarea name="v3" id="v3" class="form-control" rows="5"
                    placeholder="คุณรู้สึกอะไรเมื่อฟังเพลงนี้"></textarea>
                  <br>
                  <a class="btn btn-primary w-100 py-3" type="submit"
                    onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')" href="{{url('/results')}}">บันทึก</a>

                </div>
                </form>
              </div>
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
  </script>


</body>

</html>
@endsection