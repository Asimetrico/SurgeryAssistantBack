<?php


    namespace App\Application\Actions\Header;
    use Psr\Http\Message\ResponseInterface as Response;


    class InfoHeaderAction extends HeaderAction
    {
        /**
         * {@inheritdoc}
         */
        protected function action(): Response
        {
            $prcessInfo =['header'=> 'header info'];

           // $this->logger->info("get process info.");

            return $this->respondWithData($prcessInfo);
        }

    }
