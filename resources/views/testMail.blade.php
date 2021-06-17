<body>
<h3>Hey {{ $user['first-name'] }},</h3>
<p>Please note deadline for following ToDo(s)</p>

@foreach($deadlineAlerts as $alert)

    <h4>{{ $alert['title'] }}</h4>

    <ul>
        <li>Priority: {{ $alert['priority'] }}</li>
        <li>Deadline: {{ \Illuminate\Support\Carbon::parse($alert['deadline'])->format('d-m-Y, h:m A')}}</li>
        <li>Category: @switch($alert['category'])
                @case(1) Work @break
                @case(2) Home @break
                @case(3) Study @break
                @case(4) Personal @break
                @default Uncategorized @endswitch</li>
        <li>Comment: {{ $alert['comment'] }}</li>
    </ul>

@endforeach

<h3>Thanks</h3>

</body>
