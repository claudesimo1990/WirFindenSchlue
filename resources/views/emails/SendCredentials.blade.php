@component('mail::message')
# willkomen {{$user->name}} bei uns.

Willkomen bei uns . hiermit erhalten sie ihre Loginsdaten um sich auf ihre Dasbord einzulogen.

# Email : {{$user->email}}
# Password: {{$user->UID}}

@component('mail::button', ['url' => config('app.url').'/profile/'.$user->id,'color'=> 'success' ])
Zu ihrem Dasboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
