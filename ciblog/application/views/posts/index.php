<h2><?= $title ?></h2>
	<p><a href="<?php echo site_url('/posts/create'); ?>">Añadir noticia</a></p>

<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
  <small>Publicado el: <?php echo $post['created_at']; ?></small><br>
  <?php echo $post['body']; ?>
  <p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Leer noticia</a></p>
<?php endforeach; ?>
