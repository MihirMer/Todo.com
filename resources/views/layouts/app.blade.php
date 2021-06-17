<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}" />
    <style>
        .no-hover:hover{
            color: #fff;
            background-color: #1483ff;
            border-color: #007bff;
        }
        .datepicker td, .datepicker th {
            width: 2.5rem;
            height: 2.5rem;
            font-size: 0.85rem;
        }
    </style>
    <title>Todo.com</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">Todo.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('addNote') }}">Add</a>
                </li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        ToDos--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-left bg-primary" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item bg-primary text-light" href="{{ route('addNote') }}">New</a>--}}
{{--                        <a class="dropdown-item bg-primary text-light" href="{{ route('notes') }}">View all</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
            @endauth
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            @auth()

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->username }}
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit" class="btn btn-primary pb-2 btn-block">Logout</button>
                    </form>
                </div>
            </li>
            @endauth


            @guest()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>

@yield('content')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="{{ url('/js/bootstrap-datetimepicker.min.js') }}"></script>

{{--<script src="{{ url('/js/jquery-3.js') }}"></script>--}}
<script src="{{ url('/js/popper.js') }}"></script>
{{--<script src="{{ url('/js/bootstrap.js') }}"></script>--}}
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ url('/js/holder.js') }}"></script>
{{--<script>--}}
{{--    $(function () {--}}

{{--        // INITIALIZE DATEPICKER PLUGIN--}}
{{--        $('.datepicker').datepicker({--}}
{{--            clearBtn: true,--}}
{{--            todayBtn: true,--}}
{{--            todayHighlight:true,--}}
{{--            format: "yyyy/mm/dd"--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}



<script>
    $(function () {
        $.extend(true, $.fn.datetimepicker.defaults, {
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check-o',
                clear: 'far fa-trash',
                close: 'far fa-times'
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker({
            ignoreReadonly: true,
            format: "YYYY-MM-DD HH:mm:ss"
        });
    });
</script>

</body>
</html>
