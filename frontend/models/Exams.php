<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "exams".
 *
 * @property int $examId
 * @property string $examName
 */
class Exams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['examName'], 'required'],
            [['examName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'examId' => 'Exam ID',
            'examName' => 'Exam Name',
        ];
    }
}
