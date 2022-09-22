<?php

if (!function_exists('admin_set_title')) {
    function admin_set_title($title)
    {
        View::share(['admin_title' => $title]);
    }
}

if (!function_exists('admin_get_darkmode')) {
    function admin_get_darkmode()
    {
        $darkMode = Cookie::get('dark-mode');
        $darkMode = (!empty($darkMode)) ? 'dark-mode' : '';
        return $darkMode;
    }
}

if (!function_exists('admin_get_search')) {
    function admin_get_search()
    {
        $search = request()->get('search');
        $search = trim(preg_replace('/[^A-Za-z0-9\-]/', ' ', $search));
        View::share(compact('search'));
        return $search;
    }
}

if (!function_exists('admin_crud_route')) {
    function admin_crud_route($table, $route, $param = null)
    {
        $route = sprintf('admin.%s.%s', $table, $route);
        if (!empty($param)) {
            return route($route, $param);
        }
        return route($route);
    }
}

if (!function_exists('admin_get_uploaded_file')) {
    function admin_get_uploaded_file($filename, $noimage = '')
    {
        $noimage_path = ($noimage) ? $noimage : 'images/admin/no-image.png';
        $no_image = vasset($noimage_path);
        if (empty($filename)) {
            return $no_image;
        }

        $info = pathinfo($filename);
        $extension = strtolower($info['extension']);

        switch ($extension) {
            case 'png':
            case 'jpg':
            case 'jpeg':
            case 'gif':
                return uploaded_file_url($filename);
            case 'pdf':
                return vasset('/images/admin/fileextensions/pdf.png');
        }

        return $no_image;
    }
}
