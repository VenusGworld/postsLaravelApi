<?php

namespace App\Schemas;

use OpenApi\Annotations as OA;


/**
 * @OA\Schema(
 *     schema="UserData",
 *     title="User Data",
 *     description="Schema for user data",
 * )
 */
class UserDataSchema
{
    /**
     * @OA\Property(
     *     property="id",
     *     type="string",
     *     description="The ID of the user",
     *     example="01h84ym49w7byskc4wrcmnyszc"
     * )
     *
     * @var string
     */
    public $id;

    /**
     * @OA\Property(
     *     property="name",
     *     type="string",
     *     description="The name of the user",
     *     example="اسامة"
     * )
     *
     * @var string
     */
    public $name;



    /**
     * @OA\Property(
     *     property="email",
     *     type="string",
     *     description="The email address of the user",
     *     example="osama.moh.almamari@gmail.com"
     * )
     *
     * @var string
     */
    public $email;




}



