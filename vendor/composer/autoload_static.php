<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e19ccf6d2e8f0a12c5817ccca8b8846
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\SrMoveAssessmentToolbar\\' => 37,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\SrMoveAssessmentToolbar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
    );

    public static $classMap = array (
        'ilSrMoveAssessmentToolbarPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrMoveAssessmentToolbarPlugin.php',
        'ilSrMoveAssessmentToolbarUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilSrMoveAssessmentToolbarUIHookGUI.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrMoveAssessmentToolbar\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e19ccf6d2e8f0a12c5817ccca8b8846::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e19ccf6d2e8f0a12c5817ccca8b8846::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e19ccf6d2e8f0a12c5817ccca8b8846::$classMap;

        }, null, ClassLoader::class);
    }
}
