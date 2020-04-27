@component('mail::message')
# Contact Us Response

Name   : {{ $data['name']}}<br>
Email  : {{ $data['email']}}<br> 
Phone  : {{ $data['phone']}}<br> 

Notes
<p>{{ $data['notes'] }}</p>




@endcomponent
