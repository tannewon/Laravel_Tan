<h1>uploard file</h1>
<form method="post" action="<?php echo route('categories.add')  ?>">
    <div>
        <input type= "file" name ="photo" placeholder="ten chuyen muc">
    </div>
    <button type="Submit">upload</button>
    <input type= "hidden" name ="_token" value="<?php echo csrf_token(); ?>">
</form>