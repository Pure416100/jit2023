set_time_limit();
<!DOCTYPE html>
<html><head>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">            
        </head>
        
        <style>
            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
            }
            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
            }
            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: normal;
                src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
            }
            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: bold;
                src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
            }
            body {
                font-family: "THSarabunNew";
            }
        </style>
    <title>รายงานการทำแบบบันทึก</title>
</head>
<body>
    <div class="table-responsive">
        <table id="myTable" class="display  text-secondary" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">เลขที่ลำดับ</th>
                    <th scope="col">ครั้งที่</th>
                    <th scope="col">เวลาทำครั้งแรก</th>
                    <th scope="col">สิ้นสุด</th>
            
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th scope="col">เลขที่ลำดับ</th>
                    <th scope="col">ครั้งที่</th>
                    <th scope="col">เวลาทำครั้งแรก</th>
                    <th scope="col">สิ้นสุด</th> 
                </tr>
            </tfoot>
            <tbody>
              <tr class="item{{$data->id}}">
                  <td><span class="w3-tag w3-round w3-green w3-border w3-border-white">{{$data->id}}</span></td>
                  <td>{{$data->rounds}}</td>
                  <td>{{$data->created_at}}</td>
                  <td>{{$data->updated_at}}</td>
              </tr>
            </tbody>
        </table>

    </div>
</body>
</html>