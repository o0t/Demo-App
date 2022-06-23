@extends('layouts.app')
@section('title', __('Create Sender'))
@push('css')

@endpush

@section('content')

        <form action="{{route('sender.store')}}" method="POST">
            @csrf
            <br><br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title Sender</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" ... ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">  {{__('Type Sender ')}} </label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected> {{__('Not Type')}}</option>
                    @foreach ($types as $k => $v)
                    <option value="{{$k}}">{{$v}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">{{__('write your sender ..')}}</label>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-success" type="submit">Save</button>
            </div>
        </form>

@endsection
