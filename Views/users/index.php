<section class="game-list">
    <?php
    foreach ($users as $user) {
    ?>
        <article class="card small">
            <header>
                <!-- <img src="<?= imagesUrl(($user['image'] ?? '')); ?>">
                <h2><?= $user['name']; ?></h2> -->
            </header>
            <div class="card-details">
                <table>
                    <tbody>
                        <tr>
                            <th>Release date</th>
                            <td><?= $user['first_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td><?= $user['last_name']; ?></td>
                        </tr>
                        <tr>
                            <th>Developer</th>
                            <td><?= $user['email']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="card-description">
                <?= $user['description']; ?>
            </div> -->
            <div class="buttons">
                <a class="button" href="<?="user/{$user['id']}";?>">Show</a>
                <a class="button" href="<?="user/{$user['id']}/edit";?>">Edit</a>
                <form method="POST" action="<?= publicUrl("user/{$user['id']}") ?>">
                    <input type="hidden" name="_method" value="DELETE">    
                    <input class="unsetCss button" type="submit" value="Delete">
                </form>
            </div>
        </article>

    <?php } ?>
</section>