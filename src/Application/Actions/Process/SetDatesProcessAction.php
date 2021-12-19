<?php


    namespace App\Application\Actions\Process;
    use App\Application\Actions\Header\InfoHeaderAction;
    use Psr\Http\Message\ResponseInterface as Response;


    class SetDatesProcessAction extends ProcessAction
    {
        /**
         * {@inheritdoc}
         */
        protected function action(): Response
        {
            $data = $this->getFormData();

            $dates = new Dates();

            $processResult =[
                'dates'=> $dates->listBaseDates(5)
            ];

            $this->logger->info("new dates offer.");

            return $this->respondWithData($processResult);
        }

    }
