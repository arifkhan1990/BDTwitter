<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BDTwitte</title>

     <!-- css file link  start-->
    <link rel="stylesheet" href="{{ asset('css/bootstrapnew.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/halflings.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}" />
      <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" /> -->
    <!-- css file link  end-->


</head>
<body>

@include('layouts.navbar')

@yield('content')

@include('layouts.footer')

<!-- js file link  start-->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popover.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/customnew.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/style.js')}}"></script>
<!-- js file like  end-->
</body>
</html>
