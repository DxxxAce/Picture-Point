<?php

use app\core\Application;

class m02_add_pass_col{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE users ADD COLUMN pass VARCHAR(512) NOT NULL ";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users DROP COLUMN pass";
        $db->pdo->exec($SQL);
    }
}