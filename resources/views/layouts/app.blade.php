<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @auth
                        <li class="dropdown dropdown-notification nav-item  dropdown-notifications">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="fa fa-bell"> </i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow   notif-count" data-count="9">{{count(auth()->user()->unreadNotifications)}}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0 text-center">
                                        <span class="grey darken-2 text-center"> الرسائل</span>
                                    </h6>
                                </li>
                                @forelse(auth()->user()->unreadNotifications as $notification)
                                @if($notification->type=="App\Notifications\CommentNotification")

                                <li class="scrollable-container ps-container ps-active-y media-list w-100" id="markasread{{$notification->id}}" onclick="markNotificationAsRead()">
                                    <a href="post_show" ,{{$notification->data['comment']['post_id']}}>
                                        <!-- <div class="media">
                                            <div class="media-body">
                                                <h6 class="media-heading text-right ">عنوان الاشعار </h6>
                                                <p class="notification-text font-small-3 text-muted text-right"> نص الاشعار</p>
                                                <small style="direction: ltr;">
                                                    <p class=" text-muted text-right" style="direction: ltr;"> 20-05-2020 - 06:00 pm
                                                    </p>
                                                    <br>

                                                </small>
                                            </div>
                                        </div> -->
                                        {{$notification->data['user']['name']}} قام بالتعليق على منشورك
                                    </a>

                                </li>
                                @elseif($notification->type=="App\Notifications\UserFollowed")
                                <li class="scrollable-container ps-container ps-active-y media-list w-100" id="markasread{{$notification->id}}" onclick="markNotificationAsRead()">
                                    <a href="post_show">
                                        <!-- <div class="media">
                                            <div class="media-body">
                                                <h6 class="media-heading text-right ">عنوان الاشعار </h6>
                                                <p class="notification-text font-small-3 text-muted text-right"> نص الاشعار</p>
                                                <small style="direction: ltr;">
                                                    <p class=" text-muted text-right" style="direction: ltr;"> 20-05-2020 - 06:00 pm
                                                    </p>
                                                    <br>

                                                </small>
                                            </div>
                                        </div> -->
                                        {{$notification->data['follower_name']}} قام بمتابعتك
                                    </a>

                                </li>
                                @elseif($notification->type=="App\Notifications\LikeNotification")
                                <li class="scrollable-container ps-container ps-active-y media-list w-100" id="markasread{{$notification->id}}" onclick="markNotificationAsRead()">
                                    <a href="post_show">
                                        <!-- <div class="media">
                                            <div class="media-body">
                                                <h6 class="media-heading text-right ">عنوان الاشعار </h6>
                                                <p class="notification-text font-small-3 text-muted text-right"> نص الاشعار</p>
                                                <small style="direction: ltr;">
                                                    <p class=" text-muted text-right" style="direction: ltr;"> 20-05-2020 - 06:00 pm
                                                    </p>
                                                    <br>

                                                </small>
                                            </div>
                                        </div> -->
                                        {{$notification->data['user_name']}} قام بالاعجاب بمنشورك
                                    </a>

                                </li>
                                @endif
                                @empty
                                <a href="#"> nonotification</a>
                                @endforelse
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href=""> جميع الاشعارات </a>
                                </li>

                            </ul>
                        </li>
                        @endauth


                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>

    <!-- This makes the current user's id available in javascript -->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('2a598ead0e2a7dbe6ec2', {
            cluster: 'mt1',
            encrypted: false
        });
    </script>
    <script type="text/javascript">
        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('span[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('li.scrollable-container');
        // Subscribe to the channel we specified in our Laravel Event
        
        var channel = pusher.subscribe('App.Models.User.'+userId);
        // Bind a function to a Event (the full Laravel class)
            channel.bind('BroadcastNotificationCreated', function(data) {
                alert("ممتاز");
                var existingNotifications = notifications.html();
                var newNotificationHtml = `<a href="` + data.user_id + `">
        <div class="media-body">
        <p class="notification-text font-small-3 text-muted text-right">` +
                    data.comment +
                    `</p></div>
          </a>`;
                notifications.html(newNotificationHtml + existingNotifications);
                notificationsCount += 1;
                notificationsCountElem.attr('data-count', notificationsCount);
                notificationsWrapper.find('.notif-count').text(notificationsCount);
                notificationsWrapper.show();
            });
        // كود لجعل الاشعارات مقروءة
        function markNotificationAsRead() {
            $.get('/markAsRead');
        }
    </script>
    @yield('scripts')
</body>

</html>