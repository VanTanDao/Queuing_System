@extends('layouts.app')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                {{-- @include('layouts.navbars.guest.navbar') --}}
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    {{-- < class="row"> --}}
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    {{-- ảnh logo --}}
                                    <div class="dangnhap-1-logo">
                                        <img src="{{url('/img/Logo alta.png')}}" alt="Logo ALT media commpy"/>

                                    </div>

                                </div>

                                <div class="card-body">
                                    <a>Email</a>
                                    <form role="form" method="POST" action="{{ route('login.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" value="{{ old('email') ?? 'admin@argon.com' }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>

                                        <div class="flex flex-col mb-3">
                                            <a>Mật Khẩu</a>
                                            <input type="password" name="password" class="form-control form-control-lg" aria-label="Password" value="secret" >
                                            @error('password') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        {{-- <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Đăng Nhập</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-1 text-sm mx-auto">
                                        Đặt Lại Mật Khẩu
                                        <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">Click</a>
                                    </p>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Đăng ký tài khoản mới!
                                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Đăng ký</a>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">

                            <div class="dangnhap-2">
                                <img src="{{url('/img/Group 341.png')}}" alt="">
                                <div class="dangnhap-2_meu-connter">
                                    <div class="dangnhap-2_connter">Hệ thống</div>
                                    <div class="dangnhap-2_connter_system" >Quản Lý xếp hàng</div>
                                </div>
                            </div>
                                <span class="mask bg-gradient-primary opacity-6"></span>

                                {{-- <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4> --}}
                                {{-- <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p> --}}
                            </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
