<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageUploadedFile extends Component
{
    public $filename;
    public $noimage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($filename, $noimage = null)
    {
        $this->filename = $filename;
        $this->noimage = $noimage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $noimage_path = ($this->noimage) ? $this->noimage : 'images/admin/no-image.png';
        $no_image = sprintf('<img {{ $attributes }} src="%s?v=%s">', asset($noimage_path), app_version('0.0.1'));
        if (empty($this->filename)) {
            return $no_image;
        }

        $info = pathinfo($this->filename);
        $extension = strtolower($info['extension']);

        switch ($extension) {
            case 'png':
            case 'jpg':
            case 'jpeg':
            case 'gif':
                return sprintf('<img {{ $attributes }} src="%s?v=%s">', uploaded_file_url($this->filename), app_version('0.0.1'));
            case 'pdf':
                return sprintf('<img {{ $attributes }} src="%s?v=%s">', vasset('/images/admin/fileextensions/pdf.png'), app_version('0.0.1'));
        }

        return $no_image;
    }
}
