<!-- view data section start -->
<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
    <div class="card h-100 ">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="mb-0 text-capitalize mt-2">Payment Due</h5>
                </div>
                <div class="col-md-4">
                    <a style="float: right; width: 100px" class="btn bg-gradient-warning" data-bs-toggle="modal" data-bs-target="#addForPaymentDue">
                        <i class="fas fa-plus pe-2"></i> More
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <ul class="list-group list-group-flush">
                <?php $ForPaymentDueData = $paymentDue->reverse() ?>
                @foreach ($ForPaymentDueData->take(3) as $_ForPaymentDue)
                <li class="list-group-item px-0">
                    <div class="row align-items-center">
                        <div class="col-auto d-flex align-items-center">
                            {{ $loop->iteration }}
                        </div>
                        <div class="col ml-2">
                            <h6 class="mb-0">
                                {{ $_ForPaymentDue->title }}
                            </h6>
                            <?php $amount = $_ForPaymentDue->total_amount - $_ForPaymentDue->paid_amount ?>
                            <span class="badge text-warning"> {{ $amount }}$</span>
                            <span>Pending</span>
                        </div>
                        <span class="d-none">{{ $_ForPaymentDue->id }}</span>
                        <div class="col-auto">
                            <button type="button"
                                class="btn btn-outline-primary btn-xs mb-0"
                                data-bs-toggle="modal"
                                data-bs-target="#detailForPaymentDue"
                                data-id-ForPaymentDue="{{ $_ForPaymentDue->id }}"
                                data-title-ForPaymentDue="{{ $_ForPaymentDue->title }}"
                                data-total_amount-ForPaymentDue="{{ $_ForPaymentDue->total_amount }}"
                                data-paid_amount-ForPaymentDue="{{ $_ForPaymentDue->paid_amount }}"
                                data-note-ForPaymentDue="{{ $_ForPaymentDue->note }}">
                                Details
                            </button>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-auto text-center">
            <a class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#viewForPaymentDue">View All</a>
        </div>
    </div>
</div>
<!-- view data section start -->

<!-- view all data section start -->
<div class="modal fade" id="viewForPaymentDue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewForPaymentDueLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewForPaymentDueLabel">Payment Due List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body pt-0">
                    <ul class="list-group list-group-flush">
                        @foreach ($ForPaymentDueData as $_ForPaymentDue)
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto d-flex align-items-center">
                                    {{ $loop->iteration }}
                                </div>
                                <div class="col ml-2">
                                    <h6 class="mb-0">
                                        {{ $_ForPaymentDue->title }}
                                    </h6>
                                    <?php $amount = $_ForPaymentDue->total_amount - $_ForPaymentDue->paid_amount ?>
                                    <span class="badge text-warning"> {{ $amount }}$</span>
                                    <span>Pending</span>
                                </div>
                                <span class="d-none">{{ $_ForPaymentDue->id }}</span>
                                <div class="col-auto">
                                    <button class="text-primary btn font-weight-bold text-xs"
                                        data-bs-toggle="modal"
                                        data-bs-target="#detailForPaymentDue"
                                        data-id-ForPaymentDue="{{ $_ForPaymentDue->id }}"
                                        data-title-ForPaymentDue="{{ $_ForPaymentDue->title }}"
                                        data-total_amount-ForPaymentDue="{{ $_ForPaymentDue->total_amount }}"
                                        data-paid_amount-ForPaymentDue="{{ $_ForPaymentDue->paid_amount }}"
                                        data-note-ForPaymentDue="{{ $_ForPaymentDue->note }}">
                                        <img height="25px" src="https://img.icons8.com/?size=100&id=GVNodnA05zIG&format=png&color=7950F2" alt="">
                                    </button>
                                    <button class="text-danger btn font-weight-bold text-xs">
                                        <a href="{{ route('delete.payment.due', $_ForPaymentDue->id) }}" onclick="return confirm('This data will be deleted permanently')">
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
<div class="modal fade" id="addForPaymentDue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addForPaymentDueLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('add.payment.due') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addForPaymentDueLabel">Add Todays Money</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="title" class="form-label">Transaction Title</label>
                    <input required type="text" class="form-control" name="title" id="title">

                    <label for="total_amount" class="form-label">Total Amount</label>
                    <input required type="number" class="form-control" name="total_amount" id="total_amount">

                    <label for="paid_amount" class="form-label">Amount Paid</label>
                    <input required type="number" class="form-control" name="paid_amount" id="paid_amount">

                    <label for="note">Note</label>
                    <textarea class="form-control" name="note" id="note" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-warning">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add data section end -->

