<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sentences".
 *
 * @property int $id
 * @property string|null $value
 * @property string|null $result
 */
class Sentences extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sentences';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'result'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'result' => 'Result',
        ];
    }
}
