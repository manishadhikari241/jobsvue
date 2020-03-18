<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/7/2020
 * Time: 3:58 PM
 */

namespace App\General;

use App\Model\Settings;
use function GuzzleHttp\Psr7\build_query;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

trait setting
{
    public function save_settings($request)
    {
        $onlykeys = $request->only(['site_description', 'site_title', 'site_primary_email', 'site_secondary_email', 'site_primary_phone', 'site_secondary_phone', 'site_address', 'order_email']);
        if ($request->hasfile('site_favicon')) {
            $this->delete_site_favicon();
            $image = $request->file('site_favicon');
            $ext = time() . '.' . $image->getClientOriginalExtension();
            if (!File::isDirectory(public_path('images/settings/'))) {
                $makedirectory = File::makeDirectory(public_path('images/settings/'));
            }
            $destinationPath = public_path('images/settings/');
            $makefile = Image::make($image);
            $save = $makefile->resize(1200, 418, function ($ar) {
                $ar->aspectRatio();
            })->save($destinationPath . '/' . $ext);
            $updateorcreate = Settings::updateorcreate(['configuration_key' => 'site_favicon'], ['configuration_value' => $ext]);
        } else {
            foreach ($onlykeys as $key => $value) {

                $updateorcreate = Settings::updateorcreate(['configuration_key' => $key], ['configuration_value' => $value]);

            }
        }
        return true;
    }

    public function delete_site_favicon()
    {
        $filecheck = Settings::where('configuration_key', 'site_favicon')->first();
        if ($filecheck == null) {
            return true;
        }
        $filename = $filecheck->configuration_value;
        $filepath = public_path('images/settings/' . $filename);
        if (file_exists($filepath) && is_file($filepath)) {
            unlink($filepath);
        }
        return true;


    }
    function getConfiguration($key)
    {
        $config = Settings::where('configuration_key', '=', $key)->first();
        if ($config != null) {
            return $config->configuration_value;
        }

        return null;
    }
}