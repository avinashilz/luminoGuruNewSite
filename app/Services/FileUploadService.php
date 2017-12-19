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
        return $this->saveFile($file, new Fileentry());
    }

    public function replaceFile($file, $oldFileName)
    {
        Storage::disk('local')->delete($oldFileName);
        $entry = FileEntry::where('filename', $oldFileName)->first();
        
        return $this->saveFile($file, $entry);
    }

    public function saveFile($file, $entry)
    {
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename() . '.' . $extension;
        $entry->save();
        return $entry->id;
    }
}