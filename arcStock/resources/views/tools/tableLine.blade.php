<tr>
    <td>{{ $tool->id }}</td>
    <td>{{ $tool->name }}</td>
    <td>{{ $tool->type }}</td>
    <td>{{ $tool->number }}</td>
    <td>
        @if($tool->type == 'disposable')
        <form class="form-inline" method="POST" action="{{ route('tools.update', $tool->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <input class="form-control" id="add" name="add" type="number" min="1" value="10">
            </div>
            <button type="submit" class="form-control btn btn-success" >{{__('Add')}}</button>
        </form>
        @endif
    </td>
</tr>