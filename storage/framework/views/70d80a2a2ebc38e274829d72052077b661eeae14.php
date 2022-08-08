<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('users.index')); ?>">Home </a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo e(route('users.index')); ?>">List</a>
          <a class="dropdown-item" href="<?php echo e(route('users.create')); ?>"> New User</a>
         
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





















<!-- 
<div style="dispaly:flex;">
        <h2>Laravel<h2>
            <a href="<?php echo e(route('users.index')); ?>">Home</a>
            <select name="Users" id="Users">
                <option value="List" class="myoption"><a href="<?php echo e(route('users.index')); ?>">List</a></option>
                <option value="New User"><a href="<?php echo e(route('users.create')); ?>">New User</a></option>
</select>
</div> -->


<?php /**PATH E:\xampp_New_Installation\htdocs\lab18laravel\resources\views/includes/navbar.blade.php ENDPATH**/ ?>