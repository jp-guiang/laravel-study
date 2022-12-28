<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
  <h1>This is the Posts Page</h1>
  
  <?php foreach($posts as $post) : ?>
    <article>
      <?= $post; ?>
    </article>
  <?php endforeach; ?>
  

</body>