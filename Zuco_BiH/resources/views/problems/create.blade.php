<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        @csrf
        <input type="hidden" >
        <select name="category" id="category" >
            <option disabled selected value="">Izaberite kategoriju</option>>   
            @foreach($kategorija as $item)
              <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
            @endforeach
          </select>
        @error('category')
            <p >{{$message}}</p>
        @enderror
    </form>
</body>
</html>