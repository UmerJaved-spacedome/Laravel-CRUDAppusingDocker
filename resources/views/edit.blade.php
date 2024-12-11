<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Item</title>
</head>
<body>
    <center>
    <h1>Edit Item</h1>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('update', $item->id) }}">
        @csrf 
        @method('POST')
        <input type="text" name="item" value="{{ $item->item }}" required />

        <input type="text" name="des" value="{{ $item->des }}" required />

        <input type="submit" name="submit" value="Update"/>
    </form>

    <a href="{{ route('showsubmitteddata') }}">Go Back</a>
    </center>
</body>
</html>