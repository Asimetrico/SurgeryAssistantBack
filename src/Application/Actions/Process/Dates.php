<?php


    namespace App\Application\Actions\Process;


    class Dates
    {
        public function listBaseDates(int $processId): array
        {
            return [
                '0' => ['date' => '20/12/2021',
                        'color' => 'red'
                    ],
                '1' => ['date' => '21/12/2021',
                    'color' => 'orange'
                ],
                '2' => ['date' => '22/12/2021',
                    'color' => 'green'
                ],
                '3' => ['date' => '23/12/2021',
                    'color' => 'green'
                ],
                '4' => ['date' => '24/12/2021',
                    'color' => 'orange'
                ],
                '5' => ['date' => '25/12/2021',
                    'color' => 'red'
                ]
            ];

        }
    }
