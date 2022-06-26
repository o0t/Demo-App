@extends('layouts.app')
@section('title', __('Me'))
@push('css')

@endpush

@section('content')
        {{-- @foreach ($user as $users)
            {{ $username = $users->name }}
        @endforeach --}}
    {{-- Card Profile --}}
    <section style="background-color: #eee;">
        <div class="container py-5">
        <div class="row">
            <div class="col">
                <p class="text-center"> Profile </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                <img src="https://www.drivetest.de/wp-content/uploads/2019/08/drivetest-avatar-m-254x300.png" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"> {{ Auth::user()->name }} </h5>
                {{-- <p class="text-muted mb-1"> الحاله </p> --}}

                <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="btn btn-outline-success">Success</button>
                </div>
                </div>
            </div>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fa-lg text-warning">
                        <a href="#" class="btn btn-secondary btn-sm">Add</a>
                    </i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                            </svg>
                    </li>


                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa-lg text-warning">
                            <a href="#" class="btn btn-secondary btn-sm">Add</a>
                        </i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                    </li>


                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa-lg text-warning">
                            <a href="#" class="btn btn-secondary btn-sm">Add</a>
                        </i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16">
                                    <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
                                </svg>
                    </li>


                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa-lg text-warning">
                            <a href="#" class="btn btn-secondary btn-sm">Add</a>
                        </i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                                <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
                                <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
                            </svg>
                    </li>



                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <i class="fa-lg text-warning">
                            <a href="#" class="btn btn-secondary btn-sm">Add</a>
                        </i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                    </li>

                </ul>
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Name</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="Name" id="">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="Email" id="">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="Phone" id="">
                    </div>
                </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <h1>test</h1>
                        <h1>test</h1>
                        <h1>test</h1>
                        <h1>test</h1>
                        <h1>test</h1>

                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        {{--  SenderUser  --}}

                        @foreach ( $DB as $dd )
                        <p class="mb-4">
                            <div class="card border-Dark mb-3" style="max-width: 18rem;">
                                <div class="card-header bg-transparent border-Dark">{{ Auth::user()->name }} # {{ $dd->type }}</div>
                                <div class="card-body text-Dark">
                                  <h5 class="card-title">{{$dd->title}}</h5>
                                  <p class="card-text">{{$dd->sender_message}}</p>
                                </div>
                                <div class="card-footer bg-transparent border-Dark">{{$dd->created_at}}</div>
                              </div>
                        </p>
                        @endforeach

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    {{-- Card Profile --}}

@endsection
