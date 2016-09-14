@foreach($posts as $post)
    <p>{{$post->title}}</p>
    <p>{{$post->location}}</p>
    <p>{{$post->name}}</p>
@endforeach