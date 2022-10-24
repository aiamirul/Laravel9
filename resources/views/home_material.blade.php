@extends('layouts.Stellar-master')

@section('content')
    <div class="row mt-4">
      <div class="col-lg-12 ">
        <div class="card mb-4">
  <div class="d-flex">
    <div class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-xl mt-n3 ms-4">
      <i class="material-icons opacity-10" aria-hidden="true">language</i>
    </div>
    <h6 class="mt-3 mb-2 ms-3 ">Events</h6>
  </div>
  <div class="card-body p-3">
    <div class="row">
      <div class="col-lg-12 col-md-7">
        <div class="table-responsive">
          <table class="table align-items-center ">
            <tbody>

                        <tr>
                            <td class="w-30">
                            <div class="d-flex px-2 py-1 align-items-center">
                                <div>
                                <img src="./assets/img/icons/flags/US.png" alt="Country flag">
                                </div>
                                <div class="ms-4">
                                <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">United States</h6>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">2500</h6>
                            </div>
                            </td>
                            <td>
                            <div class="text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">$230,900</h6>
                            </div>
                            </td>
                            <td class="align-middle text-sm">
                            <div class="col text-center">
                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                <h6 class="text-sm font-weight-normal mb-0 ">29.9%</h6>
                            </div>
                            </td>
                        </tr>

           
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6 col-md-5">
        <div id="map" class="mt-0 mt-lg-n4"></div>
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>


@endsection
