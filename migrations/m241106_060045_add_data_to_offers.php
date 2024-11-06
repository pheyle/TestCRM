<?php

use app\models\Offer;
use yii\db\Migration;

/**
 * Class m241106_060045_add_data_to_offers
 */
class m241106_060045_add_data_to_offers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        for ($i = 1; $i <= 30; $i++) {
            $offer = new Offer();
            $offer->title = "Test Offer " . $i;
            $offer->email = "test{$i}@example.com";
            $offer->phone = "+1234567890";
            $offer->created_at = time();
            $offer->updated_at = time();
            $offer->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        Offer::deleteAll(['like', 'title', 'Test Offer']);
    }
}
