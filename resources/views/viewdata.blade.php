<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Submitted Data</title>
</head>
<body>
    <center>
                <h1>Submitted Data</h1>

                @if($items->isEmpty())
                    <p>No Data Submitted Yet</p>
                @else 
                  <table border="3">
                    <thead>
                    <th>id</th>
                    <th>Item</th>
                    <th>Description</th>
                    </thead>

                    @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->item}}</td>
                        <td>{{$item->des}}</td>
                    </tr>
                    @endforeach
                @endif

                  </table>
    </center>
</body>
</html>