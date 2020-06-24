<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $teacherId
 * @property string $teacherName
 * @property string $phoneNumber
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacherName', 'phoneNumber'], 'required'],
            [['teacherName'], 'string', 'max' => 255],
            [['phoneNumber'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacherId' => 'Teacher ID',
            'teacherName' => 'Teacher Name',
            'phoneNumber' => 'Phone Number',
        ];
    }
}
