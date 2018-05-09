<!-- app/views/shares/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Stock Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
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

    <h1>Showing Company : {{ $share->name }}</h1>
<div class="container" style="width: fit-content">
    <div class="jumbotron text-center">
        <h2>{{ $share->name }}</h2>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Company Name</td>
                <td>No of Shares</td>
                <td>Rate</td>
                <td>Total</td>
                <td>Date</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $share->name }}</td>
                <td>{{ $share->nofshares }}</td>
                <td>{{ $share->rate }}</td>
                <td>{{ $share->total }}</td>
                <td>{{ $share->date }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</div>


</body>
</html>