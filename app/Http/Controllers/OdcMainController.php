<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Imports\OdcmainImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Odcmain;

class OdcMainController extends Controller
{
    //
    public function index() {
        $odcmain = Odcmain::all();
		return view('data.odc_main.index',[
            'odcmain'=>$odcmain ,
            'title' => 'ODC Main',
        ]);

       
    }


	public function import(Request $request)
	{
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		$file = $request->file('file')->store('public/import');

		$import = new OdcmainImport;
		$import->import($file);

		// @dd($import->failures());
		if($import->failures()->isNotEmpty()){
			return back()->withFailures($import->failures());
		}

		

		return redirect('/odcmain')->with('success', 'ODC data has been successfully imported!');


	}

    


}
