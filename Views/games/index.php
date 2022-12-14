<section class="game-list">
    <?php
    foreach ($games as $game) {
    ?>
        <article class="card small">
            <header>
                <img src="<?= imagesUrl(($game['image'] ?? '')); ?>">
                <h2><?= $game['name']; ?></h2>
            </header>
            <div class="card-details">
                <table>
                    <tbody>
                        <tr>
                            <th>Release date</th>
                            <td><?= $game['release_date']; ?></td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td><?= $game['genre']; ?></td>
                        </tr>
                        <tr>
                            <th>Developer</th>
                            <td><?= $game['developer']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-description">
                <?= $game['description']; ?>
            </div>
            <div class="buttons">
                <a class="button" href="<?="game/{$game['id']}";?>">Show</a>
                <a class="button" href="<?="game/{$game['id']}/edit";?>">Edit</a>
                <form method="POST" class="unsetCss" action="<?= publicUrl("game/{$game['id']}") ?>">
                    <input type="hidden" name="_method" value="DELETE">    
                    <input class="unsetCss button" type="submit" value="Delete">
                </form>
            </div>
        </article>

    <?php } ?>
</section>