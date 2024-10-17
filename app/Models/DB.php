<?php 

namespace App\Models;

use PDO;
use PDOException;
use app\Http\Config;

class DB
{
    // Hold the PDO instance
    private static $instance = null;
    private $table;
    private $select = '*';
    private $where = [];
    private $bindings = [];
    private $orderBy = '';
    private $limit = '';

    // Database configuration
    private static $host = Config::DB_HOST;
    private static $dbName = Config::DB_NAME;
    private static $username = Config::DB_USERNAME;
    private static $password = Config::DB_PASSWORD;

    // Private constructor to prevent multiple instances
    private function __construct()
    {
        try {
            self::$instance = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dbName,
                self::$username,
                self::$password
            );
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            new self();
        }
        return self::$instance;
    }

    public static function table($table)
    {
        $db = new self();
        $db->table = $table;
        return $db;
    }

    public function select($columns = ['*'])
    {
        if (is_array($columns)) {
            $this->select = implode(", ", $columns);
        } else {
            $this->select = $columns;
        }
        return $this;
    }

    public function where($column, $operator, $value)
    {
        $this->where[] = "$column $operator :$column";
        $this->bindings[$column] = $value;
        return $this;
    }

    public function orderBy($column, $direction = 'ASC')
    {
        $this->orderBy = " ORDER BY $column $direction";
        return $this;
    }

    public function limit($count)
    {
        $this->limit = " LIMIT $count";
        return $this;
    }

    public function get()
    {
        try {
            $sql = "SELECT {$this->select} FROM {$this->table}";
            if (!empty($this->where)) {
                $sql .= " WHERE " . implode(" AND ", $this->where);
            }
            $sql .= $this->orderBy . $this->limit;
            $stmt = self::getInstance()->prepare($sql);
            $stmt->execute($this->bindings);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Query failed: " . $exception->getMessage();
            return false;
        }
    }

    public function first()
    {
        $this->limit(1);
        $results = $this->get();
        return $results ? $results[0] : null;
    }

    public function insert($data)
    {
        try {
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));
            $sql = "INSERT INTO {$this->table} ($columns) VALUES ($placeholders)";
            $stmt = self::getInstance()->prepare($sql);
            $stmt->execute($data);
            return self::getInstance()->lastInsertId();
        } catch (PDOException $exception) {
            echo "Insert failed: " . $exception->getMessage();
            return false;
        }
    }

    public function update($data)
    {
        try {
            $set = '';
            foreach ($data as $column => $value) {
                $set .= "$column = :$column, ";
                $this->bindings[$column] = $value;
            }
            $set = rtrim($set, ", ");
            $sql = "UPDATE {$this->table} SET $set";
            if (!empty($this->where)) {
                $sql .= " WHERE " . implode(" AND ", $this->where);
            }
            $stmt = self::getInstance()->prepare($sql);
            return $stmt->execute($this->bindings);
        } catch (PDOException $exception) {
            echo "Update failed: " . $exception->getMessage();
            return false;
        }
    }

    public function delete()
    {
        try {
            $sql = "DELETE FROM {$this->table}";
            if (!empty($this->where)) {
                $sql .= " WHERE " . implode(" AND ", $this->where);
            }
            $stmt = self::getInstance()->prepare($sql);
            return $stmt->execute($this->bindings);
        } catch (PDOException $exception) {
            echo "Delete failed: " . $exception->getMessage();
            return false;
        }
    }

    public function __clone() {}
    public function __wakeup() {}
}
