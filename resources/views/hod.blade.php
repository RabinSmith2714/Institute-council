<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Institute Council App</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!--   datatable link -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .bg-nav-pills {
            background-color: #f8f9fa;
        }

        .nav-pills .nav-link {
            color: #000;
            font-weight: 500;
            padding: 12px 2x;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .nav-link:hover {
            background-color: #007bff;
            color: #fff;
            transition: 0.3s;
        }

        .nav-justified .nav-item {
            flex: 1;
            text-align: center;
        }

        /* table class name */
        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .table {
            margin-top: 10px;
        }

        /* Modal Overlay */
        .modal.fade {
            background-color: rgba(0, 0, 0, 0.5);
            /* Dark overlay */
        }

        /* Modal Dialog */
        .modal-dialog {
            max-width: 600px;
            /* Set max width for larger screens */
            margin: 1.75rem auto;
            /* Center modal vertically */
        }

        /* Modal Content */
        .modal-content {
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow */
        }

        /* Modal Header */
        .modal-header {
            background-color: #007bff;
            /* Bootstrap primary color */
            color: white;
            /* White text color */
            border-bottom: none;
            /* Remove border */
        }

        .modal-title {
            font-weight: 600;
            /* Bold title */
        }

        /* Close Button */
        .close {
            color: white;
            /* White close button */
        }

        /* Modal Body */
        .modal-body {
            background-color: #f8f9fa;
            /* Light background color */
            padding: 20px;
            /* Padding around content */
        }

        /* Form Labels */
        .modal-body label {
            font-weight: 500;
            /* Semi-bold labels */
        }

        /* Form Row */
        .form-row {
            display: flex;
            /* Flexbox layout */
            flex-wrap: wrap;
            /* Wrap on smaller screens */
        }

        /* Form Group */
        .form-group {
            flex: 1;
            /* Take available space */
            min-width: 250px;
            /* Minimum width for each input */
            margin-bottom: 15px;
            /* Spacing between inputs */
        }

        /* Input Fields */
        .modal-body input[type="text"],
        .modal-body input[type="number"],
        .modal-body input[type="file"] {
            width: 100%;
            /* Full width inputs */
            padding: 10px;
            /* Padding inside inputs */
            border: 1px solid #ced4da;
            /* Light border */
            border-radius: 4px;
            /* Rounded input corners */
            transition: border-color 0.3s;
            /* Transition effect */
        }

        .modal-body input[type="text"]:focus,
        .modal-body input[type="number"]:focus {
            border-color: #007bff;
            /* Change border color on focus */
            outline: none;
            /* Remove outline */
        }

        /* Modal Footer */
        .modal-footer {
            border-top: none;
            /* Remove border */
        }

        .modal-footer .btn {
            width: 100px;
            /* Set a fixed width for buttons */
        }

        .modal-footer .btn-secondary {
            background-color: #6c757d;
            /* Secondary button color */
        }

        /* Add a hover effect for buttons */
        .modal-footer .btn:hover {
            opacity: 0.9;
            /* Slightly fade on hover */
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="hod.php">
                        <b class="logo-icon p-l-1">
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="c" style="width: 100%;">

                    <ul class="nav nav-pills bg-nav-pills nav-justified my-3" id="researchTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0 active nav-bas" id="targets-tab" data-toggle="pill" href="#targets" role="tab" aria-controls="targets" aria-selected="true">Targets</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="journal-tab" data-toggle="pill" href="#journal" role="tab" aria-controls="journal" aria-selected="false">Journal</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="consultancy-tab" data-toggle="pill" href="#consultancytab" role="tab" aria-controls="consultancy" aria-selected="false">Consultancy</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="funded_projects-tab" data-toggle="pill" href="#funded_projects" role="tab" aria-controls="funded_projects" aria-selected="false">Funded Projects</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="awareness_program-tab" data-toggle="pill" href="#awareness_program" role="tab" aria-controls="awareness_program" aria-selected="false">Awareness Programs</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="conference-tab" data-toggle="pill" href="#conferencetab" role="tab" aria-controls="conference" aria-selected="false">Conferences</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-0" id="patent-tab" data-toggle="pill" href="#patent" role="tab" aria-controls="patent" aria-selected="false">Patents</a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="tab-content" id="researchTabContent">

                        <!------Target Tab--------->
                        <div class="tab-pane fade show active" id="targets" role="tabpanel" aria-labelledby="targets-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="header-title">Current Month Target</h4><button class="btn btn-dark" data-toggle="modal" data-target="#targetModal">Set Month's Target</button>
                                            </div><br>
                                            <li class="list-group-item d-flex justify-content-between align-items-center"><span class="text-danger">Target not set for the current month</span></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------Modal for targets---->
                        <div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="targetModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form>
                                        <div>
                                            <div class="modal-body">
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label>Awareness Programs</label>
                                                        <input type="number" value="0" id="awarenessprogram" name="awarenessprogram" fdprocessedid="6iga4g">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Conference</label>
                                                        <input type="number" value="0" id="conference" name="conference" fdprocessedid="zgm22i">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Consultancy</label>
                                                        <input type="number" value="0" id="consultancy" name="consultancy" fdprocessedid="zgm22i">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Funded Projects</label>
                                                        <input type="number" value="0" id="fundedprojects" name="fundedprojects" fdprocessedid="zgm22i">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Journals</label>
                                                        <input type="number" value="0" id="journals" name="journals" fdprocessedid="zgm22i">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Patents</label>
                                                        <input type="number" value="0" id="patents" name="patents" fdprocessedid="zgm22i">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Set Target</button><br>

                                                    <div class="modal-footer" style="background-color:white">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!------journel tab------>
                        <div class="tab-pane fade" id="journal" role="tabpanel" aria-labelledby="journal-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#journalModal">Add +</button>
                            <br> <br>
                            <div class="table-responsive">
                                <table id="journalTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Type</th>
                                            <th>Tittle</th>
                                            <th>Volume</th>
                                            <th>Issue Number</th>
                                            <th>Pages</th>
                                            <th>Date</th>
                                            <th>Link</th>
                                            <th>No.of Author</th>
                                            <th>Authors Position</th>
                                            <th>File</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $serial = 1; @endphp
                                        @foreach($data as $d)
                                        <tr>
                                            <td>{{$serial++}}</td>
                                            <td>{{$d->faculty_name}}</td>
                                            <td>{{$d->faculty_id}}</td>
                                            <td>{{$d->type}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->volume}}</td>
                                            <td>{{$d->issuenumber}}</td>
                                            <td>{{$d->page}}</td>
                                            <td>{{$d->date}}</td>
                                            <td>{{$d->link}}</td>
                                            <td>{{$d->noauthor}}</td>
                                            <td>{{$d->position}}</td>
                                            <td>
                                                @if($d->uploadfile)
                                                <a href="{{ asset('uploads/' . $d->uploadfile) }}" target="_blank">View</a>
                                                @else
                                                No File
                                                @endif
                                            </td>
                                            <td>{{$d->status}}</td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btnJournalEdit" value="{{$d->id}}" style="margin-left: 15px;">Edit</button>
                                                <button class="btn btn-danger btnuserdelete" value="{{$d->id}}" style="margin-left: 15px;">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Add Journal Modal -->
                        <div class="modal fade" id="journalModal" tabindex="-1" role="dialog" aria-labelledby="journalModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="journalModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewJournal" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_name">Faculty Name:</label>
                                                    <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter Faculty name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_id">Faculty Id:</label>
                                                    <input type="number" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="type">Journal Type:</label>
                                                <input type="text" id="type" name="type" placeholder="Enter Journal type">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Journal Title:</label>
                                                <input type="text" id="title" name="title" placeholder="Enter Journal title">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="volume">Journal Volume:</label>
                                                    <input type="text" id="volume" name="volume" placeholder="Enter Journal volume">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="issuenumber">Issue Number:</label>
                                                    <input type="text" id="issuenumber" name="issuenumber" placeholder="Enter journal Issue no">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Page">Pages:</label>
                                                    <input type="text" id="Page" name="Page" placeholder="Enter No of pages">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="date">Date:</label>
                                                    <input type="text" id="date" name="date" placeholder="Enter Journal date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link:</label>
                                                <input type="url" id="link" name="link" placeholder="Enter Journal link">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="noauthor">No of Authors:</label>
                                                    <input type="text" id="noauthor" name="noauthor" placeholder="Enter no of authors">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="position">Author Position:</label>
                                                    <input type="text" id="position" name="position" placeholder="Enter Author's position">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload File:</label>
                                                <input type="file" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Journal Modal -->
                        <div class="modal fade" id="editJournalModal" tabindex="-1" role="dialog" aria-labelledby="editJournalModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editJournalModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="editJournal" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_name">Faculty Name:</label>
                                                    <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter Faculty name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_id">Faculty Id:</label>
                                                    <input type="number" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="type">Journal Type:</label>
                                                <input type="text" id="type" name="type" placeholder="Enter Journal type">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Journal Title:</label>
                                                <input type="text" id="title" name="title" placeholder="Enter Journal title">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="volume">Journal Volume:</label>
                                                    <input type="text" id="volume" name="volume" placeholder="Enter Journal volume">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="issuenumber">Issue Number:</label>
                                                    <input type="text" id="issuenumber" name="issuenumber" placeholder="Enter journal Issue no">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Page">Pages:</label>
                                                    <input type="text" id="Page" name="Page" placeholder="Enter No of pages">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="date">Date:</label>
                                                    <input type="text" id="date" name="date" placeholder="Enter Journal date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link:</label>
                                                <input type="url" id="link" name="link" placeholder="Enter Journal link">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="noauthor">No of Authors:</label>
                                                    <input type="text" id="noauthor" name="noauthor" placeholder="Enter no of authors">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="position">Author Position:</label>
                                                    <input type="text" id="position" name="position" placeholder="Enter Author's position">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload File:</label>
                                                <input type="file" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!----------Consultancy tab------->
                        <div class="tab-pane fade" id="consultancytab" role="tabpanel" aria-labelledby="consultancy-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#consultancyModal">Add +</button>
                            <br> <br>
                            <div class="table-responsive">
                                <table id="consultancyTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Tittle</th>
                                            <th>Industry Type</th>
                                            <th>MOU Signed</th>
                                            <th>earnings</th>
                                            <th>File</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $serial = 1; @endphp
                                        @foreach($data1 as $d)
                                        <tr>
                                            <td>{{$serial++}}</td>
                                            <td>{{$d->faculty_name}}</td>
                                            <td>{{$d->faculty_id}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->type}}</td>
                                            <td>{{$d->moe}}</td>
                                            <td>{{$d->earnings}}</td>
                                            <td>
                                                @if($d->uploadfile)
                                                <a href="{{ asset('uploads/' . $d->uploadfile) }}" target="_blank">View</a>
                                                @else
                                                No File
                                                @endif
                                            </td>
                                            <td>{{$d->status}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary edit" style="margin-left: 15px;">edit</button><br>
                                                <button class="btn btn-danger btnuserdelete1" value="{{$d->id}}" style="margin-left: 15px;">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!----- Add Consultancy modal---->
                        <div class="modal fade" id="consultancyModal" tabindex="-1" role="dialog" aria-labelledby="consultancyModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="consultancyModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewConsultancy" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_name">Faculty Name</label>
                                                    <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter Faculty name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_id">Faculty Name</label>
                                                    <input type="text" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="industryType">Industry type</label>
                                                <select id="industryType" name="industryType" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="Technology">Technology</option>
                                                    <option value="Healthcare">Healthcare</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" placeholder="Enter date">
                                            </div>
                                            <div class="form-group">
                                                <label for="moe">Is MOU Signed</label>
                                                <select id="moe" name="moe" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Earnings</label>
                                                <input type="number" id="earnings" name="earnings" placeholder="Enter Earnings">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload File</label>
                                                <input type="file" id="image" name="image" placeholder="upload file">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--------funded projects tab------------->
                        <div class="tab-pane fade" id="funded_projects" role="tabpanel" aria-labelledby="funded_projects-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#fundedprojectsModal">Add +</button>
                            <br><br>
                            <div class="table-responsive">
                                <table id="funded_projectsTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Type</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Project ID</th>
                                            <th>Funding Agency</th>
                                            <th>Link</th>
                                            <th>Requested Amount</th>
                                            <th>File</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $serial = 1; @endphp
                                        @foreach($data2 as $d)
                                        <tr>
                                            <td>{{$serial++}}</td>
                                            <td>{{$d->faculty_name}}</td>
                                            <td>{{$d->faculty_id}}</td>
                                            <td>{{$d->type}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->date}}</td>
                                            <td>{{$d->projectid}}</td>
                                            <td>{{$d->fundingagency}}</td>
                                            <td>{{$d->link}}</td>
                                            <td>{{$d->requestedamount}}</td>
                                            <td>
                                                @if($d->uploadfile)
                                                <a href="{{ asset('uploads/' . $d->uploadfile) }}" target="_blank">View</a>
                                                @else
                                                No File
                                                @endif
                                            </td>
                                            <td>{{$d->status}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary edit" style="margin-left: 15px;">edit</button><br>
                                                <button class="btn btn-danger btnuserdelete2" value="{{$d->id}}" style="margin-left: 15px;">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!------- Add funded projects modal--------->
                        <div class="modal fade" id="fundedprojectsModal" tabindex="-1" role="dialog" aria-labelledby="fundedprojectsModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="fundedprojectsModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewfundedProjects">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="faculty_name">Faculty Name</label>
                                                <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter Faculty name">
                                            </div>
                                            <div class="form-group">
                                                <label for="faculty_id">Faculty ID</label>
                                                <input type="text" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID">
                                            </div>

                                            <div class="form-group">
                                                <label for="type">Type</label>
                                                <select id="type" name="type" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="Funded Projects">Funded Projects</option>
                                                    <option value="Sponsored Research">Sponsored Research</option>
                                                    <option value="Grants">Grants</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" id="title" name="title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="text" id="date" name="date" placeholder="Enter date">
                                            </div>
                                            <div class="form-group">
                                                <label for="projectid">Project Id</label>
                                                <input type="text" id="projectid" name="projectid" placeholder="Enter Project ID">
                                            </div>
                                            <div class="form-group">
                                                <label for="fundingagency">Funding Agency</label>
                                                <input type="text" id="fundingagency" name="fundingagency" placeholder="Enter Funding agency">
                                            </div>
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="url" class="form-control" id="link" name="link" placeholder="Enter link">
                                            </div>
                                            <div class="form-group">
                                                <label for="requestedamount">Requested Amount</label>
                                                <input type="number" id="requestedamount" name="requestedamount" placeholder="Enter Requested amount">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload File</label>
                                                <input type="file" id="image" name="image" placeholder="upload file">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--------Awareness Program tab------------->
                        <div class="tab-pane fade" id="awareness_program" role="tabpanel" aria-labelledby="awareness_program-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#awarenessProgramModal">Add +</button>
                            <br><br>
                            <div class="table-responsive">
                                <table id="awareness_programTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Organiser Name</th>
                                            <th>Name of the program</th>
                                            <th>Date</th>
                                            <th>Place Held</th>
                                            <th>Details of the program</th>
                                            <th>Speaker</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $serial = 1; @endphp
                                        @foreach($data3 as $d)
                                        <tr>
                                            <td>{{$serial++}}</td>
                                            <td>{{$d->faculty_name}}</td>
                                            <td>{{$d->faculty_id}}</td>
                                            <td>{{$d->organiserName}}</td>
                                            <td>{{$d->programName}}</td>
                                            <td>{{$d->date}}</td>
                                            <td>{{$d->placeHeld}}</td>
                                            <td>{{$d->programDetails}}</td>
                                            <td>{{$d->speaker}}</td>
                                            <td>
                                                @if($d->uploadfile)
                                                <a href="{{ asset('uploads/' . $d->uploadfile) }}" target="_blank">Download</a>
                                                @else
                                                No File
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary edit" style="margin-left: 15px;">edit</button><br>
                                                <button class="btn btn-danger btnuserdelete3" value="{{$d->id}}" style="margin-left: 15px;">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!------- Add Awareness Program modal--------->
                        <div class="modal fade" id="awarenessProgramModal" tabindex="-1" role="dialog" aria-labelledby="awarenessProgramModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="awarenessProgramModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewawarenessProgram">
                                        <div class="modal-body">
                                            +
                                            <div class="form-group col-md-6">
                                                <label for="faculty_name">Faculty Name</label>
                                                <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter Faculty name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="faculty_id">Faculty ID</label>
                                                <input type="text" id="faculty_id" name="faculty_id" placeholder="Enter Faculty ID">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="organiserName">Organiser Name</label>
                                            <input type="text" id="organiserName" name="organiserName" placeholder="Enter Organiser name">
                                        </div>
                                        <div class="form-group">
                                            <label for="programName">Program Name</label>
                                            <input type="text" id="programName" name="programName" placeholder="Enter Program name">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="text" id="date" name="date" placeholder="Enter date">
                                        </div>
                                        <div class="form-group">
                                            <label for="placeHeld">Place Held</label>
                                            <input type="text" id="placeHeld" name="placeHeld" placeholder="Enter Place held">
                                        </div>
                                        <div class="form-group">
                                            <label for="programDetails">Program Details</label>
                                            <input type="text" id="programDetails" name="programDetails" placeholder="Enter Program details">
                                        </div>
                                        <div class="form-group">
                                            <label for="speaker">Speaker</label>
                                            <input type="url" class="form-control" id="speaker" name="speaker" placeholder="Enter Speaker">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Upload File</label>
                                            <input type="file" id="image" name="image" placeholder="upload File">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>

                        <!--------Conference tab------------->
                        <div class="tab-pane fade" id="conferencetab" role="tabpanel" aria-labelledby="conference-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#ConferenceModal">Add +</button>
                            <br> <br>
                            <div class="table-responsive">
                                <table id="conferenceTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Tittle</th>
                                            <th>Organizer</th>
                                            <th>Publisher Name</th>
                                            <th>Indexing-Details</th>
                                            <th>Level</th>
                                            <th>Date</th>
                                            <th>Title of paper</th>
                                            <th>ISBN</th>
                                            <th>No of Authors</th>
                                            <th>Authors position</th>
                                            <th>Link</th>
                                            <th>Upload</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $serial = 1; @endphp
                                        @foreach($data4 as $d)
                                        <tr>
                                            <td>{{$serial++}}</td>
                                            <td>{{$d->faculty_name}}</td>
                                            <td>{{$d->faculty_id}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->organiser}}</td>
                                            <td>{{$d->publisher_name}}</td>
                                            <td>{{$d->indexing_detail}}</td>
                                            <td>{{$d->level}}</td>
                                            <td>{{$d->date}}</td>
                                            <td>{{$d->title_of_paper}}</td>
                                            <td>{{$d->isbn}}</td>
                                            <td>{{$d->no_of_authors}}</td>
                                            <td>{{$d->authors_position}}</td>
                                            <td>{{$d->link}}</td>
                                            <td>
                                                @if($d->uploadfile)
                                                <a href="{{ asset('uploads/' . $d->uploadfile) }}" target="_blank">Download</a>
                                                @else
                                                No File
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary edit" style="margin-left: 15px;">edit</button><br>
                                                <button class="btn btn-danger btnuserdelete4" value="{{$d->id}}" style="margin-left: 15px;">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!----- Add Conference modal ----->
                        <div class="modal fade" id="ConferenceModal" tabindex="-1" role="dialog" aria-labelledby="ConferenceModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ConferenceModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewConference" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_name">Faculty Name:</label>
                                                    <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter Faculty's name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_id">Faculty Id:</label>
                                                    <input type="number" id="faculty_id" name="faculty_id" placeholder="Enter Faculty's ID">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Title:</label>
                                                <input type="text" id="title" name="title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="organizer">Organizer:</label>
                                                <input type="text" id="organizer" name="organizer" placeholder="Enter Organizer">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="publisher_name">Publisher Name:</label>
                                                    <input type="text" id="publisher_name" name="publisher_name" placeholder="Enter Publisher name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="indexing_detail">Indexing Details:</label>
                                                    <input type="text" id="indexing_detail" name="indexing_detail" placeholder="Enter Indexing details">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="level">Level</label>
                                                    <select id="level" name="level" class="form-control">
                                                        <option value="">Choose...</option>
                                                        <option value="National">National</option>
                                                        <option value="Inter-national">Inter-national</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="date">Date:</label>
                                                    <input type="text" id="date" name="date" placeholder="Enter date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title_of_paper">Title of paper:</label>
                                                <input type="text" id="title_of_paper" name="title_of_paper" placeholder="Enter Title of the paper">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="isbn">ISBN:</label>
                                                    <input type="text" id="isbn" name="isbn" placeholder="Enter ISBN">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="no_of_authors">No of Authors:</label>
                                                    <input type="text" id="no_of_authors" name="no_of_authors" placeholder="Enter  No of Author's">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="authors_position">Author Position:</label>
                                                    <input type="text" id="authors_position" name="authors_position" placeholder="Enter Author's position">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="link">Link:</label>
                                                    <input type="text" id="link" name="link" placeholder="Enter link">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload File:</label>
                                                <input type="file" id="image" name="image" placeholder="Upload file">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--------Patent tab------------->
                        <div class="tab-pane fade" id="patent" role="tabpanel" aria-labelledby="patent-tab">
                            <br>
                            <button type="button" class="btn btn-primary" style="margin-left: 15px;" data-toggle="modal" data-target="#patentsModal">Add +</button>
                            <br><br>
                            <div class="table-responsive">
                                <table id="patentTable" class="table table-striped table-bordered">
                                    <thead style="background-color:black;color:white;width:50px;">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Faculty Name</th>
                                            <th>Faculty ID</th>
                                            <th>Title</th>
                                            <th>Field of Innovation</th>
                                            <th>Filling Date</th>
                                            <th>Status</th>
                                            <th>No.of Authors</th>
                                            <th>Authors Position</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $serial = 1; @endphp
                                        @foreach($data5 as $d)
                                        <tr>
                                            <td>{{$serial++}}</td>
                                            <td>{{$d->faculty_name}}</td>
                                            <td>{{$d->faculty_id}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->field_of_innovation}}</td>
                                            <td>{{$d->date}}</td>
                                            <td>{{$d->status}}</td>
                                            <td>{{$d->no_of_authors}}</td>
                                            <td>{{$d->authors_position}}</td>
                                            <td>
                                                @if($d->file_name)
                                                <a href="{{ asset('uploads/' . $d->file_name) }}" target="_blank">View</a>
                                                @else
                                                No File
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary edit" style="margin-left: 15px;">edit</button><br>
                                                <button class="btn btn-danger btnuserdelete5" value="{{$d->id}}" style="margin-left: 15px;">delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!----- Add patent modal ----->
                        <div class="modal fade" id="patentsModal" tabindex="-1" role="dialog" aria-labelledby="patentsModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="patentsModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="addNewpatents">
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_name">Enter Name:</label>
                                                    <input type="text" id="faculty_name" name="faculty_name" placeholder="Enter your Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="faculty_id">Enter Id:</label>
                                                    <input type="number" id="faculty_id" name="faculty_id" placeholder="Enter your ID">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Title:</label>
                                                <input type="text" id="title" name="title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label for="fieldofInnovation">Field of Innovation</label>
                                                <input type="text" id="field_of_innovation" name="fieldofInnovation" placeholder="Enter field of Innovation">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="date">Filling Date:</label><br>
                                                    <input type="text" id="date" name="date" placeholder="Enter filling date">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="no_of_authors">No of Authors:</label>
                                                    <input type="text" id="no_of_authors" name="no_of_authors" placeholder="enter journal issue no">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="authors_position">Authors Position:</label>
                                                <input type="text" id="authors_position" name="authors_position" placeholder="enter no of pages">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload File:</label>
                                                <input type="file" id="image" name="image" placeholder="upload journal">
                                            </div>
                                            <input type="hidden" id="jstatus" name="jstatus" value="pending">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">
            2024 © M.Kumarasamy College of Engineering All Rights Reserved.
        </footer>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Side nav button and logout dropdown -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- DataTables -->
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <!-- CSRF link -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize DataTables for each table
            $('#journalTable').DataTable();
            $('#consultancyTable').DataTable();
            $('#funded_projectsTable').DataTable();
            $('#awareness_programTable').DataTable();
            $('#conferenceTable').DataTable({
                "lengthChange": true,
                "ordering": false,
                "autoWidth": true,
                "responsive": true,
            });
            $('#patentTable').DataTable();
        });
    </script>
    <script>
        // Add Journal details
        $(document).on('submit', "#addNewJournal", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/add/addJournal",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        alert("Successfully added!");
                        $("#journalModal").modal("hide");
                        $("#addNewJournal")[0].reset();
                        $('#journalTable').load(location.href + ' #journalTable');
                    } else if (response.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                }
            });
        });
        // Delete Journal
        $(document).on('click', '.btnuserdelete', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this data?')) {
                var user_id = $(this).val();
                console.log(user_id);
                $.ajax({
                    type: "DELETE",
                    url: `user/deleteJournal/${user_id}`,

                    success: function(response) {
                        if (response.status == 500) {
                            alert(response.message);
                        } else {
                            $('#journalTable').load(location.href + " #journalTable");
                        }
                    }
                });
            }
        });
        $(document).on('click', '.btnJournalEdit', function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            $.ajax({
                type: "GET",
                url: `/user/editJournal/${user_id}`,
                success: function(response) {
                    console.log(response); // Check if the response has the expected data

                    if (response.status == 500) {
                        alert(response.message);
                    } else {
                        $('#faculty_name').val(response.data.faculty_name || '');
                        $('#faculty_id').val(response.data.faculty_id || '');
                        $('#type').val(response.data.type || '');
                        $('#title').val(response.data.title || '');
                        $('#volume').val(response.data.volume || '');
                        $('#issuenumber').val(response.data.issuenumber || '');
                        $('#Page').val(response.data.page || ''); // Handle null
                        $('#date').val(response.data.date || ''); // Adjusted date as shown above
                        $('#link').val(response.data.link || '');
                        $('#noauthor').val(response.data.noauthor || '');
                        $('#position').val(response.data.position || '');
                    }
                }
            });

        });



        // add consultancy
        $(document).on('submit', "#addNewConsultancy", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/add/addConsultancy",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        alert("Successfully added!");
                        $("#consultancyModal").modal("hide");
                        $("#addNewConsultancy")[0].reset();
                        $('#consultancyTable').load(location.href + ' #consultancyTable');
                    } else if (response.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                }
            });
        });
        // Delete Consultancy
        $(document).on('click', '.btnuserdelete1', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this data?')) {
                var user_id = $(this).val();
                console.log(user_id);
                $.ajax({
                    type: "DELETE",
                    url: `/user/deleteConsultancy/${user_id}`,

                    success: function(response) {
                        if (response.status == 500) {
                            alert(response.message);
                        } else {
                            $('#consultancyTable').load(location.href + " #consultancyTable");
                        }
                    }
                });
            }
        });


        // add fundedProjects
        $(document).on('submit', "#addNewfundedProjects", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            console.log(data);
            $.ajax({
                type: "POST",
                url: "/add/addFundedproject",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        alert("Success!");
                        $("#fundedprojectsModal").modal("hide");
                        $("#addNewfundedProjects")[0].reset();
                        $('#funded_projectsTable').load(location.href + ' #funded_projectsTable');
                    } else if (response.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                }
            });
        });
        // Delete Fundedproject
        $(document).on('click', '.btnuserdelete2', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this data?')) {
                var user_id = $(this).val();
                console.log(user_id);
                $.ajax({
                    type: "DELETE",
                    url: `/user/deleteFundedproject/${user_id}`,

                    success: function(response) {
                        console.log(response);
                        if (response.status == 500) {
                            alert(response.message);
                        } else {
                            $('#funded_projectsTable').load(location.href + " #funded_projectsTable");
                        }
                    }
                });
            }
        });


        // add Awareness Program
        $(document).on('submit', "#addNewawarenessProgram", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            console.log(data);
            $.ajax({
                type: "POST",
                url: "/add/addAwarenessprogram",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        alert("Success!");
                        $("#awarenessProgramModal").modal("hide");
                        $("#addNewawarenessProgram")[0].reset();
                        $('#awareness_programTable').load(location.href + ' #awareness_programTable');
                    } else if (response.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                }
            });
        });
        // Delete Awareness Program
        $(document).on('click', '.btnuserdelete3', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this data?')) {
                var user_id = $(this).val();
                console.log(user_id);
                $.ajax({
                    type: "DELETE",
                    url: `/user/deleteawarenessProgram/${user_id}`,

                    success: function(response) {
                        if (response.status == 500) {
                            alert(response.message);
                        } else {
                            $('#awareness_programTable').load(location.href + " #awareness_programTable");
                        }
                    }
                });
            }
        });


        // Add Conference details
        $(document).on('submit', "#addNewConference", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/add/addConference",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        alert("Successfully added!");
                        $("#ConferenceModal").modal("hide");
                        $("#addNewConference")[0].reset();
                        $('#conferenceTable').load(location.href + ' #conferenceTable');
                    } else if (response.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                }
            });
        });
        // Delete Conference
        $(document).on('click', '.btnuserdelete4', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this data?')) {
                var user_id = $(this).val();
                console.log(user_id);
                $.ajax({
                    type: "DELETE",
                    url: `user/deleteConference/${user_id}`,

                    success: function(response) {
                        if (response.status == 500) {
                            alert(response.message);
                        } else {
                            $('#conferenceTable').load(location.href + " #conferenceTable");
                        }
                    }
                });
            }
        });


        // Add Patent details
        $(document).on('submit', "#addNewpatents", function(e) {
            e.preventDefault();
            var data = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/add/addPatent",
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.status == 200) {
                        alert("Successfully added!");
                        $("#patentsModal").modal("hide");
                        $("#addNewpatents")[0].reset();
                        $('#patentTable').load(location.href + ' #patentTable');
                    } else if (response.status == 500) {
                        alert("Something went wrong. Please try again.");
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while processing your request.");
                }
            });
        });
        // Delete Patent
        $(document).on('click', '.btnuserdelete5', function(e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this data?')) {
                var user_id = $(this).val();
                console.log(user_id);
                $.ajax({
                    type: "DELETE",
                    url: `user/deletePatent/${user_id}`,

                    success: function(response) {
                        if (response.status == 500) {
                            alert(response.message);
                        } else {
                            $('#patentTable').load(location.href + " #patentTable");
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>