<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets1/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets1/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>child</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets1/css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item" href="#">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content" style="width: 100%">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">child {{$child->name}} </h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>video title</th>
                                        <th>at</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($child->videos as $video)
                                            <tr>
                                                <td>{{ $loop->iteration }} </td>
                                                <td>{{ $video->title }}</td>
                                                <td>{{ $video->users->first()->pivot->at }}</td>
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
    </div>
</body>


<script src="{{ asset('assets1/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets1/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets1/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets1/js/plugins/bootstrap-switch.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="{{ asset('assets1/js/plugins/chartist.min.js') }}"></script>
<script src="{{ asset('assets1/js/plugins/bootstrap-notify.js') }}"></script>
<script src="{{ asset('assets1/js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
<script src="{{ asset('assets1/js/demo.js') }}"></script>

</html>
