@component('mail::message')
# Booking Response

Fullname   : {{ $data['fullname']}}<br>
Nationality  : {{ $data['nationality']}}<br> 
Phone  : {{ $data['phone']}}<br> 
Email   : {{ $data['email']}}<br><br>
Arrival Date  : {{ $data['arrival_date']}}<br> 
Departure Date  : {{ $data['departure_date']}}<br>

Adults   : {{ $data['no_adults']}}<br>
Children  : {{ $data['no_children']}}<br> 

Notes
<p>{{ $data['notes'] }}</p>

@endcomponent

