<tr>
    <td>{{ $person->id }}</td>
    <td><a href="{{ route('persons.show', ['person' => $person->id]) }}">{{ $person->name }}</a></td>
    <td>{{ $person->sector->name }}</td>
    <td>{{ $person->isResponsible }}</td>
    <td></td>
</tr>