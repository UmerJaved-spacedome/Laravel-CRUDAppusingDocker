<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submitted Data</title>
</head>
<body>
    <center>
    <h1>Submitted Data</h1>

    @if($items->isEmpty())
        <p>No data submitted yet.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->item }}</td>
                        <td>{{ $item->des }}</td>
                        <td>
                            <a href="{{ route('updatedata', $item->id) }}">Edit</a>
                            <form action="{{ route('delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('test.show') }}">Go Back</a>
   
    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="color: red; font-weight: bold;">
            {{ session('error') }}
        </div>
    @endif

</center>

</body>
</html>