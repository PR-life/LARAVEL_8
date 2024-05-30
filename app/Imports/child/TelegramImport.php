<?php

namespace App\Imports\child;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//
use Illuminate\Support\Facades\Schema;
use App\Models\_child\Telegram;

class TelegramImport implements ToCollection, WithHeadingRow 
{

    public function collection(Collection $collection)
    {
 
        $params = [];
        $arr = Schema::getColumnListing('telegrams');

        foreach($arr as $_count => $_value) {
            $params[$_value] = null;
        };

        foreach ($collection as $item) {
            foreach($params as $_name => $_value) {
                $params[$_name] = $item[$_name] ?? null;
            };

            if(!$params['shema']) {
                $params['shema'] = 'default';
            }
            if(!$params['shema_teaser']) {
                $params['shema_teaser'] = 'default';
            }
            if(!$params['user_id']) {
                $params['user_id'] = '1';
            }
            if(!$params['mafia']) {
                $params['mafia'] = '0';
            }
            if(!$params['order']) {
                $params['order'] = '50';
            }
            if(!$params['status']) {
                $params['status'] = '1';
            }
            if(!$params['views']) {
                $params['views'] = '1';
            }
            if(!$params['featured']) {
                $params['featured'] = '0';
            }
            if(!$params['published']) {
                $params['published'] = '0';
            }
            
            if(!$params['created_at']) {
                $params['created_at'] = date('Y-m-d H:i:s');
                sleep(1);
            }

            if(!$params['slug']) {

                $from = $params['name'] ?? $params['created_at'];
                $to = "";
                $this->slugRefresh($from, $to);

                
                $params['slug'] = $to;
                
                // dd($params['slug']);

            }




            Telegram::firstOrCreate([
                'sku' => $params['sku'],
                ],$params);
        }
    }

    private $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',  'г' => 'g',  'д' => 'd',
        'е' => 'e',   'ё' => 'e',   'ж' => 'zh', 'з' => 'z',  'и' => 'i',
        'й' => 'y',   'к' => 'k',   'л' => 'l',  'м' => 'm',  'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',  'с' => 's',  'т' => 't',
        'у' => 'y',   'ф' => 'f',   'х' => 'h',  'ц' => 'ts',  'ч' => 'ch',
        'ш' => 'sh',  'щ' => 'sch', 'ь' => '',   'ы' => 'y',  'ъ' => '',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    );

    public function translit($word) {
        $word = mb_strtolower($word);
        $answer = '';
        $len = mb_strlen($word);
        for ($i = 0; $i < $len; $i++) {
            $char = mb_substr($word, $i, 1);
            if (array_key_exists($char, $this->converter)) {
                $answer .= $this->converter[$char];
            } else {
                $answer .= $char;
            }
        }

        $answer = preg_replace('/[^-0-9a-z]/', '-', $answer);
        $answer = preg_replace('/[-]+/', '-', $answer);
        $answer = trim($answer, '-');

        return $answer;
    }

    public function slugRefresh($from, &$to) {
        $to = $this->translit($from);
    }


}
