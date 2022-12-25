@extends('dashboard.home')
@section('content')
<div class="container-fluid w90 padtop30">
    <div class="rowm10">
        <div class="container-fluid">
            <div class="row rowm10 list-agency">
                @foreach($agents as $agent)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="agents-grid">
                        <div class="agents-grid-wrap">
                            <div class="fr-grid-thumb">
                                <a href="agents/judy37.html">
                                    <img src="images/{{$agent->image_url}}" class="img-fluid mx-auto">
                                </a>
                            </div>
                            <div class="fr-grid-detail">
                                <div class="fr-grid-detail-flex-right">
                                    <div class="agent-email"><a href="cdn-cgi/l/email-protection.html#452f2a2d2b6b36282c312d05272a312729206b262a28"><i class="fa fa-envelope"></i></a></div>
                                </div>
                                <div class="fr-grid-detail-flex">
                                    <h5 class="fr-can-name">
                                        <a href="agents/judy37.html">{{$agent->first_name}}{{$agent->last_name}}</a>
                                    </h5>
                                </div>

                            </div>
                        </div>
                        <div class="fr-grid-info">
                            <ul>
                                <li><strong>الرقم: </strong>{{$agent->phone}}</li>
                                <li><strong>البريد الالكتروني: </strong>{{$agent->email}}</li>

                            </ul>
                        </div>
                        <?php
                        $count_property = App\Models\Post::get()->where('user_id', '=', $agent->user_id);
                        $count = $count_property->count();
                        ?>
                        <div class="fr-grid-footer">
                            <div class="fr-grid-footer-flex">
                                <span class="fr-position"><i class="fa fa-home"></i> {{$count}} ملكية</span>
                            </div>
                            <div class="fr-grid-footer-flex-right">
                                <a href="agents/judy37.html" class="prt-view" tabindex="0">عرض المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{ $agents->links("pagination::bootstrap-4") }}
@endsection