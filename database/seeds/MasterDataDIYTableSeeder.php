<?php

use Illuminate\Database\Seeder;

class MasterDataDIYTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DUMMY DATA !
        // Data berikut adalah data dummy, bukan data asli
        DB::table("master_data_diy")->insert([
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-1",
                "status"		=> "Sembuh",
                "umur"			=> "41",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Gondokusuman",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-2",
                "status"		=> "PDP",
                "umur"			=> "51",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Wates",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-3",
                "status"		=> "PDP",
                "umur"			=> "18",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Tepus",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-4",
                "status"		=> "PDP",
                "umur"			=> "62",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Pengasih",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-5",
                "status"		=> "PDP",
                "umur"			=> "39",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Mantrijeron",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-6",
                "status"		=> "PDP",
                "umur"			=> "9",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sentolo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-7",
                "status"		=> "PDP",
                "umur"			=> "67",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Moyudan",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-8",
                "status"		=> "PDP",
                "umur"			=> "47",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Pandak",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-9",
                "status"		=> "PDP",
                "umur"			=> "3",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Nglipar",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "KASUS-1",
                "status"		=> "Sembuh",
                "umur"			=> "41",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sapto sari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-11",
                "status"		=> "PDP",
                "umur"			=> "23",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Semin",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-12",
                "status"		=> "PDP",
                "umur"			=> "38",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Jetis",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-13",
                "status"		=> "PDP",
                "umur"			=> "51",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Ponjong",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "KASUS-2",
                "status"		=> "Sembuh",
                "umur"			=> "52",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Bantul",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-15",
                "status"		=> "PDP",
                "umur"			=> "66",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Minggir",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-16",
                "status"		=> "PDP",
                "umur"			=> "41",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Godean",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-17",
                "status"		=> "PDP",
                "umur"			=> "57",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Ngaglik",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-18",
                "status"		=> "PDP",
                "umur"			=> "51",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sentolo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-19",
                "status"		=> "PDP",
                "umur"			=> "30",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Pakualaman",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-20",
                "status"		=> "PDP",
                "umur"			=> "3",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Pundong",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-21",
                "status"		=> "PDP",
                "umur"			=> "15",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Ngaglik",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-22",
                "status"		=> "PDP",
                "umur"			=> "22",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sanden",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-23",
                "status"		=> "PDP",
                "umur"			=> "28",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Paliyan",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-24",
                "status"		=> "Positif",
                "umur"			=> "24",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Girimulyo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-25",
                "status"		=> "PDP",
                "umur"			=> "46",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sapto sari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-26",
                "status"		=> "PDP",
                "umur"			=> "66",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Gedang sari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-27",
                "status"		=> "PDP",
                "umur"			=> "62",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Karangmojo",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-28",
                "status"		=> "PDP",
                "umur"			=> "34",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Mantrijeron",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-29",
                "status"		=> "PDP",
                "umur"			=> "41",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Mlati",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "KASUS-3",
                "status"		=> "Positif",
                "umur"			=> "30",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Tanjungsari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-31",
                "status"		=> "PDP",
                "umur"			=> "40",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sentolo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-32",
                "status"		=> "Positif",
                "umur"			=> "24",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Wonosari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-33",
                "status"		=> "PDP",
                "umur"			=> "21",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Mergangsan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-34",
                "status"		=> "PDP",
                "umur"			=> "13",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Rongkop",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-35",
                "status"		=> "PDP",
                "umur"			=> "21",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Semin",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-36",
                "status"		=> "PDP",
                "umur"			=> "23",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Kasihan",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-37",
                "status"		=> "PDP",
                "umur"			=> "1",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Girimulyo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-38",
                "status"		=> "PDP",
                "umur"			=> "23",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Sentolo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-39",
                "status"		=> "PDP",
                "umur"			=> "40",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Kokap",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-40",
                "status"		=> "Positif",
                "umur"			=> "16",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Karangmojo",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-41",
                "status"		=> "PDP",
                "umur"			=> "46",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Sapto sari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-42",
                "status"		=> "PDP",
                "umur"			=> "52",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Jetis",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-43",
                "status"		=> "PDP",
                "umur"			=> "15",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Mantrijeron",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-44",
                "status"		=> "PDP",
                "umur"			=> "25",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Nglipar",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-45",
                "status"		=> "PDP",
                "umur"			=> "35",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Dlingo",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-46",
                "status"		=> "PDP",
                "umur"			=> "26",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Ngemplak",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-47",
                "status"		=> "PDP",
                "umur"			=> "9",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Gedongtengen",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-48",
                "status"		=> "PDP",
                "umur"			=> "18",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Mantrijeron",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-49",
                "status"		=> "PDP",
                "umur"			=> "9",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Sleman",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-50",
                "status"		=> "PDP",
                "umur"			=> "69",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Pengasih",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-51",
                "status"		=> "PDP",
                "umur"			=> "3",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Playen",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-52",
                "status"		=> "PDP",
                "umur"			=> "34",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Pajangan",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-53",
                "status"		=> "PDP",
                "umur"			=> "22",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sanden",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-54",
                "status"		=> "PDP",
                "umur"			=> "21",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Danurejan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-55",
                "status"		=> "PDP",
                "umur"			=> "50",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Cangkringan",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-56",
                "status"		=> "PDP",
                "umur"			=> "40",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Gondokusuman",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-57",
                "status"		=> "PDP",
                "umur"			=> "36",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sewon",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-58",
                "status"		=> "PDP",
                "umur"			=> "20",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Tegalrejo",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-59",
                "status"		=> "PDP",
                "umur"			=> "46",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Imogiri",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-60",
                "status"		=> "PDP",
                "umur"			=> "51",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Tempel",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-61",
                "status"		=> "PDP",
                "umur"			=> "32",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Ngampilan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-62",
                "status"		=> "PDP",
                "umur"			=> "64",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Wates",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-63",
                "status"		=> "PDP",
                "umur"			=> "53",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Imogiri",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-64",
                "status"		=> "PDP",
                "umur"			=> "12",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sanden",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-65",
                "status"		=> "PDP",
                "umur"			=> "63",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Kalibawang",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-66",
                "status"		=> "PDP",
                "umur"			=> "47",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sleman",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-67",
                "status"		=> "PDP",
                "umur"			=> "14",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Pakualaman",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-68",
                "status"		=> "PDP",
                "umur"			=> "9",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Ngemplak",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-69",
                "status"		=> "PDP",
                "umur"			=> "23",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Tempel",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-70",
                "status"		=> "PDP",
                "umur"			=> "50",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Panggang",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-71",
                "status"		=> "PDP",
                "umur"			=> "21",
                "kelurahan"		=> "P",
                "kecamatan"		=> "Sleman",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-72",
                "status"		=> "PDP",
                "umur"			=> "54",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Gondomanan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-73",
                "status"		=> "PDP",
                "umur"			=> "27",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Mergangsan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-74",
                "status"		=> "PDP",
                "umur"			=> "34",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Wirobrajan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-75",
                "status"		=> "PDP",
                "umur"			=> "49",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Kraton",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "PDP-76",
                "status"		=> "PDP",
                "umur"			=> "56",
                "kelurahan"		=> "L",
                "kecamatan"		=> "Sanden",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-1",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Sleman",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-2",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Moyudan",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-3",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Semin",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-4",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Kasihan",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-5",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Piyungan",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-6",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Temon",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-7",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Kretek",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-8",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Wates",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-9",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Godean",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-10",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Gondokusuman",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-11",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Mantrijeron",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-12",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Semanu",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-13",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Ngampilan",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-14",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Jetis",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-15",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Nglipar",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-16",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Gedang sari",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-17",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Playen",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-18",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Seyegan",
                "kab"			=> "Sleman",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-19",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Sentolo",
                "kab"			=> "Kulon Progo",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-20",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Girisubo",
                "kab"			=> "Gunung Kidul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-21",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Sanden",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-22",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Kraton",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-23",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Kasihan",
                "kab"			=> "Bantul",
                "provinsi"		=> "DIY"	
            ],
            [
                "tanggal_input" => "22 Maret 2020",
                "kode"			=> "ODP-24",
                "status"		=> "ODP",
                "umur"			=> "-",
                "kelurahan"		=> "-",
                "kecamatan"		=> "Mantrijeron",
                "kab"			=> "Yogyakarta",
                "provinsi"		=> "DIY"	
            ],
        ]);
    }
}
