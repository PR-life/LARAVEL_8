<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
//
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


abstract class BaseImport implements ToCollection, WithHeadingRow
{
    /**
     * Применяет значения по умолчанию к переданному массиву параметров.
     *
     * @param array &$params Массив параметров, к которым нужно применить значения по умолчанию.
     */
    public function applyDefaults(&$params)
    {
        if (!filled($params['order'])) {
            $params['order'] = '50';
        }
        if (!filled($params['status'])) {
            $params['status'] = '1';
        }
        if (!filled($params['views'])) {
            $params['views'] = '1';
        }
        if (!filled($params['featured'])) {
            $params['featured'] = '0';
        }
        if (!filled($params['published'])) {
            $params['published'] = '0';
        }
        if (!filled($params['created_at'])) {
            $params['created_at'] = now();
        }
    }


    /**
     * Управление транзакциями и сохранение данных.
     * Метод collection остается абстрактным.
     */
    public function saveData($modelClass, $params)
    {
        try {
            DB::beginTransaction();

            $modelClass::updateOrCreate(
                ['id' => $params['id']],
                $params
            );

            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage());
            throw $exception;
        }
    }


    /**
     * Метод, который может быть использован для записи данных в базу.
     * Абстрактный метод, должен быть определен в наследуемых классах.
     *
     * @param Collection $collection Коллекция данных для импорта.
     */
    abstract public function collection(Collection $collection);
}
