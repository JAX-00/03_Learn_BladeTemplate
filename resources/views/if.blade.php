<html>

<body>

    <p>

        @if (count($hobbies) == 1)
            I have one Hobby !
        @elseif(count($hobbies) > 1)
            I Have multiple hobbies !
        @else
            I don't have any hobbies !
        @endif

    </p>

</body>

</html>
