<x-mail::message>
# Hi, {{ $user->name }}

You have been deleted {{ $video->name }}

<x-mail::button :url="''">
View {{ $video->title }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
