<?php
namespace Traits;

trait ResponseFormatter {
    public function responseFormatter($status, $message, $data) {
        return [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
    }
}
