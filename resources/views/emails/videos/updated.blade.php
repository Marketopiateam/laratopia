<x-mail::message>
# Hi, {{ $user->name }}

This {{ $video->name }} has been updated

<x-mail::button :url="''">
View {{ $video->title }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
