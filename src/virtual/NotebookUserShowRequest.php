<?php

/**
 * @OA\Schema(
 *     type="object",
 *     title="Example showing request",
 *     description="Some simple request createa as example",
 * )
 */
class NotebookUserShowRequest
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="Unique ID",
     *     example="1",
     * )
     *
     * @var int
     */
    public $id;

    /**
     * @OA\Property(
     *     title="Firstname",
     *     description="Firstname of key for storring",
     *     example="random",
     * )
     *
     * @var string
     */
    public $firstname;

    /**
     * @OA\Property(
     *     title="Lastname",
     *     description="Lastname for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $lastname;

    /**
     * @OA\Property(
     *     title="Middlename",
     *     description="Middlename for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $middlename;

    /**
     * @OA\Property(
     *     title="Company",
     *     description="Company for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $company;

    /**
     * @OA\Property(
     *     title="Phone",
     *     description="Phone for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $phone;

    /**
     * @OA\Property(
     *     title="Email",
     *     description="Email for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $email;

    /**
     * @OA\Property(
     *     title="Birthday",
     *     description="Birthday for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $birthday;

    /**
     * @OA\Property(
     *     title="Photo",
     *     description="Photo for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $photo;
}
