        @extends('templates.master')
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        @section('title')
            DELMANIKA ams | {{ $datas['title'] }}
        @endsection
        @section('content')
            <div class="section">

                <!-- label halaman-->
                <p class="caption">Dashboard Pengelolaan Aset</p>
                <div class="divider"></div>

                <!-- kontent isi halaman -->
                <div class="row">

                    <!--  asset chart-->
                    <div class="col s12 m6 ">
                        <div class="white card-panel" >
                            <h5 class="light red-text">Aset Terbaru</h5>
                            <section style="height:230px;overflow:auto">

                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Aset</th>
                                            <th>Kode Aset</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas['assets'] as $assets => $rows)
                                            <tr>
                                                <td><a href="{{ action('AssetController@show',$rows['asset_id']) }}">{{ $rows['asset_name'] }}</a></td>
                                                <td><a href="{{ action('AssetController@show',$rows['asset_id']) }}">{{ $rows['asset_id'] }}</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </section>
                        </div>
                    </div>
                    <!-- end asset chart -->

                    <!--  asset chart-->
                    <div class="col s12 m6 ">
                        <div class="white card-panel" >
                            <h5 class="light red-text">Aset Berdasarkan Tipe Aset</h5>
                            <section style="height:230px;overflow:auto">

                                <div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light" style="display:none">
                                        <div class="move-up cyan darken-1">
                                            <div>
                                                <span class="chart-title white-text">Revenue</span>
                                                <div class="chart-revenue cyan darken-2 white-text">
                                                    <p class="chart-revenue-total">$4,500.85</p>
                                                    <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                                </div>
                                                <div class="switch chart-revenue-switch right">
                                                    <label class="cyan-text text-lighten-5">
                                                        Month
                                                        <input type="checkbox">
                                                        <span class="lever"></span> Year
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="trending-line-chart-wrapper">
                                                <canvas id="trending-line-chart" height="155" width="667" style="width: 667px; height: 155px;"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="card-content"> -->

                                    <div class="col s12 m6 l6">
                                        <div id="doughnut-chart-wrapper">
                                            <canvas id="doughnut-chart" height="98" width="148" style="width: 148px; height: 98px;"></canvas>
                                            <div class="doughnut-chart-status">4500
                                                <p class="ultra-small center-align">total</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m4 l4">
                                        <ul class="doughnut-chart-legend">
                                            <li class="mobile ultra-small"><span class="legend-color"></span>Trafo</li>
                                            <li class="kitchen ultra-small"><span class="legend-color"></span> Genset</li>
                                            <li class="home ultra-small"><span class="legend-color"></span> Ventilasi Udara</li>
                                        </ul>
                                    </div>

                                    <!-- </div> -->


                                </div>

                            </section>
                        </div>
                    </div>
                    <!-- end asset chart -->

                    <!--  asset chart-->
                    <div class="col s12 m12 ">
                        <div class="white card-panel" >
                            <h5 class="light red-text center">Tinjauan Aset</h5>
                            <section class="row">
                                {{--<div id="doughnut-tinjauan" class="col s12 m4">--}}
                                    {{--<canvas id="dgChartTinjauan" height="147" width="100%" ></canvas>--}}
                                    {{--<div class="doughnut-chart-status">4500--}}
                                        {{--<p class="ultra-small center-align">total</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </section>
                        </div>
                    </div>
                    <!-- end asset chart -->

                </div>

            </div>

            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                    <i class="material-icons">settings</i>
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
                $(document).ready(function(){

                });
            </script>

            {{-- end scripts--}}
        @stop


