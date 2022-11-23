<section class="game-list">
    <article class="card">
        <header>
        <img src="<?= imagesUrl(($user['image'] ?? '')); ?>">
            <h2><?= $user['name']; ?></h2>
        </header>
        <div class="card-details">
            <table>
                <tbody>
                    <tr>
                        <th>Release date</th>
                        <td><?= $user['release_date']; ?></td>
                    </tr>
                    <tr>
                        <th>Genre</th>
                        <td><?= $user['genre']; ?></td>
                    </tr>
                    <tr>
                        <th>Developer</th>
                        <td><?= $user['developer']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-description">
            <?= $user['description']; ?>
        </div>
    </article>
</section>