<section>
  <form method="POST" action="<?= publicUrl("game/{$game['id']}"); ?>" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">

    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= ($game['name'] ?? ''); ?>">

    <label for="release_date">Release data:</label>
    <input type="number" min="1990" max="2099" name="release_date" value="<?= ($game['release_date'] ?? ''); ?>">

    <label>Image</label>
    <?= imageInput('image', $game['image'] ?? ''); ?>
    <input type='file' name='image'>

    <label for="genre">Genre:</label>
    <input type="text" name="genre" value="<?= ($game['genre'] ?? ''); ?>">

    <label for="developer">Developer:</label>
    <input type="text" name="developer" value="<?= ($game['developer'] ?? ''); ?>">

    <label for="description">Description:</label>
    <textarea rows="5" type="text" name="description"><?= ($game['description'] ?? ''); ?></textarea>

    <input type="submit" value="Submit">
  </form>
</section>