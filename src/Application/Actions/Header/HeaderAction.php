<?php


    namespace App\Application\Actions\Header;


    use App\Application\Actions\Action;
    use Psr\Log\LoggerInterface;

    abstract class HeaderAction extends Action
    {

        /**
         * @param LoggerInterface $logger
         */
        public function __construct(LoggerInterface $logger) {
            parent::__construct($logger);
        }
    }
