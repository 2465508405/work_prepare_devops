<?php


interface IUser {

    public function insert(User $user);

    public function getUser($id);
}