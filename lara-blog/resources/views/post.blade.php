  <x-layout>
    <h1><a href="/">Home</a></h1>
    <article>
      <h1>{{$post->title}}</h1>

      <p>
        <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
      </p>

      <div>
        {!! $post->body !!}
      </div>
    </article>
  </x-layout>
