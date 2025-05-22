<html>

<head>
    <style>
        .red {
            color: red;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    @foreach ($hobbies as $hobby)
        <li @class(['red', 'bold' => $hobby['Love']])>{{ $hobby['name'] }}</li>
    @endforeach
</body>

</html>
