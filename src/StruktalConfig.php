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

    public function isProduction(): bool {
        return self::getDefault(true, "PRODUCTION");
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
        return self::getDefault(false, "DB_ENABLED");
    }

    public function getLogRecipients(): array {
        return self::getDefault([], "LOG_RECIPIENTS");
    }

    public function getLogLevel(): int {
        return self::getDefault(PHP_INT_MAX, "LOG_LEVEL");
    }

    public function getSmtpHost(): string {
        return self::get("SMTP_HOST");
    }

    public function getSmtpPort(): int {
        return (int) self::get("SMTP_PORT");
    }

    public function getSmtpUsername(): string {
        return self::get("SMTP_USER");
    }

    public function getSmtpPassword(): string {
        return self::get("SMTP_PASS");
    }

    public function getSmtpSecure(): string {
        return self::getDefault("tls", "SMTP_SECURE");
    }

    public function getSmtpAuth(): bool {
        return self::getDefault(true, "SMTP_AUTH");
    }

    public function redirectAllMails(): bool {
        return self::getDefault(false, "REDIRECT_ALL_MAILS");
    }

    public function getRedirectMailAddress(): string {
        return self::getDefault("", "REDIRECT_ALL_MAILS_ADDRESS");
    }
}
