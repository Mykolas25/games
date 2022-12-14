<section class="game-list">
    <article class="card">
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
    </article>
</section>