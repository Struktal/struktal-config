<?php

namespace struktal\Config;

class StruktalConfig extends Config {
    public function getAppName(): string {
        return self::get("APP_NAME");
    }

    public function getAppUrl(): string {
        return self::get("APP_URL");
    }

    public function getBaseUri(): string {
        return self::get("BASE_URI");
    }

    public function getDatabaseHost(): string {
        return self::get("DB_HOST");
    }

    public function getDatabaseUsername(): string {
        return self::get("DB_USER");
    }

    public function getDatabasePassword(): string {
        return self::get("DB_PASS");
    }

    public function getDatabaseName(): string {
        return self::get("DB_NAME");
    }

    public function databaseEnabled(): bool {
        return $this->getDefault(false, "DB_ENABLED");
    }
}
