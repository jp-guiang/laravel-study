@props(['post'])

<a href="/authors/{{$post->author->username}}">
  <div class="flex items-center text-sm">
      <img src="/images/lary-avatar.svg" alt="Lary avatar">
      <div class="ml-3">
          <h5 class="font-bold">{{$post->author->name}}</h5>
      </div>
  </div>
</a>