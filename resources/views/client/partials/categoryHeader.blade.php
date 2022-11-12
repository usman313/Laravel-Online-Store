<!-- Category Navbar -->
<div class="container-fluid">
        <div class="row shadow-sm pt-2">
            <nav>
                <ul class="d-flex list-unstyled justify-content-center">
                    @foreach($categories as $count=>$category)
                    <li class=""><a href="#" class="text-decoration-none text-warning">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
<!-- Category Navbar -->