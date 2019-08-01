<tr>
    <form method="POST" action="{{ route('persons.store') }}">
        @csrf
        <td>
            <input id="name" name="name" class="form-control" required type="text">
        </td>
        <td>
            <select id="sector_id" name="sector_id" class="form-control" style='width: 100%;' required>
                @foreach(\App\Sector::orderBy('name')->get() as $sector)
                    <option value="{{ $sector->id }}">{{ $sector->name }} </option>
                @endforeach
            </select>
        </td>
        <td><input type="checkbox" id="isResponsible" name="isResponsible" class="form-control"></td>
        <td><input class="form-control btn btn-primary" type="submit" value="{{ __('Add') }}"></td>
    </form>
</tr>