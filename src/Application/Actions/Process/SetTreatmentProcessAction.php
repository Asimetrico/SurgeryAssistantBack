<?php


    namespace App\Application\Actions\Process;
    use App\Application\Actions\Header\InfoHeaderAction;
    use Psr\Http\Message\ResponseInterface as Response;


    class SetTreatmentProcessAction extends ProcessAction
    {
        /**
         * {@inheritdoc}
         */
        protected function action(): Response
        {
            $data = $this->getFormData();

            $treatment = new Treatment();

            $processResult =[
                'treatment'=> $treatment->listBaseTreatments(5)
            ];

            $this->logger->info("saved reservation.");

            return $this->respondWithData($processResult);
        }

    }
