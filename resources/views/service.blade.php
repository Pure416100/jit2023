@section('content')

<body>
    @extends('layouts.app')
    <!-- Comment Form Start -->
    <div class="choose_section layout_padding">
        <div class="container">
            <h1 class="choose_taital">
                <div class="card bg-light rounded p-5">
                    <label>บันทึกความรู้สึก</label>
                    
                  
                    <form>
                        <h1><span>วันที่ปัจจุบันคือ</span> <span class="badge rounded-pill bg-info"><script>
 
var date = new Date();
document.write( 
    date.getDate() + "-" + 
    (parseInt(date.getMonth())+1) + "-" + 
    date.getFullYear() 
);
 
</script></span></h1>
                        
                        <div class="row g-3">

                            <div class="col-12 col-sm-6">
                                <select name="v1" id="v1" class="form-control bg-white border-0" placeholder="วันนี้ความรู้สึกคุณเป็นสีอะไร" style="height: 55px;">
                                    <option value="">-- วันนี้ความรู้สึกคุณเป็นสีอะไร --</option>
                                    <option value="volvo">สีเหลือง = ความสุข</option>
                                    <option value="volvo">สีแดง = ความโกรธ</option>
                                    <option value="volvo">สีเขียว = ความกลัว</option>
                                    <option value="volvo">สีฟ้า = ความเศร้า</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">

                                <select name="v2" id="v2" class="form-control bg-white border-0" placeholder="ระดับความรู้สึก" style="height: 55px;">
                                    <option value="">-- ระดับความรู้สึก --</option>
                                    <option value="volvo">1 = รู้สึกน้อยที่สุด</option>
                                    <option value="volvo">2 = รู้สึกน้อย</option>
                                    <option value="volvo">3 = รู้สึกปานกลาง</option>
                                    <option value="volvo">4 = รู้สึกมาก</option>
                                    <option value="volvo">5 = รู้สึกมากที่สุด</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-12">
                                <textarea name="v3" id="v3" class="form-control bg-white border-0" rows="5" placeholder="อะไรทำให้คุณรู้สึกอย่างนั้น"></textarea>
                            </div>
                            <br>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">บันทึก</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
        </div>
    </div>

</body>

</html>
@endsection