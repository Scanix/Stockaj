<tr>
    <form method="POST" action="{{ route('tools.store') }}">
        @csrf
        <td>
            <input id="name" name="name" class="form-control" required type="text">
        </td>
        <td>
            <select id="type" name="type" class="form-control" style='width: 100%;' required>
                <option value="disposable">disposable </option>
                <option value="unique">unique</option>
            </select>
        </td>
        <td><input type="number" id="number" name="number" class="form-control"></td>
        <td><input class="form-control btn btn-primary" type="submit" value="{{ __('Add') }}"></td>
    </form>
</tr>