<?php
    declare(strict_types=1);

    class User 
    {
        public PDO $connection;

        public function __construct(PDO $connection)
        {

            $this->connection = $connection;

        }

        public function createUser(string $firstname, string $lastname, string $email, string $passwordHash, string $role) : bool
        {
            
            $createQuery = "INSERT INTO users(firstname, lastname, email, password_hash, role) VALUES(?,?,?,?,?)";
            $stmt =  $this->connection->prepare($createQuery);
            return $stmt->execute([$firstname, $lastname, $email, $passwordHash, $role]);
        }

        #Delete Existing User
        public function removeUser(int $UserId): bool
        {

            $remove = "DELETE FROM users WHERE user_id = ?";
            $stmt = $this->connection->prepare($remove);
            return $stmt->execute([$UserId]);

        }

        #Update existing Email on Database
        public function updateEmail(string  $email, int $userId): bool
        {

            $updateEmail = "UPDATE users  SET email = ? WHERE user_id  = ?";
            $stmt = $this->connection->prepare($updateEmail);
            return $stmt->execute([$email, $userId]);

        }


        #Update a password 
        public function updatePassword(string $hashedPassword, string $email): bool 
        {

            $resetPassword = "UPDATE users SET password_hash = ? WHERE email  =  ?";
            $stmt  = $this->connection->prepare($resetPassword);
            return $stmt->execute([$hashedPassword, $email]);

        }


        #Change existing users role
        public function updateRole(int $userId, string $role)
        {

            $changeRole =  "UPDATE users SET role = ? WHERE user_id =  ?";
            $stmt = $this->connection->prepare($changeRole);
            return $stmt->execute([$role,  $userId]);

        }



        #This section covers getter functions

        //To check if the user exists
        public function isUserExists(string $email): bool 
        {

            $checkEmail = "SELECT email FROM users WHERE email = ?";
            $stmt = $this->connection->prepare($checkEmail);
            $stmt->execute([$email]);

            return $stmt->fetch() !== false;  //if no record exist then return false

        }


        //Search by email
        public function findUserbyEmail(string $email): array|false
        {

            $getAccount  = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->connection->prepare($getAccount);
            $stmt->execute([$email]);
            return $stmt->fetch();

        }


        //fetch all users to view at dashboard but limited to non-technical staffs.
        public function getAllUsers(): array
        {

            $fetchAll = "SELECT user_id 
                        ,CONCAT(firstname,' ',lastname) AS  Username,
                        email,
                        role,
                        created_at FROM  users";

            $stmt = $this->connection->prepare($fetchAll);
            $stmt->execute();
            return $stmt->fetchAll();

        }


    }

?>