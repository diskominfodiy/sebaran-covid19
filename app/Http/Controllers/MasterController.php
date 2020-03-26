<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use DB;
use Illuminate\Support\Facades\Validator;


class MasterController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_pos' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),

            ]);
        }

        $kode_pos = $request->kode_pos;

        $data_pos = Data::where('kode_pos', $request->kode_pos)->first();
        $kecamatan = $data_pos->kecamatan;

        $data_master_odp = DB::table('master_data_diy')->where('kecamatan', 'LIKE', '%'. $kecamatan .'%')->where('status', 'ODP');
        $data_master_pdp = DB::table('master_data_diy')->where('kecamatan', 'LIKE', '%'. $kecamatan .'%')->where('status', 'PDP');
        $data_master_positif = DB::table('master_data_diy')->where('kecamatan', 'LIKE', '%'. $kecamatan .'%')->where('status', 'Positif');
        
        $populasi = DB::table('populasi_diy')->where('nama_kec', 'LIKE', '%'. $kecamatan . '%')->first();

        return response()->json([
            'status' => 'success',
            'data' => [
                'kecamatan' => $kecamatan,
                'odp' => $data_master_odp->count(),
                'pdp' => $data_master_pdp->count(),
                'positif' => $data_master_positif->count(),
                'populasi' => $populasi->jumlah_populasi,
            ]
        ], 200);

    }

    public function coordRadius(Request $request) {

        
        $validator = Validator::make($request->all(), [
            'lat' => 'required',
            'lng' => 'required',
            'kmrad' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),

            ]);
        }

        

        $district_within_radius = DB::select("
        SELECT
                id, name, (
                6371 * acos (
                cos ( radians($request->lat) )
                * cos( radians( lat ) )
                * cos( radians( lng ) - radians($request->lng) )
                + sin ( radians($request->lat) )
                * sin( radians( lat ) )
                )
            ) AS distance
            FROM district_locations
            HAVING distance < $request->kmrad
            ORDER BY distance
        ");
        

        $data = [
            "odp" =>0,
            "pdp" => 0,
            "positif" => 0,
            "populasi" => 0,
            "kecamatan" => [],
        ];

        foreach ($district_within_radius as $district) {


            $querypdp = "SELECT COUNT(kode) as c FROM master_data_diy WHERE kecamatan LIKE '%$district->name%' AND status = 'PDP'";
            $queryodp = "SELECT COUNT(kode) as c FROM master_data_diy WHERE kecamatan LIKE '%$district->name%' AND status = 'ODP'";
            $querypositive = "SELECT COUNT(kode) as c FROM master_data_diy WHERE kecamatan LIKE '%$district->name%' AND status = 'Positif'";

            $pdp = DB::select($querypdp);
            $odp = DB::select($queryodp);
            $positive = DB::select($querypositive);

            $populasi = DB::table('populasi_diy')->where('nama_kec', 'LIKE', '%'. $district->name . '%')->first();
            
            
            $data["odp"] += $odp[0]->c;
            $data["pdp"] += $pdp[0]->c;
            $data["positif"] += $positive[0]->c;
            $data["populasi"] += $populasi->jumlah_populasi;
            array_push($data["kecamatan"], $district->name);
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'kecamatan' => $data["kecamatan"],
                'odp'   => $data["odp"],
                'pdp'   => $data["pdp"],
                'positif' => $data["positif"],
                'populasi' => $data["populasi"],
                'radius' => (int)$request->kmrad,
            ],
        ]);


    }
}
