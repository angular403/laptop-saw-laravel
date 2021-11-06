<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Model\Laptop;
class sawController extends Controller
{
    //
    public function get_matrix_nilai()
    {
        # code...
        $laptop = Laptop::select([
            '*',
            \DB::raw('DATE(created_at) as tanggal')
        ]);
        if(request()->input('tanggal_awal')){
            $laptop = $laptop->whereDate('created_at','>=',request()->input('tanggal_awal'));
        }
        if(request()->input('tanggal_akhir')){
            $laptop = $laptop->whereDate('created_at','<=',request()->input('tanggal_akhir'));
        }
        $laptop = $laptop->get();
        foreach ($laptop as $key=>$l) {
            # code...
            preg_match_all('/[0-9]{3,}/m', $laptop[$key]->ScreenResolution, $matches, PREG_SET_ORDER, 0);
            $laptop[$key]->l_inches = $laptop[$key]->Inches;
            $laptop[$key]->l_price = $laptop[$key]->Price_euros;
            $laptop[$key]->l_weight = (float) filter_var($laptop[$key]->Weight, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
            $laptop[$key]->l_ram = preg_replace('/\D/', '', $laptop[$key]->Ram);          
            try{
                $laptop[$key]->l_screenresolution = $matches[0][0];
            }catch(\Exception $e){
                $laptop[$key]->l_screenresolution = 0;
            }
        }
        return $laptop->all();
    }
    public function get_matrix_normalisasi()
    {
        $data_settings_user = \App\Model\UserSetting::where("user_id",\Auth::user()->id)->first();
        if($data_settings_user!=null){
            $settings = json_decode($data_settings_user->settings);
            $c1 = $settings->c1;
            $c2 = $settings->c2;
            $c3 = $settings->c3;
            $c4 = $settings->c4;
            $c5 = $settings->c5;
        }else{
            $options = \App\Model\Setting::getAllKeyValue();
            $c1 = json_decode($options['c1']);
            $c2 = json_decode($options['c2']);
            $c3 = json_decode($options['c3']);
            $c4 = json_decode($options['c4']);
            $c5 = json_decode($options['c5']);
        }
        $laptop = $this->get_matrix_nilai();
        $temp_inches = [];
        $temp_price = [];
        $temp_weight = [];
        $temp_ram = [];
        $temp_screenresolution = [];
        foreach ($laptop as $key) {
            # code...
            $temp_inches[] = $key->l_inches;
            $temp_price[] = $key->l_price;
            $temp_weight[] = $key->l_weight;
            $temp_ram[] = $key->l_ram;
            $temp_screenresolution[] = $key->l_screenresolution;
        }
        foreach ($laptop as $key=>$l) {
            # code...
            $laptop[$key]->n_inches = ($c1->is_cost) ? min($temp_inches)/$laptop[$key]->l_inches : $laptop[$key]->l_inches/max($temp_inches);
            $laptop[$key]->n_weight = ($c2->is_cost) ? min($temp_weight)/$laptop[$key]->l_weight : $laptop[$key]->l_weight/max($temp_weight);
            try{
                $laptop[$key]->n_ram = ($c3->is_cost) ? (min($temp_ram)?min($temp_ram):0)/($laptop[$key]->l_ram?$laptop[$key]->l_ram:0) : $laptop[$key]->l_ram/(max($temp_ram)?max($temp_ram):0);
            }catch(\Exception $e){
                dd($laptop[$key]->l_ram);
            }
            $laptop[$key]->n_screenresolution = ($c4->is_cost) ? min($temp_screenresolution)/$laptop[$key]->l_screenresolution : $laptop[$key]->l_screenresolution/max($temp_screenresolution);
            $laptop[$key]->n_price = ($c5->is_cost) ? min($temp_price)/$laptop[$key]->l_price : $laptop[$key]->l_price/max($temp_price);

        }
        return $laptop;
    }public function get_matrix_preferensi()
    {
        # code...
        $data_settings_user = \App\Model\UserSetting::where("user_id",\Auth::user()->id)->first();
        if($data_settings_user!=null){
            $settings = json_decode($data_settings_user->settings);
            $c1 = $settings->c1;
            $c2 = $settings->c2;
            $c3 = $settings->c3;
            $c4 = $settings->c4;
            $c5 = $settings->c5;
        }else{
            $options = \App\Model\Setting::getAllKeyValue();
            $c1 = json_decode($options['c1']);
            $c2 = json_decode($options['c2']);
            $c3 = json_decode($options['c3']);
            $c4 = json_decode($options['c4']);
            $c5 = json_decode($options['c5']);
        }
        $laptop = $this->get_matrix_normalisasi();
        foreach ($laptop as $key=>$l) {
            # code...
            $laptop[$key]->b_inches = $laptop[$key]->n_inches*$c1->weight;
            $laptop[$key]->b_weight = $laptop[$key]->n_weight*$c2->weight;
            $laptop[$key]->b_ram = $laptop[$key]->n_ram*$c3->weight;
            $laptop[$key]->b_screenresolution = $laptop[$key]->n_screenresolution*$c4->weight;
            $laptop[$key]->b_price = $laptop[$key]->n_price*$c5->weight;
            $laptop[$key]->nilai_preferensi = $laptop[$key]->b_inches+$laptop[$key]->b_weight+$laptop[$key]->b_ram+$laptop[$key]->b_screenresolution+$laptop[$key]->b_price;
        }
        return $laptop;
    }

    public function matrix_nilai()
    {
        # code...
        $laptop = $this->get_matrix_nilai();
        return Datatables::of($laptop)
                ->setRowId(function(Laptop $laptop){
                    return $laptop->id;
                })->make(true);
    }
    public function matrix_normalisasi()
    {
        # code...
        $laptop = $this->get_matrix_normalisasi();
        return Datatables::of($laptop)
                ->setRowId(function(Laptop $laptop){
                    return $laptop->id;
                })->make(true);
    }public function matrix_preferensi()
    {
        # code...
        $laptop = $this->get_matrix_preferensi();
        return Datatables::of($laptop)
        ->setRowId(function(Laptop $laptop){
            return $laptop->id;
        })
        ->addColumn('aksi','admin.saw.action-button2')
        ->rawColumns(['aksi'])
        ->make(true)
        ;
    }


    public function cetak_hasil(){
        $data = [
            'matrix_preferensi'=>$this->matrix_preferensi()->getData()->data
        ];

        $pdf = \PDF::loadView('pdf.hasil_rekomendasi', $data);
        return $pdf->stream();
        // return $pdf->download('invoice.pdf');
        // return view('admin.saw.cetak_hasil_rekomendasi');
    }
}
