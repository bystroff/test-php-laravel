<?php

namespace App\Http\Controllers\API;

/**
 * @OA\Info(
 *     title="Notebook Swagger API documentation",
 *     version="1.0.0",
 *     @OA\Contact(
 *         email="pes13@yandex.ru"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * @OA\Tag(
 *     name="Notebook",
 *     description="Some example pages",
 * )
 * @OA\Server(
 *     description="Notebook Swagger API server",
 *     url="http://localhost:7777/api"
 * )
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     name="X-APP-ID",
 *     securityScheme="X-APP-ID"
 * )
 */

class Controller extends \App\Http\Controllers\Controller
{
}
