<html>
<head>
    <title>Stock Data</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('shares') }}">Share Data</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('shares') }}">View All Stocks</a></li>
            <li><a href="{{ URL::to('shares/create') }}">Add New Entry</a>
        </ul>
    </nav>

    <h1>Stock Data</h1>
    @if (Session::has('message'))
        <div class="alert alert-success  fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}

        </div>
    @endif

    <table class="table table-striped table-bordered">
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
                    <a class="btn btn-small btn-success" href="{{ URL::to('shares/' . $value->id) }}">View Details</a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('shares/' . $value->id . '/edit') }}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>