<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MArray;

use MenyongMenying\MLibrary\Kucil\Utilities\MArray\Contracts\MArrayInterface;
use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
final class MArray implements MArrayInterface
{
    public function isArray(mixed $array) :null|bool
    {
        return is_array($array);
    }

    public function isArrayAssociative(array $array) :null|bool
    {
        return array_keys($array) !== range(0, count($array) - 1);
    }
    
    public function isEmpty(array $array) :null|bool
    {
        return empty($array);
    }

    public function count(array $array) :null|int
    {
        return count($array);
    }

    public function getAllIndex(array $array) :null|array
    {
        return array_keys($array);
    }

    public function getAllValue(array $array) :null|array
    {
        return array_values($array);
    }

    public function map(array $array, callable $callback) :null|array
    {
        $result = [];
        foreach ($array as $key => $value) {
            $result[$key] = $callback($value, $key);
        }
        return $result;
    }

    public function filter(array $array, null|callable $callback = null) :null|array
    {
        return array_filter($array, $callback);
    }

    public function merge(array ...$array) :null|array
    {
        return array_merge(...$array);
    }

    public function mergeRecursive(array ...$array) :null|array
    {
        return array_merge_recursive(...$array);
    }

    public function mergeByAddition(array $arrayA, array ...$arrayB):null| array
    {
        foreach ($arrayB as $array) {
            $arrayA += $array; // hanya menambah key yang belum ada
        }
        return $arrayA;
    }

    public function replace(array $arrayA, array ...$arrayB) :null|array
    {
        return array_replace($arrayA, ...$arrayB);
    }

    public function replaceRecursive(array $arrayA, array ...$arrayB) :null|array
    {
        return array_replace_recursive($arrayA, ...$arrayB);
    }

    public function indexExists(array $array, int|string $index) :null|bool
    {
        return array_key_exists($index, $array);
    }

    public function valueExists(array $array, mixed $value) :null|bool
    {
        return in_array($value, $array);
    }

    public function indexFirst(array $array) :mixed
    {
        return array_key_first($array);
    }

    public function indexLast(array $array) :mixed
    {
        return array_key_last($array);
    }

    public function valueFirst(array $array) :mixed
    {
        return $array[array_key_first($array)] ?? null;
    }

    public function valueLast(array $array) :mixed
    {
        return $array[array_key_last($array)] ?? null;
    }

    public function convertToString(array $array) :null|string
    {
        return implode(', ', array_map('strval', $array));
    }

    public function convertToObject(array $array, bool $recursive = false) :null|Data
    {
        return new Data($array, $recursive);
    }
}