<!-- Details Data Section Start -->
<div class="modal fade" id="detailForPaymentDue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailForPaymentDueLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailForPaymentDueLabel">Payment Due Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Transaction Title:</label>
                    <p class="form-control-static" id="modalTitle-ForPaymentDue"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Amount:</label>
                    <p class="form-control-static" id="modalTotalAmount-ForPaymentDue"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Amount Paid:</label>
                    <p class="form-control-static" id="modalPaidAmount-ForPaymentDue"></p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Note:</label>
                    <p class="form-control-static" id="modalNote-ForPaymentDue"></p>
                    <p class="d-none" id="modalId-ForPaymentDue"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button"
                    class="btn bg-gradient-info"
                    data-bs-toggle="modal"
                    data-bs-target="#editForPaymentDue"
                    id="openEditModalForPaymentDueForPaymentDue">
                    Edit
                </button>


            </div>
        </div>
    </div>
</div>
<!-- Details Data Section End -->

<!-- Edit data section start -->
<div class="modal fade" id="editForPaymentDue" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editForPaymentDueLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('update.payment.due',['id' => '__ID__']) }}" id="editFormForPaymentDue" method="post">
                @csrf
                <input type="hidden" name="id" id="editId-ForPaymentDue">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editForPaymentDueLabel">Update Payment Due</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="editTitle-ForPaymentDue" class="form-label">Transaction Title</label>
                    <input required type="text" class="form-control" name="title" id="editTitle-ForPaymentDue">

                    <label for="editTotalAmount-ForPaymentDue" class="form-label">Total Amount</label>
                    <input required type="number" class="form-control" name="total_amount" id="editTotalAmount-ForPaymentDue">

                    <label for="editPaidAmount-ForPaymentDue" class="form-label">Amount Paid</label>
                    <input required type="number" class="form-control" name="paid_amount" id="editPaidAmount-ForPaymentDue">


                    <label for="editNote-ForPaymentDue">Note</label>
                    <textarea class="form-control" name="note" id="editNote-ForPaymentDue" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit data section end -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var detailModalForPaymentDue = document.getElementById('detailForPaymentDue');

        detailModalForPaymentDue.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var title = button.getAttribute('data-title-ForPaymentDue');
            var total_amount = button.getAttribute('data-total_amount-ForPaymentDue');
            var paid_amount = button.getAttribute('data-paid_amount-ForPaymentDue');
            var note = button.getAttribute('data-note-ForPaymentDue');
            var id = button.getAttribute('data-id-ForPaymentDue');

            // Update the modal content
            document.getElementById('modalTitle-ForPaymentDue').textContent = title;
            document.getElementById('modalTotalAmount-ForPaymentDue').textContent = total_amount + " $";
            document.getElementById('modalPaidAmount-ForPaymentDue').textContent = paid_amount + " $";
            document.getElementById('modalNote-ForPaymentDue').textContent = note;
            document.getElementById('modalId-ForPaymentDue').textContent = id;

            // Set the edit button's data attributes dynamically
            var editButtonForPaymentDue = document.getElementById('openEditModalForPaymentDueForPaymentDue');
            editButtonForPaymentDue.setAttribute('data-id-ForPaymentDue', id);
            editButtonForPaymentDue.setAttribute('data-title-ForPaymentDue', title);
            editButtonForPaymentDue.setAttribute('data-total_amount-ForPaymentDue', total_amount);
            editButtonForPaymentDue.setAttribute('data-paid_amount-ForPaymentDue', paid_amount);
            editButtonForPaymentDue.setAttribute('data-note-ForPaymentDue', note);

            var editFormForPaymentDue = document.getElementById("editFormForPaymentDue");
            editFormForPaymentDue.action = editFormForPaymentDue.action.replace('__ID__', id);
        });

        var editModalForPaymentDue = document.getElementById('editForPaymentDue');

        editModalForPaymentDue.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal

            // Fetch values from the button
            var id = button.getAttribute('data-id-ForPaymentDue');
            var title = button.getAttribute('data-title-ForPaymentDue');
            var total_amount = button.getAttribute('data-total_amount-ForPaymentDue');
            var paid_amount = button.getAttribute('data-paid_amount-ForPaymentDue');
            var note = button.getAttribute('data-note-ForPaymentDue');

            // Populate modal input fields
            document.getElementById('editId-ForPaymentDue').value = id;
            document.getElementById('editTitle-ForPaymentDue').value = title;
            document.getElementById('editTotalAmount-ForPaymentDue').value = total_amount;
            document.getElementById('editPaidAmount-ForPaymentDue').value = paid_amount;
            document.getElementById('editNote-ForPaymentDue').value = note;
        });
    });
</script>