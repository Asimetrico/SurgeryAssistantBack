<?php


    namespace App\Application\Actions\Process;
    use App\Application\Actions\Header\InfoHeaderAction;
    use Psr\Http\Message\ResponseInterface as Response;


    class EditedProcessAction extends ProcessAction
    {
        /**
         * {@inheritdoc}
         */
        protected function action(): Response
        {
            $processResult =[
                'message'=> 'Reserva actualizada con éxito',
            ];

            $this->logger->info("saved reservation.");

            return $this->respondWithData($processResult);
        }

    }
