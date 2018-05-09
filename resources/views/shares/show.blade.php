<!-- app/views/shares/show.blade.php -->

<!DOCTYPE html>
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