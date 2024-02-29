
<h1>trang chu Unicode</h1>
<h2>{{!empty(request()->keyword)?request()->keyword:'không có gì '}}</h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div> 
<hr>
@php
$message = "dat hang thanh cong ";
@endphp
@include('parts.notice')

    
