<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
   public function index()
    {
        return view('admin_assets.Setting.list');
    }

   public function create()
    {
       
    }

   public function store(Request $request)
    {
       
    }

    public function show(setting $setting)
    {
        
    }

    public function edit(setting $setting)
    {
       
    }

   public function update(Request $request, setting $setting)
    {
      
    }

    public function destroy(setting $setting)
    {
        
    }
}
