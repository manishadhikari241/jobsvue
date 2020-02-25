<?php

namespace App\Http\Controllers\Admin;

use App\Model\Settings;
use Illuminate\Http\Request;
use App\General\Setting;

class SettingController extends DashboardController
{
    use Setting;

    public function setting(Request $request)
    {
        if ($request->isMethod('get')) {
            $data['site_title'] = $this->getConfiguration('site_title');
            $data['site_description'] = $this->getConfiguration('site_description');
            return response()->json($data);
        }
        if ($request->isMethod('post')) {
            $save = $this->save_settings($request);
            if ($save) {
                return response()->json(['status' => 'success', 'message' => 'Settings Saved Successfully']);
            }
        }
        return false;
    }
}
