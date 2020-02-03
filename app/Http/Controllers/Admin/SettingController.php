<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\General\Setting;

class SettingController extends DashboardController
{
    use Setting;

    public function setting(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->setting_path . 'index');
        }
        if ($request->isMethod('post')) {
            $save = $this->save_settings($request);
            if ($save) {
                return redirect()->back()->with('success', 'Settings saved successfully');
            }
        }
        return false;
    }
}
