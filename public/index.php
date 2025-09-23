<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$args){
    echo'<pre>';
    var_dump(...$args);
    echo'</pre>';
}

spl_autoload_register(function ($class){
    $class = substr($class, 4);
    require_once __DIR__ ."/../src/$class.php";
});

//require_once __DIR__ .'/../src/Router.php';
//require_once __DIR__ .'/../src/DB.php';  
use App\controllers\PublicController as PC;


$router = new App\Router();
dump($router);
$db = new App\DB();
dump($db);
$controller = new App\controllers\PublicController();


switch ($_SERVER['REQUEST_URI']) {
    case '/';
        $posts = [
            [
                'title' => 'World news 1',
                'published' => '16.09.2025',
                'author' => 'Ivan',
                'body' => 'some world news body 1'
            ],
            [
                'title' => 'World news 2',
                'published' => '16.09.2024',
                'author' => 'simon',
                'body' => 'some world news body 2'
            ],
            [
                'title' => 'World news 3',
                'published' => '16.09.2023',
                'author' => 'anatoly',
                'body' => 'some world news body 3'
            ]
        ];

        include __DIR__ . '/../views/home.php';
        break;
    case '/us';
        $posts = [
            [
                'title' => ' U.S news 1',
                'published' => '16.09.2025',
                'author' => 'Ivan',
                'body' => 'some U.S news body 1'
            ],
            [
                'title' => 'U.S news 2',
                'published' => '16.09.2024',
                'author' => 'simon',
                'body' => 'some U.S news body 2'
            ],
            [
                'title' => 'U.S news 3',
                'published' => '16.09.2023',
                'author' => 'anatoly',
                'body' => 'some U.S news body 3'
            ]
        ];
        include __DIR__ . '/../views/us.php';
        break;
    default:
        http_response_code(404);
        echo '404 Page not found';
        break;
}
