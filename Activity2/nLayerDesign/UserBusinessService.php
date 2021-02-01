<?php
require_once "UserDataService.php";

// This class interacts with the UserDataAccess
// WE do not access the database in here, but call a method from
// the UserDataAccessService which executed the query and return the result.
class UserBusinessService
{

    public function searchByFirstName($pattern) {
        $service = new UserDataService();

        return $service->findByFirstName($pattern);
    }
}