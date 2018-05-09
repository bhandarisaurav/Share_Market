

    <!-- if there are creation errors, they will show here -->




    <!DOCTYPE html>
    <html>
    <head>
        <title>Stock Data</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#datepicker").datepicker({  maxDate: new Date() });
            });

            $('#form').submit(function(eventObj) {
                var input_elements = $("input, number", document.forms[0]);
                $(this).append('<input type="hidden" name="total" value="'+input_elements+'">');
                return true;
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
                    <h1 class="title">Edit {{ $share->name }}</h1>
                    {{ HTML::ul($errors->all()) }}
                    {!! Form::model($share, ['method' => 'PATCH','route' => ['shares.update', $share->id]]) !!}
                    {{--<form action="/shares/{{$share->id}}" method="post">--}}
                        {{--<input name="_method" type="hidden" value="PATCH">--}}
                        <div class="input-container">
                            <input type="text" name="name" value = "{{$share->name}}" required="required" autofocus/>
                            <label for="name">Company Name</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="number" name="nofshares" value = "{{$share->nofshares}}" required="required"/>
                            <label for="number">No of Shares</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <input type="number" name="rate" value = "{{$share->rate}}"required="required"/>
                            <label for="number">Rate</label>
                            <div class="bar"></div>
                        </div>

                        <div class="input-container">
                            <input type="text" name="date" id="datepicker" value = "{{$share->date}}" required="required"/>
                            <label for="date">Date</label>
                            <div class="bar"></div>
                        </div>
                        <input type="hidden" name="total" value="12"/>
                        <br>
                        <div class="button-container">
                            <button><span>Go</span></button>
                        </div>
                    {{--</form>--}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    </body>
    </html>