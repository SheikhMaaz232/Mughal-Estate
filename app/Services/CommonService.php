<?php
namespace App\Services;
use Illuminate\Http\UploadedFile;

class CommonService {

    public function uploadImage(UploadedFile $image, $path): string
    {
        return $image->storeAs($path, uniqid() . '.' . $image->getClientOriginalExtension(), 'public');
    }
}
