
{{-- halaman lokasi --}}
@extends('templates.master')

<!-- //////////////////////////////////////////////////////////////////////////// -->

@section('title')
    DELMANIKA ams | {{ $datas['title'] }}
@endsection

@section('content')
    <div class="section">

        <!-- label halaman-->
        <p class="caption">Dashboard Pengelolaan Lokasi</p>
        <div class="divider"></div>

        <!-- kontent isi halaman -->
        <div class="row">

            {{--daftar lokasi--}}
            @foreach ($datas['locations'] as $location => $rows)
                <div class="col s6 m4">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ asset('images/gallary/19.jpg') }}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{ $rows['location_name'] }}<i class="material-icons right">more_vert</i></span>
                            {{--<p><a href="#">This is a link</a></p>--}}
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $rows['location_name'] }}<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{--daftar lokasi--}}

            <!--  data lokasi -->
            <div class="col s12 m6 clear">
                <div class="white card-panel" >
                    <h5 class="light red-text"></h5>
                    <section style="height:230px;overflow:auto">

                        <table class="striped">
                            <thead>
                            <tr>
                                <th>Lokasi</th>
                                <th>Kode</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datas['locations'] as $location => $rows)
                                <tr>
                                    <td><a href="{{ action('LocationController@show',$rows['location_id']) }}">{{ $rows['location_name'] }}</a></td>
                                    <td><a href="{{ action('LocationController@show',$rows['location_id']) }}">{{ $rows['location_id'] }}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
            <!-- end asset chart -->

            {{-- widget samping --}}
            <div class="col s12 m6">
                <ul class="collection with-header card">
                    <li class="collection-header orange-text"><h4>Daftar Lokasi</h4></li>
                    <li class="collection-item"><div>Gedung U Lantai 2<a href="#!" class="secondary-content"><i class="material-icons">business</i></a></div></li>
                    <li class="collection-item"><div>Gedung U Lantai 4<a href="#!" class="secondary-content"><i class="material-icons">settings</i></a></div></li>
                    <li class="collection-item"><div>{{ title_case('gedung u ruang 2') }}<a href="#!" class="secondary-content"><i class="material-icons">store</i></a></div></li>
                    <li class="collection-item"><div>{{ title_case('gedung f ruang 1') }}<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                </ul>
            </div>

            {{-- widget samping --}}



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


