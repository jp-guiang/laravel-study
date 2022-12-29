<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
  <article>
    <h1><a href="/">Home</a></h1>
    <h1>{{$post->title}}</h1>
    <div>
      {!! $post->body !!}
    </div>
  </article>

</body>