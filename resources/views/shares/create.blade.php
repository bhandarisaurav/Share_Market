
<!DOCTYPE html>
<html>
<head>
    <title>Stock Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->

    <script>
        $(document).ready(function() {
            $("#datepicker").datepicker({  maxDate: new Date() });
        });
    </script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <strong><a class="navbar-brand" href="{{ URL::to('shares') }}">Share Data</a></strong>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('shares') }}">View All Stocks</a></li>
            <li><a href="{{ URL::to('shares/create') }}">Add New Entry</a>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav ml-auto navbar-right">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <strong>{{ Auth::user()->name }} </strong><span class="caret"></span></a>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
    <div class="rerun">
        <div class="container1">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Add New Data</h1>
                <form action="/shares" method="post" id="my-form">
                    {{ csrf_field() }}
                    <div class="input-container">
                        <input type="text" name="name" required="required" autofocus/>
                        <label for="name">Company Name</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="number" name="nofshares" required="required"/>
                        <label for="number">No of Shares</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="number" name="rate" required="required"/>
                        <label for="number">Rate</label>
                        <div class="bar"></div>
                    </div>

                    <div class="input-container">
                        <input type="text" name="date" id="datepicker" required="required"/>
                        <label for="date">Date</label>
                        <div class="bar"></div>
                    </div>
                    <input type="hidden" name="total" id="total" value="1150"/>
                    <br>
                    <div class="button-container">
                        <button type="submit"><span>Go</span></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        document.getElementById('my-form').onsubmit = function () {
            const x1 = document.getElementById("nofofshares").value;
            const x2 = document.getElementById("rate").value;
            document.getElementById("total").value = x1 * x2;
            alert(x1 * x2);
            // alert(document.getElementById("3").value);
            //
            // /*
            //    alert(x1*x2); */
            // // You must return false to prevent the default form behavior
            return false;
        }
    }

</script>
</body>
</html>