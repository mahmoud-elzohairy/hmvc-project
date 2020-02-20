<?php

function DS()
{
    return DIRECTORY_SEPARATOR;
}

function getModuleName(string $moduleName)
{
    return app_path('modules' . DS() . $moduleName . DS());
}

function loadConfig(string $filename, string $moduleName)
{
    return getModuleName($moduleName) . 'config' . DS() . $filename . '.php';
}

function loadRoutes(string $filename, string $moduleName)
{
    return getModuleName($moduleName) . 'routes' . DS() . $filename . '.php';
}

function loadViews(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'views';
}

function loadLang(string $moduleName)
{
    return getModuleName($moduleName) . 'resources' . DS() . 'lang';
}

function loadMigrations(string $moduleName)
{
    return getModuleName($moduleName) . 'database' . DS() . 'migrations';
}
