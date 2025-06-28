<html>

<body>
    {{-- give massage if  name or password is ERROR --}}

    @error('name')
        <p>{{ $massage }}</p>
    @enderror

    @error('password')
        <p>{{ $massage }}</p>
    @enderror
</body>

</html>
