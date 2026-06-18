<?php
class MySQL
{
    private $fetchMode = MYSQLI_BOTH;
    public function  __construct() {
       include('db.php');   
       $this->mysqli = new mysqli($servername, $username, $password, $dbname);

        if (mysqli_connect_errno())
        {
            printf("<b>Connection failed:</b> %s\n", mysqli_connect_error());
            exit;
        }

        $this->mysqli->query("SET NAMES 'utf8'");
        $this->mysqli->query("SET CHARACTER SET utf8");
        $this->mysqli->query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");

    }

    public function setFetchMode($type)
    {
        switch($type)
        {
            case 1:
                $this->fetchMode = MYSQLI_NUM;
                break;

            case 2:
                $this->fetchMode = MYSQLI_ASSOC;
                break;

            default:
                $this->fetchMode = MYSQLI_BOTH;
                break;

        }

    }

    public function query($SQL)
    {
        $this->SQL = $this->mysqli->real_escape_string($SQL);
        $this->result = $this->mysqli->query($SQL);

        if ($this->result == true)
        {
            return true;
        }
        else
        {
            printf("<b>Problem with SQL:</b> %s\n", $this->SQL);
            exit;
        }
    }

    public function get($field = NULL)
    {
        if ($field == NULL)
        {
   
            $data = array();

            while ($row = $this->result->fetch_array($this->fetchMode))
            {
                $data[] = $row;
            }
        }
        else
        {

            $row = $this->result->fetch_array($this->fetchMode);
            $data = $row[$field];
        }

        $this->result->close();

        return $data;

    }

    public function id()
    {
        return $this->mysqli->insert_id;
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

}