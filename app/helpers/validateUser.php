<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    
    if (empty($user['phone'])) {
        array_push($errors, 'Phone Number is required');
    }

    if (empty($user['place'])) {
        array_push($errors, 'Place is required');
    }

    if (empty($user['school'])) {
        array_push($errors, 'Preferred Course is required');
    }

    if (empty($user['course'])) {
        array_push($errors, 'Course is required');
    }

    if (empty($user['dis'])) {
        array_push($errors, 'Select any district');
    }


    // if (empty($user['password'])) {
    //     array_push($errors, 'Password is required');
    // }

    // if ($user['passwordConf'] !== $user['password']) {
    //     array_push($errors, 'Password do not match');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exists');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;
}