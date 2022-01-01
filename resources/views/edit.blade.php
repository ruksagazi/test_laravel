<!DOCTYPE html>

<html>

<body>
    <form method='post' action="{{ route('data.update',$data) }}">
        @csrf
        @method('put')
        Name:<input type='text' name='name' value="{{ $data->name }}" />
        Age:<input type='number' name='age' value="{{ $data->age }}" />
        Gender:<select name='gender'>
            <option value='female' selected="{{$data->gender=='female'}}">Female</option>
            <option value='male' selected="{{$data->gender=='male'}}">Male</option>
        </select>
        Willing To Work:<input type='radio' name='willing' value='yes' {{$data->willing_to_work=='yes'?'checked':''}}  />Yes
        <input type='radio' name='willing' value='no' {{$data->willing_to_work=='no'?'checked':''}}/>No
        Languages:
        <input type="checkbox" name="languages[]" value='hindi' {{str_contains($data->languages , 'hindi')?'checked':''}} />Hindi
        <input type="checkbox" name="languages[]" value='english' {{str_contains($data->languages , 'english')?'checked':''}} />English
        <input type="checkbox" name="languages[]" value='urdu' {{str_contains($data->languages , 'urdu')?'checked':''}} />Urdu
        <input type="checkbox" name="languages[]" value='marathi' {{str_contains($data->languages , 'marathi')?'checked':''}} />Marathi
        <button type="submit">Submit </submit>
    </form>
</body>

</html>
