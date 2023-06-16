@extends('layout')
  
@section('content')
{{-- <main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <a href="{{ route('forget.password.get') }}">Reset Password</a>
                                      </label>
                                  </div>
                              </div>
                          </div>
    
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main> --}}

<main class="common_main">
    <div class="login_wrap">
        <div class="common_inner_s">
            <div class="pankuzu_block">
                <ul class="pankuzu_list">
                    <li class="pankuzu_item">
                        <a href="/" class="pankuzu_link">ホーム</a>
                    </li>
                    <li class="pankuzu_item">
                        ログイン
                    </li>
                </ul>
            </div>
            <form method="post" action="{{route('login.post')}}">
                @csrf
                <div class="login_bg_wrap">
                    <h1 class="login_title">ログイン</h1>
                    <div class="login_main">
                        <ul class="login_list">
                            <li class="login_item">
                                <h2 class="form_title">メールアドレス<span>必須</span></h2>
                                <input type="email" name="email" value="" class="form_input">
                                <p class="form_error_text"></p>
                            </li>
                            <li class="login_item">
                                <h2 class="form_title">パスワード<span>必須</span></h2>
                                <div class="form_pwd_block">
                                    <input type="password" name="password" class="form_input" placeholder="">
                                    <button type="button" class="form_pwd_btn PwdBtn">
                                        <img src="{{asset('assets/user/images/form/pwd_active_icon.svg')}}" alt="見る" class="normal_icon">
                                        <img src="{{asset('assets/user/images/form/pwd_icon.svg')}}" alt="見ない" class="active_icon">
                                    </button>
                                </div>
                                <p class="form_error_text"></p>
                            </li>
                        </ul>
                        <div class="align_center common_pc_640">
                            <p class="login_forget_text">
                               パスワードをお忘れの方は<a href="/password_forget">こちら</a>
                            </p>
                        </div>
                        <button type="submit" class="common_btn01 w320 center">ログイン</button>
                        <div class="align_center common_sp_640">
                            <p class="login_forget_text">
                                パスワードをお忘れの方は<a href="/password_forget">こちら</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="align_center">
                    <p class="login_register_text">
                        会員登録がまだの方は<a href="/register">こちら</a>からご登録ください
                    </p>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection