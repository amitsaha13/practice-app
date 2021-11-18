<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SMS Status!</title>
</head>

<body>
    @php
        $status = DB::table('sms')
            ->where('id', 1)
            ->value('status');
    @endphp
    @if ($status == 1)
        <form action="{{ route('changeStatus') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-success">ON</button>
        </form>

    @else
        <form action="{{ route('changeStatus') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">OFF</button>
        </form>
    @endif



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
