<html>
<head>
    <title>Stock Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

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

    <h1>Stock Data</h1>
    @if (Session::has('message'))
        <div class="alert alert-success  fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}

        </div>
    @endif

    <table class="table table-bordered table-striped table-bordered table-responsive table-hover">
        <thead>
        <tr>
            <td>ID</td>
            <td>Company Name</td>
            <td>No of Shares</td>
            <td>Rate</td>
            <td>Total</td>
            <td>Date</td>
            <td>Options</td>
        </tr>
        </thead>
        <tbody>
        @foreach($shares as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->nofshares }}</td>
                <td>{{ $value->rate }}</td>
                <td>{{ $value->total }}</td>
                <td>{{ $value->date }}</td>
                <td>
                    <form action="{{action('ShareController@destroy', $value->id)}}" method="post">
                        @csrf
                        <a class="btn btn-small btn-success" href="{{ URL::to('shares/' . $value->id) }}">View
                            Details</a>
                        <a class="btn btn-small btn-info"
                           href="{{ URL::to('shares/' . $value->id . '/edit') }}">Edit</a>
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" onclick="return confirm('Are you Sure?')" type="submit">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>