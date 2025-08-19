<?php

namespace struktal\Config;

class Config {
    private static string $configFilePath = "config.json";

    public static function setConfigFilePath(string $path): void {
        self::$configFilePath = $path;
    }

    public static function getConfigFilePath(): string {
        return self::$configFilePath;
    }

    private array $configData = [];

    private function loadComposerData(): void {
        $filePath = self::getConfigFilePath();
        if(file_exists($filePath)) {
            $content = file_get_contents($filePath);
            $this->configData = json_decode($content, true);
        }
    }

    public function get(string... $keys): mixed {
        if(empty($this->configData)) {
            $this->loadComposerData();
        }

        $data = $this->configData;
        foreach($keys as $key) {
            if(isset($data[$key])) {
                $data = $data[$key];
            } else {
                $mergedKeys = implode('.', $keys);
                trigger_error("Key \"{$mergedKeys}\" not found in configuration data.", E_USER_WARNING);
                return null;
            }
        }

        return $data;
    }

    public function getDefault(mixed $default, string... $keys): mixed {
        if(empty($this->configData)) {
            $this->loadComposerData();
        }

        $data = $this->configData;
        foreach($keys as $key) {
            if(isset($data[$key])) {
                $data = $data[$key];
            } else {
                $mergedKeys = implode('.', $keys);
                trigger_error("Key \"{$mergedKeys}\" not found in configuration data, using default.", E_USER_NOTICE);
                return $default;
            }
        }

        return $data;
    }
}
