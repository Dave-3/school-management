<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "results".
 *
 * @property int $resultsId
 * @property int $studentId
 * @property int $teacherId
 * @property int $subjectId
 * @property int $examId
 * @property string $totalMarks
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'teacherId', 'subjectId', 'examId', 'totalMarks'], 'required'],
            [['studentId', 'teacherId', 'subjectId', 'examId'], 'integer'],
            [['totalMarks'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'resultsId' => 'Results ',
            'studentId' => 'Student ',
            'teacherId' => 'Teacher ',
            'subjectId' => 'Subject ',
            'examId' => 'Exam',
            'totalMarks' => 'Total Marks',
        ];
    }
}
