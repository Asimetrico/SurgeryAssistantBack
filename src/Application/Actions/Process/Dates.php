<?php


    namespace App\Application\Actions\Process;


    class Dates
    {
        public function listBaseDates(int $processId): array
        {
            $randResults = array("red", "orange", "green");

            return [
                '0' => ['date' => '20/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ],
                '1' => ['date' => '21/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ],
                '2' => ['date' => '22/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ],
                '3' => ['date' => '23/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ],
                '4' => ['date' => '24/12/2021',
                    'color' => 'orange'
                ],
                '5' => ['date' => '25/12/2021',
                    'color' => 'green'
                ],
                '6' => ['date' => '26/12/2021',
                    'color' => 'orange'
                ],
                '7' => ['date' => '27/12/2021',
                    'color' => 'red'
                ],
                '8' => ['date' => '28/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ],
                '9' => ['date' => '29/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ],
                '10' => ['date' => '39/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                ]

            ];

        }
    }






