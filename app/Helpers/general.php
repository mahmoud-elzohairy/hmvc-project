<?php

if (!function_exists('buildRoutePrefix')) {
    /**
     * @param string $moduleName
     * @param string $type
     * @return string
     */
    function buildRoutePrefix(string $moduleName, string $type = 'backend')
    {
        return config($moduleName . '.route.prefix.' . $type, config('module.prefix.' . $type)) . '/' . config($moduleName . '.route.module_name');
    }
}

if (!function_exists('buildControllerNamespace')) {
    /**
     * @param string $moduleName
     * @return string
     */
    function buildControllerNamespace(string $moduleName)
    {
        return ucfirst($moduleName) . '\Http\Controllers';
    }
}

if (!function_exists('getModuleNamespace')) {
    /**
     * @param string $namespace
     * @return string
     */
    function getModuleNamespace(string $namespace)
    {
        return strtolower(explode("\\", $namespace, 2)[0]);
    }
}
