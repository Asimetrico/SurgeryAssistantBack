<?php


namespace App\Application\Actions\Process;


class Dates
{


    public function listBaseDates(int $processId): array
    {
        $randResults = array("optimal", "average", "bad");
        $arrayColor = array("red" => "#c40303", "orange" => "#d48b04", "green" => "#055605e3");

        $items = [
            '0' => ['date' => '20/12/2021',
                'weekday' => 'M',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false
            ],
            '1' => ['date' => '21/12/2021',
                'weekday' => 'T',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '2' => ['date' => '22/12/2021',
                'weekday' => 'W',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '3' => ['date' => '23/12/2021',
                'weekday' => 'R',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '4' => ['date' => '24/12/2021',
                'weekday' => 'F',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '5' => ['date' => '25/12/2021',
                'weekday' => 'S',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => true,
            ],
            '6' => ['date' => '26/12/2021',
                'weekday' => 'U',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '7' => ['date' => '27/12/2021',
                'weekday' => 'M',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '8' => ['date' => '28/12/2021',
                'weekday' => 'T',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '9' => ['date' => '29/12/2021',
                'weekday' => 'W',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ],
            '10' => ['date' => '30/12/2021',
                'weekday' => 'R',
                'status' => $randResults[array_rand($randResults, 1)]
                , 'selected' => false,
            ]

        ];
        return array_map(function ($item) use ($arrayColor) {
            $item['color'] = $item['status'];
            return $item;
        }, $items);

    }

    public function dateColorKeys()
    {
        return [
            ['code' => 'bad', 'color' => "red"],
            ['code' => 'average', 'color' => "orange"],
            ['code' => 'optimal', 'color' => "green"],
        ];
    }
}






