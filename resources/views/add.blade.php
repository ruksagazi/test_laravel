<!DOCTYPE html>

<html>

<body>
    <form method='post' action="{{ url('data') }}">
        @csrf
        @method('post')
        Name:<input type='text' name='name' />
        Age:<input type='number' name='age' />
        Gender:<select name='gender'>
            <option value='female'>Female</option>
            <option value='male'>Male</option>
        </select>
        Willing To Work:<input type='radio' name='willing' value='yes'>Yes
        <input type='radio' name='willing' value='yes'>No
        Languages:
            <input type="checkbox" name="languages[]" value='hindi'>Hindi</input>
            <input type="checkbox" name="languages[]" value='english'>English</input>
            <input type="checkbox" name="languages[]" value='urdu'>urdu</input>
            <input type="checkbox" name="languages[]" value='marathi'>Marathi</input>
        </select>
        <button type="submit">Submit </submit>
    </form>
</body>

</html>
