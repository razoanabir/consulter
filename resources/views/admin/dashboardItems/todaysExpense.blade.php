<!-- view data section start -->
<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
    <div class="card h-100 ">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="mb-0 text-capitalize mt-2">Expense List</h5>
                </div>
                <div class="col-md-4">
                    <a style="float: right; width: 100px" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#addTodaysExpense">
                        <i class="fas fa-plus pe-2"></i> More
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <ul class="list-group list-group-flush">
                <?php $todaysExpenseData = $todaysExpense->reverse() ?>
                @foreach ($todaysExpenseData->take(3) as $_todaysExpense)
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto d-flex align-items-center">
                            {{ $loop->iteration }}
                        </div>
                        <div class="col ml-2">
                            <h6 class="mb-0">
                                {{ $_todaysExpense->title }}
                            </h6>
                            <span class="badge text-danger">- {{ $_todaysExpense->amount }}$</span>
                        </div>
                        <span class="d-none">{{ $_todaysExpense->id }}</span>
                        <div class="col-auto">
                            <button type="button"
                                class="btn btn-outline-primary btn-xs mb-0"
                                data-bs-toggle="modal"
                                data-bs-target="#detailTodaysExpense"
                                data-id-ForExpense="{{ $_todaysExpense->id }}"
                                data-title-ForExpense="{{ $_todaysExpense->title }}"
                                data-amount-ForExpense="{{ $_todaysExpense->amount }}"
                                data-note-ForExpense="{{ $_todaysExpense->note }}">
                                Details
                            </button>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-auto text-center">
            <a class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#viewTodaysExpense">View All</a>
        </div>
    </div>
</div>
<!-- view data section start -->

<!-- view all data section start -->
<div class="modal fade" id="viewTodaysExpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewTodaysExpenseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewTodaysExpenseLabel">Expense List </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body pt-0">
                    <ul class="list-group list-group-flush">
                        @foreach ($todaysExpenseData as $_todaysExpense)
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto d-flex align-items-center">
                                    {{ $loop->iteration }}
                                </div>
                                <div class="col ml-2">
                                    <h6 class="mb-0">
                                        {{ $_todaysExpense->title }}
                                    </h6>
                                    <span class="badge text-danger">- {{ $_todaysExpense->amount }}$</span>
                                </div>
                                <span class="d-none">{{ $_todaysExpense->id }}</span>
                                <div class="col-auto">
                                    <button class="text-primary btn font-weight-bold text-xs"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailTodaysExpense"
                                        data-id-ForExpense="{{ $_todaysExpense->id }}"
                                        data-title-ForExpense="{{ $_todaysExpense->title }}"
                                        data-amount-ForExpense="{{ $_todaysExpense->amount }}"
                                        data-note-ForExpense="{{ $_todaysExpense->note }}">
                                        <img height="25px" src="https://img.icons8.com/?size=100&id=GVNodnA05zIG&format=png&color=7950F2" alt="">
                                    </button>
                                    <button class="text-danger btn font-weight-bold text-xs">
                                        <a href="{{ route('delete.todays.expense', $_todaysExpense->id) }}" onclick="return confirm('This data will be deleted permanently')">
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
<div class="modal fade" id="addTodaysExpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addTodaysExpenseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('add.todays.expense') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addTodaysExpenseLabel">Add Expense List</h1>
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
                    <button type="submit" class="btn bg-gradient-danger">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add data section end -->

<!-- Details Data Section Start -->
<div class="modal fade" id="detailTodaysExpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailTodaysExpenseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailTodaysExpenseLabel">Expense List Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Transaction Title:</label>
                    <p class="form-control-static" id="modalTitleForExpense"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Amount:</label>
                    <p class="form-control-static" id="modalAmountForExpense"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Note:</label>
                    <p class="form-control-static" id="modalNoteForExpense"></p>
                    <p class="d-none" id="modalIdForExpense"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button"
                    class="btn bg-gradient-info"
                    data-bs-toggle="modal"
                    data-bs-target="#editTodaysExpense"
                    id="openEditModalForExpense">
                    Edit
                </button>


            </div>
        </div>
    </div>
</div>
<!-- Details Data Section End -->

<!-- Edit data section start -->
<div class="modal fade" id="editTodaysExpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editTodaysExpenseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('update.todays.expense',['id' => '__ID__']) }}" id="editFormForExpense" method="post">
                @csrf
                <input type="hidden" name="id" id="editIdForExpense">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editTodaysExpenseLabel">Update Expense List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="editTitleForExpense" class="form-label">Transaction Title</label>
                    <input required type="text" class="form-control" name="title" id="editTitleForExpense">

                    <label for="editAmountForExpense" class="form-label">Amount</label>
                    <input required type="number" class="form-control" name="amount" id="editAmountForExpense">

                    <label for="editNoteForExpense">Note</label>
                    <textarea class="form-control" name="note" id="editNoteForExpense" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-danger">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit data section end -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var detailModalForExpense = document.getElementById('detailTodaysExpense');

        detailModalForExpense.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var title = button.getAttribute('data-title-ForExpense');
            var amount = button.getAttribute('data-amount-ForExpense');
            var note = button.getAttribute('data-note-ForExpense');
            var id = button.getAttribute('data-id-ForExpense');

            // Update the modal content
            document.getElementById('modalTitleForExpense').textContent = title;
            document.getElementById('modalAmountForExpense').textContent = amount + " $";
            document.getElementById('modalNoteForExpense').textContent = note;
            document.getElementById('modalIdForExpense').textContent = id;

            // Set the edit button's data attributes dynamically
            var editButtonForExpense = document.getElementById('openEditModalForExpense');
            editButtonForExpense.setAttribute('data-id-ForExpense', id);
            editButtonForExpense.setAttribute('data-title-ForExpense', title);
            editButtonForExpense.setAttribute('data-amount-ForExpense', amount);
            editButtonForExpense.setAttribute('data-note-ForExpense', note);

            var editFormForExpense = document.getElementById("editFormForExpense");
            editFormForExpense.action = editFormForExpense.action.replace('__ID__', id);
        });

        var editModalForExpense = document.getElementById('editTodaysExpense');

        editModalForExpense.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal

            // Fetch values from the button
            var id = button.getAttribute('data-id-ForExpense');
            var title = button.getAttribute('data-title-ForExpense');
            var amount = button.getAttribute('data-amount-ForExpense');
            var note = button.getAttribute('data-note-ForExpense');

            // Populate modal input fields
            document.getElementById('editIdForExpense').value = id;
            document.getElementById('editTitleForExpense').value = title;
            document.getElementById('editAmountForExpense').value = amount;
            document.getElementById('editNoteForExpense').value = note;
        });
    });
</script>