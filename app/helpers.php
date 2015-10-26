<?php

if ( ! function_exists('javascript'))
{
    /**
     * Access the javascript helper
     */
    function javascript()
    {
        return app('JavaScript');
    }
}


if ( ! function_exists('locale'))
{
    /**
     * Get the current locale
     */
    function locale($locale=null)
    {
        if ($locale instanceof \Illuminate\Http\Request)
        {
            $locale = $locale->segment(1);
            if (array_key_exists($locale, config('app.locales')))
            {
                return $locale;
            }

            return config('app.fallback_locale');
        }

        return app()->getLocale();
    }
}

if ( ! function_exists('isEn'))
{
    /**
     * Get the current locale
     */
    function isEn($locale)
    {
        return ( $locale == config('app.fallback_locale') );
    }
}

if ( ! function_exists('isEnvIs'))
{
    /**
     * Get the current locale
     */
    function isEnvIs($env='')
    {
        $env = (empty($env) ? 'production' : $env);
        return ( $env == env('APP_ENV') );
    }
}
