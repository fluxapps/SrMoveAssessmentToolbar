<?php

namespace srag\GeneratePluginInfosHelper\SrMoveAssessmentToolbar;

use Closure;
use Composer\Config;
use Composer\Script\Event;

/**
 * Class GeneratePluginReadme
 *
 * @package srag\GeneratePluginInfosHelper\SrMoveAssessmentToolbar
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 *
 * @internal
 */
final class GeneratePluginReadme
{

    const AUTOGENERATED_COMMENT = "Autogenerated from " . self::PLUGIN_COMPOSER_JSON . " - All changes will be overridden if generated again!";
    const PLUGIN_COMPOSER_JSON = "composer.json";
    const PLUGIN_README = "README.md";
    const PLUGIN_README_DEFAULT_TEMPLATE_FILE = __DIR__ . "/../templates/GeneratePluginReadme/SRAG_PLUGIN_README.md";
    /**
     * @var self|null
     */
    private static $instance = null;
    /**
     * @var string
     */
    private static $plugin_root = "";
    /**
     * @var Event
     */
    private $event;


    /**
     * GeneratePluginReadme constructor
     *
     * @param Event $event
     */
    private function __construct(Event $event)
    {
        $this->event = $event;
    }


    /**
     * @param Event $event
     *
     * @internal
     */
    public static function generatePluginReadme(Event $event)/*: void*/
    {
        self::$plugin_root = rtrim(Closure::bind(function () : string {
            return $this->baseDir;
        }, $event->getComposer()->getConfig(), Config::class)(), "/");

        self::getInstance($event)->doGeneratePluginReadme();
    }


    /**
     * @param Event $event
     *
     * @return self
     */
    private static function getInstance(Event $event) : self
    {
        if (self::$instance === null) {
            self::$instance = new self($event);
        }

        return self::$instance;
    }


    /**
     *
     */
    private function doGeneratePluginReadme()/*: void*/
    {
        $plugin_composer_json = json_decode(file_get_contents(self::$plugin_root . "/" . self::PLUGIN_COMPOSER_JSON));

        echo "(Re)generate " . self::PLUGIN_README . "
";

        $placeholders = [
            "AUTHOR_EMAIL"                   => strval($plugin_composer_json->authors[0]->email),
            "AUTHOR_HOMEPAGE"                => strval($plugin_composer_json->authors[0]->homepage),
            "AUTHOR_NAME"                    => strval($plugin_composer_json->authors[0]->name),
            "AUTOGENERATED_COMMENT"          => self::AUTOGENERATED_COMMENT,
            "DESCRIPTION"                    => strval($plugin_composer_json->description),
            "GITHUB_REPO"                    => strval($plugin_composer_json->homepage) . ".git",
            "HOMEPAGE"                       => strval($plugin_composer_json->homepage),
            "KEYWORDS"                       => implode("\n", array_map(function (string $keyword) : string {
                return "- " . $keyword;
            }, (array) $plugin_composer_json->keywords)),
            "ILIAS_PLUGIN_BASE_SLOT_PATH"    => "Customizing/global/plugins/" . strval($plugin_composer_json->extra->ilias_plugin->slot),
            "ILIAS_PLUGIN_ID"                => strval($plugin_composer_json->extra->ilias_plugin->id),
            "ILIAS_PLUGIN_MAX_ILIAS_VERSION" => strval($plugin_composer_json->extra->ilias_plugin->ilias_max_version),
            "ILIAS_PLUGIN_MIN_ILIAS_VERSION" => strval($plugin_composer_json->extra->ilias_plugin->ilias_min_version),
            "ILIAS_PLUGIN_NAME"              => strval($plugin_composer_json->extra->ilias_plugin->name),
            "ILIAS_PLUGIN_SLOT"              => strval($plugin_composer_json->extra->ilias_plugin->slot),
            "LICENSE"                        => strval($plugin_composer_json->license),
            "NAME"                           => strval($plugin_composer_json->name),
            "PHP_VERSION"                    => strval($plugin_composer_json->require->php),
            "SUPPORT_LINK"                   => strval($plugin_composer_json->support->issues),
            "VERSION"                        => strval($plugin_composer_json->version)
        ];

        if (!empty($plugin_composer_json->extra->GeneratePluginReadme)) {
            $template_file = self::$plugin_root . "/" . $plugin_composer_json->extra->GeneratePluginReadme;
        } else {
            $template_file = self::PLUGIN_README_DEFAULT_TEMPLATE_FILE;
        }
        $plugin_readme = file_get_contents($template_file);

        foreach ($placeholders as $key => $value) {
            $plugin_readme = str_replace("__" . $key . "__", $value, $plugin_readme);
        }

        file_put_contents(self::$plugin_root . "/" . self::PLUGIN_README, $plugin_readme);
    }
}
