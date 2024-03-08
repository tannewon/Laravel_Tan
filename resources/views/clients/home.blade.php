@extends('layouts.client')
@section('title')
{{$title}}
@endsection

@section('content')
    <h1>TRANG CHU</h1>
@endsection
@endenv
<x-alert type="info" content="$message" data-icon="youtube" />
{{-- <x-inputs.button />
<x-forms.button /> --}}
<p><img src="https://znews-photo.zadn.vn/w960/Uploaded/aobohun/2021_12_11/
DSC_1091zing_1_.jpg" alt=""></p>
<p><a href="{{route('download-image').'?image=https://znews-photo.zadn.vn/
w1920/Uploaded/kbd_pijv/2021_12_10/THM_zing.jpg'}}" class="btn
btn-primary">Tải ảnh xuống</a></p>
@endsection
