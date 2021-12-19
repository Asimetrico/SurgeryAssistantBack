<?php


    namespace App\Application\Actions\Process;


    use App\Application\Actions\Action;
    use Psr\Log\LoggerInterface;

    abstract class ProcessAction extends Action
    {

        /**
         * @param LoggerInterface $logger
         */
        public function __construct(LoggerInterface $logger) {
            parent::__construct($logger);
        }
    }
