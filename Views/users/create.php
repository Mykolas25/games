<section>
  <form method="POST" action="<?= publicUrl('user/store'); ?>" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name">

    <label for="release_date">Release data:</label>
    <input type="number" min="1990" max="2099" name="release_date">

    <label for="image">Image:</label>
    <input type="file" name="image">

    <label for="genre">Genre:</label>
    <input type="text" name="genre">

    <label for="developer">Developer:</label>
    <input type="text" name="developer">

    <label for="description">Description:</label>
    <textarea rows="5" type="text" name="description"></textarea>

    <input type="submit" value="Submit">
  </form>
</section>