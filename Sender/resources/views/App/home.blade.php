@extends('layouts.app')
@section('title', __('Home'))
@push('css')

@endpush

@section('content')

        <br><br><br>

        {{-- Cards --}}
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                    <svg class="ms-3 mt-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
                    </svg>
                <div class="card-body">
                  <h5 class="card-title"> {{ __(' Add New Sender ')}}</h5>
                  <p class="card-text">{{__('This is For Create New Sender')}} </p>
                  <a href="{{route('sender.create')}}" class="btn btn-success"> {{ __('Create Now ')}}</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                    <svg class="ms-3 mt-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-hash" viewBox="0 0 16 16">
                        <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"/>
                    </svg>
                <div class="card-body">
                  <h5 class="card-title"> {{ __('Take a look at the latest Sender Message ')}}</h5>
                  <p class="card-text"> {{ __('There are a lot of new messages on all topics .')}}</p>
                  <a href="#" class="btn btn-info"> {{ __('Show Now ')}}</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                    <svg class="ms-3 mt-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                    </svg>
                <div class="card-body">
                  <h5 class="card-title"> {{ __('Meet new friends')}}</h5>
                  <p class="card-text"> {{ __('Meet new friends who are interested in your topics')}}</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                    <svg class="ms-3 mt-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cloud-haze2-fill" viewBox="0 0 16 16">
                        <path d="M8.5 2a5.001 5.001 0 0 1 4.905 4.027A3 3 0 0 1 13 12H3.5A3.5 3.5 0 0 1 .035 9H5.5a.5.5 0 0 0 0-1H.035a3.5 3.5 0 0 1 3.871-2.977A5.001 5.001 0 0 1 8.5 2zm-6 8a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zM0 13.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                <div class="card-body">
                  <h5 class="card-title"> {{ __('Speed of use')}}</h5>
                  <p class="card-text"> {{ __('Speed of use never hinders you in browsing')}}</p>
                </div>
              </div>
            </div>
          </div>

@endsection
