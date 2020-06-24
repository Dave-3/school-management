<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "studentsubject".
 *
 * @property int $studentssubjectId
 * @property int $studentId
 * @property int $subjectId
 *
 * @property Students $student
 */
class Studentsubject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentsubject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'subjectId'], 'required'],
            [['studentId', 'subjectId'], 'integer'],
            [['studentId'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['studentId' => 'studentId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studentssubjectId' => 'Studentssubject',
            'studentId' => 'Student',
            'subjectId' => 'Subject',
        ];
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['studentId' => 'studentId']);
    }
}
