<?php

function getAppUrl()
{

    $env_file = __DIR__ . '/.env';
    $env_key = 'APP_URL';
    $env_content = file_get_contents($env_file);
    if (strpos($env_content, $env_key) !== false) {
        $env_value = '';
        $content_array = explode(PHP_EOL, $env_content);
        foreach ($content_array as $key => $value) {
            if (strpos($value, $env_key) !== false) {
                $env_value = $value;
                break;
            }
        }
    }

    if (!$env_value) {
        die('APP_URL not found in .env file');
    }
    $app_url = substr($env_value, strpos($env_value, '=') + 1);
    if (strpos($app_url, 'umstudio') !== false) {
        $app_url .= '/futuroacontece';
    }
    return $app_url;
}

function substituirUrls($dir, $search, $replace) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

    foreach ($rii as $file) {
        if ($file->isDir()) {
            continue;
        }

        $filePath = $file->getPathname();
        $fileExt = pathinfo($filePath, PATHINFO_EXTENSION);
        if ($fileExt !== 'html') {
            continue;
        }
        echo $filePath . PHP_EOL;
        $fileContents = file_get_contents($filePath);
        if ($filePath !== './dist/index.html') {
            $replace = '..';
        } else {
            $replace = '.';
        }
        echo "Replace: '" . $search . "' -> '" . $replace . "'\n";

        if (strpos($fileContents, $search) !== false) {
            $fileContents = str_replace($search, $replace, $fileContents);
        }

        $app_url = getAppUrl();

        $string_ini = 'image" content="..';
        $string_end = 'image" content="' . $app_url;
        $fileContents = str_replace($string_ini, $string_end, $fileContents);

        $string_ini = 'image" content=".';
        $string_end = 'image" content="' . $app_url;
        $fileContents = str_replace($string_ini, $string_end, $fileContents);

        // ----------------------------

        $string_ini = 'image:src" content="..';
        $string_end = 'image:src" content="' . $app_url;
        $fileContents = str_replace($string_ini, $string_end, $fileContents);

        $string_ini = 'image:src" content=".';
        $string_end = 'image:src" content="' . $app_url;
        $fileContents = str_replace($string_ini, $string_end, $fileContents);

        // ----------------------------

        $string_ini = 'og:url" content="."';
        $string_end = 'og:url" content="' . $app_url . '"';
        $fileContents = str_replace($string_ini, $string_end, $fileContents);

        $string_ini = 'site" content="."';
        $string_end = 'site" content="' . $app_url . '"';
        $fileContents = str_replace($string_ini, $string_end, $fileContents);

        file_put_contents($filePath, $fileContents);
        echo "Substituído em: $filePath\n";
    }
}

$directory = './dist';
$searchUrl = 'https://bndes.umstudio.com.br';
$replaceUrl = '';
substituirUrls($directory, $searchUrl, $replaceUrl);

$searchUrl = 'https://futuroacontece.bndes.gov.br';
$replaceUrl = '.';
substituirUrls($directory, $searchUrl, $replaceUrl);

echo "Substituição concluída.\n";
