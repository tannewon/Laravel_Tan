<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Nhập User"/>
        <input type="text" name="method" value="PUT"/>
        <!-- Đây là một token CSRF giả để minh họa -->
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Submit</button>
</form>
