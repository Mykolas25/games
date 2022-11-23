<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mykolo Game</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= publicUrl('css/main.css'); ?>">
    <link rel="stylesheet" href="<?= publicUrl('css/form.css'); ?>">
    <link rel="stylesheet" href="<?= publicUrl('css/navigation.css'); ?>">
</head>

<body>
    <header>
        <div class="message-wrapper">
        <?= errors(); ?>
        </div>
        
        <nav>
            <ul>
                <li>
                    <a href="<?= publicUrl(''); ?>">Home</a>
                </li>
                <li>
                    <a href="<?= publicUrl('game'); ?>">Game</a>
                </li>
                <?php if ($_SESSION['is_authenticated'] ?? '') { ?>
                    <li>
                        <a href="<?= publicUrl('game/create'); ?>">New game</a>
                    </li>
                    <li class='dropdown'>
                        Vardas Pavardė
                        <ul class='dropdown-list'>
                            <li>
                                <a href="<?= publicUrl('logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <!-- ?? null coalescing opperator -->
        <?php echo $content ?? ''; ?>
    </main>
    <script src='js/main.js'></script>
</body>

</html>
