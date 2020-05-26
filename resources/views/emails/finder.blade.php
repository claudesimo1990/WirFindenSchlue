@component('mail::header')

@component('mail::message')
# Wichtige Information

# Hallo die folgende Person  {{$name}} mit der nummer:
# {{$nummer}} hat ihre Schlüssels an der folgende Polizei Dienst
# {{$addPolice}} hinterlassen.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
