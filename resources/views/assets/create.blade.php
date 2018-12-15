@extends('templates.master')

@section('title')
    {{ $datas['title'] }}
@stop

{{-- content utama --}}
@section('content')
    <section>
        <p class="caption">Tambahkan Aset Baru</p>
        <div class=" row">

            <div class="col s12 m4 left ">
                <div class="white card-panel">
                    <h5 class="light orange-text">Detail Item</h5>
                    <div class="row center">
                        {{--<img class="materialboxed" width="100%" src="{{ asset('images/pompa-turbin.jpg') }}">--}}
                        <a href="#" class="btn-flat btn-large col s12 m6 grey lighten-3 orange-text"><i class="large material-icons">cloud_upload</i></a>
                    </div>

                </div>
            </div>

            <form class="col s12 m8 right">
                <div class="white card-panel">
                    <h5 class="light orange-text">Tambahkan Deskripsi Produk</h5>
                    <div class="divider"></div>
                    <div class="row">

                        <div class="input-field col s6">
                            <input id="rfid" type="text" class="validate" name="asset_rfid_tag" disabled>
                            <label for="rfid">RFID </label>
                        </div>
                        <div class="input-field col s6">
                            <input id="barcode" type="text" name="asset_barcode" class="validate" disabled  >
                            <label for="barcode">Barcode</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="asset_name" type="text" name="asset_name" class="validate">
                            <label for="asset_name">Nama Aset</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="asset_type" type="text" name="asset_type" class="validate">
                            <label for="asset_type">Tipe Aset</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="asset_type_name" type="text" name="asset_type_name" class="validate">
                            <label for="asset_type_name">Nama Tipe Aset</label>
                        </div>

                        <div class="input-field col s6 m6">
                            <select name="asset_disposal_status">
                                <option value="" disabled selected>Status Disposal</option>
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                                <option value="terjual">Terjual</option>
                            </select>
                        </div>

                        <div class="col s12 m12">
                            <button type="submit" class="btn-flat pink blue white-text right waves-effect waves-orange">
                                <i class="material-icons">add</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
@stop
{{-- end content utama --}}