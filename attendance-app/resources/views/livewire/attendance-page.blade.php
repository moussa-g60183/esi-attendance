<div>
    <select name="course" id="course">
        @foreach ($courses as $course)
            <option value="{{ $course['sigle'] }}">{{ $course['title'] }}</option>
        @endforeach
    </select>
</div>
