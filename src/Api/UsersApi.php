<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:47 PM
 */

namespace Fulfillment\OMS\Api;


use Fulfillment\OMS\Models\Response\User;

class UsersApi extends ApiRequestBase
{
    /**
     * Get an array of Users
     *
     * Will only returns users from the merchant authorizing the request
     *
     * @param $queryString
     * @return mixed
     * @throws \Exception
     */
    public function getUsers($queryString)
    {
        $json = $this->makeRequest('get', 'users', null, $queryString);

        if ($this->config['jsonOnly']) {
            $users = $json;
        } else {
            $users = $this->jsonMapper->mapArray($json, [], 'Fulfillment\OMS\Models\Response\User');
        }
        return $users;
    }

    /**
     * Get a user with the specified Id
     *
     * @param $userId
     * @return mixed|object
     * @throws \Exception
     * @throws \JsonMapper_Exception
     */
    public function getUser($userId)
    {
        $json = $this->makeRequest('get', 'users/' . $userId);

        if ($this->config['jsonOnly']) {
            $user = $json;
        } else {
            $user = $this->jsonMapper->map($json, new User());
        }

        return $user;
    }

    /**
     * Create a new user in the Fulfillment system
     *
     * @param $user
     * @return mixed|object
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function createUser($user)
    {
        if ($user instanceof \Fulfillment\OMS\Models\Request\User && $this->validateRequests) {
            $user->validate();
        }
        $json = $this->makeRequest('post', 'users/', $user);

        if ($this->config['jsonOnly']) {
            $returnUser = $json;
        } else {
            $returnUser = $this->jsonMapper->map($json, new User());
        }
        return $returnUser;
    }

    /**
     * Update an existing user
     *
     * @param $userId
     * @param $user
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function updateUser($userId, $user)
    {
        if ($user instanceof \Fulfillment\OMS\Models\Request\User && $this->validateRequests) {
            $user->validate();
        }

        $this->makeRequest('put', 'users/' . $userId, $user);
    }

    /**
     * Delete the user with the specified Id
     *
     * @param $userId
     * @throws \Exception
     */
    public function deleteUser($userId)
    {
        $this->makeRequest('delete', 'users/' . $userId);
    }

    /**
     * Change a User's password
     *
     * Must provide the current password for this to work
     *
     * @param $userId
     * @param $currentPassword
     * @param $newPassword
     * @throws \Exception
     */
    public function changeUserPassword($userId, $currentPassword, $newPassword)
    {
        $this->makeRequest('put', 'users/' . $userId . '/password', ['currentPassword' => $currentPassword, 'newPassword' => $newPassword]);
    }

    /**
     * Generate a password token for the specified user and notifies them via email associated with their account
     *
     * Note: Generating a new token will invalidate a previous token
     *
     * @param $userId
     * @throws \Exception
     */
    public function resetUserPassword($userId)
    {
        $this->makeRequest('get', 'users/' . $userId . '/password/reset');
    }

    /**
     * Add an array of roles to a User
     *
     * @param $userId int
     * @param $rolesArray array
     * @throws \Exception
     */
    public function addRoles($userId, $rolesArray)
    {
        $this->makeRequest('put', 'users/' . $userId, $rolesArray);
    }

    /**
     * Delete an array of roles from a User
     *
     * @param $userId int
     * @param $rolesArray array
     * @throws \Exception
     */
    public function deleteRoles($userId, $rolesArray)
    {
        $this->makeRequest('delete', 'users/' . $userId, $rolesArray);
    }

    /**
     * Generate a password token for the user associated with this email address and notify them.
     *
     * Note: Generating a token will invalidate any previous tokens
     *
     * @param $email
     * @throws \Exception
     */
    public function generatePasswordToken($email)
    {
        $this->makeRequest('post', 'generatePasswordToken', ['email' => $email]);
    }

    /**
     * Reset the password for a user using their password token and a new password
     *
     * @param $token string
     * @param $newPassword string
     * @throws \Exception
     */
    public function resetPassword($token, $newPassword)
    {
        $this->makeRequest('post', 'resetPassword', ['token' => $token, 'newPassword' => $newPassword]);
    }
}