<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblusers".
 *
 * @property int $id
 * @property string $FirstName
 * @property string $LastName
 * @property string $EmailId
 * @property string $ContactNumber
 * @property string $Address
 * @property string $PostingDate
 */
class Tblusers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblusers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'EmailId', 'ContactNumber', 'Address'], 'required'],
            [['PostingDate'], 'safe'],
            [['FirstName', 'LastName'], 'string', 'max' => 150],
            [['EmailId'], 'string', 'max' => 120],
            [['ContactNumber'], 'string', 'max' => 11],
            [['Address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'EmailId' => 'Email ID',
            'ContactNumber' => 'Contact Number',
            'Address' => 'Address',
            'PostingDate' => 'Posting Date',
        ];
    }
}
