<?php
namespace backend\components;

/**
 * Class Helpers
 * @package backend\components
 */
class Helpers
{

    /**
     * @param $fileName
     */
    static function getExtension($fileName)
    {
        return strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    }

    /**
     * @param $dir
     */
    static function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            if ($objects) {
                foreach ($objects as $object) {
                    if ($object != "." && $object != "..") {
                        if (filetype($dir . "/" . $object) == "dir")
                            rrmdir($dir . "/" . $object);
                        else
                            unlink($dir . "/" . $object);
                    }
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }


    static function toSlug($text)
    {
        $trans = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'jo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'jj',
            'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f',
            'х' => 'kh', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'eh', 'ю' => 'ju', 'я' => 'ja',
        ];
        $text = mb_strtolower($text, 'UTF-8'); // lowercase cyrillic letters too
        $text = strtr($text, $trans); // transliterate cyrillic letters
        $text = preg_replace('/[^A-Za-z0-9 _.]/', '', $text);
        $text = preg_replace('/[ _.]+/', '-', trim($text));
        $text = trim($text, '-');
        return $text;
    }

}