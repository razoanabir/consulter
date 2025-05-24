<!-- view data section start -->
<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
    <div class="card h-100 ">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="mb-0 text-capitalize mt-2">Earnings List</h5>
                </div>
                <div class="col-md-4">
                    <a style="float: right; width: 100px" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#addTodaysMoney">
                        <i class="fas fa-plus pe-2"></i> More
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <ul class="list-group list-group-flush">
                <?php $todaysMoneyData = $todaysMoney->reverse() ?>
                @foreach ($todaysMoneyData->take(3) as $_todaysMoney)
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto d-flex align-items-center">
                            {{ $loop->iteration }}
                        </div>
                        <div class="col ml-2">
                            <h6 class="mb-0">
                                {{ $_todaysMoney->title }}
                            </h6>
                            <span class="badge text-success">+ {{ $_todaysMoney->amount }}$</span>
                        </div>
                        <span class="d-none">{{ $_todaysMoney->id }}</span>
                        <div class="col-auto">
                            <button type="button"
                                class="btn btn-outline-primary btn-xs mb-0"
                                data-bs-toggle="modal"
                                data-bs-target="#detailTodaysMoney"
                                data-id="{{ $_todaysMoney->id }}"
                                data-title="{{ $_todaysMoney->title }}"
                                data-amount="{{ $_todaysMoney->amount }}"
                                data-note="{{ $_todaysMoney->note }}">
                                Details
                            </button>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-auto text-center">
            <a class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#viewTodaysMoney">View All</a>
        </div>
    </div>
</div>
<!-- view data section start -->

<!-- view all data section start -->
<div class="modal fade" id="viewTodaysMoney" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewTodaysMoneyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewTodaysMoneyLabel">Earnings List </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body pt-0">
                    <ul class="list-group list-group-flush">
                        @foreach ($todaysMoneyData as $_todaysMoney)
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto d-flex align-items-center">
                                    {{ $loop->iteration }}
                                </div>
                                <div class="col ml-2">
                                    <h6 class="mb-0">
                                        {{ $_todaysMoney->title }}
                                    </h6>
                                    <span class="badge text-success">+ {{ $_todaysMoney->amount }}$</span>
                                </div>
                                <span class="d-none">{{ $_todaysMoney->id }}</span>
                                <div class="col-auto">
                                    <button class="text-primary btn font-weight-bold text-xs"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailTodaysMoney"
                                        data-id="{{ $_todaysMoney->id }}"
                                        data-title="{{ $_todaysMoney->title }}"
                                        data-amount="{{ $_todaysMoney->amount }}"
                                        data-note="{{ $_todaysMoney->note }}">
                                        <img height="25px" src="https://img.icons8.com/?size=100&id=GVNodnA05zIG&format=png&color=7950F2" alt="">
                                    </button>
                                    <button class="text-danger btn font-weight-bold text-xs">
                                        <a href="{{ route('delete.todays.money', $_todaysMoney->id) }}" onclick="return confirm('This data will be deleted permanently')">
                                            <img height="25px" src="https://img.icons8.com/?size=100&id=gjhtZ8keOudc&format=png&color=FA5252" alt="">
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- view all data section end -->

<!-- add data section start -->
<div class="modal fade" id="addTodaysMoney" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addTodaysMoneyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('add.todays.money') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addTodaysMoneyLabel">Add Earnings List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="title" class="form-label">Transaction Title</label>
                    <input required type="text" class="form-control" name="title" id="title">

                    <label for="amount" class="form-label">Amount</label>
                    <input required type="number" class="form-control" name="amount" id="amount">

                    <label for="note">Note</label>
                    <textarea class="form-control" name="note" id="note" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add data section end -->

<!-- Details Data Section Start -->
<div class="modal fade" id="detailTodaysMoney" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailTodaysMoneyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailTodaysMoneyLabel">Earnings List Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Transaction Title:</label>
                    <p class="form-control-static" id="modalTitle"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Amount:</label>
                    <p class="form-control-static" id="modalAmount"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Note:</label>
                    <p class="form-control-static" id="modalNote"></p>
                    <p class="d-none" id="modalId"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button"
                    class="btn bg-gradient-info"
                    data-bs-toggle="modal"
                    data-bs-target="#editTodaysMoney"
                    id="openEditModal">
                    Edit
                </button>


            </div>
        </div>
    </div>
</div>
<!-- Details Data Section End -->

<!-- Edit data section start -->
<div class="modal fade" id="editTodaysMoney" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editTodaysMoneyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('update.todays.money',['id' => '__ID__']) }}" id="editForm" method="post">
                @csrf
                <input type="hidden" name="id" id="editId">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTodaysMoneyLabel">Update Earnings List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="editTitle" class="form-label">Transaction Title</label>
                    <input required type="text" class="form-control" name="title" id="editTitle">

                    <label for="editAmount" class="form-label">Amount</label>
                    <input required type="number" class="form-control" name="amount" id="editAmount">

                    <label for="editNote">Note</label>
                    <textarea class="form-control" name="note" id="editNote" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit data section end -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var detailModal = document.getElementById('detailTodaysMoney');

        detailModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var title = button.getAttribute('data-title');
            var amount = button.getAttribute('data-amount');
            var note = button.getAttribute('data-note');
            var id = button.getAttribute('data-id');

            // Update the modal content
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalAmount').textContent = amount + " $";
            document.getElementById('modalNote').textContent = note;
            document.getElementById('modalId').textContent = id;

            // Set the edit button's data attributes dynamically
            var editButton = document.getElementById('openEditModal');
            editButton.setAttribute('data-id', id);
            editButton.setAttribute('data-title', title);
            editButton.setAttribute('data-amount', amount);
            editButton.setAttribute('data-note', note);

            var editForm = document.getElementById("editForm");
            editForm.action = editForm.action.replace('__ID__', id);
        });

        var editModal = document.getElementById('editTodaysMoney');

        editModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal

            // Fetch values from the button
            var id = button.getAttribute('data-id');
            var title = button.getAttribute('data-title');
            var amount = button.getAttribute('data-amount');
            var note = button.getAttribute('data-note');

            // Populate modal input fields
            document.getElementById('editId').value = id;
            document.getElementById('editTitle').value = title;
            document.getElementById('editAmount').value = amount;
            document.getElementById('editNote').value = note;
        });
    });
</script>