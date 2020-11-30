@extends('layouts.app')

@section('content')
<div class="container">
    <div>
            <table class="table">
                <tr>
                    <td>title</td>
                    <td>description</td>
                </tr>
            @foreach ($Products as $Product)
                <tr>
                    <td> {{ $Product->title }}</td>
                    <td> {{ $Product->description }}</td>
                    @if ($Product->user_id === Auth::user()->id)
                        <td>
                            <form action="{{ route('productdelete') }}" method="POST">
                            @csrf
                                <input type="hidden" name="id" value="{{ $Product->id }}">
                                <button class="btn btn-danger">
                                    delete
                                </button>
                            </form>
                            <div>
                                <a href="{{ route('productedit',["id"=>$Product->id ]) }}" class="btn btn-warning">
                                    edit
                                </a>
                            </div>
                        </td>
                    @endif
                </tr>
            @endforeach
            </table>
            <a class="btn btn-primary "  style="margin-left: 45%" href="{{ route('addproduct') }}" >add product</a>
    </div>
</div>
@endsection
