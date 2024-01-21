<x-mail::message>
# Hi, {{ $user->name }}

You have been deleted {{ $post->name }}

<x-mail::button :url="''">
View {{ $post->title }}  
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
