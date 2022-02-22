<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 * - `{{%user}}`
 */
class m220204_203117_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->text(),
            'category_id' => $this->integer(),
            'view' => $this->integer()->defaultValue(0),
            'user_id' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()'),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-news-category_id}}',
            '{{%news}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-news-category_id}}',
            '{{%news}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-news-user_id}}',
            '{{%news}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-news-user_id}}',
            '{{%news}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-news-category_id}}',
            '{{%news}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-news-category_id}}',
            '{{%news}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-news-user_id}}',
            '{{%news}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-news-user_id}}',
            '{{%news}}'
        );

        $this->dropTable('{{%news}}');
    }
}
