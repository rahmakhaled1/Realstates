@extends('layouts.app')

@section('content')

<body>
  <!-- Start Sign Up -->
  <div class="formInner">
    <div class="imgInner">
      <img src="./media/reg.jpeg" alt="">
    </div>
    <div class="form">
      <form action="{{ route('register') }}" method="post">
          @csrf
        <header>
          <h1>Signup</h1>
          <span>Fill your personal details and get startred!</span>
        </header>
        <div class="inputs">
          <div class="input">
            <input type="text" name="name" placeholder="Username" spellcheck="false">
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <img src="./media/icons/User.png" alt="">
          </div>
          <div class="input">
            <input type="text" name="email" placeholder="Email address" spellcheck="false">
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <img src="./media/icons/mail.png" alt="">
          </div>
          <div class="input">
            <input type="password" name="password" placeholder="Password">
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <img src="./media/icons/LockSimpleOpen.png" alt="">
          </div>
          <div class="input">
              <input type="password" name="password_confirmation" placeholder="Confirm Password">
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <img src="./media/icons/CheckSquare.png" alt="">
          </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" >
                <label class="form-check-label" for="flexRadioDefault1">
                    Customer
                </label>
                <input class="form-check-input" type="radio" name="type"  checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Seller
                </label>
        </div>
              <button type="submit" class="btn w100">Register Now</button>
            <div class="dont">
              Dont have an account?  <a href="{{url('login')}}">Login</a>
            </div>
          </div>
      </form>
  </div>
      </form>

  </div>
  <!-- End Sign Up -->

</body>

</html>
