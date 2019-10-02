@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-warning border border-dark w-25 rounded ml-auto mr-auto mt-2" role="alert">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="firstCat mr-auto ml-auto d-block w-50 mt-5">
            <form method="get" action=" {{ route('advert.create') }}" enctype="multipart/form-data">
{{--                @csrf--}}
                <select name="category" id="" class="mr-auto ml-auto d-block p-3 rounded bg-dark text-white">
                    <option class="form-control mt-1" value="0">Choose a subcategorie</option>
                    @foreach($subCategories as $cat)
                        <option class="" value=" {{ $cat->id }}">{{$cat->title }}</option>
                    @endforeach
                </select>
                <div class="text-center">
                    <a href="{{route('advert.createTemplate')}}" role="button" class="btn alert-danger mt-1 mr-2 pr-3 pl-3">Back</a>
                    <button class="btn alert-success mt-1 pr-3 pl-3">Next</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center p-2 mt-5">
        <p class="mt-5 text-center p-2 small rounded bg-info d-inline">Step 2 of 3</p>
    </div>
@endsection