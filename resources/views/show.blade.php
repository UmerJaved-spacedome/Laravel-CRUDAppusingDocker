<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <center>
    <h1>Enter Data To SUbmit (test)</h1>

    @if (session('success'))
        <div style="color:green;font-weight:bold;">
            {{session('success')}}
            </div>
        
    @endif

    @if($errors->any())
    <div style="color:Red;font-weight:bold;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <form method="POST" action="{{route('test.enterdb')}}">
        @csrf 
        @method('POST')
     <input type="text" name="item" placeholder="Item" />

     <input type="text" name="des" placeholder="Desciption" />

     <input type="submit" name="submit" value="submit"/>

    </form>
    </center>
</body>
</html>