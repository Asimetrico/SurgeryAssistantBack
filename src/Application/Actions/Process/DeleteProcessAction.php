<?php


    namespace App\Application\Actions\Process;
    use App\Application\Actions\Header\InfoHeaderAction;
    use Psr\Http\Message\ResponseInterface as Response;


    class DeleteProcessAction extends ProcessAction
    {
        /**
         * {@inheritdoc}
         */
        protected function action(): Response
        {
            $processResult =[
                'message'=> 'Reserva eliminada con éxito',
            ];

            $this->logger->info("deleted reservation.");

            return $this->respondWithData($processResult);
        }

    }
