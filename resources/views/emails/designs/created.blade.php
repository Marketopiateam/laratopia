<x-mail::message>
# Hi, {{ $user->name }}

You have been added to newly created design {{ $design->name }}

<x-mail::button :url="''">
View {{ $design->title }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
