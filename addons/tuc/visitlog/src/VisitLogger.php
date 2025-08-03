<?php

namespace Tuc\Visitlog;

class VisitLogger 
{
    protected string $file;

    public function __construct()
    {
        $this->file = storage_path('logs/visits.jsonl');
    }

    public function log(): void
    {
        $data = [
            'timestamp' => now()->toDateTimeString(),
            'session_id' => session()->getId(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ];

        file_put_contents(
            $this->file,
            json_encode($data) . PHP_EOL,
            FILE_APPEND
        );
    }
}