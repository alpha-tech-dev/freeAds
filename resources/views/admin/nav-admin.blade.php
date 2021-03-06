<div class="container-fluid">
    <div class="row">
        {{--<nav class="pt-4 col-md-2 d-md-block sidebar pb-2 h-50" style="background-color: rgba(164,159,149,0.49)">--}}
        <nav class="navbar navbar-expand-md navbar-light shadow-sm navbar-bg w-100 d-inline-block" style="background-color: rgba(164,159,149,0.49)">
            {{--<div class="sidebar-sticky">--}}
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Admin-Panel</a>
                {{--<h4 class=""><mark class="rounded pr-2 pl-2"><a class="text-black text-decoration-none" href="{{route('admin.index')}}">Admin options</a></mark></h4>--}}
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#admin-options" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav flex-row collapse navbar-collapse " id="admin-options">

                    <li class="nav-item">
                        <a href="{{route('category.create')}}" class="nav-link ">Create category</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('advert.create')}}" class="nav-link">Create advert</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('city.create')}}" class="nav-link">Add city</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.create')}}" class="nav-link">Message-center</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.adverts')}}" class="nav-link">All adverts</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.categories')}}" class="nav-link">All Categories</a>
                    </li>
                    <li class="nav-item">
{{--                        {{dd(route('admin.attributes'))}}--}}
                        <a href="{{route('admin.attributes')}}" class="nav-link">Attributes</a>

                    </li>
                    <a class="badge badge-success p-2 mt-2" href="{{url('/')}}">Back home page</a>

                </ul>
            </div>
        </nav>
{{--    </div>--}}
{{--</div>--}}

