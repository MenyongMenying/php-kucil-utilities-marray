<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MArray;

use MenyongMenying\MLibrary\Kucil\Utilities\MData\MData;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-01
 */
final class MArray
{
    /**
     * Objek dari class 'MString'.
     * @var \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString 
     */
    private MString $mString;

    /**
     * @param  \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString $mString 
     * @return void
     */
    public function __construct(MString $mString)
    {
        $this->mString = $mString;
        return;
    }

    /**
     * Mengecek apakah suatu nilai merupakan array.
     * @param  mixed $array Nilai yang akan dicek.
     * @return bool         Hasil pengecekan.
     */
    public function isArray(mixed $array) :bool
    {
        return is_array($array);
    }

    /**
     * Mengecek apakah suatu array merupakan array asosiatif.
     * @param  array $array Array yang akan dicek.
     * @return bool         Hasil pengecekan.
     */
    public function isArrayAssociative(array $array) :bool
    {
        return array_keys($array) !== range(0, count($array) - 1);
    }

    /**
     * Mengecek apakah suatu array kosong.
     * @param  array $array Array yang akan dicek.
     * @return bool         Hasil pengecekan.
     */
    public function isEmpty(array $array) :bool
    {
        return empty($array);
    }

    /**
     * Meneruskan Banyak nilai dari suatu array.
     * @param  array $array Array yang akan dihitung.
     * @return int          Banyak nilai array.
     */
    public function count(array $array) :int
    {
        return count($array);
    }

    /**
     * Meneruskan semua index dari suatu array.
     * @param  array $array Array yang akan diambil indexnya.
     * @return array        Index dari semua nilai pada $array.
     */
    public function getAllIndex(array $array) :array
    {
        return array_keys($array);
    }

    /**
     * Meneruskan semua nilai dari suatu array.
     * @param  array $array Array yang akan diambil semua nilainya.
     * @return array        Semua nilai pada $array.
     */
    public function getAllValue(array $array) :array
    {
        return array_values($array);
    }

    /**
     * Undocumented function
     * @param  array    $array    
     * @param  callable $callback 
     * @return array              
     */
    public function map(array $array, callable $callback) :array
    {
        $result = [];
        foreach ($array as $key => $value) {
            $result[$key] = $callback($value, $key);
        }
        return $result;
    }

    /**
     * Undocumented function
     * @param  array    $array    
     * @param  callable $callback 
     * @return array              
     */
    public function filter(array $array, callable $callback) :array
    {
        return array_filter($array, $callback);
    }

    /**
     * Menggabungkan beberapa array.
     * @param  mixed ...$array Array-array yang akan digabungkan. 
     * @return array           Hasil penggabungan array.
     */
    public function merge(array ...$array) :array
    {
        return array_merge(...$array);
    }

    /**
     * Menggabungkan beberapa array.
     * @param  mixed ...$array Array-array yang akan digabungkan. 
     * @return array           Hasil penggabungan array.
     */
    public function mergeRecursive(array ...$array) :array
    {
        return array_merge_recursive(...$array);
    }

    /**
     * Menggabungkan banyak array menggunakan operator + (tidak menimpa key yang sudah ada di array kiri).
     * @param  array $arrayA     Array utama yang akan dipertahankan key-nya.
     * @param  array ...$arrayB  Array-array lain yang akan ditambahkan jika key-nya belum ada.
     * @return array             Hasil penggabungan.
     */
    public function mergeByAddition(array $arrayA, array ...$arrayB): array
    {
        foreach ($arrayB as $array) {
            $arrayA += $array; // hanya menambah key yang belum ada
        }
        return $arrayA;
    }

    /**
     * Undocumented function
     * @param  array $arrayA    
     * @param  array ...$arrayB 
     * @return array            
     */
    public function replace(array $arrayA, array ...$arrayB) :array
    {
        return array_replace($arrayA, ...$arrayB);
    }

    /**
     * Undocumented function
     * @param  array $arrayA    
     * @param  array ...$arrayB 
     * @return array            
     */
    public function replaceRecursive(array $arrayA, array ...$arrayB) :array
    {
        return array_replace_recursive($arrayA, ...$arrayB);
    }

    /**
     * Mengeecek apakah suatu array memiliki nilai dengan index tertentu.
     * @param  array  $array 
     * @param  string $key   
     * @return bool          
     */
    public function indexExists(array $array, string $index) :bool
    {
        return array_key_exists($index, $array);
    }

    /**
     * mengecek apakah suatu array memiliki nilai tertentu.
     * @param  array $array Array yang akan dicek.
     * @param  mixed $value Nilai yang akan dicek.
     * @return bool         hasil pengecekan.
     */
    public function valueExists(array $array, mixed $value) :bool
    {
        return in_array($value, $array);
    }

    /**
     * Meneruskan index pertama dari array.
     * @param  array $array Array yang akan diambil index pertamanya.
     * @return mixed        Index pertama dari $array.
     */
    public function indexFirst(array $array) :mixed
    {
        return array_key_first($array);
    }

    /**
     * Meneruskan index terakhir dari array.
     * @param  array $array Array yang akan diambil index terakhirnya.
     * @return mixed        Index terakhir dari $array.
     */
    public function indexLast(array $array) :mixed
    {
        return array_key_last($array);
    }

    /**
     * Meneruskan nilai pertama  dari array.
     * @param  array $array Array yang akan diambil nilai pertamanya.   
     * @return mixed        Nilai pertama dari $array.
     */
    public function valueFirst(array $array) :mixed
    {
        return $array[array_key_first($array)] ?? null;
    }

    /**
     * Menerima nilai terakhir dari array.
     * @param  array $array Array yang akan diambil nilai terakhirnya.
     * @return mixed        Nilai terakhir dari $array.
     */
    public function valueLast(array $array) :mixed
    {
        return $array[array_key_last($array)] ?? null;
    }

    /**
     * Mengubah array menjadi string.
     * @param  array  $array Array yang akan diubah menjadi string.
     * @return string        String dari $array.
     */
    public function convertToString(array $array) :string
    {
        return implode(', ', array_map('strval', $array));
    }

    /**
     * Mengubah array menjadi objek secara rekursif.
     * @param  array  $array Array yang akan diubah menjadi objek.
     * @return MData  Objek hasil konversi.
     */
    public function convertToObject(array $array): MData
    {
        $converted = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $converted[$key] = $this->convertToObject($value);
                continue;
            }
            $converted[$key] = $value;
            continue;
        }
        return new MData($this->mString, $converted);
    }

}