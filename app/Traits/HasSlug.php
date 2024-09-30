<?php

namespace App\Traits;

use Illuminate\Support\Str;
use App\Models\Product; // Если нужно будет проверять уникальность среди продуктов

trait HasSlug
{
    /**
     * Генерация уникального slug для переданного названия.
     *
     * @param string $from Название, на основе которого создается slug.
     * @return string Уникальный slug.
     */
    public function generateUniqueSlug($from, $modelClass)
    {
        $slug = $this->translit($from);

        // Уникальный slug с учетом существующих записей
        $originalSlug = $slug;
        $count = 1;

        // Проверяем уникальность slug, если такой уже существует, добавляем число в конец
        // while ($modelClass::where('slug', $slug)->exists()) {
        //     $slug = $originalSlug . '-' . $count++;
        // }

        return $slug;
    }

    /**
     * Транслитерация строки для создания slug.
     *
     * @param string $word Строка для транслитерации.
     * @return string Транслитерированная строка.
     */
    public function translit($word)
    {
        $converter = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'y', 'ъ' => '',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
        ];

        $word = mb_strtolower($word);
        $slug = '';
        $len = mb_strlen($word);
        for ($i = 0; $i < $len; $i++) {
            $char = mb_substr($word, $i, 1);
            $slug .= $converter[$char] ?? $char;
        }

        // Удаляем лишние символы
        $slug = preg_replace('/[^-0-9a-z]/', '-', $slug);
        $slug = preg_replace('/[-]+/', '-', $slug);
        return trim($slug, '-');
    }
}
