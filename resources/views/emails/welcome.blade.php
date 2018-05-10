<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Varela+Round');

        button {
            width: 10.5vw;
            height: 3vw;
            position: absolute;
            left: 50vw;
            top: 50vh;
            transform: translate(-50%, -80%);
            font-family: 'Varela Round', sans-serif;
            font-size: 2vw;
            color: #e8e8e8;
            border: none;
            border-radius: 10px;
            outline: none;
            background: linear-gradient(45deg, #d350db, teal, #d350db);
            background-size: 400% 400%;
            cursor: pointer;
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
<h2>Welcome {{$user['name']}}!!!</h2>
<br/>
We are happy to see you here.<br/><br/>

Your registered Email is : {{$user['email']}}
<br/>
<br/>
<a href="{{ URL::to('shares') }}">
    <button>Go to Site</button>
</a>
<h3>Please tell your friends about us.</h3>
<br/>
Regards,
<br/>
<strong>Saurav Bhandari</strong>
</body>

</html>