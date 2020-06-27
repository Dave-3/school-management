<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $studentId
 * @property string $studentName
 * @property string $admissionNumber
 * @property string $birthCertificateNumber
 * @property string $form
 * @property string $dateBirth
 * @property string $admissionDate
 * @property string $clearanceDate
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
            [['studentName', 'admissionNumber', 'birthCertificateNumber', 'form', 'dateBirth', 'admissionDate', 'clearanceDate'], 'required'],
            [['dateBirth', 'admissionDate', 'clearanceDate'], 'safe'],
            [['studentName'], 'string', 'max' => 255],
            [['admissionNumber', 'birthCertificateNumber', 'form'], 'string', 'max' => 50],
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
            'birthCertificateNumber' => 'Birth Certificate Number',
            'form' => 'Form',
            'dateBirth' => 'Date Birth',
            'admissionDate' => 'Admission Date',
            'clearanceDate' => 'Clearance Date',
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
