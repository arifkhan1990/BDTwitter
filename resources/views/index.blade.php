@extends('layouts.layouts_design')
@section('content')
<div class="container" id="subBody">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <a href="#">
                    <h1>BDTwitte</h1>
                </a>
                <p class="lead">www.entertechbd.com</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <a href="http://entertechbd.com/" target="_blank" title="entertech-"> <img src="http://entertechbd.com/assets/images/entertech-logo-14.png" style="width: 320px;height: 80px;"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <form class="form-horizontal" method="get" action="{{ url('/') }}" name="show-tweet" id="show-tweet" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="form-group has-success">
                <div class="inline-form">
                    <label class="form-control-label" for="inputSuccess1"> Number of tweets show </label>
                    <input type="text" value="" class="form-control" id="inputValid1" name="tweetNo">
                </div>
                <div class="inline-form">
                    <label class="form-control-label" for="inputSuccess1"> Name of User </label>
                    <input type="text" value="" class="form-control" id="inputValid2" name="userName">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="row">
        @foreach($makeSchoolResult as $data)
        <div class="col-lg-4">
            <div class="bs-component">
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <a href="https://twitter.com/{{$data['user']['name']}}/status/{{$data['id_str']}}/" target="_blank" title="click to the see original tweet">
                        <div class="card-header">
                            <div class="header-part"><span id="userName" style="">{{ $data['user']['name'] }}</span><span id="screenName"> @ {{ $data['user']['screen_name'] }}</span></div>
                            <span class="post-time">{{ date('h:i A - j F Y ', strtotime($data['created_at'])) }}</span>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $data["text"] }}</p>
                        </div>
                    </a>
                    <div class="card-header">
                        <?php $ment = json_decode(json_encode($data['entities']['user_mentions']),true);?>
                        @foreach($ment as $mentions_people)
                        <span class="post-time mention_name">{{ $mentions_people["name"] }} </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="text-align:center;"> @echo screen_name </h2>
            </div>
        </div>
        <table class="table table-striped" id="screenNameTable">
            <thead>
                <tr>
                    <th>No of Data</th>
                    <th>Name</th>
                    <th>Text</th>
                    <th>Retweet User Name</th>
                    <th>Mention User Name</th>
                    <th>Created Time</th>
                    <th>Original Tweet</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($makeSchoolResult as $data)
                <tr>
                    <td>
                        <?php echo $i;?>
                    </td>
                    <td><span id="userName" style="">{{ $data['user']['name'] }}</span><span id="screenName"> @ {{ $data['user']['screen_name'] }}</span></td>
                    <td>{{ $data["text"] }}</td>
                    <td>Retweet User Name</td>
                    <td>
                        <?php $ment = json_decode(json_encode($data['entities']['user_mentions']),true);
          $j = 1;
          foreach($ment as $mentions_people){
            if($j > 1){ echo ", " ;}
            echo $mentions_people["name"];
            $j++;
         }
         ?>
                    </td>
                    <td>{{ date('h:i A j F Y ', strtotime($data['created_at'])) }}</td>
                    <td><a href="https://twitter.com/{{$data['user']['name']}}/status/{{$data['id_str']}}/" target="_blank" title="click to the see original tweet">See original tweet</td>

                    <?php $i++;?>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">
        <span> Change Theme </span>

        <button type="submit" name="button" style="background:#d9534f; width:40px;height:40px;margin-left:20px;" id="color1"></button>
        <button type="submit" name="button" style="background:#5bc0de; width:40px;height:40px;margin-left:20px;" id="color2"></button>
        <button type="submit" name="button" style="background:#5cb85c; width:40px;height:40px;margin-left:20px;" id="color3"></button>
        <button type="submit" name="button" style="background:#d9534f; width:40px;height:40px;margin-left:20px;" id="color4"></button>
        <button type="button" class="btn btn-success" id="view_modes" style="margin-left: 650px;border-radius: 5px;">Save Changes</button>
    </div>

    <div class="form-group">
        <form class="form-horizontal" method="get">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label" for="readOnlyInput">Background Color :</label>
                <input class="form-control" id="bgColor1" type="text" name="bgColor" style="margin-left:10px;">
            </div>
            <div class="form-group">
                <label class="control-label" for="readOnlyInput">Text Color :</label>
                <input class="form-control" id="textColor1" type="text" name="textColor" style="margin-left:57px;">
            </div>
            <input type="submit" class="btn btn-primary" id="view_modes" style="margin-left: 355px;border-radius: 5px;" value="Cancle">
            <input type="button" class="btn btn-success" id="view_modes" style="margin-left: 25px;border-radius: 5px;" name="save" value="Save Changes" onClick="colorPick(this.form)">
        </form>
    </div>

    @endsection
