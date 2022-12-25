@extends('header&&footer')
@section('content')
<head>
    <title>Agents</title>
    <meta charset="utf-8">
</head>

<body>
    <div id="app">
        <section class="main-homes">
            <div class="bgheadproject hidden-xs" style="background: url('images/breadcrumb-background.jpg')">
                <div class="description">
                    <div class="container-fluid w90">
                        <h1 class="text-center">تعرف على وكلائنا</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الصفحة الرئيسية</a></li>
                            <li class="breadcrumb-item active"> الوكلاء</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid w90 padtop30" style="direction: rtl;">
                <div class="rowm10">
                    <div class="container-fluid">
                        <div class="row rowm10 list-agency">
                            @foreach($agents as $agent)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="agents-grid">
                                    <div class="agents-grid-wrap">
                                        <div class="fr-grid-thumb">
                                            <a href="agent_details/{{$agent->id}}">
                                                <img src="images/{{$agent->image_url}}" class="img-fluid mx-auto">
                                            </a>
                                        </div>
                                        <div class="fr-grid-detail">
                                            <div class="fr-grid-detail-flex-right">
                                                <div class="agent-email"><a href="cdn-cgi/l/email-protection.html#452f2a2d2b6b36282c312d05272a312729206b262a28"><i class="fa fa-envelope"></i></a></div>
                                            </div>
                                            <div class="fr-grid-detail-flex">
                                                <h5 class="fr-can-name">
                                                    <a href="agent_details/{{$agent->id}}" style="text-align:right">{{$agent->first_name}}{{$agent->last_name}}</a>
                                                </h5>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="fr-grid-info">
                                        <?php
                                        $acount = App\Models\User::find($agent->user_id);
                                        if ($acount) {
                                            $acount = $acount->toArray();
                                            $email = $acount['email'];
                                        } else
                                            $email = "";
                                        ?>
                                        <ul>
                                            <li><strong>الرقم: </strong>{{$agent->phone}}</li>
                                            <li><strong>البريد الالكتروني: </strong>{{$email}}</li>

                                        </ul>
                                    </div>
                                    <?php
                                    $count_property = App\Models\Post::get()->where('user_id', '=', $agent->user_id);
                                    $count = $count_property->count();
                                    ?>
                                    <div class="fr-grid-footer">
                                        <div class="fr-grid-footer-flex">
                                            <span class="fr-position"><i class="fa fa-home"></i>{{$count}}ملكية</span>
                                        </div>
                                        <div class="fr-grid-footer-flex-right">
                                            <a href="agent_details/{{$agent->id}}" class="prt-view" tabindex="0">عرض المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
    </div>
    {{ $agents->links("pagination::bootstrap-4") }}

</body>

</html>
@endsection