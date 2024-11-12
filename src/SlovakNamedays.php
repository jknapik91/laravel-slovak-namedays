<?php

namespace Janknapik\SlovakNamedays;

use Illuminate\Support\Facades\File;

class SlovakNamedays
{
    protected $namedays;

    public function __construct()
    {
        $dataPath = __DIR__ . '/data/namedays.json';
        if (File::exists($dataPath)) {
            $this->namedays = json_decode(File::get($dataPath), true);
        }
    }

    public function getSlovakNamedays($date)
    {
        $formattedDate = date('m-d', strtotime($date));
        return $this->namedays[$formattedDate] ?? 'Meniny nenájdené';
    }
}
