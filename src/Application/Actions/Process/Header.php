<?php


    namespace App\Application\Actions\Process;


    class Header
    {
        public function processInfo(int $processId): array
        {
            $img = __DIR__.'/assets/patientimage.jpg';

            if ($processId === 2){
                $status = 'R';
            }else{
                $status = 'P';
            }

            return [
                'processId'=> $processId,
                'surgeryStatus' => $status,
                'processType'=> 'Crio Transferencia',
                'patientId'=> 2020121212,
                'patientName'=> 'García Gómez, Anna',
                'patientImage' => base64_encode(file_get_contents($img)),
                'doctorId'=>'NIKPOL',
                'doctorName'=>'Polyzos, Nikolaos'
            ];
        }
    }
