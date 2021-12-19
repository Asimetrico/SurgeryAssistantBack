<?php
declare(strict_types=1);

    use App\Application\Actions\Process\EditedProcessAction;
    use App\Application\Actions\Process\InfoProcessAction;
    use App\Application\Actions\Process\CreatedProcessAction;
    use App\Application\Actions\Treatment\TreatmentAction;
    use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/api/surgeryassistant', function (Group $group) {
        $group->get('/{id}', InfoProcessAction::class);
        $group->post('/setDates', CreatedProcessAction::class);
        $group->post('/setTreatments', CreatedProcessAction::class);
        $group->post('', CreatedProcessAction::class);
        $group->put('/{id}', EditedProcessAction::class);
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });


};
