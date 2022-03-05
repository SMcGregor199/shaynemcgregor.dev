
<articles-intro>

  <header>
    <h2 class='command-voice'>This is and "Article grid" module. This is its heading.</h2>

    <p class='subtle-heading'>Again, we totally just made that up. It's a box with boxes in it.</p>
  </header>

  <article-grid>
    <?php include('articles_data.php'); ?><!-- acting as an example database -->

    <?php foreach ($database as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
