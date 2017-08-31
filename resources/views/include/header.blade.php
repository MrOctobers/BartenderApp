@section("header")
  <div class="cover">
    <img src="/img/profile.jpg" />
  </div>
  <div class="navigation">
  <hr>
  <center>
    <a href="{{ route('ViewMenu') }}">Place an Order</a>
    <hr>
    <a href="{{ route('ViewQueue') }}">Access the Queue Order</a>
    <hr>
    </center>
  </div>
@show