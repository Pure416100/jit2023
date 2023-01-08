<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


@section('content')

<body>
  @extends('layouts.app')
  <!-- Comment Form Start -->
  <div class="about_section layout_padding">
    <div class="container-fluid">
        <!-- row -->
       
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-slider owl-carousel">
                        <div class="items">
                            <div class="card-bx bg-orange mb-0">
                                <img class="pattern-img" src="images/pattern/pattern8.png" alt="">
                                <div class="card-info text-white">
                                    <div class="d-flex align-items-center">
                                        <div class="me-auto w3-center">
                                            <h3 class="text-white">ประกาศนียบัตรแห่งความสุข</h2>  <hr class="text-white"> 
                                            <h6  class="text-white">ขอมอบประกาศนียบัตรให้แก่</h6>
                                            <p  class="text-white">{{ Auth::user()->name }}</p>
                                            <h6  class="text-white">ผู้ที่ได้เรียนรู้วิธีจัดการอารมณ์เศร้า</h6>
                                            <h6  class="text-white">เมื่อวันที่ {{ Auth::user()->created_at->format('j F, Y' )}} </h6>
                                            <hr>
                                        </div>
                                        <img src="images/รางวัลทอง.png" class="mb-4" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="card-bx bg-blue">
                                <img class="pattern-img" src="images/pattern/pattern6.png" alt="">
                                <div class="card-info text-white">
                                    <div class="d-flex align-items-center">
                                        <div class="me-auto w3-center">
                                            <h3 class="text-white">ประกาศนียบัตรแห่งความสุข</h2>  <hr class="text-white"> 
                                            <h6  class="text-white">ขอมอบประกาศนียบัตรให้แก่</h6>
                                            <p  class="text-white">{{ Auth::user()->name }}</p>
                                            <h6  class="text-white">ผู้ที่ได้เรียนรู้วิธีจัดการอารมณ์เศร้า</h6>
                                            <h6  class="text-white">เมื่อวันที่ {{ Auth::user()->created_at->format('j F, Y' )}} </h6>
                                            <hr>
                                        </div>
                                        <img src="images/รางวัลเงิน.png" class="mb-4" alt="" >
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                        <div class="items">
                            <div class="card-bx bg-green mb-0">
                                <img class="pattern-img" src="images/pattern/pattern9.png" alt="">
                                <div class="card-info text-white">
                                    <div class="d-flex align-items-center">
                                        <div class="me-auto w3-center">
                                            <h3 class="text-white">ประกาศนียบัตรแห่งความสุข</h2>  <hr class="text-white"> 
                                            <h6  class="text-white">ขอมอบประกาศนียบัตรให้แก่</h6>
                                            <p  class="text-white">{{ Auth::user()->name }}</p>
                                            <h6  class="text-white">ผู้ที่ได้เรียนรู้วิธีจัดการอารมณ์เศร้า</h6>
                                            <h6  class="text-white">เมื่อวันที่ {{ Auth::user()->created_at->format('j F, Y' )}} </h6>
                                            <hr>
                                        </div>
                                        <img src="images/รางวัลเงิน.png" class="mb-4" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="card-bx bg-purpel mb-0">
                                <img class="pattern-img" src="images/pattern/pattern10.png" alt="">
                                <div class="card-info text-white">
                                    <div class="d-flex align-items-center">
                                        <div class="me-auto w3-center">
                                            <h3 class="text-white">ประกาศนียบัตรแห่งความสุข</h2>  <hr class="text-white"> 
                                            <h6  class="text-white">ขอมอบประกาศนียบัตรให้แก่</h6>
                                            <p  class="text-white">{{ Auth::user()->name }}</p>
                                            <h6  class="text-white">ผู้ที่ได้เรียนรู้วิธีจัดการอารมณ์เศร้า</h6>
                                            <h6  class="text-white">เมื่อวันที่ {{ Auth::user()->created_at->format('j F, Y' )}} </h6>
                                            <hr>
                                        </div>
                                        <img src="images/รางวัลเงิน.png" class="mb-4" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                       
                
            </div>
            <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-sm-flex d-block border-0 pb-0">
                        <div class="me-auto mb-sm-0 mb-4">
                            <h4 class="fs-20 text-black">Card List</h4>
                            <span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-primary btn-rounded btn-md mx-3">+Add New Card</a>
                        <select class="default-select dashboard-select">
                          <option data-display="newest">newest</option>
                          <option value="1">newest</option>
                          <option value="2">oldest</option>
                        </select>
                    </div>
                    <div class="card-body pb-0">
                        <div class="d-flex mb-3 border-bottom justify-content-between flex-wrap align-items-center">
                            <div class="d-flex pb-3 align-items-center">
                                <img src="images/card/1.jpg" alt="" class="rounded me-3 card-list-img" width="130">
                                <div class="me-3">
                                    <p class="fs-14 mb-1">Card Type</p>
                                    <span class="text-black font-w500">Primary</span>
                                </div>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Bank</p>
                                <span class="text-black font-w500">ABC Bank</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Card Number</p>
                                <span class="text-black font-w500">**** **** **** 2256</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Namein Card</p>
                                <span class="text-black font-w500">Franklin Jr.</span>
                            </div>
                            <a href="javascript:void(0);" class="fs-14 btn-link me-3 pb-3">See Number</a>
                            <div class="dropdown pb-3">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-3 border-bottom justify-content-between flex-wrap align-items-center">
                            <div class="d-flex pb-3 align-items-center">
                                <img src="images/card/2.jpg" alt="" class="rounded me-3 card-list-img" width="130">
                                <div class="me-3">
                                    <p class="fs-14 mb-1">Card Type</p>
                                    <span class="text-black font-w500">Secondary</span>
                                </div>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Bank</p>
                                <span class="text-black font-w500">ABC Bank</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Card Number</p>
                                <span class="text-black font-w500">**** **** **** 2256</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Namein Card</p>
                                <span class="text-black font-w500">Franklin Jr.</span>
                            </div>
                            <a href="javascript:void(0);" class="fs-14 btn-link me-3 pb-3">See Number</a>
                            <div class="dropdown pb-3">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-3 border-bottom justify-content-between flex-wrap align-items-center">
                            <div class="d-flex pb-3 align-items-center">
                                <img src="images/card/3.jpg" alt="" class="rounded me-3 card-list-img" width="130">
                                <div class="me-3">
                                    <p class="fs-14 mb-1">Card Type</p>
                                    <span class="text-black font-w500">Primary</span>
                                </div>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Bank</p>
                                <span class="text-black font-w500">ABC Bank</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Card Number</p>
                                <span class="text-black font-w500">**** **** **** 2256</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Namein Card</p>
                                <span class="text-black font-w500">Franklin Jr.</span>
                            </div>
                            <a href="javascript:void(0);" class="fs-14 btn-link me-3 pb-3">See Number</a>
                            <div class="dropdown pb-3">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-3 border-bottom justify-content-between flex-wrap align-items-center">
                            <div class="d-flex pb-3 align-items-center">
                                <img src="images/card/4.jpg" alt="" class="rounded me-3 card-list-img" width="130">
                                <div class="me-3">
                                    <p class="fs-14 mb-1">Card Type</p>
                                    <span class="text-black font-w500">Primary</span>
                                </div>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Bank</p>
                                <span class="text-black font-w500">ABC Bank</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Card Number</p>
                                <span class="text-black font-w500">**** **** **** 2256</span>
                            </div>
                            <div class="me-3 pb-3">
                                <p class="fs-14 mb-1">Namein Card</p>
                                <span class="text-black font-w500">Franklin Jr.</span>
                            </div>
                            <a href="javascript:void(0);" class="fs-14 btn-link me-3 pb-3">See Number</a>
                            <div class="dropdown pb-3">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       

<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<script src="js/dashboard/cards-center.js"></script>
<script src="js/custom.min.js"></script>

<script>
    function cardsCenter()
    {
        
        /*  testimonial one function by = owl.carousel.js */
        

        
        jQuery('.card-slider').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            center:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: false,
            navText: ['', ''],
            responsive:{
                0:{
                    items:1
                },
                576:{
                    items:1
                },	
                800:{
                    items:2
                },			
                991:{
                    items:2
                },
                1200:{
                    items:2
                },
                1600:{
                    items:3
                }
            }
        })
    }
    
    jQuery(window).on('load',function(){
        setTimeout(function(){
            cardsCenter();
        }, 1000); 
    });
    
</script>


</body>

</html>
@endsection