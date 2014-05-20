<?php

class UploadManager {
    private $sizeAndPath = array();
    private $image;

    public function __construct(CUploadedFile $image, $params)
    {
        $this->image = $image;
        $this->sizeAndPath = $params;
    }

    public function saveAll() {

        foreach ($this->sizeAndPath as $size=>$path) {
            $this->saveAs($path, $size);
        }
    }

    private function saveAs($path, $size = null) {
        $this->checkPath($path);

        if ($size != null) {
            $imageFile = new CFileImage();

            $size = explode('x', $size);
            $width = $size[0];
            if (isset($size[1]))
                $height = $size[1];

            $imageFile->load($this->image->tempname);

            if (!empty($height)) {
                $imageFile->resize($width, $height);
            } else {
                $imageFile->resizeToWidth($width);
            }

            $imageFile->save($path . '/' . $this->image->name);
        } else {
            $this->image->saveAs($path . '/' . $this->image->name);
        }
    }

    private function checkPath($path) {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
            chmod($path, 0777);
        }
    }
}