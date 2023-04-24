<?php
if (!function_exists('visitor')) {
    /**
     * Access visitor through helper.
     *
     * @return \torgodly\Visitor\Visitor
     */
    function visitor()
    {
        return app('torgodly-visitor');
    }
}
