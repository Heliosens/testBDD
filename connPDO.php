<?php


class connPDO
{
    private string $server;
    private string $user;
    private string $password;
    private string $dbName;

    public function __construct($server, $user, $password, $dbName){
        $this->setServer($server);
        $this->setUser($user);
        $this->setPassword($password);
        $this->setDbName($dbName);
    }

    /**
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param mixed $server
     */
    public function setServer($server): void
    {
        $this->server = $server;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * @param mixed $dbName
     */
    public function setDbName($dbName): void
    {
        $this->dbName = $dbName;
    }

    /**
     * db connection
     */
    public function conn () {
        try {
            $conn = new PDO("mysql:host=".$this->getServer().";dbname=".$this->getDbName()."charset=utf8", $this->getUser(), $this->getPassword());
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection ok";
        }
        catch (PDOException $e){
            echo "Error : " . $e->getMessage();
        }
    }
}
