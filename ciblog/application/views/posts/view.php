<h2><?php echo $post['title']; ?></h2>
<small>Creado: <?php echo $post['created_at']; ?></small><br>
<h3><?php echo $post['author']; ?></h3><br>
<?php echo $post['body']; ?><br><br>
<img src="<?php echo site_url(); ?>assets/uploads/files/<?php echo $post['image']; ?>">
<p>Categoria: <?php echo $post['category']; ?></p>
