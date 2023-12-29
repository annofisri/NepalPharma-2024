<?php


require_once __DIR__ . '/db-config.php';


class TableManager
{
    private $db;

    public function __construct(private $table)
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';', DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
    }
    public function getTable()
    {
        return $this->table;
    }
    public function setTable($table)
    {
        $this->table = $table;
    }


    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }
    public function getStallsByExhibitorId($id)
    {
        $sql = "SELECT * FROM $this->table WHERE exhibitor_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll();
    }
    public function getAllStallAndExhibitor()
    {
        $sql = "SELECT s.id, s.name, s.type, s.hall_no, s.exhibitor_id, s.status, IFNULL(e.name, '') as exhibitor_name, e.country, st.name as stall_type FROM stall s LEFT JOIN exhibitor e ON e.id = s.exhibitor_id LEFT JOIN stall_type st ON st.id = s.type ORDER BY s.id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getByName($name)
    {
        $sql = "SELECT * FROM $this->table WHERE name = :name";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':name' => $name]);
        return $stmt->fetch();
    }

    public function getAll($settings = [])
    {
        $orderBy = $settings['orderBy'] ?? null;

        $sql = "SELECT * FROM $this->table";
        if ($orderBy) {
            $sql .= " ORDER BY $orderBy";
        }
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO $this->table (";
        foreach ($data as $key => $value) {
            $sql .= "$key,";
        }
        $sql = substr($sql, 0, -1);
        $sql .= ") VALUES (";
        foreach ($data as $key => $value) {
            $sql .= ":$key,";
        }
        $sql = substr($sql, 0, -1);
        $sql .= ")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);
        return $this->db->lastInsertId();
    }

    public function update($id, $data)
    {
        $sql = "UPDATE $this->table SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key = :$key,";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $data['id'] = $id;
        $stmt->execute($data);
        return $stmt->rowCount();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->rowCount();
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM $this->table WHERE name LIKE :keyword";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':keyword' => "%$keyword%"]);
        return $stmt->fetchAll();
    }

    public function searchBy($keyword, $field)
    {
        $sql = "SELECT * FROM $this->table WHERE $field LIKE :keyword";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':keyword' => "%$keyword%"]);
        return $stmt->fetchAll();
    }

    public function searchBy2($keyword, $field1, $field2)
    {
        $sql = "SELECT * FROM $this->table WHERE $field1 LIKE :keyword OR $field2 LIKE :keyword";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':keyword' => "%$keyword%"]);
        return $stmt->fetchAll();
    }


    public function uploadImage($file)
    {
        if (!$file['name']) {
            return null;
        }

        $target_dir = __DIR__ . '/../public/uploads/';
        // $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
        $newFileName = uniqid() . '.' . $imageFileType;
        $target_file = $target_dir . $newFileName;
        // Check if image file is a actual image or fake image
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        // Check file size
        if ($file["size"] > MAX_UPLOAD_IMAGE_SIZE) {
            $uploadOk = 0;
        }
        // Allow certain file formats
        if (
            !in_array($imageFileType, ALLOWED_IMAGE_TYPES)
        ) {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error


        if ($uploadOk == 0) {
            return null;
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                return $newFileName;
            } else {
                return null;
            }
        }
    }

    public function getBookedStalls()
    {
        $sql = "SELECT name FROM $this->table WHERE status = 'booked'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getBookedStallsByExhibitorId($id)
    {
        $sql = "SELECT * FROM $this->table WHERE exhibitor_id = :id AND status = 'booked'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll();
    }
}
