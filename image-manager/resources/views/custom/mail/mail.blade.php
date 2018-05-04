@component('custom.mail.html.message')

    **Name:** {{ $request->name }}<br>
    **Email:** {{ $request->email }}<br>
    **Phone:** {{ $request->phone ?? 'no phone' }}

@endcomponent