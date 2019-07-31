<tr>
    <form method="POST" action="{{ route('locations.store') }}">
        @csrf
        <td></td>
        <td>
            <select id="tool_id" name="tool_id" class="form-control" style='width: 100%;' required>
                @foreach(\App\Tool::orderBy('name')->get() as $tool)
                    <option value="{{ $tool->id }}">{{ $tool->name }} ({{ $tool->availableQuantity() }})</option>
                @endforeach
            </select>
        </td>
        <td>
            @if(isset($unique))
                {{ $unique->name }}
                <input id="person_id" name="person_id" type="hidden" value="{{ $unique->id }}">
            @else
            <select id="person_id" name="person_id" class="form-control" style='width: 100%;' required>
                @foreach(\App\Person::orderBy('name')->get() as $person)
                    <option value="{{ $person->id }}">{{ $person->name }} ({{ $person->sector->name }})</option>
                @endforeach
            </select>
            @endif
        </td>
        <td></td>
        <td><input class="form-control btn btn-primary" type="submit" value="{{ __('Add') }}"></td>
    </form>
</tr>