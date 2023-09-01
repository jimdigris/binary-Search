'use strict';

const arr = [4, 8, 45, 95, 108, 109, 124, 145, 210];                                                // массив для поиска
let desired_element = 95;                                                                           // элемент, который необходимо найти

function binary_search(array, item) {                                                               // бинарный поиск
    let first_element = 0;                                                                          // первый элемент 
    let last_element = array.length;                                                                // последний элемент
    let middle_element;                                                                             // средний элемент

    let result = false;                                                                             // результат выполнения
    let item_position = null;                                                                       // позиция найденного элемента


    // пока не найдем нужный элемент или пока не закончатся элементы
    while (result === false && first_element <= last_element) {
        middle_element = Math.floor((first_element + last_element) / 2);                            // вычислим средний элемент массива

        if (item === array[middle_element]) {                                                       // * если элемент равен среднему
            result = true;                                                                          // элемент найден
            item_position = middle_element;                                                         // позиция найденного элемента в массиве

            console.log(item_position);
            return item_position;                                                                   // вернем позицию найденного элемента
        }

        if (item < array[middle_element]) {                                                         // * если элемент меньше среднего
            last_element = middle_element--;                                                        // то отсекаем правую часть массива
        } else {                                                                                    // * если элемент больше среднего
            first_element = middle_element++;                                                       // то отсекаем левую часть массива
        }
    }

    console.log(item_position);
    return item_position;                                                                           // вернуть - ничего не найдено
}

binary_search(arr, desired_element);                                                                // запустить выполнение