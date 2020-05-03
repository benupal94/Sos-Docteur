@extends('layouts.app',
['activePage' => 'tag-management',
  'menuParent' => 'laravel',
  'titlePage' => __('Liste des 30 dernières publications')
])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        @foreach ($infos as $info)
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <h4 class="card-title">
                    {{ $info->type_id}}
                  </h4>
                </div>
                <div class="card-body">
                  {{ $info->contenu }}
                  <div style="color:red;padding-top:2%;">
                  {{ $info->detail}}
                </div>
                </div>
                <div class="" style="text-align:right">
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                        <div class="col-4" style="text-align: left;padding-left:3%;">
                            <span style="color:green;">150</span>
                            {{ __('Presonnes déjà inscrit') }}
                        </div>
                        <div class="col-4" style="padding-right:5%;">
                        </div>
                        <div class="col-4" style="padding-right:5%;">
                          @if($info->type_id ==1)

                           <i class="material-icons" style="color:red;">send</i>


                         @endif
                        </div>
                      </div>

                      </div>
                    </div>
                </div>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    $('#datatables').fadeIn(1100);
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,

    });
  });
</script>
@endpush
