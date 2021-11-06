@extends('layouts.admin')
@section('title')
    Setting Page
@endsection
@section('content')
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Setting</h4>
                <form action="{{route('admin.setting.bobot')}} " method="POST" data-no-reset="true">
                @if (isset($options['c1']))
                @php
                    $c11 = ($options['c1']);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Inches (C1)  </label>
                              <select name="w_c1" id="" class="form-control">
                                  <option value="0.2" @if ($c11->weight == 0.2)
                                      {{ "selected" }} @endif >Sangat Rendah </option>
                                  <option value="0.4" @if ($c11->weight == 0.4)
                                    {{ "selected" }} @endif>Rendah </option>
                                  <option value="0.6" @if ($c11->weight == 0.6)
                                    {{ "selected" }} @endif>Sedang </option>
                                  <option value="0.8" @if ($c11->weight == 0.8)
                                    {{ "selected" }} @endif>Tinggi </option>
                                  <option value="1" @if ($c11->weight == 1)
                                    {{ "selected" }} @endif>Sangat Tinggi </option>
                              </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c1" id="" class="form-control">
                              <option value="0" @if (!$c11->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c11->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($options['c2']))
                @php
                    $c22 = ($options['c2']);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Weight (C2)  </label>
                              <select name="w_c2" id="" class="form-control">
                                <option value="0.2" @if ($c22->weight == 0.2)
                                    {{ "selected" }} @endif >Sangat Rendah </option>
                                <option value="0.4" @if ($c22->weight == 0.4)
                                  {{ "selected" }} @endif>Rendah </option>
                                <option value="0.6" @if ($c22->weight == 0.6)
                                  {{ "selected" }} @endif>Sedang </option>
                                <option value="0.8" @if ($c22->weight == 0.8)
                                  {{ "selected" }} @endif>Tinggi </option>
                                <option value="1" @if ($c22->weight == 1)
                                  {{ "selected" }} @endif>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c2" id="" class="form-control">
                              <option value="0" @if (!$c22->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c22->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($options['c3']))
                @php
                    $c33 = ($options['c3']);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">RAM (C3)  </label>
                              <select name="w_c3" id="" class="form-control">
                                <option value="0.2" @if ($c33->weight == 0.2)
                                    {{ "selected" }} @endif >Sangat Rendah </option>
                                <option value="0.4" @if ($c33->weight == 0.4)
                                  {{ "selected" }} @endif>Rendah </option>
                                <option value="0.6" @if ($c33->weight == 0.6)
                                  {{ "selected" }} @endif>Sedang </option>
                                <option value="0.8" @if ($c33->weight == 0.8)
                                  {{ "selected" }} @endif>Tinggi </option>
                                <option value="1" @if ($c33->weight == 1)
                                  {{ "selected" }} @endif>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c3" id="" class="form-control">
                              <option value="0" @if (!$c33->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c33->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($options['c4']))
                @php
                    $c44 = ($options['c4']);
                @endphp
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Screen Resolution (C4)  </label>
                              <select name="w_c4" id="" class="form-control">
                                <option value="0.2" @if ($c44->weight == 0.2)
                                    {{ "selected" }} @endif >Sangat Rendah </option>
                                <option value="0.4" @if ($c44->weight == 0.4)
                                  {{ "selected" }} @endif>Rendah </option>
                                <option value="0.6" @if ($c44->weight == 0.6)
                                  {{ "selected" }} @endif>Sedang </option>
                                <option value="0.8" @if ($c44->weight == 0.8)
                                  {{ "selected" }} @endif>Tinggi </option>
                                <option value="1" @if ($c44->weight == 1)
                                  {{ "selected" }} @endif>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c4" id="" class="form-control">
                              <option value="0" @if (!$c44->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c44->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                @if (isset($options['c5']))
                @php
                    $c55 = ($options['c5']);
                @endphp

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                              <label for="">Price (C5)  </label>
                              <select name="w_c5" id="" class="form-control">
                                <option value="0.2" @if ($c55->weight == 0.2)
                                    {{ "selected" }} @endif >Sangat Rendah </option>
                                <option value="0.4" @if ($c55->weight == 0.4)
                                  {{ "selected" }} @endif>Rendah </option>
                                <option value="0.6" @if ($c55->weight == 0.6)
                                  {{ "selected" }} @endif>Sedang </option>
                                <option value="0.8" @if ($c55->weight == 0.8)
                                  {{ "selected" }} @endif>Tinggi </option>
                                <option value="1" @if ($c55->weight == 1)
                                  {{ "selected" }} @endif>Sangat Tinggi </option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="">Cost/Benefit</label>
                          <select name="cost_c5" id="" class="form-control">
                              <option value="0" @if (!$c55->is_cost)
                                  selected
                              @endif>Benefit</option>
                              <option value="1" @if ($c55->is_cost)
                                    selected
                                @endif>Cost</option>
                          </select>
                        </div>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-primary ">  Simpan</button>
                <br><br>
                <h3><b>Cara Penggunaan : </b></h3>
                <p><b>1. Masukan Kriteria ukuran layar handphone(inches), sangat rendah(540 x 960), rendah(720 x 1280), sedang(720 x 1440),tinggi(1080 x 1920), sangat tinggi(1440 x 2830). </b> <br><b>2. Masukan Kriteria ukuran ram handphone(Ram), sangat rendah(4gb), rendah(8gb), sedang(16gb), tinggi(128gb), sangat tinggi(256gb).</b><br><b>3.Masukan kriteria screen resolution handphone saangat rendah( 960 x 540 ), rendah (1280 x 720), sedang(1366 x 768 ) , tinggi(1920 x 1080 ), sangat tinggi(2560 x 1440).</b><br><b>4. Masukan Harga handphone dimulai dari sangat rendah(600$), rendah(800$), sedang(1350$), tinggi(2550$),sangat tinggi(3000$).(</b><br><b>5. Masukan kategori berat handphone</b></p>
                <p><b>6. Silahkan pilih kriteria inches, weight , ram, screen resolution, price dan benefit terlebih dahulu.</b></p>
                <p><b>7. setelah berhasil dipilih, silahkan lanjut untuk melihat halaman hasil rekomendasi dimana urutan halaman nomor 1 adalah pilihan dari user pembeli tersebut.</b></p>
                 </form>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
@push('scripts')
    @include("admin.script.form-modal-ajax")
@endpush
