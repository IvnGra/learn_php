<?php
$posts = [
  ['title' => 'World news 1',
   'published' => '16.09.2025',
   'author' => 'Ivan',
   'body' => 'some world news body 1'
],
['title' => 'World news 2',
   'published' => '16.09.2024',
   'author' => 'simon',
   'body' => 'some world news body 2'
],
['title' => 'World news 3',
   'published' => '16.09.2023',
   'author' => 'anatoly',
   'body' => 'some world news body 3'
]
];
?>

<?php include __DIR__ . '/partials/header.php'; ?>


    <main class="container">
      <?php include __DIR__ . '/partials/hero.php'; ?>
      <?php include __DIR__ . '/partials/featured.php'; ?>

      <div class="row g-5">
        <div class="col-md-8">
            <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>