<x-mail::message>
# Hi, {{ $user->name }}

You have been deleted {{ $design->name }}

<x-mail::button :url="''">
View {{ $design->title }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
