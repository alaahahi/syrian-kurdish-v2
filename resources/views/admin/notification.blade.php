@extends('voyager::master')

@can('add', Voyager::model('Setting'))


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <button onclick="startFCM()"
                    class="btn btn-danger btn-flat">Allow notification
                </button>

        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('sendNotification') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea class="form-control" name="body"></textarea>
                          </div>
                          <hr  style="margin:30px 0" >
                          <select class="select2" name="optionsEvent[]" multiple="multiple"
                              data-placeholder="Select event...">
                           @foreach ($event as $option)
                              <option value="{{ $option->id }}">{{ $option->name }}</option>
                           @endforeach
                        </select>
                        <hr  style="margin:30px 0" >
                        <select class="select2" name="options[]" multiple="multiple"
                              data-placeholder="Select users...">
                           @foreach ($options as $option)
                              <option value="{{ $option->id }}">{{ $option->name }}</option>
                           @endforeach
                        </select>
                        <hr  style="margin:30px 0" >
                        <button type="submit" class="btn btn-primary">Send Notification</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyC8tuubTTBqEwMHas4kKx1OEKTmH5uX86o",
    authDomain: "eventy-fcd98.firebaseapp.com",
    projectId: "eventy-fcd98",
    storageBucket: "eventy-fcd98.appspot.com",
    messagingSenderId: "511824844962",
    appId: "1:511824844962:web:0549cfa8ef40b168675ffb"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  console.log(app)
</script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
   
    var firebaseConfig = {
  
    apiKey: "AIzaSyC8tuubTTBqEwMHas4kKx1OEKTmH5uX86o",
    authDomain: "eventy-fcd98.firebaseapp.com",
    projectId: "eventy-fcd98",
    storageBucket: "eventy-fcd98.appspot.com",
    messagingSenderId: "511824844962",
    appId: "1:511824844962:web:0549cfa8ef40b168675ffb"


    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    function startFCM() {
        messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
           
            })
            .then(function (response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
               
                $.ajax({
                    url: '{{ route("store.token") }}',
                    type: 'POST',
                    data: {
                        token: response
                    },
                    dataType: 'JSON',
                    success: function (response) {
                     console.log('Token stored.');
                    },
                    error: function (error) {
                        console.log(error)
                    },
                });
            }).catch(function (error) {
               console.log(error);
            });
    }
    messaging.onMessage(function (payload) {
        const title = payload.notification.title;
        const options = {
            body: payload.notification.body,
            icon: payload.notification.icon,
        };
        new Notification(title, options);
    });
</script>



  @endsection

  @endcan