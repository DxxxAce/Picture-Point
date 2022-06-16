<?php
use app\core\Application;
class m03_add_mediaacc
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE users ADD COLUMN twitter VARCHAR(512) NOT NULL";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users DROP COLUMN twitter";
        $db->pdo->exec($SQL);
    }
}