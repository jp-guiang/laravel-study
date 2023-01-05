
<x-layout>
  <h1><a href="/">Home</a></h1>

  @foreach($posts as $post)
  <article>
    <h1>
      <a href="/posts/{{$post->slug}}">
        {{$post->title}}
      </a>
      
    </h1>

    <p>
      By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
    </p>

    <div>
      {!!$post->excerpt!!}
    </div>
  </article>
  @endforeach
</x-layout>