<?php

namespace App\Http\Traits\Upload;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Upload;

trait UploadTraits
{
    public function getAllUploads()
    {
        return Upload::get();
    }

    public function createUpload($image)
    {
  
        if ($image) {
            $originalName = $image->getClientOriginalName();
            $fileName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $fileSize = $image->getSize();
            $extension = $image->getClientOriginalExtension();
            $type = $image->getClientMimeType();
            $userId = Auth::guard('admin')->user()?->id ?? Auth::user()?->id;
            $imagePath = $image->move('uploads', $fileName);
            $upload = new Upload();
            $upload->file_original_name = $originalName;
            $upload->file_name = $fileName;
            $upload->user_id = $userId;
            $upload->file_size = $fileSize;
            $upload->extension = $extension;
            $upload->type = $type;
            $upload->filepath = $imagePath;
            $upload->save();
           return $upload->id;
        }
        return null;
    }
    
}
