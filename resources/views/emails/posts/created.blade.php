<x-mail::message>
# Hi, {{ $user->name }}

You have been added to newly created post {{ $post->name }}

<x-mail::button :url="''">
View {{ $post->title }}  
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
