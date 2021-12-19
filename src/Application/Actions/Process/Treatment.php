<?php


    namespace App\Application\Actions\Process;


    class Treatment
    {
        public function listBaseTreatments(int $processId): array
        {
            $utragestanValue = random_int(0, 15);
            $pergoverisValue = round(rand(0, 4),2) + 0.3;

            return [
                1234 => [
                    'treatmentId' => 1234,
                    'treatmentName' => 'Utragestan',
                    'value' => $utragestanValue,
                    'rangeBottom' => 0,
                    'rangeTop'=>20,
                    'units'=>'i' // 'i' interger 'f' float
                ],
                5432 => [
                    'treatmentId' => 5678,
                    'treatmentName' => 'Pergoveris',
                    'value' => $pergoverisValue,
                    'rangeBottom' => 0,
                    'rangeTop'=>5,
                    'units'=>'f' // 'i' interger 'f' float
                ],
            ];
        }
    }
