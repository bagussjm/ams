        @extends('templates.master')
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        @section('title')
            DELMANIKA ams | {{ $datas['title'] }}
        @endsection
        @section('content')
            <div class="section">

                <!-- label halaman-->
                <p class="caption">Aset {{ $datas['asset']['asset_name'] }}</p>
                <div class="divider"></div>

                <!-- kontent isi halaman -->
                <div class="row">

                    {{--info content--}}
                     <div class="col s12 m4 left">
                         <div class="white card-panel">
                             <h5 class="light red-text">Detail Item</h5>
                             <div>
                                 <img class="materialboxed" width="100%" src="{{ asset('images/pompa-turbin.jpg') }}">
                             </div>
                         </div>
                     </div>
                    {{--end info content--}}

                    <!--  asset chart-->
                    <div class="col s12 m8 right ">
                        <div class="white card-panel" >
                            <h5 class="light red-text">Detail Aset</h5>
                            <section style="height:230px;overflow:auto">
                                <div class="col s12">
                                    <ul class="tabs">
                                        <li class="tab col s3">
                                            <a href="#tabs1" class="active">Keterangan</a>
                                        </li>
                                        <li class="tab col s3">
                                            <a  href="#tabs2">Jenis</a>
                                        </li>
                                        <li class="tab col s3">
                                            <a  href="#tabs3">Lokasi</a>
                                        </li>

                                    </ul>
                                </div>

                                {{--tabs content--}}
                                <div id="tabs1" class="col s12">
                                    <table class="striped">
                                        <tbody>
                                            <tr>
                                                <td><i class="material-icons">nfc</i> {{ $datas['asset']['asset_rfid_tag'] }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="material-icons">scanner</i> {{ $datas['asset']['asset_barcode'] }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="material-icons">label</i> {{ $datas['asset']['asset_id'] }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="material-icons">description</i> {{ $datas['asset']['asset_name'] }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="material-icons">delete_sweep</i> {{ $datas['asset']['asset_disposal_status'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="tabs2" class="col s12">Jenis Aset dan Kode Jenis Aset</div>
                                <div id="tabs3" class="col s12">
                                    <section class="row" >
                                        <div class="col s6 m4">
                                            <div class="white card" style="height: 170px">
                                                Rak 4
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                {{--end tab content--}}

                            </section>
                        </div>
                    </div>
                    <!-- end asset chart -->

                </div>

            </div>

            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                    <i class="material-icons">scanner</i>
                </a>
                <ul>
                    <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                    <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                    <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                    <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->

        @endsection

        @section('scripts')
            {{-- start scripts--}}
            <script type="text/javascript">

            </script>

            {{-- end scripts--}}
        @stop


