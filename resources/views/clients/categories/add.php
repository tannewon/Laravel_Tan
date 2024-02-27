<h1>them chuyen muc</h1>
<form method="post" action="<?php echo route('categories.add')  ?>">
    <div>
        <input type= "text" name ="category_name" placeholder="ten chuyen muc" value ='<?php echo $cateName  ?>'>
    </div>
    <button type="Submit">them chuyen muc</button>
    <input type= "hidden" name ="_token" value="<?php echo csrf_token(); ?>">
</form>