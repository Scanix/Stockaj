<tr>
    <td><a href="{{ route('reports.show', ['day' => $report->day]) }}">{{ \Carbon\Carbon::parse($report->day)->toDayDateTimeString() }}</a></td>
    <td>{{ $report->count }}</td>
</tr>