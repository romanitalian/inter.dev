<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class FooForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $bar;

    public $filename;

    public $path;

    public function rules()
    {
        return [
            [['bar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'txt, csv'],
        ];
    }
}
