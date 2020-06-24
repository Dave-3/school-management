<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $studentId
 * @property string $studentName
 * @property string $admissionNumber
 *
 * @property Studentsubject[] $studentsubjects
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentName', 'admissionNumber'], 'required'],
            [['studentName'], 'string', 'max' => 255],
            [['admissionNumber'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentId' => 'Student ID',
            'studentName' => 'Student Name',
            'admissionNumber' => 'Admission Number',
        ];
    }

    /**
     * Gets query for [[Studentsubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudentsubjects()
    {
        return $this->hasMany(Studentsubject::className(), ['studentId' => 'studentId']);
    }
}
