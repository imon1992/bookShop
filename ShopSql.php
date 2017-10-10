<?php
include('config.php');

class ShopSql
{

    private $dbConnect;

    public function __construct()
    {
        $baseAndHostDbName = MY_SQL_DB . ':host=' . MY_SQL_HOST . '; dbname=' . MY_SQL_DB_NAME;
        try {
            $this->dbConnect = new PDO($baseAndHostDbName, MY_SQL_USER, MY_SQL_PASSWORD);
            $this->dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->dbConect = 'connect error';
        }
    }

    public function addAuthor($name,$surname)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('INSERT INTO Author(name,surname)
                                              VALUES(:name,:surname)');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':surname',$surname);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function updateAuthor($id,$name,$surname)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('UPDATE Author
                                            SET name = :name,surname=:surname
                                            WHERE id = :id');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':surname',$surname);
            $stmt->bindParam(':id',$id);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function getAllAuthors()
    {
        $result = [];
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('SELECT *
                                            FROM Author
                                            ');

            $stmt->execute();
            while($assocRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$assocRow;
            }
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function deleteAuthor($id)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('DELETE
                                            FROM Author
                                            WHERE id = :id');
            $stmt->bindParam(':id',$id);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function addGenre($genre)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('INSERT INTO Genre(name)
                                              VALUES(:name)');
            $stmt->bindParam(':name',$genre);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function getAllGenres()
    {
        $result = [];
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('SELECT *
                                            FROM Genre
                                            ');

            $stmt->execute();
            while($assocRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$assocRow;
            }
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function updateGenre($id,$name)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('UPDATE Genre
                                            SET name = :name
                                            WHERE id = :id');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':id',$id);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }


    public function deleteGenre($id)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('DELETE
                                            FROM Genre
                                            WHERE id = :id');
            $stmt->bindParam(':id',$id);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function addBook($name,$price,$description,$discount)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('INSERT INTO Book(name,price,description,discount)
                                              VALUES(:name,:price,:description,:discount)');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':price',$price);
            $stmt->bindParam(':description',$description);
            $stmt->bindParam(':discount',$discount);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function getAllBooks()
    {
        $result = [];
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('SELECT *
                                            FROM Book
                                            ');

            $stmt->execute();
            while($assocRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$assocRow;
            }
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function updateBook($id,$name,$price,$description,$discount)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('UPDATE Book
                                            SET name = :name, price = :price, description=:description, discount=:discount
                                            WHERE id = :id');
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':price',$price);
            $stmt->bindParam(':description',$description);
            $stmt->bindParam(':discount',$discount);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function deleteBook($id)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('DELETE
                                            FROM Book
                                            WHERE id = :id');
            $stmt->bindParam(':id',$id);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function createUser($name,$surname,$phone,$email,$password,$discount,$isActive,$role)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('INSERT INTO Client(name,surname,phone,email,password,discount,isActive,role)
                                              VALUES(:name,:surname,:phone,:email,:password,:discount,:isActive,:role)');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':surname',$surname);
            $stmt->bindParam(':phone',$phone);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':discount',$discount);
            $stmt->bindParam(':isActive',$isActive);
            $stmt->bindParam(':role',$role);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function getAllUsers()
    {
        $result = [];
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('SELECT *
                                            FROM Client
                                            ');

            $stmt->execute();
            while($assocRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $result[]=$assocRow;
            }
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function updateUser($id,$name,$surname,$phone,$email,$password,$discount,$isActive,$role)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('UPDATE Client
                                            SET name = :name, surname = :surname, phone=:phone, email=:email,
                                            password=:password,discount=:discount,isActive=:isActive,role=:role
                                            WHERE id = :id');
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':surname',$surname);
            $stmt->bindParam(':phone',$phone);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':discount',$discount);
            $stmt->bindParam(':isActive',$isActive);
            $stmt->bindParam(':role',$role);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

    public function deleteUser($id)
    {
        if($this->dbConnect !== 'connect error')
        {
            $stmt =$this->dbConnect->prepare('DELETE
                                            FROM Client
                                            WHERE id = :id');
            $stmt->bindParam(':id',$id);
            $result = $stmt->execute();
        }else
        {
            $result = 'error';
        }

        return $result;
    }

}


$c = new ShopSql();
$x = $c->getAllGenres();
var_dump($x);