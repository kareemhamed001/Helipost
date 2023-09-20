<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

trait ImagesOperations
{
    public $USER_AVATAR_PATH = 'users/avatars';
    public $USER_PASSPORT_PATH = 'users/passports';
    public $USER_NATIONAL_ID_PATH = 'users/nationalIds';
    public $USER_INFO_ID_PATH = 'users/infoIds';
    public $STUDENT_MINISTRY_APPROVAL_LETTERS_PATH = 'students/ministryApprovalLetters';
    public $BEHAVIOR_ATTACHMENTS_PATH = 'users/behaviors/attachments';
    public $USER_OTHER_FILES_PATH = 'users/otherFiles';
    public $EMPLOYEE_NO_OBJECTION_LETTERS_PATH = 'employees/noObjectionLetters';
    public $EMPLOYEE_RESIDENCE_CARD_PATH = 'employees/residenceCard';
    public $EMPLOYEE_QUALIFICATIONS_PATH = 'employees/qualifications';
    public $EMPLOYEE_CAREER_INFORMATION_PATH = 'employees/careerInformation';
    public $TMP_FILES_PATH = 'tmpFiles';
    public $TRANSACTION_FILE_PATH = 'accounting/transactions';

    public function storeFile($file, $path, $disk = 'public')
    {
        try {
            if (is_file($file) && !file_exists(public_path($file)) && !is_string($file)) {
                $path = $file->store($path, ['disk' => $disk]);
                if ($disk == 'public') {
                    return 'storage/' . $path;
                }
                return $path;
            } elseif (file_exists(public_path($file))) {
                return $this->move($file, $path, $disk);
            }
            return $file;

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

    }

    public function replaceFile($oldFilePath, $newFile, $newFilePath, $disk = 'public')
    {
        try {

            $path = $this->storeFile($newFile, $newFilePath, $disk);
            if ($path) {
                $oldPath = public_path($oldFilePath);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
                return $path;
            }

            return null;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteFile($filePath, $disk = 'public'): bool
    {
        try {
            $oldPath = public_path($filePath);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteCollectionOfFiles($filesPaths, $disk = 'public')
    {
        try {
            foreach ($filesPaths as $filePath) {
                if (file_exists($filePath)) {
                    unlink(public_path($filePath));
                }
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function move($sourcePath, $destinationPath, $disk = 'public')
    {
        try {

            $fileName = pathinfo($sourcePath, PATHINFO_BASENAME);

            $sourcePath = str_replace('storage/', '', $sourcePath);
            Storage::disk($disk)->move($sourcePath, $destinationPath . '/' . $fileName);
            return 'storage/' . $destinationPath . '/' . $fileName;
        } catch (\Exception $e) {
            return false;
        }
    }

}
