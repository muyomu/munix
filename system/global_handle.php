<?php

use muyomu\http\message\Message;

set_exception_handler(function ($exception){
    $message = new Message();
    $message->setDataStatus("ServerError");
    $message->setDataType("Describe Message");
    $message->setData($exception->getMessage());

    $return = array();
    $return['status'] = $message->getDataStatus();
    $return['dateType'] = $message->getDataType();
    $return['data'] = $message->getData();

    echo json_encode($return, JSON_UNESCAPED_UNICODE);
});