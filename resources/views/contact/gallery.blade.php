<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title text-center">
            <h3>The Product Gallery</h3>
            <p class="lead">awesome products prepared with creative ideas and great design</p>
        </div>
        <div class="cbp-panel">
            <div id="filters-container" class="cbp-filter-container text-center">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All</div>
                @foreach($vsefotki as $d)
                    <div data-filter=".web{{$d['id']}}" class="cbp-filter-item">{{$d['name']}}</div>
                @endforeach
            </div>
            <div id="grid-container" class="cbp">
                @foreach($vsefotki as $fotka)
                    <div class="cbp-item web{{$fotka['id']}} logo">
                        @foreach($fotka->gallerys as $q)
                            <div class="cbp-caption-defaultWrap"><img src="{{asset('/storage/'. $q['image'])}}" alt=""/>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
