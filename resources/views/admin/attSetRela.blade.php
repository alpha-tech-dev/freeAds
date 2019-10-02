@extends('layouts.app')
@section('content')
{{--Remove attribute--}}
        <div class="row w-75 h-25 text-dark mr-auto ml-auto mb-2">

            <div class="mt-2 rounded p-3 d-block border border-dark attributes-assign text-white bg-danger">
                <h3 class="p-1 text-center">Remove attributes</h3>
                <form method="post" action="{{ route('attributeSetRela.update', $family) }}">
                    @csrf
                    @method('PUT')
                    <select name="family">
                        <option class="form-control mt-1 dropdown-menu">Choose a family attribute</option>
                        @foreach($att_set as $setter)

                            <option class="dropdown-item" value="{{$setter->id}}">{{ $setter->name }}</option>
                        @endforeach
                    </select>
                    <div class="row">
                        @foreach($attributes as $singleAtt)
                            <div class="col-2 bg-transparent border-0 text-white bg-dark">
                                <input class="mr-2" type="radio" name="att{{$singleAtt->id}}"
                                       value="{{$singleAtt->id}}">{{ $singleAtt->name }}
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-outline-danger mr-auto ml-auto w-25 d-block bg-light">Remove</button>
                </form>
            </div>
            <a class="badge badge-success p-2 mt-2" href="{{route('admin.index')}}">Back admin page</a>
        </div>
<div class="row mr-auto ml-auto d-block mt-3">
    <div class="col">
        <table class="table table-hover table-striped bg-dark text-white">
            <thead>
            <tr>
                <th scope="col" class="bg-white text-dark border border-primary">Click for edit</th>
                @foreach($attributes as $attribute)
                    <th scope="row" class="btn-outline-light">
                        {{$attribute->name}}
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($att_set as $setter)
                @if($setter->id == $family)
                <tr>
                    <th scope="row" class="bg-primary">
                        {{$setter->name}}
                    </th>
                    @foreach($attributesRela as $relation)
                        @if($relation->attribute_set_id == $setter->id)
                            <td class="bg-success">
                                {{$relation->attributes->name}}
                            </td>
                        @endif
                    @endforeach
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<a class="badge badge-success p-2 mt-2" href="{{route('admin.index')}}">Back admin page</a>
</div>
@endsection
