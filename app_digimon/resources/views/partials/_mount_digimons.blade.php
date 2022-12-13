<div class="col-12 m-0 p-0">
    <div class="row m-0 p-0 justify-content-center">
        @foreach($responseData['data'] as $digimon)
            <div class="col-10 col-md-5 col-lg-4 col-xl-3 m-0 p-0">
                <div class="card m-1 p-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 rounded shadow img-fluid">
                            <div class="row m-0 p-0 position-absolute fixed-top">
                                <div class="col-12 text-end m-0 py-2 px-3">
                                    <span class="py-2 px-3 rounded-pill bg-dark bg-opacity-50 text-light font-size-14px">
                                        {{ $digimon['level'] }}
                                    </span>
                                </div>
                            </div>

                            <img src="{{ $digimon['img'] }}" alt='' class='img-fluid'>

                            <div class="row m-0 p-0 rounded-bottom position-absolute fixed-bottom bg-dark bg-opacity-75 text-light">
                                <div class="col-12 text-center m-0 py-2 font-size-18px">
                                    {{ $digimon['name'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
