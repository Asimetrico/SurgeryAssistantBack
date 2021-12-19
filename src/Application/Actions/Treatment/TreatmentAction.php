<?php


    namespace App\Application\Actions\Treatment;


    abstract class TreatmentAction extends Action
    {

        /**
         * @param LoggerInterface $logger
         */
        public function __construct(LoggerInterface $logger) {
            parent::__construct($logger);
        }
    }
