<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .mySlides {
    display: none
  }

  .w3-left,
  .w3-right,
  .w3-badge {
    cursor: pointer
  }
</style>

@section('content')

<body>
  @extends('layouts.app')
  <!-- Comment Form Start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5  w3-theme-l4">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="p-5">
            <div class="text-center">
              <div class="w3-content w3-display-container">
                <div class="mySlides">

                  <!-- Nested Row within Card Body -->
                     <label class="choose_taital"><span class="badge rounded-pill bg-info">บันทึกความรู้สึก<span></span></label><br><br>
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
  
                    <form>
                          <select name="v1" id="v1" class="form-control bg-white border-0" placeholder="วันนี้ความรู้สึกคุณเป็นสีอะไร" style="height: 55px;">
                            <option value="">-- วันนี้ความรู้สึกคุณเป็นสีอะไร --</option>
                            <option value="volvo">สีเหลือง = ความสุข</option>
                            <option value="volvo">สีแดง = ความโกรธ</option>
                            <option value="volvo">สีเขียว = ความกลัว</option>
                            <option value="volvo">สีฟ้า = ความเศร้า</option>
                          </select>
                       
                          <br>
                        

                          <select name="v2" id="v2" class="form-control bg-white border-0" placeholder="ระดับความรู้สึก" style="height: 55px;">
                            <option value="">-- ระดับความรู้สึก --</option>
                            <option value="volvo">1 = รู้สึกน้อยที่สุด</option>
                            <option value="volvo">2 = รู้สึกน้อย</option>
                            <option value="volvo">3 = รู้สึกปานกลาง</option>
                            <option value="volvo">4 = รู้สึกมาก</option>
                            <option value="volvo">5 = รู้สึกมากที่สุด</option>
                          </select>
                    
                        <br>
                          <textarea name="v3" id="v3" class="form-control bg-white border-0" rows="5" placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>     
                </div>
                <div class="mySlides">
                <label class="choose_taital"><span class="badge rounded-pill bg-info">เกมข้อดีมีในตัว...<span></span></label><br><br>
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

                  <textarea name="v3" id="v3" class="form-control bg-white border-0" rows="5" placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>

                </div>






                <div class="mySlides">

                <label class="choose_taital"><span class="badge rounded-pill bg-info">เพลง<span></span></label><br><br>
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
             
                  <iframe style="width:100%" src="https://www.youtube.com/embed/K_aFdCvnwFk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <br><br>
                  <textarea name="v3" id="v3" class="form-control bg-white border-0" rows="5" placeholder="คุณรู้สึกอะไรเมื่อฟังเพลงนี้"></textarea>
                  <br>
                  <a class="btn btn-primary w-100 py-3" type="submit" onclick="return confirm('กรุณายืนยันการบันทึกข้อมูล??')" href="{{url('/day6')}}">บันทึก</a>
                
                </div>
                </form>
              </div><hr>

              <!-- Comment Form End -->
            </div>
          </div>

        </div>
        
        <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle" style="width:100%">
          <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
          <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(1)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(2)"></span>
          <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(3)"></span>
        </div>
      </div>
    </div>
  </div>

  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-black", "");
      }
      x[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " w3-black";
    }
  </script>

</body>

</html>
@endsection