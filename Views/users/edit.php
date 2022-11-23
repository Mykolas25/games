<section>
  <form method="POST" action="<?= publicUrl("user/{$user['id']}/update"); ?>" enctype="multipart/form-data">
    <input type="text" name="_method" value="PUT">

    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= ($user['name'] ?? ''); ?>">

    <label for="release_date">Release data:</label>
    <input type="number" min="1990" max="2099" name="release_date" value="<?= ($user['release_date'] ?? ''); ?>">

    <!-- <label for="image">Image:</label>
    <input type="file" name="image"> -->

    <label for="image">Image:</label>
    <input type="text" name="image" value="<?= ($user['image'] ?? ''); ?>">

    <label for="genre">Genre:</label>
    <input type="text" name="genre" value="<?= ($user['genre'] ?? ''); ?>">

    <label for="developer">Developer:</label>
    <input type="text" name="developer" value="<?= ($user['developer'] ?? ''); ?>">

    <label for="description">Description:</label>
    <textarea rows="5" type="text" name="description"><?= ($user['description'] ?? ''); ?></textarea>

    <input type="submit" value="Submit">
  </form>
</section>