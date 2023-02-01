@component('mail::message')
    # WELCOM
    thanx for your subscrib.
    @component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
        vist us
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
