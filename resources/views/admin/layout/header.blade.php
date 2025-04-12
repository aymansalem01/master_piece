<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets1/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets1/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>admin dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="{{asset('assets1/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets1/css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{asset('assets1/img/sidebar-2.jpg')}}">
            <div class="sidebar-wrapper">
                <div class="logo" >
                        Creative Tim
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin')  }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href=" {{ route('user.index') }} ">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('class.index')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>classes</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('subject.index')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>subject</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('video.index')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>video</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('subscribtion')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>subscribtion</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route ('payment')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>payment</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('game.index')}}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>games</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('vr.index')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>vrs</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('feedback')}}">
                            <i class="nc-icon nc-atom"></i>
                            <p>feedback</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route ('coupon.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>coupon</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
