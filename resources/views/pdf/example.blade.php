<h1 class="font-2xl">Timesheets</h1>
<table>
    <thead>
        <th>Calendario</th>
        <th>Tipo</th>
        <th>Entrada</th>
        <th>Salida</th>
    </thead>
    <tbody>
        @foreach ($timesheets as $item)
        <tr>
            <td>{{ $item->calendar->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->day_in }}</td>
            <td>{{ $item->day_out }}</td>
        </tr>

        @endforeach
    </tbody>
</table>
