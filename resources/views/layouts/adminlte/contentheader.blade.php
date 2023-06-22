<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0"><?= $breadcru['activexx'] ?></h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            @foreach($breadcru['linkxxxx'] as $breadcrx)
            @if($breadcrx['activexx']=='')
            <li class="breadcrumb-item"><a href="#">{{$breadcrx['tituloxx']}}</a></li>
            @else
            <li class="breadcrumb-item active"><?= $breadcrx['tituloxx'] ?></li>
            @endif


            @endforeach


        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->