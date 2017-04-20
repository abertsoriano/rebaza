<?php
/**
 * Created by PhpStorm.
 * User: Oscar Larriega
 * Date: 20/04/17
 * Time: 2:11 PM
 */

namespace app;


class CustomHelpers
{
    static function convertJsonList($dataList, $dataItem, $lang) {

        $result = [];
        $items = [];
        $i = 0;

        if ($dataList) {
            foreach ($dataList as $list => $value) {
                $result[$i] = ['list' => $value, 'items_' . $lang => []];

                if (isset($dataItem[$list])) {
                    foreach ($dataItem[$list] as $item) {
                        $items[] = $item;
                    }
                }

                $result[$i]['items_' . $lang] = $items;
                $items = [];
                $i++;
            }
        }

        return json_encode($result);
    }
}