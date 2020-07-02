<?php
namespace frontend\components;

/**
 * Class Helpers
 * @package frontend\components
 */
use app\models\Section;

/**
 * Class Helpers
 * @package frontend\components
 */
class Helpers
{

    /**
     * @param $actionName
     */
    static function getActiveAction($actionName)
    {
        if (\Yii::$app->controller->action->id == $actionName)
            echo 'active';
    }

    /**
     * @param $controllerName
     */
    static function getActiveController($controllerName)
    {
        if (\Yii::$app->controller->id == $controllerName)
            echo 'active';
    }

    /**
     * @param string $url
     * @return string $img
     * get image for video
     */

    static function video_image($url)
    {
        $image_url = parse_url($url);
        if ($image_url['host'] == 'www.youtube.com' || $image_url['host'] == 'youtube.com') {
            $array = explode("&", $image_url['query']);
            $img = "http://img.youtube.com/vi/" . substr($array[0], 2) . "/0.jpg";

        } else if ($image_url['host'] == 'www.vimeo.com' || $image_url['host'] == 'vimeo.com') {
            $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/" . substr($image_url['path'], 1) . ".php"));
            $img = $hash[0]["thumbnail_large"];

        } else {
            $img = '/img/video-page/video-poster/poster-all.jpg';
        }
        return $img;
    }


    static function nl2li($string, $class = false)
    {
        $arrayOfString = explode("\n", $string);
        $string = '';
        foreach ($arrayOfString AS $line) {
            $string .= $class ? '<li class="' . $class . '">' : '<li>';
            $string .= trim($line) . '</li>';
        }
        return $string;
    }

    /**
     * @param string $page
     * @return array $descriptions
     */
    static function descriptions($page = false)
    {
        $dirs = \Yii::$app->params['dirs'];
        $slugs = [];
        if (isset($dirs[$page]['subDirs'])) {
            foreach ($dirs[$page]['subDirs'] AS $name => $options) {
                $slugs[] = $name;
            }
            $where = ['slug' => $slugs];
        } else {
            $where = 'slug="' . $page . '"';
        }
        $model = Section::find()->where($where)->all();
        $descriptions = [];
        foreach ($model AS $m) {
            $descriptions[$m->slug] = $m->{'text_' . \Yii::$app->language};
        }
        return $descriptions;
    }
}