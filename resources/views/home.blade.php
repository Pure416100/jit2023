<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template">
	<meta property="og:title" content="Dompet : Payment Admin Template">
	<meta property="og:description" content="Dompet : Payment Admin Template">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="vendor/fullcalendar/css/main.min.css" rel="stylesheet">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
		
    <link href="css/style55.css" rel="stylesheet">
	
	
</head>
@extends('layouts.app')

@section('content')

    
<div class="about_section layout_padding">
        <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-xxl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-intro-title">Calendar</h4>
    
                                    <div class="">
                                        <div id="external-events" class="my-3">
                                            <p>Drag and drop your event or click in the calendar</p>
                                            <div class="external-event btn-primary light" data-class="bg-primary"><i class="fa fa-move"></i><span>New Theme Release</span></div>
                                            <div class="external-event btn-warning light" data-class="bg-warning"><i class="fa fa-move"></i>My Event
                                            </div>
                                            <div class="external-event btn-danger light" data-class="bg-danger"><i class="fa fa-move"></i>Meet manager</div>
                                            <div class="external-event btn-info light" data-class="bg-info"><i class="fa fa-move"></i>Create New theme</div>
                                            <div class="external-event btn-dark light" data-class="bg-dark"><i class="fa fa-move"></i>Project Launch</div>
                                            <div class="external-event btn-secondary light" data-class="bg-secondary"><i class="fa fa-move"></i>Meeting</div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="checkbox form-check checkbox-event custom-checkbox pt-3 pb-5">
                                            <input type="checkbox" class="form-check-input" id="drop-remove">
                                            <label class="form-check-label" for="drop-remove">Remove After Drop</label>
                                        </div>
                                        <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add-category" class="btn btn-primary btn-event w-100">
                                            <span class="align-middle"><i class="ti-plus"></i></span> Create New
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-xxl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div id="calendar" class="app-fullcalendar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN MODAL -->
                        <div class="modal fade none-border" id="event-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                            event</button>
    
                                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-bs-toggle="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Category -->
                        <div class="modal fade none-border" id="add-category">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add a category</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label form-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label form-label">Choose Category Color</label>
                                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="pink">Pink</option>
                                                        <option value="primary">Primary</option>
                                                        <option value="warning">Warning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-bs-toggle="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        
           
        </div>
        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/moment/moment.min.js"></script>
    
        <script src="vendor/fullcalendar/js/main.min.js"></script>
        <script src="js/plugins-init/fullcalendar-init.js"></script>
        <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        
        <script src="js/custom.min.js"></script>
       
       
        @include('layouts.footer')
 
    </body>
    </html>
     @endsection
    