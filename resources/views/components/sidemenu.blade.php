<!-- Sidebar -->
<div class="d-flex flex-row pt-20">
    <div class="d-none d-sm-block bg-blue me-5">
        <div class="d-none d-sm-flex flex-column align-items-center sidebar-column sticky-top">
            <a href="#" class="rounded-circle border border-3 m-3">
                <img src="imgs/user.svg" alt="" class="p-2 sidebar-icon">
            </a>
            <a href="#" class="rounded-circle border border-3 m-3">
                <img src="imgs/tick.svg" alt="" class="p-2 sidebar-icon">
            </a>
            <a href="#" class="rounded-circle border border-3 m-3">
                <img src="{{asset("imgs/museum.svg")}}" alt="" class="p-2 sidebar-icon">
            </a>
            <a href="#" class="rounded-circle border border-3 m-3">
                <img src="imgs/users.svg" alt="" class="p-2 sidebar-icon">
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            {{ $slot }}
        </div>
    </div>
</div>