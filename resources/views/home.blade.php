
<h1>trang chu Unicode</h1>
<h2>{{!empty(request()->keyword)?request()->keyword:'không có gì '}}</h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div> 
<hr>
@switch($number)
    @case(1)
    @case(3)
    @case(5)
        <p>SO THU NHAT</P>
        @break
    @case(2)
    <p>SO THU hai</P>
        @break
    @default
    <p>SO THU ba</P>
        @break

    
