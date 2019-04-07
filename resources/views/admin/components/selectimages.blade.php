<select name="mini" id="mini" class="form-control">
    @foreach($images as $image)
        <option value="{{$image->id}}">{{$image->id}}</option>
    @endforeach
</select>