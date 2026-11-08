<?php

        require_once __DIR__ . '/../models/user.php';
        require_once __DIR__ . '/../config/database.php';

        

        $conn = new Database();
        $connection = $conn->opencon();

        #Myconnection to deskflow db 
        $user = new User($connection);

        $email = "tlga.davebesorio@gmail.com";
        $passwordInput = "Admin123";
        //Kunwari  eto  yunng nilogin ni user


        $getUser = $user->findUserbyEmail($email);

        if($getUser === false)
        {
            $userEmail = json_encode([
                'success' => false,
                'message' => 'Invalid User'
            ]);

            echo $userEmail;
            exit;
        } 
        else
        {
            session_start();
            header('Content-Type: application/json');

            if(!password_verify($passwordInput, $getUser['password_hash']))
            {
                $json = json_encode([
                    'success' => false,
                    'message' => 'Incorrect password'
                ]);
                echo $json;
                exit;
            } 
                
                session_regenerate_id(true);

                $_SESSION['userId'] = $getUser['user_id'];
                $_SESSION['email'] = $getUser['email'];
                $_SESSION['role'] = $getUser['role'];

                echo json_encode([
                    'success' => true,
                    'message' => 'Login Successful',
                    'role' => $getUser['role']
                ]);

        }
        

        



?>