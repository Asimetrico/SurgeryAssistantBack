<?php


    namespace App\Application\Actions\Process;


    class Dates
    {
        public function listBaseDates(int $processId): array
        {
            $randResults = array("red", "orange", "green");

            return [
                '0' => ['date' => '20/12/2021',
                    'color' => $randResults[array_rand($randResults,1)],
                    'selected'=> false,
                ],
                '1' => ['date' => '21/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                    ,'selected'=> false,
                ],
                '2' => ['date' => '22/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                    ,'selected'=> false,
                ],
                '3' => ['date' => '23/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                    ,'selected'=> false,
                ],
                '4' => ['date' => '24/12/2021',
                    'color' => 'orange'
                    ,'selected'=> false,
                ],
                '5' => ['date' => '25/12/2021',
                    'color' => 'green'
                    ,'selected'=> true,
                ],
                '6' => ['date' => '26/12/2021',
                    'color' => 'orange'
                    ,'selected'=> false,
                ],
                '7' => ['date' => '27/12/2021',
                    'color' => 'red'
                    ,'selected'=> false,
                ],
                '8' => ['date' => '28/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                    ,'selected'=> false,
                ],
                '9' => ['date' => '29/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                    ,'selected'=> false,
                ],
                '10' => ['date' => '39/12/2021',
                    'color' => $randResults[array_rand($randResults,1)]
                    ,'selected'=> false,
                ]

            ];

        }
    }






