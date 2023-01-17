<!DOCTYPE html>
<html lang="en">

@section('content')

    <body>
        @extends('layouts.app')
        <!-- services section start -->
        <div class="services_section layout_padding">
            <div class="container">
                <h1 class="services_taital"><span>ประวัติ</span> <img src="images/icon-1.png"> <span
                        style="color: #1f1f1f">บันทึกความรู้สึก</span></h1>
                <p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua</p>
                <div class="row">
                  <div class="p-5">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 bg w3-theme-l3">
                        <div class="card-header py-3 bg w3-theme">
                            <div class="w3-center">
                                <h6 class="m-0 font-weight-bold text-grey ">จำนวนบทความทั้งหมด : <span
                                        class="badge bg-warning ms-2">1 </span> </h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable" class="display  text-secondary" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">เลขที่ลำดับ</th>
                                            <th scope="col">ครั้งที่</th>
                                            <th scope="col">เวลาทำครั้งแรก</th>
                                            <th scope="col">สิ้นสุด</th>
                                            <th scope="col">ดาวโหลด</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">เลขที่ลำดับ</th>
                                            <th scope="col">ครั้งที่</th>
                                            <th scope="col">เวลาทำครั้งแรก</th>
                                            <th scope="col">สิ้นสุด</th>
                                            <th scope="col">ดาวโหลด</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      @foreach($rounds_story as $item)
                                      <tr class="item{{$item->id}}">
                                          <td><span class="w3-tag w3-round w3-green w3-border w3-border-white">{{$item->id}}</span></td>
                                          <td>{{$item->rounds}}</td>
                                          <td>{{$item->created_at}}</td>
                                          <td>{{$item->updated_at}}</td>
                      
                                          <td>
                                              <a href="{{url('pdf/'.$item->id)}}" class="btn btn-primary w3-round-xxlarge">แก้ไข</a>

                                          </td>
                                      </tr>
                                      @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <script>
            $(document).ready(function() {
                $("#myTable").DataTable();
            });
        </script>

    </body>

    </html>
@endsection
