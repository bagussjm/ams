
{{-- halaman lokasi --}}
@extends('templates.master')

<!-- //////////////////////////////////////////////////////////////////////////// -->

@section('title')
    DELMANIKA ams | {{ $datas['title'] }}
@endsection

@section('content')
    <div class="section">

        <!-- label halaman-->
        <p class="caption">{{ $datas['location']['location_name'] }}</p>
        <div class="divider"></div>

        <!-- kontent isi halaman -->
        <div class="row">

            <div class="col s6 m4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset('images/gallary/19.jpg') }}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $datas['location']['location_name'] }}<i class="material-icons right">more_vert</i></span>
                        {{--<p><a href="#">This is a link</a></p>--}}
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{ $datas['location']['location_name'] }}<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- kontent isi halaman -->

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


