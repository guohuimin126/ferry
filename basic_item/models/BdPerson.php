<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%person}}".
 *
 * @property integer $p_id
 * @property string $true_name
 * @property integer $sex
 * @property string $id_card
 * @property string $now_tel
 * @property string $now_home
 * @property string $star_time
 * @property string $end_time
 * @property string $experience
 * @property string $highest_ed
 * @property string $graduate_sg
 * @property string $graduate_time
 * @property string $specialty
 * @property integer $u_id
 */
class BdPerson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%person}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex', 'u_id'], 'integer'],
            [['star_time', 'end_time', 'graduate_time'], 'safe'],
            [['true_name'], 'string', 'max' => 32],
            [['id_card'], 'string', 'max' => 20],
            [['now_tel'], 'string', 'max' => 15],
            [['now_home', 'experience', 'highest_ed', 'graduate_sg', 'specialty'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'true_name' => 'True Name',
            'sex' => 'Sex',
            'id_card' => 'Id Card',
            'now_tel' => 'Now Tel',
            'now_home' => 'Now Home',
            'star_time' => 'Star Time',
            'end_time' => 'End Time',
            'experience' => 'Experience',
            'highest_ed' => 'Highest Ed',
            'graduate_sg' => 'Graduate Sg',
            'graduate_time' => 'Graduate Time',
            'specialty' => 'Specialty',
            'u_id' => 'U ID',
        ];
    }
}
