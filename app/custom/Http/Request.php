<?php namespace App\Custom\Http;

use Illuminate\Http\Request as BaseRequest;

class Request extends BaseRequest {

    public function isSecure():bool {
        $isSecure = parent::isSecure();
        if ($isSecure) {
            return true;
        }
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            return true;
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            return true;
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            return true;
        }
        return false;
    }

}
