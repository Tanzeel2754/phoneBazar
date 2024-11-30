@extends('master')
@section('content')


<h1>Book </h1>

<form action="/myform" method="GET" class=" flex flex-col p-[20px]">

    <select name="category" id="category">
        <option value="drama">Drama</option>
        <option value="comedy">Comedy</option>
    </select>
    <input type="number" name="price" id="price">
    <button type="submit">View Books</button>

</form>



{{-- {{$books}} --}}
<table>
    
@foreach ($array as $book)
    <tr>
        <td>{{$loop}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->price}}</td>
        <td>
            <button>Delete</button>
        </td>
    </tr>
@endforeach
</table>



@endsection