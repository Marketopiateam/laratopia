<x-mail::message>
# Hi, {{ $user->name }}

This {{ $design->name }} has been updated

<x-mail::button :url="''">
View {{ $design->title }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
