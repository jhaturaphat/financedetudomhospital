<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_receipt".
 *
 * @property int $id_ty
 * @property string $id_type_receipt
 * @property string $name_type_receipt
 */
class TypeReceipt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_receipt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_type_receipt'], 'string', 'max' => 5],
            [['name_type_receipt'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ty' => 'Id Ty',
            'id_type_receipt' => 'Id Type Receipt',
            'name_type_receipt' => 'Name Type Receipt',
        ];
    }
}
