<?php


    namespace App\Application\Actions\Process;


    class Header
    {
        public function processInfo(int $processId): array
        {
            $img = __DIR__.'../../../../resources/assets/patientimage.jpg';

            if ($processId === 2){
                $status = 'close';
            }else{
                $status = 'open';
            }

            return [
                'processId'=> $processId,
                'processStatus' => $status,
                'processType'=> 'Crio Transferencia',
                'patientId'=> 2020121212,
                'patientName'=> 'García Gómez, Anna',
                'patientImage' => base64_encode($img),
                'doctorId'=>'NIKPOL',
                'doctorName'=>'Polyzos, Nikolaos'
            ];
        }
    }
