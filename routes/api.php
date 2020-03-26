<?php

use Illuminate\Http\Request;

Route::get('getDatabyPos', 'MasterController@index');
Route::get('getdatabycoord', 'MasterCOntroller@coordRadius');
	