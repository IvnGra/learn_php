<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

switch ($server['REQUEST_URI']) {
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
