<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ImportDataDIY;
use App\Jobs\ImportMasterDataDiyJob;
use DB;

class UploadController extends Controller
{

    public function index()
    {
        return view('login_upload');
    }
    public function importData(Request $request)
    {
        if($request->password) {
            if($request->password == env("UPLOAD_ADMIN_PASSWD")) {
               return view('upload_data_diy');
            }else{
                return view('login_upload');
            }
        }elseif($request->file){
                $file = $request->file('file');
                $filename = 'data_'.time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs(
                    'public', $filename
                );
                DB::table('master_data_diy')->delete();
                
                ImportMasterDataDiyJob::dispatch($filename);
                return redirect()->back()->with(['success' => 'Data berhasil diperbarui']);
        }else{
                redirect('upload');
            }
        

    }
}
