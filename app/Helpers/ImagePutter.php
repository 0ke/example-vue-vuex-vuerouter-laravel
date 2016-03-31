<?php
namespace App\Helpers;

use Carbon\Carbon;
use File;
use Image;

class ImagePutter
{
    public function createAvatars($id, $image)
    {
        $destinationPath = 'images/users/' . $id . '/'; // upload path
        $fileName = 'original.jpg'; // renameing image
        $image->move($destinationPath, $fileName); // uploading file to given path
        $extension = 'jpeg';
        Image::make($destinationPath . $fileName)->fit(235)->save($destinationPath . '235.' . $extension);
        Image::make($destinationPath . $fileName)->fit(35)->save($destinationPath . '35.' . $extension);
        return true;
    }

    public function createGallery($images, $model, $type)
    {
        switch ($type) {
            case 'post':
                foreach ($images as $key => $image) {
                    $fileName = $key . '.jpg'; // renameing image
                    $originalPath = public_path('images/posts/' . $model->id . '/gallery/'); // upload path
                    $image->move($originalPath, $fileName);
                }
                break;
        }
    }

    public function createThumbnails($image, $model, $type)
    {
        switch ($type) {
            case 'post':
                $destinationPath = public_path('images/posts/' . $model->id . '/sizes/'); // upload path
                $fileName = 'original.jpg'; // renameing image
                $image->move($destinationPath, $fileName); // uploading file to given path
                Image::make($destinationPath . $fileName)->fit(1280, 720)->save($destinationPath . '1280.jpg');
                Image::make($destinationPath . $fileName)->fit(860, 400)->save($destinationPath . '860.jpg');
                Image::make($destinationPath . $fileName)->fit(400, 300)->save($destinationPath . '400.jpg');
                // File::delete($destinationPath . $fileName);
                break;
        }
    }

    public function uploadBodyImage($id, $image, $extra = null)
    {
        $filepath = public_path('images/posts/' . $id . '/body/'); // upload path
        $destinationPath = 'images/posts/' . $id . '/body/'; // upload path

        $extension = $image->getClientOriginalExtension(); // getting image extension
        $originalextension = 'jpg';
        $fileName = 'original.' . $extension; // renameing image
        $image->move($destinationPath, $fileName); // uploading file to given path
        $carbon = str_slug(Carbon::now());
        Image::make($filepath . $fileName)->fit(860, 400)->save($filepath . $carbon . '.jpg');
        File::delete($filepath . $fileName);
        return ['imagePath' => '../../' . $destinationPath . $carbon . '.jpg', 'imageSize' => [860, 400]];
    }

}
