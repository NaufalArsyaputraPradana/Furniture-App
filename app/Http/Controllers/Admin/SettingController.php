<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::firstOrCreate(['id' => 1]);
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'store_name' => ['required','string','max:255'],
            'whatsapp_number' => ['nullable','string','max:30'],
            'hero_title' => ['nullable','string','max:255'],
            'hero_subtitle' => ['nullable','string'],
            'store_logo' => ['nullable','image','max:2048'],
            'hero_image' => ['nullable','image','max:4096'],
        ]);
        $setting = Setting::firstOrCreate(['id' => 1]);
        $logo = $setting->store_logo_path;
        if ($request->hasFile('store_logo')) {
            if ($logo) Storage::disk('public')->delete($logo);
            $logo = $request->file('store_logo')->store('settings','public');
        }
        $hero = $setting->hero_image_path;
        if ($request->hasFile('hero_image')) {
            if ($hero) Storage::disk('public')->delete($hero);
            $hero = $request->file('hero_image')->store('settings','public');
        }
        $setting->update([
            'store_name' => $data['store_name'],
            'whatsapp_number' => $data['whatsapp_number'] ?? null,
            'hero_title' => $data['hero_title'] ?? null,
            'hero_subtitle' => $data['hero_subtitle'] ?? null,
            'store_logo_path' => $logo,
            'hero_image_path' => $hero,
        ]);
        return back()->with('status','Pengaturan disimpan');
    }
}
