<?php include __DIR__ . '/../partials/header.php'; ?>
    <main class="container">
        <table class="table table-striped table-hover">
          <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
          </thead>
          <tbody>
            <?php foreach($posts as $post): ?>
            <tr>
              <td><?= $post->id ?></td>
              <td><?= $post->title ?></td>
              <td>
                  <div class = "btn-group" role="group" aria-label="Basic example">
                    <a class= "btn btn-info">view</a>
                    <a class ="btn btn-warning">edit</a>
                    <a class ="btn btn-danger">delete</a>

                    </div>
                  </td>
            </tr>
            <?php endforeach?>
          </tbody>
        </table>
     
    </main>
<?php include __DIR__ . '/../partials/footer.php'; ?>