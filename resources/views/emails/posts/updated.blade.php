<x-mail::message>
# Hi, {{ $user->name }}

This {{ $post->name }} has been updated 

<x-mail::button :url="''">
View {{ $post->title }}  
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
