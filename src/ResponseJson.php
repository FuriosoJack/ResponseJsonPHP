<?php
namespace FuriosoJack\ResponseJsonPHP;
/**
 * Class ResponseJson
 * @author Juan Diaz - FuriosoJack <iam@furiosojack.com>
 */
class ResponseJson
{
    public static function build($statusCode, $data)
    {
        header('Content-Type: application/json' );
        header(StatusCodes::httpHeaderFor($statusCode));
        echo json_encode($data);
        exit(1);
    }
}