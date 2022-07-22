
<div class="mt-1">
    <div class="row justify-content-center" id="slot-game">
        <div class="col-8 mx-auto">
            @foreach($gamebanner as $data)
                <img wire:click="find({{ $data->id }})" src="{{ Storage::url($data->file) }}" alt="" style="margin-bottom:2px;">
            @endforeach
        </div>

    </div>
    <div hidden id="slot-game-mobile"  >
        @foreach($gamebanner as $data)
            <img wire:click="find({{ $data->id }})" src="{{ Storage::url($data->file) }}" alt="" style="margin-bottom:2px;">
        @endforeach

    </div>
    
       
<section class="slot">
        
    <div class="content1">
      <div class="wrapper">
        <div  style="margin: 10px;font-weight: bolder;font-size: 20px;text-align: center;color: white;">PRAGMATIC PLAY SLOTS</div>
            @foreach($lsgame as $data)
            <div class="card1" >
                <div class="card-content1" style="background: #a0aec0; border-radius:10px 10px 0px 0px;">
                    @if($data->onfire == 1)
                    <span class="badge bg-danger text-white" style="position:absolute; font-size:10px;">ON FIRE</span>
                    @else
                    @endif

                    <img class="img-zoom1" src="{{ Storage::url($data->file) }}" width="100%"  style="padding:10px 10px 10px 10px;" alt="...">
                    
                    <div>
                        <div class="row text-center">
                            <div style="margin:0px;">
                            <p style="font-size:15px;">  {{$data->namagame}}</p>
                                <p style="margin-bottom:-5px;font-weight: bold;">JAM GACOR</p>
                                <p style="margin-bottom:0px;font-weight: bold;">{{ $data->jamgacor1 }} - {{ $data->jamgacor2 }} </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        @if($data->winrate < 30)
                        <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}%</div>
                        </div>
                        @elseif($data->winrate < 65)
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}%</div>
                            </div>
                        @elseif($data->winrate < 80)
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}%</div>
                            </div>
                        @else
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->winrate.'%' }};">{{ $data->winrate }}%</div>
                            </div>
                        @endif
                    </div>
                    
                   
                </div>
            </div>
            @endforeach
        </div>
    <div class="content">
</section>
</div>
