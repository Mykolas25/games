
<?php
function errors(): void
{
    echo (new Message())->errors();
}

function redirectIfNotAuthenticated(string $url): void
{
    if (!($_SESSION['is_authenticated'] ?? '')) {
        redirect($url);
    }
}

function redirect(string $url): void
{
    header("Location: {$url}");
    exit();
}

function redirectWithMessages(string $url, array $message): void
{
    $_SESSION = array_merge($_SESSION, $message);
    redirect($url);
}

function dump(...$variables)
{
    foreach ($variables as $variable) {
        echo "<pre>" . print_r($variable, true) . "</pre>";
    }
}

function view($path, $data = [])
{
    //get content
    $content = getView($path, $data);
    //get document and pass content as parameter
    echo getView(__DIR__ . '/Views/app/document.php', compact('content'));
}

function getView(string $path, array $data)
{
    extract($data);
    ob_start();
    include $path;

    return ob_get_clean();
}

function getRootUrl()
{
    $config = include __DIR__ . "/config.php";

    return $config['root_uri'];
}

function publicUrl(string $url = ''): string
{
    return getRootUrl() . '/' . $url;
}

function storageUrl(string $url = ''): string
{
    if ($url) {
        $url = '/storage/' . $url;
    } else {
        $url = '/storage';
    }

    return getRootUrl() . $url;
}

function imagesUrl(string $name): string
{
    $url = '';

    if ($name) {
        $url = '/images/' . $name;
    } else {
        '/images' . $url;
    }
    return storageUrl() . $url;
}


function imageInput(string $inputName, string|array $images): string
{
    if (is_array($images)) {
        $inputName = "{$inputName}[]";
    } else {
        $images = (array)$images;
    }

   
    $imageBlock = '';

    foreach ($images as $image) {
        $imageBlock .= "
            <div class='old-images-block'>
                <img src='" . imagesUrl("$image") . "'>
                <input type='hidden' name='{$inputName}' value='$image'>
                <label>$image</label>
            </div>
            ";
    }

    if ($imageBlock) {
        $imageBlock = "<div class='old-images'>$imageBlock</div>";
    }
    return $imageBlock;
}