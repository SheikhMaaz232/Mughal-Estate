<?php
namespace App\Services;

use App\Models\Group;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class GroupService
{
    public function create(array $data, ?UploadedFile $image = null): Group
    {
        if ($image) {
            $data['image'] = $this->uploadImage($image);
        }

        return Group::create($data);
    }

    public function update(Group $group, array $data, ?UploadedFile $image = null): Group
    {
        if ($image) {
            // Optional: delete old image
            if ($group->image && Storage::exists($group->image)) {
                Storage::delete($group->image);
            }

            $data['image'] = $this->uploadImage($image);
        }

        $group->update($data);
        return $group;
    }

    protected function uploadImage(UploadedFile $image): string
    {
        return $image->store('group_images', 'public');
    }

    public function delete(Group $group)
    {
        return $group->delete();
    }

    public function getAll()
    {
        return Group::all();
    }

    public function findById($id)
    {
        return Group::findOrFail($id);
    }
}
