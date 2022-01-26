<?php


    namespace App\Application\Actions\Process;
    use App\Application\Actions\Header\InfoHeaderAction;
    use Psr\Http\Message\ResponseInterface as Response;


    class InfoProcessAction extends ProcessAction
    {
        /**
         * {@inheritdoc}
         */
        protected function action(): Response
        {
            $processId = (int) $this->resolveArg('id');
            $header = new Header();
            $treatments = new Treatment();
            $dates = new Dates();

            $prcessInfo =[
                'header'=> $header->processInfo($processId),
                'treatments' => $treatments->listBaseTreatments($processId),
                'dates' => $dates->listBaseDates($processId),
                'datekeys' => $dates->dateColorKeys(),
            ];

            $this->logger->info("get process info.");

            return $this->respondWithData($prcessInfo);
        }

    }
