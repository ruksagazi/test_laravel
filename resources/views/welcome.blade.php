<!DOCTYPE html>
<html>

<body>
    <a href="{{ route('data.create')}}">Add</a>
    <table bordered="1">
        <tr>
            <th>
                Name
            </th>
            <th>
                Age
            </th>
            <th>
                Gender
            </th>
            <th>
                Willing to work
            </th>
            <th>
                Languages
            </th>
            <th>
                Action
            </th>
        </tr>
        @foreach ($entries as $entry)
        <tr>
            <td>{{$entry->name}}</td>
            <td>{{$entry->age}}</td>
            <td>{{$entry->gender}}</td>
            <td>{{$entry->willing_to_work}}</td>
            <td>{{$entry->languages}}</td>
            <td>
            <form method="post" action="{{route('data.edit',$entry)}}">@csrf @method('get') <button
                        type="submit">Edit</button></form>
                <form method="post" action="{{route('data.destroy',$entry)}}">@csrf @method('delete') <button
                        type="submit">Delete</button></form>

            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
