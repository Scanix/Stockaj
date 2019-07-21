<tr>
    <td>{{ \Carbon\Carbon::parse($location->created_at)->toDayDateTimeString() }}</td>
    <td><a href="{{ route('persons.show', ['tool' => $location->tool->id]) }}">{{ $location->tool->name }}</a></td>
    <td><a href="{{ route('persons.show', ['person' => $location->person->id]) }}">{{ $location->person->name }}</a></td>
    <td>{{ $location->isOver }}</td>
    <td>
        <form method="POST" action="{{ route('locations.update', $location->id) }}">
            @method('PATCH')
            @csrf
            <input type="hidden" id="isOver" name="isOver" value="true">
            <button type="submit" class="form-control btn btn-success" @if($location->isOver) disabled @endif>{{__('Over')}}</button>
        </form>
    </td>
</tr>