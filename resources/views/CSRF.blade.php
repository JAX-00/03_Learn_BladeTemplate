<html>

<body>
    <form action="/test" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Send">
    </form>
</body>

</html>
