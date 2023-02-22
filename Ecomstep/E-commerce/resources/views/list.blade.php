@extends('master3')
<a href="admin">  <button type="submit" class="btn btn-primary">Go Back</button> </a>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>category</th>
        <th>description</th>
        <th>gallery</th>
        <th>Delete</th>
</tr>
@foreach($members as $item)
<tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['price']}}</td>
        <td>{{$item['category']}}</td>
        <td>{{$item['description']}}</td>
        <td>{{$item['gallery']}}</td>
        <td><a href="delete/{{$item['id']}}">  <button type="submit" class="btn btn-primary">Delete</button></a></td>
</tr>
@endforeach
</table>

