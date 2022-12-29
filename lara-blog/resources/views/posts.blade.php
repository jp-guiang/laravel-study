<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
  <h1>This is the Posts Page</h1>
  
  <?php foreach($posts as $post) : ?>
    <article>
      <h1>
        <a href="posts/<?= $post->slug; ?>">
          <?= $post->title; ?>
        </a>
        
      </h1>

      <div>
        <?= $post->body; ?>
      </div>
    </article>
  <?php endforeach; ?>
  

</body>