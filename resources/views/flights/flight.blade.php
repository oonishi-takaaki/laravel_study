test<br>

@foreach ($Flights as $flight)
    {{ $flight->id }}<br>
    {{ $flight->name }}<br>
    {{ $flight->airline }}<br>
@endforeach