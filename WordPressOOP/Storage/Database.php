<?php

namespace WordPressOOP\Storage;

use wpdb;

class Database
{
    /**
     * The current database version.
     *
     * @static string $pusher_db_version
     */
    public static $pusher_db_version = '1.0';

    /**
     * The WordPress wpdb object.
     *
     * @var \wpdb $db
     */
    public $db;

    /**
     * Constructor requires wpdb object.
     *
     * @param \wpdb $db
     * @return void
     */
    public function __construct(wpdb $wpdb)
    {
        $this->db = $wpdb;
    }

    /**
     * Example method showing how to interact with the database.
     *
     * @return string $firstUser
     */
    public function getFirstUser()
    {
        return $this->db->get_var("SELECT user_login FROM wp_users");
    }
}
