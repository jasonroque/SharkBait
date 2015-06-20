<?php

    include_once 'db_connect.php';
    
    session_start();
    
    if(isset($_POST['author']) && isset($_POST['title']) && isset($_POST['body'])
            && ($_POST['author'] != '' && $_POST['title'] != '' && $_POST['body'] != '' )) {
        
        //$email = $_POST['email'];
        $author = $_POST['author'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        
//        if(!filter_var($email, FILTER_SANITIZE_EMAIL)) {
//            $error_msg = 'Email submitted is invalid';
//        }
        
        
        if(!filter_var($author, FILTER_SANITIZE_STRING)) {
            $error_msg .= 'Author submitted is invalid.<br />';
        }
        
        
        if(!filter_var($author, FILTER_SANITIZE_STRING)) {
            $error_msg .= 'Title submitted is invalid.<br />';
        }
        
        
        if(!filter_var($author, FILTER_SANITIZE_STRING)) {
            $error_msg .= 'Body submitted is invalid.<br />';    
        }
        
        if(empty($error_msg)) {
            $_SESSION['fail'] = '';
            
            $insert_query = "INSERT INTO stories (author, title, body) VALUES (?,?,?)";
            
            $stmt = $mysqli->prepare($insert_query);
            $stmt->bind_param('sss', $author, $title, $body);
            
            $stmt->execute();
            $_SESSION['success'] = 'Your submission has been submitted. Thank you.';
            header('Location: ../index.php#story');
            
        } else {
            $_SESSION['fail'] = $error_msg;
            header('Location: ../index.php#story');
        }
    } else {
        if(!isset($_POST['author']) || empty($_POST['author'])) {
            $error_msg .= 'Please enter valid author name<br/>';
        }
        
        if(!isset($_POST['title']) || empty($_POST['title'])) {
            $error_msg .= 'Please enter valid title<br/>';
        }
        if(!isset($_POST['body']) || empty($_POST['body'])) {
            $error_msg .= 'Please enter valid body<br/>';
        }
        
        
        $_SESSION['fail'] = $error_msg;
        header('Location: ../index.php#story?author='. $_POST['author']);
    }
    
    

