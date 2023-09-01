<?php

$arr = [2, 5, 8, 9, 14, 16, 19, 36, 45, 78, 102, 145, 210];                                         // массив для поиска
$desired_element = 36;                                                                              // элемент, который необходимо найти

function binary_search($array, $item)                                                               // бинарный поиск
{
    $first_element = 0;                                                                             // первый элемент 
    $last_element = count($array);                                                                  // последний элемент
    $middle_element = null;                                                                         // средний элемент

    $result = false;                                                                                // результат выполнения
    $item_position = null;                                                                          // позиция найденного элемента

    // пока не найдем нужный элемент или пока не закончатся элементы
    while ($result === false && $first_element <= $last_element) {
        $middle_element = floor(($first_element + $last_element) / 2);                              // вычислим средний элемент массива

        if ($item === $array[$middle_element]) {                                                    // * если элемент равен среднему
            $result = true;                                                                         // элемент найден
            $item_position = $middle_element;                                                       // позиция найденного элемента в массиве

            echo $item_position;
            return $item_position;                                                                  // вернем позицию найденного элемента
        }

        if ($item < $array[$middle_element]) {                                                      // * если элемент меньше среднего
            $last_element = $middle_element--;                                                      // то отсекаем правую часть массива
        } else {                                                                                    // * если элемент больше среднего
            $first_element = $middle_element++;                                                     // то отсекаем левую часть массива
        }
    }

    echo $item_position;
    return $item_position;                                                                          // вернуть - ничего не найдено    
}

binary_search($arr, $desired_element);                                                              // запустить выполнение
