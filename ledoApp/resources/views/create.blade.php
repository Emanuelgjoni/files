@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-8">
                <form action="{{ route('ledo.store') }}" method="POST">
                
                    @csrf
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" id="data" aria-describedby="data" name="data"
                            placeholder="Data">
                    </div>

                    <div class="form-group">
                        <label for="Kategoria">Kategoria</label>
                        <select class="custom-select" id="Kategoria" name="Kategoria">
                            <option selected>Zgjidh m2 ose cope</option>
                            <option value="cope">Cope</option>
                            <option value="m2">m2</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pershkrimi">Pershkrimi</label>
                        <textarea class="form-control" name="pershkrimi" id="pershkrimi" rows="3" placeholder="Pershkrimi i produktit"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sasi">Sasia</label>
                        <input type="number" step="0.1" class="form-control" id="sasi" placeholder="Sasi" name="sasi">
                    </div>

                    <div class="form-group">
                        <label for="Cmimi">Cmimi</label>
                        <input type="number" step="0.1"  class="form-control" onblur="getTotal()"  id="Cmimi" placeholder="Cmimi" name="Cmimi">
                    </div>
                    <div class="form-group">
                        <label for="TotalPaTVSHimi">Total Pa TVSHimi</label>
                        <input type="number" step="0.1" class="form-control" readonly id="TotalPaTVSHimi" name="TotalPaTVSHimi">
                    </div>
                    <div class="form-group">
                        <label for="TVSH">TVSH</label>
                        <input type="number"  readonly class="form-control" id="TVSH" name="TVSH">
                    </div>
                    <div class="form-group">
                        <label for="TotalmeTVSH">Total me TVSH</label>
                        <input type="number"  readonly class="form-control" id="TotalmeTVSH" name="TotalmeTVSH">
                    </div>
                    <div class="form-group">
                        <label for="user_id">Bleresi</label>
                        <select class="custom-select" id="user_id" name="user_id">
                            <option selected>Choose...</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>




                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>


    </div>
    <script src="{{ asset('js/create.js') }}"></script>

@endsection
