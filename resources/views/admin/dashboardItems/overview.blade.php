<div class="row">
  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Income</p>
                  <h5 class="font-weight-bolder">
                    ${{ $todaysMoneyOnly }}
                  </h5>
                  <p class="mb-0">
                    Today's Total Earnings
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Clients</p>
                  <h5 class="font-weight-bolder">
                    {{ $todaysUser }}
                  </h5>
                  <p class="mb-0">
                    Clients Engaged Today
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-secondary shadow-secondary text-center rounded-circle">
                  <img height="30px" class="mt-2" src="https://img.icons8.com/?size=100&id=J06I8dkRqpNR&format=png&color=FFFFFF" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Expense</p>
                  <h5 class="font-weight-bolder">
                    ${{ $todaysExpenseOnly }}
                  </h5>
                  <p class="mb-0">
                    Total Expenses Incurred Today
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                  <img class="mt-2" height="30px" src="https://img.icons8.com/?size=100&id=YOapamJRIYEg&format=png&color=FFFFFF" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Earnings</p>
                  <h5 class="font-weight-bolder">
                    ${{ $netIncome }}
                  </h5>
                  <p class="mb-0">
                    Overall Earnings to Date
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <img height="30px" class="mt-2" src="https://img.icons8.com/?size=100&id=82688&format=png&color=FFFFFF" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Projects</p>
                  <h5 class="font-weight-bolder">
                    {{ $project->count() }}
                  </h5>
                  <p class="mb-0">
                    Total Projects Completed
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <img height="30px" class="mt-2" src="https://img.icons8.com/?size=100&id=9489&format=png&color=FFFFFF" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Users</p>
                  <h5 class="font-weight-bolder">
                    {{ $totalUser }}
                  </h5>
                  <p class="mb-0">
                    Total Users On Our Platform </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Team Members</p>
                  <h5 class="font-weight-bolder">
                    {{ $teamMembers->count() }}
                  </h5>
                  <p class="mb-0">
                    Total Team Strength Count
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                  <img height="30px" class="mt-2" src="https://img.icons8.com/?size=100&id=9542&format=png&color=FFFFFF" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card  mb-4">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Payments Due</p>
                  <h5 class="font-weight-bolder">
                    {{$paymentDue->count()}}
                  </h5>
                  <p class="mb-0">
                    Payments Yet to Be Received
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <img height="30px" class="mt-2" src="https://img.icons8.com/?size=100&id=DAj7JCrBGM9S&format=png&color=FFFFFF" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>