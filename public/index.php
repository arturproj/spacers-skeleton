<?php

require '../vendor/autoload.php';

\Spacers\Framework\Kernel::init(
    environments: [],
    callback: function () {
        error_reporting(E_ALL);
        // Set user-defined exception handler function
        set_exception_handler("spacers_exception_handler");
        // phpinfo();
    }
);


// use Spacers\Framework\Constant\Attribute\HeaderType;
// $request = new \Spacers\Framework\Request\Request();
// dd(Request::class, $request);

// echo (new \Spacers\Framework\Response\FileResponse(new File("/home/artur/works/spacers/spacers-skeleton/templates/base.tpl.php")))->content;
// dd(new \Spacers\Framework\Response\Response('Text string response'));
// dd(new \Spacers\Framework\Response\Response('Text <b>HTML</b> as string response '));
// dd(new \Spacers\Framework\Response\Response("base.tpl.php"));
// dd(new \Spacers\Framework\Response\JsonResponse(["status" => true]));

// function matchRoute($routes = [], $url = null, $method = 'GET')
// {
//     // I used PATH_INFO instead of REQUEST_URI, because the 
//     // application may not be in the root direcory
//     // and we dont want stuff like ?var=value
//     $reqUrl = $url ?? $_SERVER['REQUEST_URI'];
//     $reqMet = $method ?? $_SERVER['REQUEST_METHOD'];

//     $reqUrl = rtrim($reqUrl, "/");

//     foreach ($routes as $route) {
//         // convert urls like '/users/:uid/posts/:pid' to regular expression
//         // $pattern = "@^" . preg_replace('/\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route['url'])) . "$@D";
//         $pattern = "@^" . preg_replace('/:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', $route['url']) . "$@D";
//         // echo $pattern."\n";
//         $params = [];
//         // check if the current request params the expression
//         $match = preg_match($pattern, $reqUrl, $params);
//         if ($reqMet == $route['method'] && $match) {
//             // remove the first match
//             array_shift($params);
//             // call the callback with the matched positions as params
//             // return call_user_func_array($route['callback'], $params);
//             return [$route, $params];
//         }
//     }
//     return [];
// }


// $match = matchRoute([
//     [
//         'method' => 'GET',
//         'url' => '',
//         'callback' => function ($req) {
//             echo json_encode([
//                 'method' => 'GET',
//                 'url' => '/',
//                 'req' => $req
//             ]);
//             exit(0);
//         }
//     ],
//     [
//         'method' => 'GET',
//         'url' => '/:id',
//         'callback' => function ($req) {
//             echo json_encode([
//                 'method' => 'GET',
//                 'url' => '/:id',
//                 'req' => $req
//             ]);
//             exit(0);
//         }
//     ],
//     [
//         'method' => 'GET',
//         'url' => '/api/(.*)', // Match all /api/hello/test/...
//         'callback' => function ($req) {
//             echo json_encode([
//                 'method' => 'GET',
//                 'url' => '/api/(.*)',
//                 'req' => $req
//             ]);
//             exit(0);
//         }
//     ]
// ]);
// // dd($match);
// list($route, $params) = $match;
// $route['callback']($params);
// // call_user_func_array($route['callback'], [$params]);