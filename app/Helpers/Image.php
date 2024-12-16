<?php

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

function imageUploadManager($image, $slug, $path, $width, $height)
{
    $manager = new ImageManager(new Driver());
    $path = 'uploads/' . $path . '/';
    $image_name = $path . $slug . time() . uniqid() . '.' . 'webp';
    $store_path = public_path($path);

    if (!file_exists($store_path)) {
        mkdir($path, 0777, true);
    }

    $image = $manager->read($image)->resize(
        $width,
        $height,
        function ($constraint) {
            $constraint->aspectRatio();
        }
    )->toWebp()->save($image_name);
    return $image_name;
}

function imageUpdateManager($image, $slug, $path, $width, $height, $old_image)
{
    $manager = new ImageManager(new Driver());
    $path = 'uploads/' . $path . '/';
    $image_name = $path . $slug . time() . uniqid() . '.' . 'webp';
    $path = public_path($path);

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $manager->read($image)->resize($width, $height, function ($constraint) {
        $constraint->aspectRatio();
    })->toWebp()->save($image_name);

    if (file_exists($old_image) && $old_image != 'default.png') {
        @unlink($old_image);
    }

    return $image_name;
}

function imageDeleteManager($old_image)
{
    if (file_exists($old_image) && $old_image != 'default.png') {
        @unlink($old_image);
    }
}

function imageShow($image)
{
    if ($image) {
        if (file_exists(public_path($image))) {
            return asset($image);
        } else {
            return asset('uploads/default.png');
        }
    } else {
        return asset('uploads/default.png');
    }
}
