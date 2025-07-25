<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MArray\Contracts;

use MenyongMenying\MLibrary\Kucil\Utilities\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-30
 */
interface MArrayInterface
{
    /**
     * Mengecek apakah suatu nilai merupakan array.
     * @param  mixed     $array Nilai yang akan dicek.
     * @return null|bool        Hasil pengecekan.
     */
    public function isArray(mixed $array) :null|bool;

    /**
     * Mengecek apakah suatu array merupakan array asosiatif.
     * @param  array     $array Array yang akan dicek.
     * @return null|bool        Hasil pengecekan.
     */
    public function isArrayAssociative(array $array) :null|bool;

    /**
     * Mengecek apakah suatu array kosong.
     * @param  array     $array Array yang akan dicek.
     * @return null|bool        Hasil pengecekan.
     */
    public function isEmpty(array $array) :null|bool;

    /**
     * Meneruskan Banyak nilai dari suatu array.
     * @param  array    $array Array yang akan dihitung.
     * @return null|int        Banyak nilai array.
     */
    public function count(array $array) :null|int;

    /**
     * Meneruskan semua index dari suatu array.
     * @param  array      $array Array yang akan diambil indexnya.
     * @return null|array        Index dari semua nilai pada $array.
     */
    public function getAllIndex(array $array) :null|array;

    /**
     * Meneruskan semua nilai dari suatu array.
     * @param  array      $array Array yang akan diambil semua nilainya.
     * @return null|array        Semua nilai pada $array.
     */
    public function getAllValue(array $array) :null|array;

    /**
     * Undocumented function
     * @param  array      $array    
     * @param  callable   $callback 
     * @return null|array              
     */
    public function map(array $array, callable $callback) :null|array;

    /**
     * Undocumented function
     * @param  array         $array    
     * @param  null|callable $callback 
     * @return null|array              
     */
    public function filter(array $array, null|callable $callback = null) :null|array;

    /**
     * Menggabungkan beberapa array.
     * @param  mixed      ...$array Array-array yang akan digabungkan. 
     * @return null|array           Hasil penggabungan array.
     */
    public function merge(array ...$array) :null|array;

    /**
     * Menggabungkan beberapa array.
     * @param  mixed      ...$array Array-array yang akan digabungkan. 
     * @return null|array           Hasil penggabungan array.
     */
    public function mergeRecursive(array ...$array) :null|array;

    /**
     * Menggabungkan banyak array menggunakan operator + (tidak menimpa key yang sudah ada di array kiri).
     * @param  array      $arrayA     Array utama yang akan dipertahankan key-nya.
     * @param  array      ...$arrayB  Array-array lain yang akan ditambahkan jika key-nya belum ada.
     * @return null|array             Hasil penggabungan.
     */
    public function mergeByAddition(array $arrayA, array ...$arrayB) :null|array;

    /**
     * Undocumented function
     * @param  array      $arrayA    
     * @param  array      ...$arrayB 
     * @return null|array            
     */
    public function replace(array $arrayA, array ...$arrayB) :null|array;

    /**
     * Undocumented function
     * @param  array      $arrayA    
     * @param  array      ...$arrayB 
     * @return null|array            
     */
    public function replaceRecursive(array $arrayA, array ...$arrayB) :null|array;

    /**
     * Mengeecek apakah suatu array memiliki nilai dengan index tertentu.
     * @param  array      $array Array yang akan dicek.
     * @param  int|string $key   Index array yang akan dicek.
     * @return null|bool         Hasil pengecekan.
     */
    public function indexExists(array $array, int|string $index) :null|bool;

    /**
     * Mengecek apakah suatu array memiliki nilai tertentu.
     * @param  array     $array Array yang akan dicek.
     * @param  mixed     $value Nilai yang akan dicek.
     * @return null|bool        Hasil pengecekan.
     */
    public function valueExists(array $array, mixed $value) :null|bool;

    /**
     * Meneruskan index pertama dari array.
     * @param  array $array Array yang akan diambil index pertamanya.
     * @return mixed        Index pertama dari $array.
     */
    public function indexFirst(array $array) :mixed;

    /**
     * Meneruskan index terakhir dari array.
     * @param  array $array Array yang akan diambil index terakhirnya.
     * @return mixed        Index terakhir dari $array.
     */
    public function indexLast(array $array) :mixed;

    /**
     * Meneruskan nilai pertama  dari array.
     * @param  array $array Array yang akan diambil nilai pertamanya.   
     * @return mixed        Nilai pertama dari $array.
     */
    public function valueFirst(array $array) :mixed;

    /**
     * Menerima nilai terakhir dari array.
     * @param  array $array Array yang akan diambil nilai terakhirnya.
     * @return mixed        Nilai terakhir dari $array.
     */
    public function valueLast(array $array) :mixed;

    /**
     * Mengubah array menjadi string.
     * @param  array       $array Array yang akan diubah menjadi string.
     * @return null|string        String dari $array.
     */
    public function convertToString(array $array) :null|string;

    /**
     * Mengubah array menjadi objek.
     * @param  array  $array Array yang akan diubah menjadi objek.
     * @param bool $recursive Apakah akan mengubah array secara rekursif.
     * @return null|Data  Objek $array.
     */
    public function convertToObject(array $array, bool $recursive = false) :null|Data;
}