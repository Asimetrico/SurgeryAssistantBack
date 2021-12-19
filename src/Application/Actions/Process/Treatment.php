<?php


    namespace App\Application\Actions\Process;


    class Treatment
    {
        public function listBaseTreatments(int $processId): array
        {
            return [
                1234 => [
                    'treatmentId' => 1234,
                    'treatmentName' => 'Utragestan',
                    'value' => 25,
                    'rangeBottom' => 0,
                    'rangeTop'=>15,
                    'units'=>'i' // 'i' interger 'f' float
                ]
            ];
        }
    }
