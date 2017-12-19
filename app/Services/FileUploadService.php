<?php
namespace App\Services;

use App\Models\FileEntry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FileUploadService
{
    public function __construct()
    {

    }

    public function uploadFile($file)
    {
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
        $entry = new Fileentry();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename() . '.' . $extension;
        $entry->save();
        return $entry->id;
    }

    public function replaceFile($file, $oldFileName)
    {
        Storage::disk('local')->delete($oldFileName);
        return $this->uploadFile($file);
    }
}